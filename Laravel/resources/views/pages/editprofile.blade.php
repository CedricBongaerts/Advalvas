@extends('masterpage')

@section('content')

<h1> Edit Profile </h1>

<p>Name: {{ Auth::user()->name }} {{ Auth::user()->lastname }}<p>
<p>Username: {{ Auth::user()->username }}<p>
<p>E-Mail Address: {{ Auth::user()->email}}<p>

{!! Form::model($user) !!}
 
 	<div class="form-group">
 		{!! Form::label('city', 'City.') !!}
 		{!! Form::Text('city', null, ['class' => 'form-control']) !!}
 	</div>

 	<div class="form-group">
 		{!! Form::label('country', 'Country:') !!}
 		{!! Form::Text('country', null, ['class' => 'form-control']) !!}
 	</div>

 	<div class="form-group">
 		{!! Form::label('dob', 'Date of Birth:') !!}
 		{!! Form::Text('dob', null, ['class' => 'form-control']) !!}
 	</div>

 	<div class="form-group">
 		{!! Form::label('phone', 'Phone:') !!}
 		{!! Form::Text('phone', null, ['class' => 'form-control']) !!}
 	</div>

 	<div class="form-group">
 		{!! Form::label('twitter', 'Twitter link:') !!}
 		{!! Form::Text('twitter', null, ['class' => 'form-control']) !!}
 	</div>

 	<div class="form-group">
 		{!! Form::label('facebook', 'Facebook link:') !!}
 		{!! Form::Text('facebook', null, ['class' => 'form-control']) !!}
 	</div>
{!! Form::close() !!}

@stop