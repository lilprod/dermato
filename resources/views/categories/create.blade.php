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
                    <li class="breadcrumb-item"><a href="#!">Add Category</a></li>
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
                    <h5 class="card-title">New Category</h5>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                	@csrf

                    <div class="row form-row">
                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>
                        </div>

                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <label for="slug">Slug*</label>
                                <input type="text" id="slug" name="slug" class="form-control">
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