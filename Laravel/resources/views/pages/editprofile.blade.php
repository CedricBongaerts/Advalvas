@extends('masterpage')

@section('content')

<h1> Edit Profile </h1>

<p>Full name: {{ Auth::user()->name }} {{ Auth::user()->lastname }}<p>
<p>E-Mail Address: {{ Auth::user()->email}}<p>	

@stop