@extends('adminlayout.admin_design')


@section('content')


                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                    	<div class="body">
                            <form   class="form-horizontal" method="post" action="{{url('/admin/add-admin')}}" name="add_slide" id="add_slide" novalidate="novalidate" enctype="multipart/form-data">
                            	{{csrf_field()}}
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="Username">Username</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="Username" name="username" class="form-control" placeholder="Enter link">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="password_2">Password</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="password" id="Title" name="password" class="form-control" placeholder="Enter Title">
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="admin">Admin Type</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="">

                                    <select class="form-control show-tick ms select2" required name="type" id="type">
                                        <!-- <option value="">-- Please select --</option> -->
                                        <option value="Admin">Admin</option>
                                         <option value="Sub Admin">Sub Admin</option>
                                    </select>
                                          <!--  <select name="type" id="Type" style="width: 220px" class="form-control">
                                              <option value="Admin">Admin</option>
                                              <option value="Sub Admin">Sub Admin</option>
                                               
                                           </select> -->
                                        </div>
                                    </div>
                                </div><br/>

                                

                                <div class="row clearfix " style="display: none"  id="Access">

                                    
                                <div class=" col-lg-2 col-md-2 col-sm-4 form-control-label" >
                                    <label class="control-label">Admin Access </label>

                                  </div>  
                                    <div class="controls col-lg-10 col-md-10 col-sm-8 " >
                                        <div id="">
                                         
                                            <div class="control-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="page_access" id="page_access" value="1">
                                            Page </label>
                                           
                                             <label class="checkbox-inline"> <input type="checkbox" name="categories_access" id="categories_access" value="1">Categories </label>
                                            
                                             <label class="checkbox-inline">
                                             <input type="checkbox" name="products_access" id="products_access" value="1">
                                             Product </label>

                                             <label class="checkbox-inline">
                                             <input type="checkbox" name="users_access" id="users_access" value="1">
                                             User </label>
                                            
                                        </div>
                                      
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


@section('extra-js')
<script type="text/javascript">
    
    $(document).ready(function(e){
         
       $("#type").change(function(e){
            var type=$('#type').val();
            //alert(type);   
            if(type=="Admin"){
                $('#Access').hide();
            }else{
                $('#Access').show();
            }

       });

    });
</script>

@endsection