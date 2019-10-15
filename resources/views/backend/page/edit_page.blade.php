@extends('adminlayout.admin_design')


@section('content')


                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                    	<div class="body">
                            <form   class="form-horizontal" method="post" action="{{url('/admin/edit-page/'.$pageDetails->id)}}" name="edit_page" id="edit_page" novalidate="novalidate" enctype="multipart/form-data">
                            	{{csrf_field()}}
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2">Page Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" value="{{$pageDetails->name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="password_2">Url</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="slug" name="slug" class="form-control" placeholder="Enter url" value="{{$pageDetails->slug}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                	<div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                		 <label class="control-label">Page Content </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<textarea id="ckeditor" name="content">
                                               {{$pageDetails->content}}
                                             </textarea>
                                		</div>
                                		
                                	</div>
                                	
                                </div>
                                <div class="row clearfix">
                                <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
					                <label class="control-label">Enable </label>

					              </div>  
					                <div class="controls col-lg-10 col-md-10 col-sm-8 " >
					                	<div class="">
					                		<input type="checkbox" name="status" id="status" value="1" @if($pageDetails->status=='1') checked @endif>
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

@section('extra-js')
<script src="{{asset('backend/assets/plugins/ckeditor/ckeditor.js')}}"></script> <!-- Ckeditor --> 

<script src="{{asset('backend/assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js --> 
<script src="{{asset('backend/assets/js/pages/forms/editors.js')}}"></script>

@endsection