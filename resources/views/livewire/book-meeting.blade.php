<div>
<div class="flex justify-center mt-10">
    <div class="w-full max-w-5xl">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4 text-xl font-semibold flex justify-between items-center">
                <span>{{ __('Meeting Management') }}</span>
                <button 
                    wire:click="showAddModal"
                    class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600"
                >
                    Add Meeting
                </button>
            </div>
        
            @if (session()->has('success'))
                <div class="bg-green-100 text-green-700 px-4 py-3 rounded relative mb-4">
                    {{ session('success') }}
                </div>
            @endif
        
            @if (session()->has('error'))
                <div class="bg-red-100 text-red-700 px-4 py-3 rounded relative mb-4">
                    {{ session('error') }}
                </div>
            @endif
        
            <div class="overflow-x-auto">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">#</th>
                            <th class="px-4 py-2">Title</th>
                            <th class="px-4 py-2">Organizer</th>
                            <th class="px-4 py-2">Start Time</th>
                            <th class="px-4 py-2">End Time</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($meetings as $meeting)
                            <tr>
                                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="border px-4 py-2">{{ $meeting->title }}</td>
                                <td class="border px-4 py-2">{{ $meeting->organizer->name }}</td>
                                <td class="border px-4 py-2">{{ $meeting->start_time }}</td>
                                <td class="border px-4 py-2">{{ $meeting->end_time }}</td>
                                <td class="border px-4 py-2">
                                    @if(auth()->check() && $meeting->organizer->id === auth()->user()->id)
                                    <button 
                                        wire:click="showEditModal({{ $meeting->id }})" 
                                        class="bg-yellow-500 text-white py-1 px-2 rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500"
                                    >
                                        Edit
                                    </button>
                                    <button 
                                        wire:click="deleteMeeting({{ $meeting->id }})" 
                                        class="bg-red-600 text-white py-1 px-2 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-600"
                                    >
                                        Delete
                                    </button>
                                @endif
                                
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

    @if($isModalOpen)
    <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-md w-full">
            <div class="mb-4 text-xl font-semibold">{{ $modalTitle }}</div>
            @if(session()->has('error'))
            <div class="text-red-500">{{ session('error') }}</div>
        @endif
        
            <div class="mb-6">
                <form wire:submit.prevent="{{ $modalAction }}" class="space-y-4">
                    <div>
                        <input 
                            type="text" 
                            wire:model="title" 
                            placeholder="Meeting Title" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                        >
                    </div>
                   
                    <div>
                        <input 
                            type="datetime-local" 
                            wire:model="start_time" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                        >
                    </div>
                    <div>
                        <input 
                            type="datetime-local" 
                            wire:model="end_time" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                        >
                    </div>
                    <div>
                        <select 
                            wire:model="participants" 
                            multiple 
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                        >
                            @foreach($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                            @endforeach
                        </select>
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
</div>
