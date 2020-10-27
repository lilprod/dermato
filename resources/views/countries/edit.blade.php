@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Countries</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('countries.index') }}">Countries</a></li>
                    <li class="breadcrumb-item"><a href="#!">Edit Country</a></li>
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
                    <h5 class="card-title">Edit Country : </h5> {{$country->title}}
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('countries.update', $country->id) }}" enctype="multipart/form-data">
                	{{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="row form-row">
                        <div class="col-12 col-sm-12">
                			<div class="form-group">
                				<label>Country </label>
                				<input class="form-control" type="text" name="title" value="{{$country->title}}" id="title">
                			</div>
                        </div>

                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <label for="code">Code*</label>
                                <input type="text" id="code" name="code" class="form-control" value="{{$country->code}}">
                            </div>
                        </div>
                    
                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <label>Region</label>
                                <select class="form-control select" name="region_id">
                                    @foreach($regions as $region)
                                        <option value="{{$region->id}}"  {{ ($country->region_id === $region->id) ? 'selected' : '' }}">{{$region->title}}</option>.
                                    @endforeach
                                </select>
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