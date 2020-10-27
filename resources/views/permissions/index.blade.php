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
					<li class="breadcrumb-item"><a href="#!">List of permissions</a></li>
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
                    <p>Etes-vous sûr(e) de vouloir supprimer cette permission?</p>
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
				<h5 class="card-title">List of permissions</h5>
				<a href="{{ route('permissions.create') }}" class="btn btn-primary btn-round ml-auto" data-toggle="" data-target=""> <i class="fa fa-plus"></i>
					Add Permission</a>
			</div>
		</div>
	<div class="card-body">
	<!-- Modal -->
	<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header no-bd">
					<h5 class="modal-title">
						<span class="fw-mediumbold">
						Nouvelle</span> 
						<span class="fw-light">
							permission
						</span>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p class="small"> Formulaire d'une nouvelle permission</p>
						{{ Form::open(array('url' => 'permissions')) }}
							<div class="row">

			                    

								<div class="col-sm-12">
				                  	<div class="form-group">
				                        {{ Form::label('name', 'Nom de la permission') }}
				                        {{ Form::text('name', '', array('class' => 'form-control')) }}
			                        </div><br>
			                            @if(!$roles->isEmpty())
			                                <h6>Assigner un rôle à la permission</h6>

			                                @foreach ($roles as $role) 
			                                    {{ Form::checkbox('roles[]',  $role->id ) }}
			                                    {{ Form::label($role->name, ucfirst($role->name)) }}<br>
			                                @endforeach
			                            @endif
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
					<th>Permissions</th>
					<th style="width: 10%">Actions</th>
				</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Permissions</th>
						<th>Actions</th>
					</tr>
				</tfoot>
				<tbody>
					@foreach ($permissions as $permission)
					<tr>
						<td>{{ $permission->name }}</td> 
						<td>
							<div class="form-button-action">
								<a href="{{ route('permissions.edit', $permission->id) }}"><button type="button" data-toggle="tooltip" title="" class="btn btn-icon btn-primary btn-lg" data-original-title="Editer">
									<i class="feather icon-edit"></i>
								</button></a>

							<button type="button" data-toggle="modal" onclick="deleteData({{ $permission->id}})" data-target="#confirm"  class="btn btn-icon btn-danger" data-original-title="Supprimer">
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

@push('permission')
<script>
function deleteData(id)
     {
         var id = id;
         var url = '{{ route("permissions.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
</script>
@endpush