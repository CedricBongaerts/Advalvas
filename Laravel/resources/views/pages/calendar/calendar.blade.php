@extends('masterpage')

@section('head')
<link rel='stylesheet' href='{{ asset('/css/fullcalendar.css') }}' />
<script src='{{ asset('/js/moment.min.js') }}'></script>
<script src='{{ asset('/js/fullcalendar.js') }}'></script>
<script src='{{ asset('/js/calendar-script.js') }}'></script>
<style>

	body {
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
@stop 

@section('content')
	<div id='calendar'></div>
@stop

@section('footer')
@stop
