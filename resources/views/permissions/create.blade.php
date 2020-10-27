@extends('layouts.app')

@section('content')
<div class="page-header">
	<div class="page-block">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="page-header-title">
					<h5 class="m-b-10">Permissions</h5>
				</div>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
					<li class="breadcrumb-item"><a href="#!">Permissions</a></li>
					<li class="breadcrumb-item"><a href="#!">Add permissions</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="col-md-12">
<div class="col-lg-4 col-lg-offset-4">
	@include('inc.messages')
	<div class="card">
		<div class="card-header">
			<div class="d-flex align-items-center">
				<h5 class="card-title">New permission</h5>
			</div>
		</div>
		<div class="card-body">
		{{ Form::open(array('url' => 'permissions')) }}
				<div class="row">
					<div class="col-sm-12">
	                  	<div class="form-group">
	                        {{ Form::label('name', 'Name of permission') }}
	                        {{ Form::text('name', '', array('class' => 'form-control')) }}
                        </div><br>
                            @if(!$roles->isEmpty())
                                <h6><b>Assign a role to permission</b></h6>

                                @foreach ($roles as $role) 
                                    {{ Form::checkbox('roles[]',  $role->id ) }}
                                    {{ Form::label($role->name, ucfirst($role->name)) }}<br>
                                @endforeach
                            @endif
					</div>

				</div>

			</div>
			<div class="card-footer">
				{{ Form::submit('Add', array('class' => 'btn btn-primary btn-block')) }}
			</div>
		{{ Form::close() }}

		</div>
	</div>
</div>
@endsection