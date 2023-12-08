<?php

namespace App\Http\Controllers;
use App\Models\EventCalendar;
use Illuminate\Http\Request;

class EventCalendarController extends Controller
{
    public function getEventcalendar(){
        if(request()->ajax()){
         $start = (!empty($_GET["start_date"])) ? ($_GET["start_date"]) : ('');
         $end = (!empty($_GET["end_date"])) ? ($_GET["end_date"]) : ('');
        $events = EventCalendar::whereDate('start_date', '>=', $start)->whereDate('end_date',   '<=', $end)
                ->get(['id','event_title','start_date', 'end_date']);
        return response()->json($events);
        }
        return view('project.owner.owner');
        
    }

    public function createEventcalendar(Request $request){
        $data = $request->except('_token');
        $events = EventCalendar::create($data);
        return response()->json($events);
    }
   
    public function deleteEventcalendar(Request $request){
        $event = EventCalendar::find($request->id);
        return $event->delete();
    }
}
