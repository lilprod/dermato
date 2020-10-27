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
                    <li class="breadcrumb-item"><a href="#!">List of posts</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

 <div id="confirm" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <form action="" id="deleteForm" method="post">
            <div class="modal-content">
                <div class="modal-body text-center">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <img src="{{asset('/assets/assets/img/sent.png')}}" alt="" width="50" height="46">
                    <p>Are you really to want to delete this Post?</p>
                    
                </div>
                <div class="m-b-20 text-center"> 
                    <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
            </div>
        </form>
    </div>
</div>



<div class="col-md-12">
    @include('inc.messages')
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h5 class="card-title">List of posts</h5>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary btn-round ml-auto" data-toggle="" data-target=""> <i class="fa fa-plus"></i>
                        Add Post</a>
                </div>
            </div>

             <div class="card-body">
                <div class="table-responsive">
                    <table id="responsive-table" class="display table dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Posts</th>
                                <th>Categories</th>
                                <!--<th>Tags</th>-->
                                <th>Add Date</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $k=1; ?>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>
                                        #POST00{{$k}}
                                    </td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->category->title}}</td>
                                    <td>{{ $post->created_at->format('F d, Y h:ia') }}</td>
                                    <td class="text-right">

                                        <div class="form-button-action">

                                            <a href="javascript:void(0);" class="btn btn-icon btn-success btn-lg">
                                                <i class="feather icon-eye"></i>
                                            </a>

                                            <a href="{{ URL::to('posts/'.$post->id.'/edit') }}"><button type="button" data-toggle="tooltip" title="" class="btn btn-icon btn-primary btn-lg" data-original-title="Editer">
                                                <i class="feather icon-edit"></i>
                                            </button></a>

                                        <button type="button" data-toggle="modal" onclick="deleteData({{ $post->id}})" data-target="#confirm"  class="btn btn-icon btn-danger" data-original-title="Supprimer">
                                                <i class="feather icon-trash"></i>
                                            </button>
                                        </div>
                                        
                                    </td>
                                </tr>

                            <?php $k+= 1; ?>
                        @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('post')
<script>
function deleteData(id)
{
     var id = id;
     var url = '{{ route("posts.destroy", ":id") }}';
     url = url.replace(':id', id);
     $("#deleteForm").attr('action', url);
 }

 function formSubmit()
 {
     $("#deleteForm").submit();
 }
</script>
@endpush