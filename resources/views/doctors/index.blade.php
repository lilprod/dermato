
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

<div class="modal" tabindex="-1" role="dialog" id="confirm">
	<div class="modal-dialog" role="document">
        <form action="" id="deleteForm" method="post">
            <div class="modal-content">
                  <div class="modal-header">
                  	<h5 class="modal-title">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                        
                  </div>
                  <div class="modal-body">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <p>Are you sure to want to delete this doctor?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i> No, Close</button>
                    <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
                 </div>
            </div>
        </form>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<div class="col-md-12">
	@include('inc.messages')
	<div class="card">
		<div class="card-header">
			<div class="d-flex align-items-center">
				<h5 class="card-title">List of doctors</h5>
				<a href="{{ route('doctors.create') }}" class="btn btn-primary btn-round ml-auto" data-toggle="" data-target=""> <i class="fa fa-plus"></i>
					Add Doctor</a>
			</div>
		</div>
	<div class="card-body">
	
		<div class="table-responsive">
			<table id="responsive-table" class="display table dt-responsive nowrap" style="width:100%">
				<thead>
					<tr>
						<th>Name & Firstname</th>
						<th>Email</th>
						<th>Phone number</th>
	                    <th>Gender</th>
	                    <th>Title</th>
						<th style="width: 10%">Actions</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Name & Firstname</th>
	                    <th>Email</th>
	                    <th>Phone number</th>
	                    <th>Gender</th>
	                    <th>Title</th>
						<th>Actions</th>
					</tr>
				</tfoot>
				<tbody>
					@foreach ($doctors as $doctor)
					<tr>
						<td>{{ $doctor->name }} {{ $doctor->firstname }}</td>
                        <td>{{ $doctor->email }}</td>
                        <td>{{ $doctor->phone_number }}</td>
                        <td>{{ $doctor->gender }}</td>
                        <td>{{ $doctor->title }}</td>
						<td>
							<div class="form-button-action">
								<a href="{{ route('doctors.edit', $doctor->id) }}"><button type="button" data-toggle="tooltip" title="" class="btn btn-icon btn-primary btn-lg" data-original-title="Edit">
									<i class="feather icon-edit"></i>
								</button></a>

								<a href="{{ route('doctors.show', $doctor->id) }}"><button type="button" data-toggle="tooltip" title="" class="btn btn-icon btn-success btn-lg" data-original-title="View">
									<i class="feather icon-eye"></i>
								</button></a>

								<button type="button" data-toggle="modal" onclick="deleteData({{ $doctor->id}})" data-target="#confirm" title="" class="btn btn-icon btn-danger" data-original-title="Delete">
									<i class="feather icon-trash"></i>
								</button>
							</div>
						</td>
					</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection

@push('doctor')
<script>
function deleteData(id)
     {
         var id = id;
         var url = '{{ route("doctors.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
</script>
@endpush