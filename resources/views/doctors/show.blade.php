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
					<li class="breadcrumb-item"><a href="#!">Details of doctor</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="col-md-12">

<div class="col-xl-4 col-md-6">
	<div class="card">
		<div class="card-block">
			<div class="text-center m-b-30">
				<img class="img-fluid rounded-circle" src="{{url('/storage/profile_images/'.$doctor->profile_picture) }}" alt="doctor-image">
				<h5 class="mt-3">{{ $doctor->name }} {{ $doctor->firstname }}</h5>
				@if($doctor->title == 'PR')
					<span class="d-block">Professor</span>
				@elseif($doctor->title == 'DR')
					<span class="d-block">Dermatologist</span>
				@endif
			</div>
			<!--<h6 class=" m-b-0">754 Points <span class="float-right">1000</span></h6>
			<div class="progress m-t-10" style="height: 7px;">
				<div class="progress-bar progress-c-theme" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
			</div>-->

			<div class="leads-progress mt-3">
				<!--<h6 class="mb-3 text-center">Organic <span class="ml-4">Purchesed</span></h6>-->
				<div class="progress">
					<div class="progress-bar progress-c-theme2" role="progressbar" style="width: 36%; height:10px;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
					<div class="progress-bar progress-c-theme" role="progressbar" style="width: 36%; height:10px;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<h6 class="text-muted f-w-300 mt-4 mb-0">Gender :
					@if($doctor->gender == 'M')
						<span class="float-right">Male</span>
					@elseif($doctor->gender == 'F')
						<span class="float-right">Female</span>
					@endif
				</h6>
				<h6 class="text-muted f-w-300 mt-4 mb-0">Birth Date :<span class="float-right">{{ $doctor->birth_date }}</span></h6>
				<h6 class="text-muted f-w-300 mt-4">Region :<span class="float-right">{{ $doctor->region }}</span></h6>
				<h6 class="text-muted f-w-300 mt-4">Country :<span class="float-right">{{ $doctor->country }}</span></h6>
				<h6 class="text-muted f-w-300 mt-4">Exercice Place :<span class="float-right">{{ $doctor->exercice_place }}</span></h6>
				
			</div>
			<div class="row m-t-30">
				<div class="col-6 p-r-0">
					<a href="{{route('doctors.index')}}" class="btn btn-primary text-uppercase btn-block"><i class="fa fa-arrow-left"></i> Back</a>
				</div>
				<!--<div class="col-6">
					<a href="#!" class="btn text-uppercase border btn-block btn-outline-secondary">message</a>
				</div>-->
				</div>
			</div>
		</div>
	</div>

</div>
@endsection