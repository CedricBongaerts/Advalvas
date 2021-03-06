@extends('masterpage')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Profile</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					{!! Form::model($user) !!}
					 	<div class="form-group form-horizontal">
					 		<div class="form-group">
						 			{!! Form::label('username', 'Username:', ['class' => 'col-md-4 control-label']) !!}
						 		<div class="col-md-6">
						 			<p class="aligned-label">{{ $user->username}}<p>	
						 		</div>	
						 	</div>

						 	<div class="form-group">
						 			{!! Form::label('email', 'E-mail:', ['class' => 'col-md-4 control-label']) !!}
						 		<div class="col-md-6">
						 			{!! Form::Text('email', null, ['class' => 'form-control' , 'readonly']) !!}
						 		</div>	
						 	</div>

						 	<br />

						 	<div class="form-group">
						 			{!! Form::label('name', 'Name:', ['class' => 'col-md-4 control-label']) !!}
						 		<div class="col-md-6">
						 			{!! Form::Text('name', null, ['class' => 'form-control' , 'readonly']) !!}
						 		</div>	
						 	</div>

						 	<div class="form-group">
						 			{!! Form::label('lastname', 'Lastname:', ['class' => 'col-md-4 control-label']) !!}
						 		<div class="col-md-6">
						 			{!! Form::Text('lastname', null, ['class' => 'form-control' , 'readonly']) !!}
						 		</div>	
						 	</div>

						 	<div class="form-group">
						 			{!! Form::label('dob', 'Date of Birth:', ['class' => 'col-md-4 control-label']) !!}
						 		<div class="col-md-6">
						 			{!! Form::Text('dob', null, ['class' => 'form-control' , 'readonly']) !!}
						 		</div>	
						 	</div>

					 		<br />

						 	<div class="form-group">
						 			{!! Form::label('city', 'City:', ['class' => 'col-md-4 control-label']) !!}
						 		<div class="col-md-6">
						 			{!! Form::Text('city', null, ['class' => 'form-control']) !!}
						 		</div>	
						 	</div>

						 	<div class="form-group">
						 			{!! Form::label('country', 'Country:', ['class' => 'col-md-4 control-label']) !!}
						 		<div class="col-md-6">
						 			{!! Form::Text('country', null, ['class' => 'form-control']) !!}
						 		</div>	
						 	</div>

						 	<div class="form-group">
						 			{!! Form::label('phone', 'Phone:', ['class' => 'col-md-4 control-label']) !!}
						 		<div class="col-md-6">
						 			{!! Form::Text('phone', null, ['class' => 'form-control']) !!}
						 		</div>	
						 	</div>

						 	<div class="form-group">
						 			{!! Form::label('twitter', 'Twitter link:', ['class' => 'col-md-4 control-label']) !!}
						 		<div class="col-md-6">
						 			{!! Form::Text('twitter', null, ['class' => 'form-control']) !!}
						 		</div>	
						 	</div>

						 	<div class="form-group">
						 			{!! Form::label('facebook', 'Facebook link:', ['class' => 'col-md-4 control-label']) !!}
						 		<div class="col-md-6">
						 			{!! Form::Text('facebook', null, ['class' => 'form-control']) !!}
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