@extends('adminlayout.admin_design')


@section('content')
<div class="col-lg-12">
    <div class="card">
        <a href="{{url('/admin/add-slide')}}" class="btn btn-primary pull-left">Create Slide</a>
    </div>
 </div>   
  <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Slide Title</th>
                                        <th data-breakpoints="sm xs">Link</th>
                                        
                                        <th data-breakpoints="sm xs md">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($banners as $banner)
                                    <tr>
                                        <td><img src="{{asset('/images/frontend_image/banner/'.$banner->image)}}" width="48" alt="Product img"></td>
                                        <td><h5>{{$banner->title}}</h5></td>
                                        <td><span class="text-muted">{{$banner->link}}</span></td>
                                        
                                        <td>
                                            <a href="{{url('/admin/edit-slide/'.$banner->id)}}" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:" rel="{{$banner->id}}" rel1="delete-banner" class="btn btn-default waves-effect waves-float btn-sm waves-red" ><i class="zmdi zmdi-delete deleteRecord"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>



@endsection