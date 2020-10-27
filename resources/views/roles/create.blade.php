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
          <li class="breadcrumb-item"><a href="#!">Add Role</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="col-md-12">
		<div class='col-lg-4 col-lg-offset-4'>
            <div class="card">
                <div class="card-header with-border">
                  <h5 class="card-title"><i class='fa fa-key'></i> New Role</h5>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {{ Form::open(array('url' => 'roles')) }}
                  <div class="card-body">
                    <div class="form-group">
                        {{ Form::label('name', 'Name of role') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>

                    <h6><b>Assign a/the permission(s) to role</b></h6>

                    <div class='form-group'>
                        @foreach ($permissions as $permission)
                            {{ Form::checkbox('permissions[]',  $permission->id ) }}
                            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                        @endforeach
                    </div>
                  </div>
                  <!-- /.box-body -->

              <div class="card-footer">
                {{ Form::submit('Add', array('class' => 'btn btn-primary btn-block')) }}
              </div>
            {{ Form::close() }}
          </div>
	</div>

</div>

@endsection