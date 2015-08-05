@extends('masterpage')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Group: {{$slug->name}}</div>
					<div class="panel-body">
					
				{!! Form::open(['route' => ['invite.create', $slug->slug]]) !!}
				{!! Form::submit('Generate invite code', ['class' =>  'btn btn-primary']) !!}
				{!! Form::close() !!}
				<br />
				<p>
					<strong>Invite Codes:</strong> 
					<ul>
						@foreach ($slug->invites as $invites)
						<li> {{$invites->code}} - <strong>Expiration date:</strong> {{$invites->expires_at}}</li>
						@endforeach
					</ul>
				</p>
				<p>
					<strong>Members:</strong>
					<ul>
						@foreach ($slug->users as $user)
						<li> {{$user->name}} {{$user->lastname}}</li>
						@endforeach
					</ul>
				</p>
				</div>
			</div>
		</div>
	</div>
</div>
@stop