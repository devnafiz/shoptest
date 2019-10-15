@extends('adminlayout.admin_design')


@section('content')


                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                    	<div class="body">
                            <form   class="form-horizontal" method="post" action="{{url('/admin/edit-category/'.$categoryDetails->id)}}" name="edit_category" id="add_category" novalidate="novalidate" enctype="multipart/form-data">
                            	{{csrf_field()}}
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_name">Category Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter link" value="{{$categoryDetails->name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="category_level">Category level</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <select name="parent_id" class="form-control show-tick ms select2">
                                            <option value="0">Main Category</option>
                                            @foreach($levels as $level)

                                               <option value="{{$level->id}}" @if ($level->id == $categoryDetails->parent_id) selected @endif>{{$level->name}}</option>

                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div><br>

                                <!-- <div class="row clearfix">
                                	<div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                		 <label class="control-label">File Upload </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<input type="file" name="image" id="image">
                                		</div>
                                		
                                	</div>
                                	
                                </div> -->

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2">Description</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="Description" name="description" class="form-control" placeholder="Enter description" value="{{$categoryDetails->description}}"  >
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2">Category Url</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="name" name="url" class="form-control" placeholder="Enter Url" value="{{$categoryDetails->url}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
					                <label class="control-label">Enable </label>

					              </div>  
					                <div class="controls col-lg-10 col-md-10 col-sm-8 " >
					                	<div class="">
					                		<input type="checkbox" name="status" id="status" value="1" @if($categoryDetails->status==1) checked @endif >
					                	</div>
					                  
					                </div>
					              </div>
                                <div class="row clearfix">
                                    
                                    <div class="col-sm-8 offset-sm-2">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Add Category</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            


@endsection