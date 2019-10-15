@extends('adminlayout.admin_design')


@section('content')
<div class="col-lg-12">
    <div class="card">
        <a href="{{url('/admin/add-image')}}" class="btn btn-primary pull-left">Add Image</a>
    </div>
 </div>   
  <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th> Image Name</th>
                                        <th> Image size</th>
                                        <th data-breakpoints="sm xs">Link</th>
                                        
                                        <th data-breakpoints="sm xs md">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($images as $image)
                                    <tr>
                                        <td><img src="{{asset('/images/backend_image/editor/'.$image->image)}}" width="48" alt="Product img"></td>
                                        <td><h5>{{$image->name}}</h5></td>
                                         <td><h5>{{$image->size}}</h5></td>
                                        <td><span class="text-muted"></span></td>
                                        
                                        <td>
                                            
                                            <a href="javascript:" rel="{{$image->id}}" rel1="delete-image" class="btn btn-default waves-effect waves-float btn-sm waves-red" ><i class="zmdi zmdi-delete deleteRecord"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>



@endsection