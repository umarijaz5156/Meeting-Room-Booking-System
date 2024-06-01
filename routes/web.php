<?php

use App\Http\Controllers\GoogleCalendarController;
use App\Livewire\BookMeeting;
use App\Livewire\EmployeeManagement;
use App\Livewire\MeetingCalendar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'showRegistrationForm'])->name('register');



Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/employee-management', EmployeeManagement::class)->name('employee.management');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/book-meeting', BookMeeting::class)->name('book.meeting');

});

Route::get('/meeting-calendar', [GoogleCalendarController::class,'callCalendar'])->name('meeting.calendar');
Route::get('/getEvents', [GoogleCalendarController::class, 'getEvents'])->name('google.calendar.get-event');
