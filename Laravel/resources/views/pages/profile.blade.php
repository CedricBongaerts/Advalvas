@extends('masterpage')

@section('content')

<h1> Profile: </h1>
<p>Username: {{ Auth::user()->username }}<p>
<p>E-Mail Address: {{ Auth::user()->email}}<p>

<p>Name: {{ Auth::user()->name }} {{ Auth::user()->lastname }}<p>
<p>City: {{ Auth::user()->city}}<p>
<p>Country: {{ Auth::user()->country}}<p>	
<p>Date of Birth: {{ Auth::user()->dob}}<p>	
<p>Phone: {{ Auth::user()->phone}}<p>

<p>Twitter: {{ Auth::user()->twitter}}<p>
<p>Facebook: {{ Auth::user()->facebook}}<p>


<div class="form-group">
	<div class="col-md-6 col-md-offset-4">
		<a href="/profile/edit"><button type="submit" class="btn btn-primary">Edit profile</button></a>
	</div>
</div>

@stop