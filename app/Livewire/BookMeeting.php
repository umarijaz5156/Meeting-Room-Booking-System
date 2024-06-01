<?php

namespace App\Livewire;

use App\Models\Employee;
use App\Models\Meeting;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;

class BookMeeting extends Component
{


    public $meetings, $employees;
    public $title, $organizer_id, $start_time, $end_time, $meetingId;
    public $isModalOpen = false;
    public $participants = [];

    public $modalTitle = 'Add Meeting';
    public $modalAction = 'storeMeeting';

    public $layoutName;

    public function mount()
    {
            $this->layoutName = 'layouts.guest';
    }

    public function render()
    {
        $this->meetings = Meeting::with('organizer')->get();
        $this->employees = User::role('employee')->get();
        return view('livewire.book-meeting')->layout($this->layoutName);;
    }

    public function showAddModal()
    {
        $this->resetInputFields();
        $this->modalTitle = 'Add Meeting';
        $this->modalAction = 'storeMeeting';
        $this->isModalOpen = true;
    }

    public function showEditModal($id)
    {
        $meeting = Meeting::findOrFail($id);
        if($meeting->organizer->id === auth()->user()->id){
            $this->meetingId = $id;
            $this->title = $meeting->title;
            $this->organizer_id = $meeting->organizer_id;
            $this->start_time = $meeting->start_time;
            $this->end_time = $meeting->end_time;
            $this->modalTitle = 'Edit Meeting';
            $this->modalAction = 'updateMeeting';
            $this->isModalOpen = true;
        }else{
            return back()->with('error', 'You do not have permission');
        }
 
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    public function resetInputFields()
    {
        $this->title = '';
        $this->organizer_id = '';
        $this->start_time = '';
        $this->end_time = '';
        $this->meetingId = null;
    }

    public function storeMeeting()
    {
        $this->validateMeeting();
    
        $conflict = Meeting::where(function ($query) {
            $query->where('start_time', '<', $this->end_time)
                  ->where('end_time', '>', $this->start_time);
        })->exists();
    
        if ($conflict) {
            // If there is a conflict, return with error message
            return back()->with('error', 'Another meeting is scheduled during this time.');
        }
    
        // Create the meeting
        $meeting =  Meeting::create([
            'title' => $this->title,
            'organizer_id' => Auth::user()->id,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
        ]);

        $meeting->participants()->attach($this->participants);

    
        $this->closeModal();
        $this->resetInputFields();
        session()->flash('success', 'Meeting booked successfully.');
    }
    
    public function updateMeeting()
    {
        $this->validateMeeting();
    
        $conflict = Meeting::where(function ($query) {
            $query->where('start_time', '<', $this->end_time)
                ->where('end_time', '>', $this->start_time)
                ->where('id', '!=', $this->meetingId);
        })->exists();
    
        if ($conflict) {
            session()->flash('error', 'A meeting is already booked for the selected time.');
            return;
        }
    
        // Update the meeting
        $meeting = Meeting::findOrFail($this->meetingId);
        $meeting->update([
            'title' => $this->title,
            'organizer_id' => Auth::user()->id,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
        ]);

        $meeting->participants()->detach();
        $meeting->participants()->attach($this->participants);

        $this->closeModal();
        $this->resetInputFields();
        session()->flash('success', 'Meeting updated successfully.');
    }
    
    protected function validateMeeting()
    {
        return $this->validate([
            'title' => 'required|string|max:255',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'participants' => 'required|array|min:1',
            'participants.*' => 'exists:users,id',
        ]);
     
    }
    
    public function deleteMeeting($id)
    {
        $meeting = Meeting::findOrFail($id);
        if($meeting->organizer->id === auth()->user()->id){
        Meeting::findOrFail($id)->delete();
        session()->flash('success', 'Meeting deleted successfully.');
        }else{
            return back()->with('error', 'You do not have permission');

        }
    }
}
