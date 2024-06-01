<?php

namespace App\Http\Controllers;


//use Google_Client;
use Illuminate\Http\Request;

use App\Models\Meeting;
use App\Models\User;

class GoogleCalendarController extends Controller
{

    public function callCalendar(){
        $employees = User::role('employee')->get();
        return view('calendar', compact('employees'));
    }
    
    public function getEvents()
    {

        try{
            $eventList = Meeting::with('participants', 'organizer')->get();
            return response()->json($eventList);
        }  catch(\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 403);
        }
     
    }

}
