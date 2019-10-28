@extends('frontend_layout.frontend_design_ca')

@section('title')

Products

@endsection
@section('name')


@endsection
@section('extra-css')
<style type="text/css">
	.row {
    margin-right: -15px;
    margin-left: -15px;
}

@media (min-width: 1200px)
.col-lg-3 {
    width: 25%;
}
</style>

<!-- BOOTSTRAP 3.3.7 CSS -->
	
@endsection
@section('extra-js')





<script type="text/javascript">
	
	$(document).ready(function(){

       $(document).on('click','.pagination a',function(event){

           event.preventDefault();
           var page= $(this).attr('href').split('page=')[1];

           fetch_data(page);

       });

       function fetch_data(page){

       	$.ajax({
                url:"/products/fetch_data?page="+page,

                success:function(productDetails){
                	$('#Product_data').html(productDetails);
                }   

       	});
       }

       $(document).click(function(event){
       	 event.preventDefault();

         var per_page=$('#per_page').attr('value');

           //alert(per_page);
             productPerpage(per_page);
           // $.ajax({

           // 	    method:"POST",
           // 	    url: "/product/productPerpage",
           // 	    data: { per_page: per_page},
           // 	     success:function(productDetails){
           //      	$('#Product_data').html(productDetails);
                   
           	     	
           // 	     }


           // });
       });

        function productPerpage(per_page){

       	$.ajax({
       		     //method:"POST",
                url:"/products/productPerpage/",
                   data:{per_page:per_page},  
                success:function(productDetails){
                	$('#Product_data').html(productDetails);
                }   

       	});
       }

	});
</script>
<!-- CUSTOM JS -->
	<script type="text/javascript">
		(function($){$('.view-list').on('click',function(){$('.view-grid').removeClass('sel');$('.view-list').addClass('sel');jQuery("ul.products-loop").fadeOut(300,function(){jQuery(this).addClass("list").fadeIn(300).removeClass('grid')})});$('.view-grid').on('click',function(){$('.view-list').removeClass('sel');$('.view-grid').addClass('sel');$("ul.products-loop").fadeOut(300,function(){$(this).removeClass("list").fadeIn(300).addClass('grid')})});jQuery('.phone-icon-search').on('click',function(){jQuery('.sm-serachbox-pro').toggle("slide")});var sticky_navigation_offset=$(".yt-header-middle").offset();var sticky_navigation_offset_top=sticky_navigation_offset.top;var sticky_navigation=function(){var scroll_top=$(window).scrollTop();if(scroll_top>sticky_navigation_offset_top){$(".yt-header-middle").addClass("sticky-menu");$(".yt-header-middle").css({"position":"fixed","top":0,"left":0,"right":0,"z-index":800})}else{$(".yt-header-middle").removeClass("sticky-menu");$(".yt-header-middle").css({"position":"relative","z-index":30})}};sticky_navigation();$(window).scroll(function(){sticky_navigation()});$(document).ready(function(){$(".show-dropdown").each(function(){$(this).on("click",function(){$(this).toggleClass("show");$(this).parent().find("> ul").toggle(300)})})})}(jQuery))
	</script>

@endsection
@section('pagecontent')


			
				
					<div id="contents" class="content col-lg-12 col-md-12 col-sm-12" role="main">
						<div id="container">
							<div id="content" role="main">
								<div class="products-wrapper">
									<div class="image-category">
										<div class="textwidget">
											<img src="images/mobile-cat.png" alt="">
										</div>
									</div>
									
									<div class="listing-title">
										<h1>
											<span>Shop</span>
										</h1>
									</div>
									
									<div class="products-nav">
										<ul class="view-mode-wrap">
											<li class="view-grid sel">
												<a></a>
											</li>
											
											<li class="view-list">
												<a></a>
											</li>
										</ul>
										
										<div class="catalog-ordering clearfix">
											<div class="orderby-order-container">
												<ul class="orderby order-dropdown">
													<li>
														<span class="current-li">
															<span class="current-li-content">
																<a>Sort by Popularity</a>
															</span>
														</span>
														
														<ul style="display: none;">
															<li>
																<a href="#">Sort by Default</a>
															</li>
															
															<li class="current">
																<a href="#">Sort by Popularity</a>
															</li>
															
															<li>
																<a href="#">Sort by Rating</a>
															</li>
															
															<li>
																<a href="#">Sort by Date</a>
															</li>
															
															<li>
																<a href="#">Sort by Price</a>
															</li>
														</ul>
													</li>
												</ul>
												
												<ul class="order">
													<li class="asc"><a href="#"><i class="icon-arrow-down"></i></a></li>
												</ul>
												
												<ul class="sort-count order-dropdown">
													<select class="" name="per_page" id="per_page">
                                                              
																<option value="4">8</option>
																<option value="16">16</option>
																<option value="30">30</option>


															</select>
													<!--<li>
														<span class="current-li"><a>8</a></span>


														<ul style="display: none;">

															
															 <li class="current">
																<a href="#" id="per_page" value="8">8</a>
															</li>
															
															<li>
																<a href="#" id="per_page" value="16">16</a>
															</li>
															
															<li>
																<a href="#" id="per_page" value="24">24</a>
															</li>
														</ul>
													</li> -->
												</ul>
											</div>
										</div>
										
										<nav class="woocommerce-pagination">
											<ul class="page-numbers">
												<li>
													<span class="page-numbers current">1</span>
												</li>
												
												<li>
													<a class="page-numbers" href="#">2</a>
												</li>
												
												<li>
													<span class="page-numbers dots">...</span>
												</li>
												
												<li>
													<a class="page-numbers" href="#">28</a>
												</li>
												
												<li>
													<a class="next page-numbers" href="#">?</a>
												</li>
										   </ul>
										</nav>
									</div>
									
									<div class="clear"></div>
									
									<ul class="products-loop grid clearfix" id="Product_data">
                                       <li class="clearfix divider-product"></li>
										@foreach($productDetails as $product )
										

										
										<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
											<div class="products-entry clearfix">
												<div class="products-thumb">
													<a href="home_style_1_shop_product_default.html" class="woocommerce-LoopProduct-link">
														<span class="onsale">Sale!</span>
													</a>
													
													<a href="home_style_1_shop_product_default.html">
														<div class="product-thumb-hover">
															<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
																	src="images/2-3-300x300.jpg"
																	srcset="images/2-3-300x300.jpg 300w, images/2-3-260x260.jpg 260w, images/2-3.jpg 600w, images/2-3-180x180.jpg 180w" 
																	sizes="(max-width: 300px) 100vw, 300px" />
														</div>
													</a>
													
													<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="fancybox fancybox.ajax sm_quickview_handler-list" title="Quick View Product">Quick View</a>		
												</div>
												
												<div class="products-content">
													<div class="item-content">
														<h4>
															<a href="{{url('/products/'.$product->slug)}}" title="{$product->product_name}}" target="_blank"> {{$product->product_name}} </a>
														</h4>
														
														<div class="reviews-content">
															<div class="star"></div>
														</div>
														
														<div class="item-price">
															<span>
																<del>
																	<span class="woocommerce-Price-amount amount">
																		<span class="woocommerce-Price-currencySymbol">$</span>86.00
																	</span>
																</del> 
																
																<ins>
																	<span class="woocommerce-Price-amount amount">
																		<span class="woocommerce-Price-currencySymbol">$</span>80.00
																	</span>
																</ins>
															</span>
														</div>
														
														<div class="desc std">
															<p>Voluptate boudin in strip steak dolor. Kielbasa in in reprehenderit do. Ut occaecat veniam in, strip steak ut ipsum magna ground round filet mignon picanha nulla anim sed. Et andouille ad pig nisi tenderloin. Sint sed pig, ut veniam in short loin in est do chuck strip steak swine. Kielbasa tenderloin pancetta biltong pork chop tail, bresaola nisi boudin landjaeger prosciutto pariatur spare ribs chuck. T-bone in veniam mollit qui brisket</p>
														</div>
														
														<div class="item-bottom clearfix">
															<div class="yith-wcwl-add-to-wishlist">
																<div class="yith-wcwl-add-button show" style="display:block">
																	<a href="" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																	<img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
																</div>
																
																<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
																	<span class="feedback">Product added!</span>
																	<a href="" rel="nofollow">Browse Wishlist</a>
																</div>
																
																<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
																	<span class="feedback">The product is already in the wishlist!</span>
																	<a href="" rel="nofollow">Browse Wishlist</a>
																</div>
																
																<div style="clear:both"></div>
																<div class="yith-wcwl-wishlistaddresponse"></div>
															</div>
															
															<div class="clear"></div>
															
															<a rel="nofollow" href="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
															
															<div class="woocommerce product compare-button">
																<a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										@endforeach
										
									</ul>
									
									<div class="products-nav">
										<ul class="view-mode-wrap">
											<li class="view-grid sel">
												<a></a>
											</li>
											
											<li class="view-list">
												<a></a>
											</li>
										</ul>
										
										<div class="catalog-ordering clearfix">
											<div class="orderby-order-container">
												<ul class="orderby order-dropdown">
													<li>
														<span class="current-li">
															<span class="current-li-content">
																<a>Sort by Popularity</a>
															</span>
														</span>

														<ul style="display: none;">
															<li>
																<a href="#">Sort by Default</a>
															</li>
															
															<li class="current">
																<a href="#">Sort by Popularity</a>
															</li>
															
															<li>
																<a href="#">Sort by Rating</a>
															</li>
															
															<li>
																<a href="#">Sort by Date</a>
															</li>
															
															<li>
																<a href="#">Sort by Price</a>
															</li>
														</ul>
													</li>
												</ul>
												
												<ul class="order">
													<li class="asc">
														<a href="#">
															<i class="icon-arrow-down"></i>
														</a>
													</li>
												</ul>
												
												<ul class="sort-count order-dropdown">
													<li>
														<span class="current-li">
															<a>8</a>
														</span>
														
														<ul style="display: none;">
															<li class="current">
																<a href="#">8</a>
															</li>
															
															<li>
																<a href="#">16</a>
															</li>
															
															<li>
																<a href="#">24</a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
										
										<nav class="woocommerce-pagination">

											{!!$productDetails->links()!!}
											<!-- <ul class="page-numbers">
												<li>
													<span class="page-numbers current">1</span>
												</li>
												
												<li>
													<a class="page-numbers" href="#">2</a>
												</li>
												
												<li>
													<span class="page-numbers dots">...</span>
												</li>
												
												<li>
													<a class="page-numbers" href="#">28</a>
												</li>
												
												<li>
													<a class="next page-numbers" href="#">?</a>
												</li>
											</ul> -->
										</nav>
									</div>
									
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</div>
				
	
  

@endsection