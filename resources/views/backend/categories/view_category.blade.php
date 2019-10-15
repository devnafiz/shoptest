@extends('adminlayout.admin_design')


@section('content')
<div class="col-lg-12">
    <div class="card">
        <a href="{{url('/admin/add-slide')}}" class="btn btn-primary pull-left">Create Category</a>
    </div>
 </div>   
  <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Parent Category</th>
                                        <th data-breakpoints="sm xs">url</th>
                                        
                                        <th data-breakpoints="sm xs md">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categoryList as $category)
                                    <tr>
                                        <td></td>
                                        <td><h5>{{$category->name}}</h5></td>
                                        <td><span class="text-muted">{{$category->parent_id}}</span></td>
                                        <td><h5>{{$category->url}}</h5></td>
                                        <td>
                                            <a href="{{url('/admin/edit-category/'.$category->id)}}" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:" rel="{{$category->id}}" rel1="delete-category" class="btn btn-default waves-effect waves-float btn-sm waves-red" ><i class="zmdi zmdi-delete deleteRecord"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>



@endsection