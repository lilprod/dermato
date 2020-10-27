@extends('layouts.app')
@section('content')
<div class="page-header">
	<div class="page-block">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="page-header-title">
					<h5 class="m-b-10">Users</h5>
				</div>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
					<li class="breadcrumb-item"><a href="#!">Users</a></li>
					<li class="breadcrumb-item"><a href="#!">Edit User</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>



<div class="col-md-12">
	@include('inc.messages')
	<div class="card">
		<div class="card-header">
			<div class="d-flex align-items-center">
				<h4 class="card-title">Edit User</h4>
			</div>
		</div>
		<div class="card-body">
			{{ Form::model($user, array('route' => array('users.update', $user->id) , 'method' => 'PUT', 'enctype' => 'multipart/form-data')) }}{{-- Form model binding to automatically populate our fields with user data --}}
			<div class="row">

				<div class="col-md-6 pr-0">
					<div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control form-control-uppercase')) }}
                      </div>
                  </div>

                  <div class="col-md-6 pr-0">
                      <div class="form-group">
                        {{ Form::label('firstname', 'Firstname') }}
                        {{ Form::text('firstname', null, array('class' => 'form-control form-control-capitalize', 'id' => 'firstname')) }}
                      </div>
                  </div>

                  <div class="col-md-6 pr-0">
                      <div class="form-group">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::email('email', null, array('class' => 'form-control')) }}
                      </div>
                  </div>


                  <div class="col-md-6 pr-0">
                      <div class="form-group">
                        {{ Form::label('phone_number', 'Phone number') }}
                        {{ Form::text('phone_number', null, array('class' => 'form-control')) }}
                      </div>
                  </div>

                  <div class="col-sm-12">
                      <div class="form-group">
                        {{ Form::label('address', 'Address') }}
                        {{ Form::textarea('address', null , array('class' => 'form-control', 'id' => 'address')) }}
                      </div>
                    </div>

                  <div class="col-md-6 pr-0">
                      <div class="form-group">
                            {{ Form::label('password', 'Password') }}<br>
                            {{ Form::password('password', array('class' => 'form-control')) }}
                      </div>
                  </div>

                  <div class="col-md-6 pr-0">
                      <div class="form-group">
                            {{ Form::label('password', 'Confirmation Password') }}<br>
                            {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
                      </div>
                    </div>

                  
					<div class="col-md-6 pr-0">
                      <div class="form-group">
                          {{ Form::label('profile_picture', 'Profil Image') }}
                          {{ Form::file('profile_picture', array('class' => 'form-control')) }}
                      </div>
                  </div>
                    

					<div class="col-sm-12">
	                  	<h6><b>Assign Role</b></h6>
	                    <div class='form-group'>
	                        @foreach ($roles as $role)
	                            {{ Form::checkbox('roles[]',  $role->id ) }}
	                            {{ Form::label($role->name, ucfirst($role->name)) }}<br>
	                        @endforeach
	                    </div>
					</div>

				</div>
			</div>

			<div class="card-footer">
				{{ Form::submit('Edit', array('class' => 'btn btn-primary btn-bock')) }}
			</div>
		{{ Form::close() }}

		</div>
	</div>

@endsection