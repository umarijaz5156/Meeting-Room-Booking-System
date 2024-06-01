<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <!-- Tailwind CSS CDN -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>

    <body>
        <nav class="bg-gray-800 p-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="/" class="text-white text-lg font-semibold">Meeting Room Booking System</a>
                <div>
                    <a href="{{ route('employee.management') }}" class="text-gray-300 hover:text-white mx-2">Employee Management</a>
                    <a href="{{ route('meeting.calendar') }}" class="text-gray-300 hover:text-white mx-2">Meeting Calendar</a>
                    <a href="{{ route('book.meeting') }}" class="text-gray-300 hover:text-white mx-2">Book Meeting</a>

                    @guest
                    <a href="/login" class="text-gray-300 hover:text-white mx-2">Login</a>

                    @else
            <a class="text-white dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                    @endguest
                   
                </div>
            </div>
          
        </nav>
       
        
        <div class="container mx-auto mt-4 font-sans text-gray-900 antialiased">
            <main class="py-4">
                @yield('content')
            </main>
                </div>

        @livewireScripts
    </body>


 

    
</html>
