<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EventModel;

use Illuminate\Http\Request;

class CalendarController extends Controller {

    public function index()
    {
        $startTimer = 'T12:30:00';

    	\JavaScript::put([
            'title' => 'Testing Event Title',
            'date' => '2015-06-12',
            'startTime'=> $startTimer,

        ]);
        return view('pages.calendar.calendar');
    }

}
