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
                    <li class="breadcrumb-item"><a href="#!">List of categories</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /Page Header -->


 <div id="confirm" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <form action="" id="deleteForm" method="post">
            <div class="modal-content">
                <div class="modal-body text-center">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <img src="{{asset('/assets/assets/img/sent.png')}}" alt="" width="50" height="46">
                    <p>Are you really to want to delete this Category?</p>
                    
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
                    <h5 class="card-title">List of categories</h5>
                    <a href="{{ route('categories.create') }}" class="btn btn-primary btn-round ml-auto" data-toggle="" data-target=""> <i class="fa fa-plus"></i>
                        Add Category</a>
                </div>
            </div>

             <div class="card-body">
                <div class="table-responsive">
                    <table id="responsive-table" class="display table dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Categories</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $k=1; ?>
                        	@foreach ($categories as $category)
                            <tr>
                                <td>#CTG00{{$k}}</td>
                                <td>
                                    <h6 class="table-avatar">
                                        <a href="#">{{$category->title}}</a>
                                    </h6>
                                </td>
        						
                                <td class="text-right">

                                    <div class="form-button-action">
                                        <a href="{{ URL::to('categories/'.$category->id.'/edit') }}"><button type="button" data-toggle="tooltip" title="" class="btn btn-icon btn-primary btn-lg" data-original-title="Editer">
                                            <i class="feather icon-edit"></i>
                                        </button></a>

                                    <button type="button" data-toggle="modal" onclick="deleteData({{ $category->id}})" data-target="#confirm"  class="btn btn-icon btn-danger" data-original-title="Supprimer">
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

@push('category')
<script>
function deleteData(id)
     {
         var id = id;
         var url = '{{ route("categories.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
</script>
@endpush