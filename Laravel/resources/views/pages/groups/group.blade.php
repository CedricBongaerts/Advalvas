@extends('masterpage')

@section('content')

<h1> Groups </h1>

<span id="create-group-trigger" class="btn btn-primary">{!! link_to_route('groups.create', 'Create group') !!}</span>
<br /><br />
<p>
	<strong>My Groups:</strong>
	<ul>
		@foreach (Auth::user()->groups as $group)
		<li>{!! link_to_route('group.show', $group->name, $group->slug) !!}</li>
		@endforeach
	</ul>
</p>
@stop