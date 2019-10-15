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
													<li>
														<span class="current-li"><a>8</a></span>
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
									
									<ul class="products-loop grid clearfix">
										<li class="clearfix divider-product"></li>
										
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
															<a href="home_style_1_shop_product_default.html" title="Steak veniam"> Steak veniam </a>
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
										
										<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
											<div class="products-entry clearfix">
												<div class="products-thumb">
													<a href="home_style_1_shop_product_default.html">
														<div class="product-thumb-hover">
															<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
																	src="images/51-300x300.jpg" 
																	srcset="images/51-300x300.jpg 300w, images/51-260x260.jpg 260w, images/51.jpg 600w, images/51-180x180.jpg 180w" 
																	sizes="(max-width: 300px) 100vw, 300px" />
														</div>
													</a>
													
													<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="fancybox fancybox.ajax sm_quickview_handler-list" title="Quick View Product">Quick View</a>		
												</div>
												
												<div class="products-content">
													<div class="item-content">
														<h4>
															<a href="home_style_1_shop_product_default.html" title="Sint drumstick"> Sint drumstick </a>
														</h4>
														
														<div class="reviews-content">
															<div class="star">
																<span style="width: 56px"></span>
															</div>
														</div>
														
														<div class="item-price">
															<span>
																<span class="woocommerce-Price-amount amount">
																	<span class="woocommerce-Price-currencySymbol">$</span>55.00
																</span>
															</span>
														</div>
														
														<div class="desc std">
															<p>Jerky aliquip magna enim elit fatback chicken, cupidatat tail flank aute bacon. Do boudin veniam leberkas reprehenderit aliquip nulla venison cupidatat rump cillum eiusmod labore ex. Turducken non esse proident, beef ribs adipisicing est pork chop nulla ut flank aute fatback consequat. Nulla filet mignon enim tenderloin landjaeger, reprehenderit non ham shoulder picanha ad pancetta beef ribs. Cow minim aute, beef spare ribs aliqua eu anim exercitation bresaola commodo. Andouille et dolore hamburger</p>
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
										
										<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
											<div class="products-entry clearfix">
												<div class="products-thumb">
													<a href="home_style_1_shop_product_default.html">
														<div class="product-thumb-hover">
															<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
																	src="images/8-1-300x300.jpg" 
																	srcset="images/8-1-300x300.jpg 300w, images/8-1-260x260.jpg 260w, images/8-1.jpg 600w, images/8-1-180x180.jpg 180w" 
																	sizes="(max-width: 300px) 100vw, 300px" />
														</div>
													</a>
													
													<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="fancybox fancybox.ajax sm_quickview_handler-list" title="Quick View Product">Quick View</a>		
												</div>
												
												<div class="products-content">
													<div class="item-content">
														<h4>
															<a href="home_style_1_shop_product_default.html" title="Boudi ullamco"> Boudi ullamco </a>
														</h4>
														
														<div class="reviews-content">
															<div class="star"></div>
														</div>
														
														<div class="item-price">
															<span>
																<span class="woocommerce-Price-amount amount">
																	<span class="woocommerce-Price-currencySymbol">$</span>80.00
																</span>
															</span>
														</div>
														
														<div class="desc std">
															<p>Reprehenderit spare ribs sausage beef ribs landjaeger. Brisket in nulla officia irure dolore bacon chicken quis biltong jerky turkey sint. Incididunt sint shankle dolor, tail anim ground round jowl andouille drumstick id beef ribs porchetta in sirloin. Dolore sunt flank est. Drumstick non ham hock, flank pork chop ball tip incididunt.</p>
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
										
										<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
											<div class="products-entry clearfix">
												<div class="products-thumb">
													<a href="home_style_1_shop_product_default.html">
														<span class="onsale">Sale!</span>
													</a>
													
													<a href="home_style_1_shop_product_default.html">
														<div class="product-thumb-hover">
															<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
																	src="images/1-1-300x300.jpg" 
																	srcset="images/1-1-300x300.jpg 300w, images/1-1-260x260.jpg 260w, images/1-1.jpg 600w, images/1-1-180x180.jpg 180w" 
																	sizes="(max-width: 300px) 100vw, 300px" />
														</div>
													</a>
													
													<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="fancybox fancybox.ajax sm_quickview_handler-list" title="Quick View Product">Quick View</a>		
												</div>
												
												<div class="products-content">
													<div class="item-content">
														<h4>
															<a href="home_style_1_shop_product_default.html" title="Dolore cupidatats"> Dolore cupidatats </a>
														</h4>
											
														<div class="reviews-content">
															<div class="star"></div>
														</div>
														
														<div class="item-price">
															<span>
																<del>
																	<span class="woocommerce-Price-amount amount">
																		<span class="woocommerce-Price-currencySymbol">$</span>87.00
																	</span>
																</del>

																<ins>
																	<span class="woocommerce-Price-amount amount">
																		<span class="woocommerce-Price-currencySymbol">$</span>85.00
																	</span>
																</ins>
															</span>
														</div>
														
														<div class="desc std">
															<p>Dolore cupidatat occaecat jowl kevin sed dolor. Ea landjaeger ipsum sausage voluptate meatloaf laboris in veniam magna kielbasa turducken cow consectetur. Turducken ham hock pancetta strip steak sausage deserunt commodo rump eu non adipisicing elit nostrud andouille. Sint labore beef ribs nostrud t-bone. Magna tri-tip officia duis esse irure pariatur pork chop ad velit pork dolor. Chuck chicken est eiusmod.</p>
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
										
										<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
											<div class="products-entry clearfix">
												<div class="products-thumb">
													<a href="home_style_1_shop_product_default.html" class="woocommerce-LoopProduct-link">
														<span class="onsale">Sale!</span>
													</a>
													
													<a href="home_style_1_shop_product_default.html">
														<div class="product-thumb-hover">
															<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
																	src="images/7-2-300x300.jpg" 
																	srcset="images/7-2-300x300.jpg 300w, images/7-2-260x260.jpg 260w, images/7-2.jpg 600w, images/7-2-180x180.jpg 180w" 
																	sizes="(max-width: 300px) 100vw, 300px" />
														</div>
													</a>
													
													<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="fancybox fancybox.ajax sm_quickview_handler-list" title="Quick View Product">Quick View</a>		
												</div>
												
												<div class="products-content">
													<div class="item-content">
														<h4>
															<a href="home_style_1_shop_product_default.html" title="Molore magna"> Molore magna </a>
														</h4>
														
														<div class="reviews-content">
															<div class="star"></div>
														</div>
														
														<div class="item-price">
															<span>
																<del>
																	<span class="woocommerce-Price-amount amount">
																		<span class="woocommerce-Price-currencySymbol">$</span>171.00
																	</span>
																</del> 
																
																<ins>
																	<span class="woocommerce-Price-amount amount">
																		<span class="woocommerce-Price-currencySymbol">$</span>157.00
																	</span>
																</ins>
															</span>
														</div>
														
														<div class="desc std">
															<p>Consectetur filet mignon pancetta, ut proident tri-tip cow veniam boudin sirloin doner sint corned beef aliquip. In flank filet mignon picanha deserunt, excepteur andouille ham. Chuck nisi consectetur culpa ad ground round incididunt rump jerky cupidatat turkey landjaeger irure pork chop consequat. Swine mollit proident capicola ad chicken esse tenderloin in</p>
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
										
										<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
											<div class="products-entry clearfix">
												<div class="products-thumb">
													<a href="home_style_1_shop_product_default.html" class="woocommerce-LoopProduct-link">
														<span class="onsale">Sale!</span>
													</a>
													
													<a href="home_style_1_shop_product_default.html">
														<div class="product-thumb-hover">
															<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
																	src="images/17-300x300.jpg" 
																	srcset="images/17-300x300.jpg 300w, images/17-260x260.jpg 260w, images/17.jpg 600w, images/17-180x180.jpg 180w" 
																	sizes="(max-width: 300px) 100vw, 300px" />
														</div>
													</a>
													
													<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="fancybox fancybox.ajax sm_quickview_handler-list" title="Quick View Product">Quick View</a>		
												</div>
												
												<div class="products-content">
													<div class="item-content">
														<h4>
															<a href="home_style_1_shop_product_default.html" title="Morbi vulputate diam"> Morbi vulputate diam </a>
														</h4>
														
														<div class="reviews-content">
															<div class="star"></div>
														</div>
														
														<div class="item-price">
															<span>
																<del>
																	<span class="woocommerce-Price-amount amount">
																		<span class="woocommerce-Price-currencySymbol">$</span>560.00
																	</span>
																</del> 
																
																<ins>
																	<span class="woocommerce-Price-amount amount">
																		<span class="woocommerce-Price-currencySymbol">$</span>520.00
																	</span>
																</ins>
															</span>
														</div>
														
														<div class="desc std">
															<p>Fusce porttitor at ante eu egestas. Morbi vulputate diam at nibh imperdiet pretium. Nulla euismod, nibh nec tincidunt maximus, elit sem ornare nunc, et dictum elit dui sed justo. Donec scelerisque, erat vel pharetra luctus, nibh tortor efficitur nibh, non euismod leo diam ut risus.</p>
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
										
										<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
											<div class="products-entry clearfix">
												<div class="products-thumb">
													<a href="home_style_1_shop_product_default.html" class="woocommerce-LoopProduct-link">
														<span class="onsale">Sale!</span>
													</a>
													
													<a href="home_style_1_shop_product_default.html">
														<div class="product-thumb-hover">
															<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
																	src="images/26-300x300.jpg" 
																	srcset="images/26-300x300.jpg 300w, images/26-260x260.jpg 260w, images/26.jpg 600w, images/26-180x180.jpg 180w" 
																	sizes="(max-width: 300px) 100vw, 300px" />
														</div>
													</a>
													
													<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="fancybox fancybox.ajax sm_quickview_handler-list" title="Quick View Product">Quick View</a>		
												</div>
												
												<div class="products-content">
													<div class="item-content">
														<h4>
															<a href="home_style_1_shop_product_default.html" title="Pisan maze ikan kazen"> Pisan maze ikan kazen </a>
														</h4>
														
														<div class="reviews-content">
															<div class="star"></div>
														</div>
														
														<div class="item-price">
															<span>
																<del>
																	<span class="woocommerce-Price-amount amount">
																		<span class="woocommerce-Price-currencySymbol">$</span>5.50
																	</span>
																</del> 
																
																<ins>
																	<span class="woocommerce-Price-amount amount">
																		<span class="woocommerce-Price-currencySymbol">$</span>5.00
																	</span>
																</ins>
															</span>
														</div>
														
														<div class="desc std">
															<p>Fusce porttitor at ante eu egestas. Morbi vulputate diam at nibh imperdiet pretium. Nulla euismod, nibh nec tincidunt maximus, elit sem ornare nunc, et dictum elit dui sed justo. Donec scelerisque, erat vel pharetra luctus, nibh tortor efficitur nibh, non euismod leo diam ut risus.</p>
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
										
										<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
											<div class="products-entry clearfix">
												<div class="products-thumb">
													<a href="home_style_1_shop_product_default.html">
														<div class="product-thumb-hover">
															<img 	width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
																	src="images/8-300x300.jpg" 
																	srcset="images/8-300x300.jpg 300w, images/8-260x260.jpg 260w, images/8.jpg 600w, images/8-180x180.jpg 180w" 
																	sizes="(max-width: 300px) 100vw, 300px" />
														</div>
													</a>
													
													<a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="fancybox fancybox.ajax sm_quickview_handler-list" title="Quick View Product">Quick View</a>		
												</div>
												
												<div class="products-content">
													<div class="item-content">
														<h4>
															<a href="home_style_1_shop_product_default.html" title="Tausage porchetta"> Tausage porchetta </a>
														</h4>
														
														<div class="reviews-content">
															<div class="star"></div>
														</div>
														
														<div class="item-price">
															<span>
																<span class="woocommerce-Price-amount amount">
																	<span class="woocommerce-Price-currencySymbol">$</span>46.00
																</span>
															</span>
														</div>
														
														<div class="desc std">
															<p>Spare ribs esse aliquip minim in pork ut magna do pork loin qui. Kevin venison aliqua chuck meatloaf pork anim aute incididunt tenderloin. Alcatra sausage fugiat magna strip steak, sint proident ullamco. Pork pork belly in cillum. Frankfurter shank tri-tip mollit irure spare ribs consectetur cupidatat sint pastrami. Picanha nostrud fatback in, adipisicing swine minim cillum bacon consectetur. Sunt prosciutto aliqua frankfurter shoulder.</p>
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
								</div>
							</div>
						</div>
					</div>
				
	
  

@endsection