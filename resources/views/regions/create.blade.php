@extends('layouts.app')

@section('content')
<!-- Page Header -->

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Regions</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('regions.index')}}">Regions</a></li>
                    <li class="breadcrumb-item"><a href="#!">Add Region</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- /Page Header -->
<div class="col-md-12">
    <div class="col-lg-8 offset-lg-2">
        @include('inc.messages')
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h5 class="card-title">New Region</h5>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('regions.store') }}" enctype="multipart/form-data">
                	@csrf

                    <div class="row form-row">
                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <label>Region</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>
                        </div>

                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea cols="30" rows="4" class="form-control" name="description"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>

                    <!--<div class="form-group">
                        <label class="display-block">Statut </label>
            			<div class="form-check form-check-inline">
            				<input class="form-check-input" type="radio" name="status" id="product_active" value="1" checked>
            				<label class="form-check-label" for="product_active">
            				Actif
            				</label>
            			</div>
            			<div class="form-check form-check-inline">
            				<input class="form-check-input" type="radio" name="status" id="product_inactive" value="0">
            				<label class="form-check-label" for="product_inactive">
            				Inactif
            				</label>
            			</div>--> 
                    </form>
                </div>

            </div>
        </div>
</div>
@endsection