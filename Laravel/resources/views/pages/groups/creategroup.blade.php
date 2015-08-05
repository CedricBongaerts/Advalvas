@extends('masterpage')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Create Group:</div>
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

{!! Form::open(['route' => 'groups.store']) !!}
	<div class="form-group">
 			{!! Form::label('name', 'Group name:', ['class' => 'col-md-4 control-label']) !!}
 		<div class="col-md-6">
 			{!! Form::Text('name', null, ['class' => 'form-control']) !!}
 		</div>	
 	</div>
{!! Form::close() !!}
				
				</div>
			</div>
		</div>
	</div>
</div>
@stop
@section('footer')
@stop	