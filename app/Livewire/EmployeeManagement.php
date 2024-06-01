<?php

namespace App\Livewire;

use App\Models\Employee;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;

class EmployeeManagement extends Component
{

    #[Layout('layouts.guest')]


    public $employees;
    public $name, $department, $employeeId,$password,$email;
    public $isModalOpen = false;
    public $modalTitle = 'Add Employee';
    public $modalAction = 'storeEmployee';

    public function render()
    {
        $this->employees = User::role('employee')->get();
        return view('livewire.employee-management');
    }

    public function showAddModal()
    {
        $this->resetInputFields();
        $this->modalTitle = 'Add Employee';
        $this->modalAction = 'storeEmployee';
        $this->isModalOpen = true;
    }

    public function showEditModal($id)
    {
        $employee = User::findOrFail($id);
        $this->employeeId = $id;
        $this->name = $employee->name;
        $this->email = $employee->email;
        $this->department = $employee->department;
        $this->modalTitle = 'Edit Employee';
        $this->modalAction = 'updateEmployee';
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->department = '';
        $this->employeeId = null;
        $this->password = '';
    }

    public function storeEmployee()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'department' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);
    
        if (User::where('name', $this->name)->where('department', $this->department)->exists()) {
            session()->flash('error', 'An employee with the same name and department already exists.');
            return;
        }
    
        $user = User::create([
            'name' => $this->name,
            'department' => $this->department,
            'email' => $this->email,

            'password' => bcrypt($this->password), 
        ]);
    
        $user->assignRole('employee');
    
        $this->resetInputFields();
        $this->closeModal();
        session()->flash('message', 'Employee added successfully.');
    }

    public function updateEmployee()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'email' => 'required|email|max:255',

        ]);
    
        if (User::where('name', $this->name)
            ->where('department', $this->department)
            ->where('id', '!=', $this->employeeId)
            ->exists()
        ) {
            session()->flash('error', 'An employee with the same name and department already exists.');
            return;
        }
    
        $employee = User::findOrFail($this->employeeId);
        $employee->update([
            'name' => $this->name,
            'department' => $this->department,
            'email' => $this->email,

        ]);
    
        if ($this->password) {
            $employee->update([
                'password' => bcrypt($this->password),
            ]);
        }
    
        $this->resetInputFields();
        $this->closeModal();

        session()->flash('message', 'Employee updated successfully.');
    }

    public function deleteEmployee($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'Employee deleted successfully.');
    }
}
