<?php

namespace App\Livewire;

use App\Models\Meeting;
use Livewire\Component;
use Livewire\Attributes\Layout;

class MeetingCalendar extends Component
{
    #[Layout('layouts.guest')]


    public function render()
    {
        return view('livewire.meeting-calendar', [
            'meetings' => Meeting::all()
        ]);
    }
}
