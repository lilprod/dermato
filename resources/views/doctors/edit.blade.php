@extends('layouts.app')
@section('content')
<div class="page-header">
	<div class="page-block">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="page-header-title">
					<h5 class="m-b-10">Doctors</h5>
				</div>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
					<li class="breadcrumb-item"><a href="#!">Doctors</a></li>
					<li class="breadcrumb-item"><a href="#!">Edit Doctor</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>



<div class="col-md-12">
  <div class="col-lg-8 offset-lg-2">
	@include('inc.messages')
	<div class="card">
		<div class="card-header">
			<div class="d-flex align-items-center">
				<h5 class="card-title">Edit Doctor</h5>
			</div>
		</div>
		<div class="card-body">
			{{ Form::model($doctor, array('route' => array('doctors.update', $doctor->id) , 'method' => 'PUT', 'enctype' => 'multipart/form-data')) }}{{-- Form model binding to automatically populate our fields with user data --}}
			   <div class="row">

          				<div class="col-md-6 pr-0">
          					<div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                      </div>
                  </div>

                  <div class="col-md-6 pr-0">
                      <div class="form-group">
                        {{ Form::label('firstname', 'Firstname') }}
                        {{ Form::text('firstname', null, array('class' => 'form-control', 'id' => 'firstname')) }}
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

                  <div class="col-md-6 pr-0">
                    <div class="form-group">
                      {{ Form::label('gender', 'Gender') }}<br>
                      {{ Form::select('gender',['M' => 'Masculin', 'F' => 'Féminin'],null, array('class' => 'form-control')) }}
                    </div>
                  </div>

                  <div class="col-md-6 pr-0">
                      <div class="form-group">
                        {{ Form::label('birth_date', 'Birth Date') }}
                        {{ Form::date('birth_date', null, array('class' => 'form-control')) }}
                      </div>
                  </div>

                  <div class="col-md-6 pr-0">
                      <div class="form-group">
                        {{ Form::label('title', 'Title') }}
                        {{ Form::select('title',['DR' => 'Docteur', 'PR' => 'Professeur'],null, array('class' => 'form-control')) }}
                      </div>
                    </div>

                    <div class="col-md-6 pr-0">
                      <div class="form-group">
                        {{ Form::label('exercice_place', 'Exercice Place') }}
                        {{ Form::text('exercice_place', null , array('class' => 'form-control', 'id' => 'exercice_place')) }}
                      </div>
                    </div>

                  <div class="col-md-6 pr-0">
                      <div class="form-group">
                        {{ Form::label('country', 'Country') }}
                        {{ Form::text('country', null , array('class' => 'form-control', 'id' => 'country')) }}
                      </div>
                    </div>

                  <div class="col-md-6 pr-0">
                    <div class="form-group">
                      {{ Form::label('region', 'Region') }}<br>
                      {{ Form::select('region',['WEST AFRICA' => 'WEST AFRICA','EAST AFRICA' => 'EAST AFRICA', 'NORTHEN AFRICA' => 'NORTHEN AFRICA','MIDDLE AFRICA' => 'MIDDLE AFRICA', 'SOUTHERN AFRICA' => 'SOUTHERN AFRICA'],null, array('class' => 'form-control')) }}
                    </div>
                  </div>

                  <div class="col-md-6 pr-0">
                    <div class="form-group">
                      {{ Form::label('status', 'Status') }}<br>
                      {{ Form::select('status',['1' => 'Active', '0' => 'Desactive'],null, array('class' => 'form-control')) }}
                    </div>
                  </div>

                  <div class="col-md-6 pr-0">
                      <div class="form-group">
                          {{ Form::label('profile_picture', 'Profile Image') }}
                          {{ Form::file('profile_picture', array('class' => 'form-control')) }}
                      </div>
                  </div>

					</div>

				</div>

			<div class="card-footer">
				{{ Form::submit('Edit Doctor', array('class' => 'btn btn-primary btn-block')) }}
			</div>
		{{ Form::close() }}

		</div>
	</div>
</div>

@endsection