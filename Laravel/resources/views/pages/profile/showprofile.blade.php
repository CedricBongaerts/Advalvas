@extends('masterpage')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{{$user->username}}'s Profile</div>
					<div class="panel-body">
				
						{!! Form::model($user, ['route' => ['profile.update', $user->username], 'method' => 'GET']) !!}
					 	<div class="form-group form-horizontal">

						 	<div class="form-group">
						 			{!! Form::label('email', 'E-mail:', ['class' => 'col-md-4 control-label']) !!}
						 		<div class="col-md-6">
						 			<label class="align-left">{{ $user->email}}<label>	
						 		</div>	
						 	</div>
						 	<div class="form-group">
						 			{!! Form::label('name', 'Name:', ['class' => 'col-md-4 control-label']) !!}
						 		<div class="col-md-6">
						 			<label class="align-left">{{ $user->name}} {{ $user->lastname}}<p>	
						 		</div>	
						 	</div>
						 	<br />
							<div class="form-group">
						 			{!! Form::label('city', 'City:', ['class' => 'col-md-4 control-label']) !!}
						 		<div class="col-md-6">
						 			<label class="align-left">{{ $user->city}}<p>	
						 		</div>	
						 	</div>
						 	<div class="form-group">
						 			{!! Form::label('country', 'Country:', ['class' => 'col-md-4 control-label']) !!}
						 		<div class="col-md-6">
						 			<label class="align-left">{{ $user->country}}<p>	
						 		</div>	
						 	</div>
						 	<div class="form-group">
						 			{!! Form::label('phone', 'Phone:', ['class' => 'col-md-4 control-label']) !!}
						 		<div class="col-md-6">
						 			<label class="align-left">{{ $user->phone}}<p>	
						 		</div>	
						 	</div>
						 	
						 	<div class="form-group">
						 			{!! Form::label('twitter', 'Twitter:', ['class' => 'col-md-4 control-label']) !!}
						 		<div class="col-md-6">
						 			<label class="align-left">{{ $user->twitter}}<p>	
						 		</div>	
						 	</div>
						 	<div class="form-group">
						 			{!! Form::label('facebook', 'Facebook:', ['class' => 'col-md-4 control-label']) !!}
						 		<div class="col-md-6">
						 			<label class="align-left">{{ $user->facebook}}<p>	
						 		</div>	
						 	</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									{!! Form::submit('Edit Profile', ['class' =>  'btn btn-primary']) !!}
								</div>
							</div> 

							</div> 	
						</div>
						{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop