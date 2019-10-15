@extends('adminlayout.admin_design')


@section('content')
<div class="col-lg-12">
    <div class="card">
        <a href="{{url('/admin/add-tag')}}" class="btn btn-primary pull-left">Create Tag</a>
    </div>
 </div>   
  <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Tag Name</th>
                                        
                                        
                                        <th data-breakpoints="sm xs md">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tagDetails as $tag)
                                    <tr>
                                        <td>{{ $tag->id}}</td>
                                        <td><h5>{{$tag->name}}</h5></td>
                                      
                                        
                                        <td>
                                            <a href="{{url('/admin/edit-tag/'.$tag->id)}}" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:" rel="{{$tag->id}}" rel1="delete-tag" class="btn btn-default waves-effect waves-float btn-sm waves-red" ><i class="zmdi zmdi-delete deleteRecord"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>



@endsection