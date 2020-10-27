@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Categories</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Categories</a></li>
                    <li class="breadcrumb-item"><a href="#!">Edit Category</a></li>
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
                    <h5 class="card-title">Edit Category : </h5> {{$category->title}}
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                	{{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="row form-row">
                        <div class="col-12 col-sm-12">
                			<div class="form-group">
                				<label>Category </label>
                				<input class="form-control" type="text" name="title" value="{{$category->title}}" id="title">
                			</div>
                        </div>

                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <label for="slug">Slug*</label>
                                <input type="text" id="slug" name="slug" class="form-control" value="{{$category->slug}}">
                            </div>
                        </div>
                    
                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea cols="30" rows="4" class="form-control" name="description">{{$category->description}}</textarea>
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

@push('scripts')
<script>
  $('#title').change(function(e) {
    $.get('{{ route('category.check_slug') }}', 
      { 'title': $(this).val() }, 
      function( data ) {
        $('#slug').val(data.slug);
      }
    );
  });
</script>
@endpush