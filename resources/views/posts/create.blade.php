@extends('layouts.app')

@section('content')

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Posts</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Posts</a></li>
                    <li class="breadcrumb-item"><a href="#!">Add Post</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="col-md-12">
    <div class="col-lg-8 offset-lg-2">
        @include('inc.messages')
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h5 class="card-title">New Post</h5>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                	{{csrf_field()}}
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                    
                    <div class="form-group">
                        <label>Slug</label>
                        <input class="form-control" type="text" name="slug" id="slug">
                    </div>

                    <div class="form-group">
                        <label>Extract</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    
                    <div class="form-group">
                        <label>Video URL</label>
                        <input type="text" class="form-control" name="video_url">
                    </div>

                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control select" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>.
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Cover Image</label>
                        <div>
                            <input class="form-control" type="file" name="cover_image">
                            <small class="form-text text-muted">Taille max. image: 50 MB. Format admis: jpg, gif, png.</small>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Body</label>
                        <textarea cols="30" rows="6" class="form-control" name="body" id="article-ckeditor"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="display-block">Status</label>
        				<div class="form-check form-check-inline">
        					<input class="form-check-input" type="radio" name="status" id="blog_active" value="1" checked>
        					<label class="form-check-label" for="blog_active">
        					Publish
        					</label>
        				</div>
        				<div class="form-check form-check-inline">
        					<input class="form-check-input" type="radio" name="status" id="blog_inactive" value="0">
        					<label class="form-check-label" for="blog_inactive">
        					Archive
        					</label>
        				</div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn btn-block">Publish Post</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
@endsection

@push('slug')
<script>
  $('#title').change(function(e) {
    $.get('{{ route('post.check_slug') }}', 
      { 'title': $(this).val() }, 
      function( data ) {
        $('#slug').val(data.slug);
      }
    );
  });
</script>
@endpush