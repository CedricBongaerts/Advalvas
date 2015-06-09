<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EventModel;

use Illuminate\Http\Request;

class CalendarController extends Controller {

    public function index() {
        $events[] = \Calendar::event(
            'Event One', //event title
            false, //full day event?
            '2015-06-05T2000', //start time (you can also use Carbon instead of DateTime)
            '2015-06-05T2100', //end time (you can also use Carbon instead of DateTime)
            0 //optionally, you can specify an event ID
        );

        $events[] = \Calendar::event(
		    "Valentine's Day", //event title
		    true, //full day event?
		    new \DateTime('2015-06-14'), //start time (you can also use Carbon instead of DateTime)
		    new \DateTime('2015-06-14'), //end time (you can also use Carbon instead of DateTime)
		    '1' //optionally, you can specify an event ID
		);

		$eloquentEvent = EventModel::first(); //EventModel implements MaddHatter\LaravelFullcalendar\Event  

        $calendar = \Calendar::addEvents($events) //add an array with addEvents
	    ->addEvent($eloquentEvent, [ //set custom color fo this event
	        'color' => '#800',
	    ])->setOptions([ //set fullcalendar options
	        'firstDay' => 1,
	    ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
	        'viewRender' => 'function() {}'
	    ]); 

        return view('pages.calendar', compact('calendar'));
    }

}
