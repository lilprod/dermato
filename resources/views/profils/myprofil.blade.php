@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Account</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Account</a></li>
                    <li class="breadcrumb-item"><a href="#!">My Profile</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    @include('inc.messages')
    <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card">
            <div class="card-body card-profile">
              <img class="img-fluid rounded-circle img-responsive img-circle" src="{{url('/storage/profile_images/'.auth()->user()->profile_picture)}}" alt="User profile picture">

              <h5 class="profile-username text-center">{{auth()->user()->name}} {{auth()->user()->firstname}}</h5>


            @if(auth()->user()->role_id == 2)
                <p class="text-muted text-center">Administrator</p>
            @elseif(auth()->user()->role_id == 1)

                @if($doctor->title == 'PR')
                    <p class="text-muted text-center">Professor</p>
                @elseif($doctor->title == 'DR')
                    <p class="text-muted text-center">Doctor</p>
                @endif

            @endif
        </div>
        <!-- /.box-body -->
      </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="card">
            <div class="card-header with-border">
              <h5 class="card-title">About me</h5>
            </div>
            <!-- /.box-header -->
            <div class="card-body">
                <strong><i class="fa fa-envelope"></i> Email</strong>

              <p class="text-muted">
                {{auth()->user()->email}}
              </p>

              <hr>
              <strong><i class="fa fa-phone"></i> Phone number</strong>

              <p class="text-muted">
                {{auth()->user()->phone_number}}
              </p>

              <hr>
              <strong><i class="fa fa-map-marker"></i> Address</strong>

              <p class="text-muted">{{auth()->user()->address}}</p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-9">
            <div class="card">
                    <div class="card-header with-border">
                      <h5 class="card-title">Change my Profile informations</h5>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ route('profils.store') }}">
                        @csrf
                      <div class="card-body">

                    <div class="col-md-12 pr-0">
                        <div class="form-group ">
                          <label for="name" class="">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{auth()->user()->name}}">
                          </div>
                        </div>

                    <div class="col-md-12 pr-0">
                        <div class="form-group">
                          <label for="firstname" class="">Firstname</label>
                            <input type="text" class="form-control" id="firstname" placeholder="Firstname" name="firstname" value="{{auth()->user()->firstname}}">
                          </div>
                        </div>

                        <div class="col-md-12 pr-0">
                            <div class="form-group">
                          <label for="email" class="">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{auth()->user()->email}}">
                          </div>
                        </div>

                        <div class="col-md-12 pr-0">
                            <div class="form-group">
                            <label for="phone_number" class="">Phone number</label>
                          
                            <input type="text" class="form-control" id="phone_number" placeholder="Phone number" name="phone_number" value="{{auth()->user()->phone_number}}">
                          </div>
                        </div>

                        <div class="col-md-12 pr-0">
                            <div class="form-group">
                            <label for="address" class="">Address</label>
                          
                            <textarea class="form-control" id="address" placeholder="Address" name="address">{{auth()->user()->address}}</textarea> 
                          </div>
                        </div>

                        <div class="col-md-12 pr-0">
                            <div class="form-group">
                                <label for="profile_picture" class="">Profile Image</label>
                                <input class="form-control" type="file" name="profile_picture" id="profile_picture">
                            </div>
                        </div>

                      </div>
                      <!-- /.box-body -->
                      <div class="card-footer">
                        <!--<button type="reset" class="btn btn-danger">Annuler</button>-->
                        <button type="submit" class="btn btn-info btn-block pull-right">Edit</button>
                      </div>
                      <!-- /.box-footer -->
                    </form>
                  </div>
                <!-- /.box -->
        </div>

    </div>
</div>
 @endsection