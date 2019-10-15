@extends('adminlayout.admin_design')
@section('extra-css')
<!-- <link rel="stylesheet" href="{{ asset('backend/assets/css/select2.min.css')}}" /> -->


@endsection
@section('extra-js')
<!-- <script type="text/javascript" src="{{ asset('backend/assets/css/select2.full.min.js')}}"></script> 
 --><script type="text/javascript">
  
  $('.select2-multi').select2();
</script>

@endsection


@section('content')


                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                    	<div class="body">
                            <form   class="form-horizontal" method="post" action="{{url('/admin/add-product')}}" name="add_slide" id="add_slide" novalidate="novalidate" enctype="multipart/form-data">
                            	{{csrf_field()}}
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2">Product Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Product Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2">Set Price</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="on_price" name="on_price" class="form-control" placeholder="Price" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2">formar Price</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="off_price" name="off_price" class="form-control" placeholder="Price">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2">Quantity</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="qty" name="qty" class="form-control" placeholder="Price">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="tag">Tags</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <select name="tags[]" class="form-control select2-multi  ms" multiple="multiple">
                                                @foreach($tags as $tag)
          

                                                  <option value="{{$tag->id}}">{{$tag->name}}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="password_2">Decription</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                           <textarea name="description" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="password_2">Quick Overview</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                           <textarea name="quick_overview" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                	<div class=" col-lg-2 col-md-2 col-sm-4 form-control-label">
                                		 <label class="control-label">File Upload </label>
                                	</div>
                                	<div class="col-lg-10 col-md-10 col-sm-8">
                                		<div class="">
                                			<input type="file" name="image" id="image">
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