
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
					<li class="breadcrumb-item"><a href="#!">List of users</a></li>
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
                    <p>Etes-vous sûr(e) de vouloir supprimer cet utilisateur?</p>
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
				<h5 class="card-title">List of users</h5>
				<a href="{{ route('users.create') }}" class="btn btn-primary btn-round ml-auto" data-toggle="" data-target=""> <i class="fa fa-plus"></i>
					Add User</a>
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
						Nouvel</span> 
						<span class="fw-light">
							utilisateur
						</span>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p class="small"> Infos du nouvel utilisateur</p>
						{{ Form::open(array('url' => 'users', 'enctype' => 'multipart/form-data')) }}
							<div class="row">

							<div class="col-md-6 pr-0">
								<div class="form-group">
			                        {{ Form::label('name', 'Nom') }}
			                        {{ Form::text('name', '', array('class' => 'form-control form-control-uppercase')) }}
			                      </div>
			                  </div>

			                  <div class="col-md-6 pr-0">
			                      <div class="form-group">
			                        {{ Form::label('firstname', 'Prénoms') }}
			                        {{ Form::text('firstname', '', array('class' => 'form-control form-control-capitalize', 'id' => 'firstname')) }}
			                      </div>
			                  </div>

			                  <div class="col-md-6 pr-0">
			                      <div class="form-group">
			                            {{ Form::label('email', 'Email') }}
			                            {{ Form::email('email', '', array('class' => 'form-control')) }}
			                      </div>
			                  </div>


			                  <div class="col-md-6 pr-0">
			                      <div class="form-group">
			                        {{ Form::label('phone_number', 'Numero de téléphone') }}
			                        {{ Form::text('phone_number', '', array('class' => 'form-control')) }}
			                      </div>
			                  </div>

			                  <div class="col-sm-12">
			                      <div class="form-group">
			                        {{ Form::label('address', 'Adresse') }}
			                        {{ Form::text('address', '' , array('class' => 'form-control', 'id' => 'address')) }}
			                      </div>
			                    </div>

			                  <div class="col-md-6 pr-0">
			                      <div class="form-group">
			                            {{ Form::label('password', 'Mot de passe') }}<br>
			                            {{ Form::password('password', array('class' => 'form-control')) }}
			                      </div>
			                  </div>

			                  <div class="col-md-6 pr-0">
			                      <div class="form-group">
			                            {{ Form::label('password', 'Confirmation du mot de passe') }}<br>
			                            {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
			                      </div>
			                    </div>

			                  
								<div class="col-md-6 pr-0">
			                      <div class="form-group">
			                          {{ Form::label('profile_picture', 'Image de profil') }}
			                          {{ Form::file('profile_picture', array('class' => 'form-control')) }}
			                      </div>
			                  </div>
			                    

								<div class="col-sm-12">
				                  	<h5><b>Assigner Rôle</b></h5>
				                    <div class='form-group'>
				                        @foreach ($roles as $role)
				                            {{ Form::checkbox('roles[]',  $role->id ) }}
				                            {{ Form::label($role->name, ucfirst($role->name)) }}<br>
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
					<th>Name & Firstname</th>
                    <th>Email</th>
                    <th>Add Date/Hour</th>
                    <th>Roles</th>
					<th style="width: 10%">Actions</th>
				</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Name & Firstname</th>
	                    <th>Email</th>
	                    <th>Add Date/Hour</th>
	                    <th>Roles</th>
						<th>Actions</th>
					</tr>
				</tfoot>
				<tbody>
					@foreach ($users as $user)
					<tr>
						<td>{{ $user->name }} {{ $user->firstname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                        <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
						<td>
							<div class="form-button-action">
								<a href="{{ route('users.edit', $user->id) }}"><button type="button" data-toggle="tooltip" title="" class="btn btn-icon btn-primary btn-lg" data-original-title="Edit">
									<i class="feather icon-edit"></i>
								</button></a>
								<!--<a href="{{ route('users.edit', $user->id) }}" class="btn btn-link btn-primary btn-lg" style="margin-right: 3px;" data-original-title="Editer">
									<i class="fa fa-edit"></i>
								</a>-->

								<button type="button" data-toggle="modal" onclick="deleteData({{ $user->id}})" data-target="#confirm" title="" class="btn btn-icon btn-danger" data-original-title="Supprimer">
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

@push('user')
<script>
function deleteData(id)
     {
         var id = id;
         var url = '{{ route("users.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
</script>
@endpush