@extends('adminlayout.admin_design')


@section('content')
<div class="col-lg-12">
    <div class="card">
       <p>Admin List</p>
    </div>
 </div>   
  <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>User Name</th>
                                        <th data-breakpoints="sm xs">role</th>
                                        <th data-breakpoints="sm xs">Status</th>
                                        
                                        <th data-breakpoints="sm xs md">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($adminDetails as $admin)
                                    <tr>
                                        <td>{{$admin->id}}</td>
                                        <td><h5>{{$admin->username}}</h5></td>
                                        <td><span class="text-muted"></span></td>
                                         <td>@if($admin->status==1) Active @else Inactive @endif</td>
                                        
                                        <td>
                                            <a href="{{url('/admin/edit-admin/'.$admin->id)}}" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:" rel="{{$admin->id}}" rel1="delete-admin" class="btn btn-default waves-effect waves-float btn-sm waves-red deleteRecord" ><i class="zmdi zmdi-delete "></i></a>
                                        </td>
                                    </tr>
                                    @endforeach    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>



@endsection