@extends('adminlayout.admin_design')


@section('content')
<div class="col-lg-12">
    <div class="card">
        <a href="{{url('/admin/add-page')}}" class="btn btn-primary pull-left">Create Page</a>
    </div>
 </div>   
  <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Page Name</th>
                                        <th data-breakpoints="sm xs">Page Url </th>
                                        
                                        <th data-breakpoints="sm xs md">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pages as $page)
                                    <tr>
                                        <td>{{$page->id}}</td>
                                        <td><h5>{{$page->name}}</h5></td>
                                        <td><span class="text-muted">{{$page->slug}}</span></td>
                                        
                                        <td>
                                            <a href="{{url('/admin/edit-page/'.$page->id)}}" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:" rel="{{$page->id}}" rel1="delete-page" class="btn btn-default waves-effect waves-float btn-sm waves-red" ><i class="zmdi zmdi-delete deleteRecord"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>



@endsection