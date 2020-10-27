
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
					<li class="breadcrumb-item"><a href="#!">List of doctors</a></li>
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
				<h5 class="card-title">Import Doctors Excel File</h5>
				<a href="{{ route('doctors.create') }}" class="btn btn-primary btn-round ml-auto" data-toggle="" data-target=""> <i class="fa fa-plus"></i>
					Add Doctor</a>
			</div>
		</div>

		<div class="card-body">

			<form method="post" enctype="multipart/form-data" action="{{ url('/import_excel/import') }}">
		    {{ csrf_field() }}
		    <div class="form-group">
		     <table class="table">
		      <tr>
		       <td width="40%" align="right"><label>Select File for Upload</label></td>
		       <td width="30">
		        <input type="file" name="select_file" />
		       </td>
		       <td width="30%" align="left">
		        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
		       </td>
		      </tr>
		      <tr>
		       <td width="40%" align="right"></td>
		       <td width="30%"><span class="text-muted">.xls, .xslx</span></td>
		       <td width="30%" align="left"></td>
		      </tr>
		     </table>
		    </div>
		   </form>

		</div>
	</div>
</div>

@endsection