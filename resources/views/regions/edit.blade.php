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
                    <li class="breadcrumb-item"><a href="{{ route('regions.index') }}">Regions</a></li>
                    <li class="breadcrumb-item"><a href="#!">Edit Region</a></li>
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
                    <h5 class="card-title">Edit Region : </h5> {{$region->title}}
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('regions.update', $region->id) }}" enctype="multipart/form-data">
                	{{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="row form-row">
                        <div class="col-12 col-sm-12">
                			<div class="form-group">
                				<label>Region </label>
                				<input class="form-control" type="text" name="title" value="{{$region->title}}" id="title">
                			</div>
                        </div>
                    
                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea cols="30" rows="4" class="form-control" name="description">{{$region->description}}</textarea>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>

                </form>

                </div>
        </div>
    </div>
</div>

@endsection