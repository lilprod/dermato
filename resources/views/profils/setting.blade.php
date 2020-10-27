@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Settings</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Settings</a></li>
                    <li class="breadcrumb-item"><a href="#!">Change Password</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    @include('inc.messages')
    <div class="col-lg-8 offset-lg-2">
        <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title">Changer Password</h5>
                    </div>
                </div>
            <form method="POST" action="{{ route('updatepassword') }}" class="form-signin" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Old Password <span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="old_password">
                            </div>

                            <div class="form-group">
                                <label>New Password <span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="new_password">
                            </div>
                       
                            <div class="form-group">
                                <label>Confirmation Password <span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="confirm_password">
                            </div>
                        </div>
                    </div>
                
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Modifier</button>
                </div>

            </form>
        </div>

    </div>
</div>
@endsection