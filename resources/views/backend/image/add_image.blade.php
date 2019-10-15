
@extends('adminlayout.admin_design')


@section('content')


                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                    	<div class="body">
                            <form   class="form-horizontal" method="post" action="{{url('/admin/add-image')}}" name="add_slide" id="add_page" novalidate="novalidate" enctype="multipart/form-data">
                            	{{csrf_field()}}
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2">Image  Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="password_2">Image Size</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="slug" name="size" class="form-control" placeholder="Enter Image Size">
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                	<div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                		 <label class="control-label">File Upload </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<input type="file" name="image">
                               
                                             
                                		</div>
                                		
                                	</div>
                                	
                                </div>
                                <div class="row clearfix">
                                <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
					                <label class="control-label">Enable </label>

					              </div>  
					                <div class="controls col-lg-10 col-md-10 col-sm-8 " >
					                	<div class="">
					                		<input type="checkbox" name="status" id="status" value="1">
					                	</div>
					                  
					                </div>
					              </div>
                                <div class="row clearfix">
                                    
                                    <div class="col-sm-8 offset-sm-2">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            


@endsection

