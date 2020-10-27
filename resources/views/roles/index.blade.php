@extends('layouts.app')

@section('content')
<div class="page-header">
	<div class="page-block">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="page-header-title">
					<h5 class="m-b-10">Roles</h5>
				</div>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
					<li class="breadcrumb-item"><a href="#!">Roles</a></li>
					<li class="breadcrumb-item"><a href="#!">List of Roles</a></li>
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
                  	<h5 class="modal-title">Confirmation de suppression</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                        
                  </div>
                  <div class="modal-body">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <p>Etes-vous sûr(e) de vouloir supprimer ce rôle?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i> Non, Fermer</button>
                    <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Oui, Supprimer</button>
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
				<h4 class="card-title">Liste des rôles</h4>
				<a href="{{ route('roles.create') }}" class="btn btn-primary btn-round ml-auto" data-toggle="" data-target=""> <i class="fa fa-plus"></i>
					Add Role</a>
			</div>
		</div>
	<div class="card-body">
	<!-- Modal -->
	<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				@include('inc.messages')
				<div class="modal-header no-bd">
					<h5 class="modal-title">
						<span class="fw-mediumbold">
						Nouveau</span> 
						<span class="fw-light">
							rôle
						</span>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p class="small"> Formulaire d'une nouveau rôle</p>
						{{ Form::open(array('url' => 'roles')) }}
							<div class="row">

								<div class="col-sm-12">
				                    <div class="form-group">
				                        {{ Form::label('name', 'Nom du rôle') }}
				                        {{ Form::text('name', null, array('class' => 'form-control')) }}
				                    </div>
			                	</div>

			                	<div class="col-sm-12">
			                    	<h5><b>Assigner une/des permission(s) au rôle</b></h5>
			                	</div>

			                    <div class="col-sm-12">
				                    <div class='form-group'>
				                        @foreach ($permissions as $permission)
				                            {{ Form::checkbox('permissions[]',  $permission->id ) }}
				                            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

				                        @endforeach
				                    </div>
			                	</div>

							</div>
						
					</div>

					<div class="modal-footer no-bd">
						<!--<button type="button" id="addRowButton" class="btn btn-primary">Ajouter</button>-->
						{{ Form::submit('Ajouter', array('class' => 'btn btn-primary')) }}
						<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
					</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>

		<div class="table-responsive">
			<table id="responsive-table" class="display table dt-responsive nowrap" style="width:100%">
				<thead>
				<tr>
					<th>Roles</th>
					<th>Permissions</th>
					<th style="width: 10%">Actions</th>
				</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Roles</th>
						<th>Permissions</th>
						<th>Actions</th>
					</tr>
				</tfoot>
				<tbody>
					@foreach ($roles as $role)
					<tr>
						<td>{{ $role->name }}</td>
                        <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                        <td>
							<div class="form-button-action">
								<a href="{{ route('roles.edit', $role->id) }}"><button type="button" data-toggle="tooltip" title="" class="btn btn-icon btn-primary btn-lg" data-original-title="Edit">
									<i class="feather icon-edit"></i>
								</button></a>

							<button type="button" data-toggle="modal" onclick="deleteData({{ $role->id}})" data-target="#confirm" title="" class="btn btn-icon btn-danger" data-original-title="Supprimer">
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

@push('role')
<script>
function deleteData(id)
     {
         var id = id;
         var url = '{{ route("roles.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
</script>
@endpush