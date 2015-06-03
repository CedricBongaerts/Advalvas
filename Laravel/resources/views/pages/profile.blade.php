@extends('masterpage')

@section('content')

<h1> Profile </h1>
<p>Full name: {{ Auth::user()->name }} {{ Auth::user()->lastname }}<p>
<p>E-Mail Address: {{ Auth::user()->email}}<p>

<p>City: {{ Auth::User()->profile->city}}<p>
<p>Country: {{ Auth::User()->profile->country}}<p>	
<p>Phone: {{ Auth::User()->profile->telephone}}<p>			

<div class="form-group">
	<div class="col-md-6 col-md-offset-4">
		<a href="/profile/edit"><button type="submit" class="btn btn-primary">Edit profile</button></a>
	</div>
</div>

@stop