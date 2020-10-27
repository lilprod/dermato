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
					<li class="breadcrumb-item"><a href="#!">Edit permission</a></li>
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
				<h5 class="card-title">Edit {{$permission->name}}</h5>
			</div>
		</div>
		{{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

            <div class="card-body">

                <div class="form-group">
                    {{ Form::label('name', 'Name of permission') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}
                </div>

           </div>

           <div class="card-footer">
                {{ Form::submit('Edit', array('class' => 'btn btn-primary btn-block')) }}
            </div>
            {{ Form::close() }}

		</div>
	</div>
</div>
@endsection