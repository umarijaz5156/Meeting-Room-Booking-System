<div class="flex justify-center mt-10">
    <div class="w-full max-w-5xl">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4 text-xl font-semibold flex justify-between items-center">
                <span>{{ __('Employee Management') }}</span>
                <button 
                    wire:click="showAddModal"
                    class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600"
                >
                    Add Employee
                </button>
            </div>
        
            @if (session()->has('message'))
            <div class="bg-green-100 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('message') }}
            </div>
            @endif
        
            <div class="overflow-x-auto">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">#</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Department</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                        <tr class="text-center">
                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2">{{ $employee->name }}</td>
                            <td class="border px-4 py-2">{{ $employee->department }}</td>
                            <td class="border px-4 py-2">
                                <button 
                                    wire:click="showEditModal({{ $employee->id }})" 
                                    class="bg-yellow-500 text-white py-1 px-2 rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500"
                                >
                                    Edit
                                </button>
                                <button 
                                    wire:click="deleteEmployee({{ $employee->id }})" 
                                    class="bg-red-600 text-white py-1 px-2 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-600"
                                >
                                    Delete
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

    <!-- Add/Edit Modal -->
    @if($isModalOpen)
    <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-md w-full">
            <div class="mb-4 text-xl font-semibold">{{ $modalTitle }}</div>
            @if (session()->has('error'))
            <div class="bg-red-100 text-red-700 px-4 py-3 rounded relative mb-4">
                {{ session('error') }}
            </div>
        @endif
            <div class="mb-6">
                <form wire:submit.prevent="{{ $modalAction }}" class="space-y-4">
                    <div>
                        <div class="mb-2">
                            <input 
                                type="text" 
                                wire:model="name" 
                                placeholder="Name" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                            >
                            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2">
                            <input 
                                type="email" 
                                wire:model="email" 
                                placeholder="Email" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                            >
                            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2">
                            <input 
                                type="text" 
                                wire:model="department" 
                                placeholder="Department" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                            >
                            @error('department') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <input 
                                type="password" 
                                wire:model="password" 
                                placeholder="Password" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                            >
                            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    
                    <div>
                        <button 
                            type="submit" 
                            class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600"
                        >
                            Save
                        </button>
                        <button 
                            type="button"
                            wire:click="closeModal" 
                            class="w-full mt-2 bg-gray-600 text-white py-2 px-4 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600"
                        >
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
</div>
