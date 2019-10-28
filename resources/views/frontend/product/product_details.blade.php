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



<script type="text/javascript" src="{{asset('frontend/js/woocommerce/single-product.js')}}"></script>
<script type='text/javascript'>
  /* <![CDATA[ */
  var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes"};
  /* ]]> */
  </script>

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

      

	});
</script>
<!-- CUSTOM JS -->
	<script type="text/javascript">
		(function($){$('.view-list').on('click',function(){$('.view-grid').removeClass('sel');$('.view-list').addClass('sel');jQuery("ul.products-loop").fadeOut(300,function(){jQuery(this).addClass("list").fadeIn(300).removeClass('grid')})});$('.view-grid').on('click',function(){$('.view-list').removeClass('sel');$('.view-grid').addClass('sel');$("ul.products-loop").fadeOut(300,function(){$(this).removeClass("list").fadeIn(300).addClass('grid')})});jQuery('.phone-icon-search').on('click',function(){jQuery('.sm-serachbox-pro').toggle("slide")});var sticky_navigation_offset=$(".yt-header-middle").offset();var sticky_navigation_offset_top=sticky_navigation_offset.top;var sticky_navigation=function(){var scroll_top=$(window).scrollTop();if(scroll_top>sticky_navigation_offset_top){$(".yt-header-middle").addClass("sticky-menu");$(".yt-header-middle").css({"position":"fixed","top":0,"left":0,"right":0,"z-index":800})}else{$(".yt-header-middle").removeClass("sticky-menu");$(".yt-header-middle").css({"position":"relative","z-index":30})}};sticky_navigation();$(window).scroll(function(){sticky_navigation()});$(document).ready(function(){$(".show-dropdown").each(function(){$(this).on("click",function(){$(this).toggleClass("show");$(this).parent().find("> ul").toggle(300)})})})}(jQuery))
	</script>

@endsection
@section('pagecontent')
    <div id="contents-detail" class="content col-lg-12 col-md-12 col-sm-12 col-xs-12" role="main">
            <div id="container">
              <div id="content" role="main">
                <div class="single-product clearfix">
                  <div itemscope="" id="product-01" class="product">
                    <div class="single-product-top row">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div id="product_img_01" class="product-images" data-rtl="false" data-vertical="true">
                          <div class="product-images-container clearfix thumbnail-left">
                            <div class="slider product-responsive-thumbnail" id="product_thumbnail_01">
                              <div class="item-thumbnail-product">
                                <div class="thumbnail-wrapper">
                                  <img  width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" 
                                      src="images/17-180x180.jpg" 
                                      srcset="images/17-180x180.jpg 180w, images/17-260x260.jpg 260w, images/17.jpg 600w, images/17-300x300.jpg 300w" 
                                      sizes="(max-width: 180px) 100vw, 180px" />  
                                </div>
                              </div>
                              
                              <div class="item-thumbnail-product">
                                <div class="thumbnail-wrapper">
                                  <img  width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" 
                                      src="images/13_1-180x180.jpg" 
                                      srcset="images/13_1-180x180.jpg 180w, images/13_1-260x260.jpg 260w, images/13_1.jpg 600w, images/13_1-300x300.jpg 300w" 
                                      sizes="(max-width: 180px) 100vw, 180px" />
                                </div>
                              </div>
                              
                              <div class="item-thumbnail-product">
                                <div class="thumbnail-wrapper">
                                  <img  width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" 
                                      src="images/15_3-180x180.jpg" 
                                      srcset="images/15_3-180x180.jpg 180w, images/15_3-260x260.jpg 260w, images/15_3.jpg 600w, images/15_3-300x300.jpg 300w" 
                                      sizes="(max-width: 180px) 100vw, 180px" />
                                </div>
                              </div>
                              
                              <div class="item-thumbnail-product">
                                <div class="thumbnail-wrapper">
                                  <img  width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" 
                                      src="images/12-180x180.jpg" 
                                      srcset="images/12-180x180.jpg 180w, images/12-260x260.jpg 260w, images/12.jpg 600w, images/12-300x300.jpg 300w" 
                                      sizes="(max-width: 180px) 100vw, 180px" />
                                </div>
                              </div>
                              
                              <div class="item-thumbnail-product">
                                <div class="thumbnail-wrapper">
                                  <img  width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" 
                                      src="images/11-180x180.jpg" 
                                      srcset="images/11-180x180.jpg 180w, images/11-260x260.jpg 260w, images/11.jpg 600w, images/11-300x300.jpg 300w" 
                                      sizes="(max-width: 180px) 100vw, 180px" />
                                </div>
                              </div>
                              
                              <div class="item-thumbnail-product">
                                <div class="thumbnail-wrapper">
                                  <img  width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" 
                                      src="images/17-180x180.jpg" 
                                      srcset="images/17-180x180.jpg 180w, images/17-260x260.jpg 260w, images/17.jpg 600w, images/17-300x300.jpg 300w" 
                                      sizes="(max-width: 180px) 100vw, 180px" />
                                </div>
                              </div>
                            </div>
                            
                            <!-- Image Slider -->
                            <div class="slider product-responsive">
                              <div class="item-img-slider">
                                 <div class="images">
                                  <span class="onsale">Sale!</span>
                                  <a href="images/17.jpg" rel="prettyPhoto[product-gallery]" class="zoom">
                                    <img  width="600" height="600" class="attachment-shop_single size-shop_single" alt="" 
                                        src="images/17.jpg" 
                                        srcset="images/17.jpg 600w, images/17-260x260.jpg 260w, images/17-180x180.jpg 180w, images/17-300x300.jpg 300w" 
                                        sizes="(max-width: 600px) 100vw, 600px"/>
                                  </a>
                                 </div>
                              </div>
                            
                              <div class="item-img-slider">
                                <div class="images">
                                  <span class="onsale">Sale!</span>
                                  <a href="images/13_1.jpg" rel="prettyPhoto[product-gallery]" class="zoom">
                                    <img  width="600" height="600" class="attachment-shop_single size-shop_single" alt="" 
                                        src="images/13_1.jpg" 
                                        srcset="images/13_1.jpg 600w, images/13_1-260x260.jpg 260w, images/13_1-180x180.jpg 180w, images/13_1-300x300.jpg 300w" 
                                        sizes="(max-width: 600px) 100vw, 600px" />
                                  </a>
                                </div>
                              </div>
                            
                              <div class="item-img-slider">
                                <div class="images">
                                  <span class="onsale">Sale!</span>
                                  <a href="images/15_3.jpg" rel="prettyPhoto[product-gallery]" class="zoom">
                                    <img  width="600" height="600" class="attachment-shop_single size-shop_single" alt="" 
                                        src="images/15_3.jpg" 
                                        srcset="images/15_3.jpg 600w, images/15_3-260x260.jpg 260w, images/15_3-180x180.jpg 180w, images/15_3-300x300.jpg 300w" 
                                        sizes="(max-width: 600px) 100vw, 600px" />
                                  </a>
                                </div>
                              </div>
                            
                              <div class="item-img-slider">
                                <div class="images">
                                  <span class="onsale">Sale!</span>
                                  <a href="images/12.jpg" rel="prettyPhoto[product-gallery]" class="zoom">
                                    <img  width="600" height="600" class="attachment-shop_single size-shop_single" alt="" 
                                        src="images/12.jpg" 
                                        srcset="images/12.jpg 600w, images/12-260x260.jpg 260w, images/12-180x180.jpg 180w, images/12-300x300.jpg 300w" 
                                        sizes="(max-width: 600px) 100vw, 600px" />
                                  </a>
                                </div>
                              </div>
                            
                              <div class="item-img-slider">
                                 <div class="images">
                                  <span class="onsale">Sale!</span>
                                  <a href="images/11.jpg" rel="prettyPhoto[product-gallery]" class="zoom">
                                    <img  width="600" height="600" class="attachment-shop_single size-shop_single" alt="" 
                                        src="images/11.jpg" 
                                        srcset="images/11.jpg 600w, images/11-260x260.jpg 260w, images/11-180x180.jpg 180w, images/11-300x300.jpg 300w" 
                                        sizes="(max-width: 600px) 100vw, 600px" />
                                  </a>
                                 </div>
                              </div>
                            
                              <div class="item-img-slider">
                                <div class="images">
                                  <span class="onsale">Sale!</span>
                                  <a href="images/17.jpg" rel="prettyPhoto[product-gallery]" class="zoom">
                                    <img  width="600" height="600" class="attachment-shop_single size-shop_single" alt="" 
                                        src="images/17.jpg" 
                                        srcset="images/17.jpg 600w, images/17-260x260.jpg 260w, images/17-180x180.jpg 180w, images/17-300x300.jpg 300w" 
                                        sizes="(max-width: 600px) 100vw, 600px" />
                                  </a>
                                </div>
                              </div>
                            </div>
                            <!-- Thumbnail Slider -->
                          </div>
                        </div>
                      </div>
                    
                      <div class="product-summary col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h1 class="product_title">Morbi vulputate diam</h1>
                        
                        <div class="reviews-content">
                          <div class="star"></div>
                          <a href="#reviews" class="woocommerce-review-link" rel="nofollow">
                            <span class="count">0</span> Review(s)
                          </a>
                        </div>
                        
                        <div class="product-stock in-stock">
                          Availability: 
                          <span>In stock</span>
                        </div>
                        
                        <div class="product_meta"></div>
                        
                        <div class="product-description">
                          <h2 class="quick-overview">QUICK OVERVIEW</h2>
                          <p>Fusce porttitor at ante eu egestas. Morbi vulputate diam at nibh imperdiet pretium. Nulla euismod, nibh nec tincidunt maximus, elit sem ornare nunc, et dictum elit dui sed justo. Donec scelerisque, erat vel pharetra luctus, nibh tortor efficitur nibh, non euismod leo diam ut risus.</p>
                        </div>
                        
                        <div>
                          <p class="price">
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
                          </p>
                        </div>
                        
                        <div class="product-summary-bottom clearfix">
                          <form class="cart" method="post" enctype="multipart/form-data">
                            <div class="quantity">
                              <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric" />
                            </div>
                            
                            <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
                            
                            <div class="woocommerce product compare-button">
                              <a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
                            </div>
                            
                            <div class="yith-wcwl-add-to-wishlist">
                              <div class="yith-wcwl-add-button show" style="display:block">
                                <a rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
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
                            
                            <div class="social-icon">
                              <div class="social-icon-button"></div>

                              <div class="social-share">
                                <div class="social-share-fb social-share-item">
                                  <div id="fb-root"></div>
                                  <script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
                                  <div class="fb-like" data-href="" data-send="true" data-layout="button_count" data-width="200" data-show-faces="false"></div>
                                </div>
                  
                                <!--Facebook Button-->
                                <div class="social-share-twitter social-share-item">
                                  <a href="https://twitter.com/share" class="twitter-share-button" data-url="" data-text="Umas tika lorem narem" data-count="horizontal">Tweet</a>
                                  <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script> 
                                </div>

                                <!--Twitter Button-->
                                <div class="social-share-linkedin social-share-item">
                                  <script src="http://platform.linkedin.com/in.js" type="text/javascript"></script> 
                                  <script type="IN/Share" data-url="" data-counter="right"></script> 
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      
                        <div class="product_meta">
                          <p class="posted_in">
                            <b>Category:</b> 
                            <a href="" rel="tag">Apparel & Accessories</a>, 
                            <a href="" rel="tag">Car Accessories</a>, 
                            <a href="" rel="tag">Computer</a>, 
                            <a href="" rel="tag">Computers & Networking</a>, 
                            <a href="" rel="tag">Consumer Electronics</a>, 
                            <a href="" rel="tag">Intimate Apparel</a>, 
                            <a href="" rel="tag">Jewelry & Watches</a>, 
                            <a href="" rel="tag">Jiteme</a>, 
                            <a href="" rel="tag">Jiteme catem</a>, 
                            <a href="" rel="tag">Jiteme catem</a>, 
                            <a href="" rel="tag">Mauris</a>, 
                            <a href="" rel="tag">MenSell</a>, 
                            <a href="" rel="tag">Purses</a>, 
                            <a href="" rel="tag">Smartphones & Tablets</a>,
                            <a href="" rel="tag">Smartphones Accessories</a>, 
                            <a href="" rel="tag">Sports & Outdoors</a>,
                            <a href="" rel="tag">Vesture</a>, 
                            <a href="" rel="tag">Watches</a>,
                            <a href="" rel="tag">Women</a>. 
                          </p>
                        </div>
                      </div>
                      <!--- summary-bottom --->
                    </div>
                
                    <!-- .summary -->
                    <div class="row">
                      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 tab-col-3">
                        <div id="relate-01" class="carousel slide sw-related-product" data-ride="carousel" data-interval="0">
                          <div class="block-title title1">
                            <h2>
                              <span>Related Products</span>
                            </h2>
                            
                            <div class="customNavigation nav-left-product">
                              <a title="Previous" class="btn-bs prev-bs fa fa-angle-left" href="#relate-01" role="button" data-slide="prev"></a>
                              <a title="Next" class="btn-bs next-bs fa fa-angle-right" href="#relate-01" role="button" data-slide="next"></a>
                            </div>
                          </div>
                          
                          <div class="carousel-inner">
                            <div class="item active">
                              <div class="bs-item cf">
                                <div class="bs-item-inner">
                                  <div class="item-img">
                                    <a href="" title="Tausage porchetta">
                                      <img  width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" 
                                          src="images/8-180x180.jpg" 
                                          srcset="images/8-180x180.jpg 180w, images/8-260x260.jpg 260w, images/8.jpg 600w, images/8-300x300.jpg 300w" 
                                          sizes="(max-width: 180px) 100vw, 180px" />
                                    </a>
                                  </div>
                                  
                                  <div class="item-content">
                                    <div class="star"></div>
                                    
                                    <h4>
                                      <a href="" title="Tausage porchetta">Tausage porchetta</a>
                                    </h4>
                                    
                                    <p>
                                      <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>46.00
                                      </span>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            
                              <div class="bs-item cf">
                                <div class="bs-item-inner">
                                  <div class="item-img">
                                    <a href="" title="Prosciutto sedesse">
                                      <img  width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" 
                                          src="images/12-180x180.jpg" 
                                          srcset="images/12-180x180.jpg 180w, images/12-260x260.jpg 260w, images/12.jpg 600w, images/12-300x300.jpg 300w" 
                                          sizes="(max-width: 180px) 100vw, 180px" />
                                    </a>
                                  </div>
                                  
                                  <div class="item-content">
                                    <div class="star"></div>
                                    
                                    <h4>
                                      <a href="" title="Prosciutto sedesse">Prosciutto sedesse</a>
                                    </h4>
                                    
                                    <p>
                                      <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>102.00
                                      </span>
                                    </p>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="bs-item cf">
                                <div class="bs-item-inner">
                                  <div class="item-img">
                                    <a href="" title="Cupidatat quis">
                                      <img  width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" 
                                          src="images/J9-180x180.jpg" 
                                          srcset="images/J9-180x180.jpg 180w, images/J9-260x260.jpg 260w, images/J9.jpg 600w, images/J9-300x300.jpg 300w" 
                                          sizes="(max-width: 180px) 100vw, 180px" />
                                    </a>
                                  </div>
                                  
                                  <div class="item-content">
                                    <div class="star"></div>
                                    
                                    <h4>
                                      <a href="" title="Cupidatat quis">Cupidatat quis</a>
                                    </h4>
                                    
                                    <p>
                                      <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>430.00
                                      </span>
                                    </p>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="bs-item cf">
                                <div class="bs-item-inner">
                                  <div class="item-img">
                                    <a href="" title="Sed anim sala">
                                      <img  width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" 
                                          src="images/J10-180x180.jpg" 
                                          srcset="images/J10-180x180.jpg 180w, images/J10-260x260.jpg 260w, images/J10.jpg 600w, images/J10-300x300.jpg 300w" 
                                          sizes="(max-width: 180px) 100vw, 180px" />
                                    </a>
                                  </div>
                                  
                                  <div class="item-content">
                                    <div class="star"></div>
                                    
                                    <h4>
                                      <a href="" title="Sed anim sala">Sed anim sala</a>
                                    </h4>
                                    
                                    <p>
                                      <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>87.00
                                      </span>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <div class="item">
                              <div class="bs-item cf">
                                <div class="bs-item-inner">
                                  <div class="item-img">
                                    <a href="" title="Fatback chuck">
                                      <img  width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" 
                                          src="images/B8-180x180.jpg" 
                                          srcset="images/B8-180x180.jpg 180w, images/B8-260x260.jpg 260w, images/B8.jpg 600w, images/B8-300x300.jpg 300w" 
                                          sizes="(max-width: 180px) 100vw, 180px" />
                                    </a>
                                  </div>
                                  
                                  <div class="item-content">
                                    <div class="star"></div>
                                    
                                    <h4>
                                      <a href="" title="Fatback chuck">Fatback chuck</a>
                                    </h4>
                                    
                                    <p>
                                      <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>65.00
                                      </span>
                                    </p>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="bs-item cf">
                                <div class="bs-item-inner">
                                  <div class="item-img">
                                    <a href="" title="Exercitation aute">
                                      <img  width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" 
                                          src="images/B11-180x180.jpg" 
                                          srcset="images/B11-180x180.jpg 180w, images/B11-260x260.jpg 260w, images/B11.jpg 600w, images/B11-300x300.jpg 300w" 
                                          sizes="(max-width: 180px) 100vw, 180px" />
                                    </a>
                                  </div>
                                  
                                  <div class="item-content">
                                    <div class="star"></div>
                                    
                                    <h4>
                                      <a href="" title="Exercitation aute">Exercitation aute</a>
                                    </h4>
                                    
                                    <p>
                                      <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>67.00
                                      </span>
                                    </p>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="bs-item cf">
                                <div class="bs-item-inner">
                                  <div class="item-img">
                                    <a href="" title="Jowl ullamco">
                                      <img  width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" 
                                          src="images/9-180x180.jpg" 
                                          srcset="images/9-180x180.jpg 180w, images/9-260x260.jpg 260w, images/9.jpg 600w, images/9-300x300.jpg 300w" 
                                          sizes="(max-width: 180px) 100vw, 180px" />
                                    </a>
                                  </div>
                                  
                                  <div class="item-content">
                                    <div class="star">
                                      <span style="width: 56px"></span>
                                    </div>
                                    
                                    <h4>
                                      <a href="" title="Jowl ullamco">Jowl ullamco</a>
                                    </h4>
                                    
                                    <p>
                                      <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>77.00
                                      </span>
                                    </p>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="bs-item cf">
                                <div class="bs-item-inner">
                                  <div class="item-img">
                                    <a href="" title="Ires mite rima haze dim">
                                      <img  width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" 
                                          src="images/18_1-180x180.jpg" 
                                          srcset="images/18_1-180x180.jpg 180w, images/18_1-260x260.jpg 260w, images/18_1.jpg 600w, images/18_1-300x300.jpg 300w" 
                                          sizes="(max-width: 180px) 100vw, 180px" />
                                    </a>
                                  </div>
                                  
                                  <div class="item-content">
                                    <div class="star"></div>
                                    
                                    <h4>
                                      <a href="" title="Ires mite rima haze dim">Ires mite rima haze dim</a>
                                    </h4>
                                   
                                    <p>
                                      <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>165.00
                                      </span>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 tab-col-9 description">
                        <div class="woocommerce-tabs wc-tabs-wrapper">
                          <ul class="tabs wc-tabs">
                            <li class="description_tab active">
                              <a href="#tab-description">Description</a>
                            </li>
                            
                            <li class="reviews_tab">
                              <a href="#tab-reviews">Reviews (0)</a>
                            </li>
                          </ul>
                          
                          <div class="panel entry-content wc-tab" id="tab-description" style="display: block;">
                            <p>Lorem ipsum dolor sit amet, an munere tibique consequat mel, congue albucius no qui, at everti meliore erroribus sea. Vero graeco cotidieque ea duo, in eirmod insolens interpretaris nam. Pro at nostrud percipit definitiones, eu tale porro cum. Sea ne accusata voluptatibus. Ne cum falli dolor voluptua, duo ei sonet choro facilisis, labores officiis torquatos cum ei.</p>
                            <p>Cum altera mandamus in, mea verear disputationi et. Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique. Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque. Est cu nibh clita. Sed an nominavi maiestatis, et duo corrumpit constituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
                            <p>Eos cu utroque inermis invenire, eu pri alterum antiopam. Nisl erroribus definitiones nec an, ne mutat scripserit est. Eros veri ad pri. An soleat maluisset per. Has eu idque similique, et blandit scriptorem necessitatibus mea. Vis quaeque ocurreret ea.</p>
                          </div>
                          
                          <div class="panel entry-content wc-tab" id="tab-reviews" style="display: none;">
                            <div id="reviews">
                              <div id="comments">
                                <h2>Reviews</h2>
                                <p class="woocommerce-noreviews">There are no reviews yet.</p>
                              </div>
                              
                              <div id="review_form_wrapper">
                                <div id="review_form">
                                  <div id="respond" class="comment-respond">
                                    <h3 id="reply-title" class="comment-reply-title">Be the first to review “Morbi vulputate diam” 
                                      <small>
                                        <a rel="nofollow" id="cancel-comment-reply-link" href="" style="display:none;">Cancel reply</a>
                                      </small>
                                    </h3>
                                    
                                    <form action="" method="post" id="commentform" class="comment-form">
                                      <p class="comment-form-rating">
                                        <label for="rating">Your Rating</label>
                                        
                                        <select name="rating" id="rating" style="display: none;">
                                          <option value="">Rate…</option>
                                          <option value="5">Perfect</option>
                                          <option value="4">Good</option>
                                          <option value="3">Average</option>
                                          <option value="2">Not that bad</option>
                                          <option value="1">Very Poor</option>
                                        </select>
                                      </p>
                                      
                                      <p class="comment-form-comment">
                                        <label for="comment">Your Review</label>
                                        <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                      </p>
                                      
                                      <p class="comment-form-author">
                                        <label for="author">Name <span class="required">*</span></label> 
                                        <input id="author" name="author" type="text" value="" size="30" aria-required="true" />
                                      </p>
                                      
                                      <p class="comment-form-email">
                                        <label for="email">Email <span class="required">*</span></label> 
                                        <input id="email" name="email" type="text" value="" size="30" aria-required="true" />
                                      </p>
                                      
                                      <p class="form-submit">
                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit" />
                                      </p>
                                    </form>
                                  </div>
                                  <!-- #respond -->
                                </div>
                              </div>
                              <div class="clear"></div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="widget-1 widget-first widget sw_related_upsell_widget-2 sw_related_upsell_widget" data-scroll-reveal="enter bottom move 20px wait 0.2s">
                          <div class="widget-inner">
                            <div id="sw_related_upsell_widget-2" class="sw-woo-container-slider upsells-products responsive-slider clearfix" data-lg="4" data-md="2" data-sm="2" data-xs="1" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false">
                              <div class="resp-slider-container">
                                <div class="block-title">
                                  <strong>
                                    <span>UP-SELL PRODUCTS</span>
                                  </strong>
                                  <div class="sn-img icon-bacsic2"></div>
                                </div>
                                
                                <div class="slider responsive">
                                  <div class="item">
                                    <div class="item-wrap">
                                      <div class="item-detail">
                                        <div class="item-img products-thumb">
                                          <!-- quickview & thumbnail  -->               
                                          <span class="onsale">Sale!</span>
                                          
                                          <a href="">
                                            <div class="product-thumb-hover">
                                              <img  width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
                                                  src="images/1_2-300x300.jpg" 
                                                  srcset="images/1_2-300x300.jpg 300w, images/1_2-260x260.jpg 260w, images/1_2.jpg 600w, images/1_2-180x180.jpg 180w" 
                                                  sizes="(max-width: 300px) 100vw, 300px" />
                                            </div>
                                          </a>
                                            
                                          <a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                        </div>
                                        
                                        <div class="item-content">
                                          <!-- rating  -->
                                          <div class="reviews-content">
                                            <div class="star">
                                              <span style="width:55px"></span>
                                            </div>
                                          </div>
                                          <!-- end rating  -->
                                          
                                          <h4>
                                            <a href="" title="Kaze dama pisa patem">Kaze dama pisa patem</a>
                                          </h4>
                                          
                                          <div class="item-price">
                                            <span>
                                              <del>
                                                <span class="woocommerce-Price-amount amount">
                                                  <span class="woocommerce-Price-currencySymbol">$</span>550.00
                                                </span>
                                              </del> 
                                              
                                              <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                  <span class="woocommerce-Price-currencySymbol">$</span>450.00
                                                </span>
                                              </ins>
                                            </span>
                                          </div>
                                      
                                          <!-- add to cart, wishlist, compare -->
                                          <div class="add-info">
                                            <div class="yith-wcwl-add-to-wishlist">
                                              <div class="yith-wcwl-add-button show" style="display:block">
                                                <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                                <img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                              </div>
                                              
                                              <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                <span class="feedback">Product added!</span>
                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                              </div>
                                              
                                              <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                <span class="feedback">The product is already in the wishlist!</span>
                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                              </div>
                                              
                                              <div style="clear:both"></div>
                                              <div class="yith-wcwl-wishlistaddresponse"></div>
                                            </div>
                                            
                                            <div class="clear"></div>
                                            
                                            <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                            
                                            <div class="woocommerce product compare-button">
                                              <a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="item">
                                    <div class="item-wrap">
                                      <div class="item-detail">
                                        <div class="item-img products-thumb">
                                          <!-- quickview & thumbnail  -->               
                                          <span class="onsale">Sale!</span>
                                          <a href="">
                                            <div class="product-thumb-hover">
                                              <img  width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
                                                  src="images/30_1-300x300.jpg" 
                                                  srcset="images/30_1-300x300.jpg 300w, images/30_1-260x260.jpg 260w, images/30_1.jpg 600w, images/30_1-180x180.jpg 180w" 
                                                  sizes="(max-width: 300px) 100vw, 300px" />
                                            </div>
                                          </a>
                                          
                                          <a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                        </div>
                                        
                                        <div class="item-content">
                                          <!-- rating  -->
                                          <div class="reviews-content">
                                            <div class="star"></div>
                                          </div>
                                          <!-- end rating  -->
                                          
                                          <h4>
                                            <a href="" title="Umas tika lorem narem">Umas tika lorem narem</a>
                                          </h4>
                                         
                                          <div class="item-price">
                                            <span>
                                              <del>
                                                <span class="woocommerce-Price-amount amount">
                                                  <span class="woocommerce-Price-currencySymbol">$</span>545.00
                                                </span>
                                              </del> 
                                              
                                              <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                  <span class="woocommerce-Price-currencySymbol">$</span>345.00
                                                </span>
                                              </ins>
                                            </span>
                                          </div>
                                      
                                          <!-- add to cart, wishlist, compare -->
                                          <div class="add-info">
                                            <div class="yith-wcwl-add-to-wishlist">
                                              <div class="yith-wcwl-add-button show" style="display:block">
                                                <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                                <img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                              </div>
                                              
                                              <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                <span class="feedback">Product added!</span>
                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                              </div>
                                              
                                              <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                <span class="feedback">The product is already in the wishlist!</span>
                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                              </div>
                                              
                                              <div style="clear:both"></div>
                                              <div class="yith-wcwl-wishlistaddresponse"></div>
                                            </div>
                                            
                                            <div class="clear"></div>
                                            
                                            <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                            
                                            <div class="woocommerce product compare-button">
                                              <a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="item">
                                    <div class="item-wrap">
                                      <div class="item-detail">
                                        <div class="item-img products-thumb">
                                          <!-- quickview & thumbnail  -->               
                                          <span class="onsale">Sale!</span>
                                     
                                          <a href="">
                                            <div class="product-thumb-hover">
                                              <img  width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
                                                  src="images/26-300x300.jpg" 
                                                  srcset="images/26-300x300.jpg 300w, images/26-260x260.jpg 260w, images/26.jpg 600w, images/26-180x180.jpg 180w" 
                                                  sizes="(max-width: 300px) 100vw, 300px" />
                                            </div>
                                          </a>
                                          
                                          <a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>             
                                        </div>
                                        
                                        <div class="item-content">
                                          <!-- rating  -->
                                          <div class="reviews-content">
                                            <div class="star"></div>
                                          </div>
                                          <!-- end rating  -->
                                          
                                          <h4>
                                            <a href="" title="Pisan maze ikan kazen">Pisan maze ikan kazen</a>
                                          </h4>
                                    
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
                                          
                                          <!-- add to cart, wishlist, compare -->
                                          <div class="add-info">
                                            <div class="yith-wcwl-add-to-wishlist">
                                              <div class="yith-wcwl-add-button show" style="display:block">
                                                <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                                <img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                              </div>
                                              
                                              <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                <span class="feedback">Product added!</span>
                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                              </div>
                                              
                                              <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                <span class="feedback">The product is already in the wishlist!</span>
                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                              </div>
                                              
                                              <div style="clear:both"></div>
                                              <div class="yith-wcwl-wishlistaddresponse"></div>
                                            </div>
                                            
                                            <div class="clear"></div>
                                            
                                            <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                            
                                            <div class="woocommerce product compare-button">
                                              <a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="item">
                                    <div class="item-wrap">
                                      <div class="item-detail">
                                        <div class="item-img products-thumb">
                                          <!-- quickview & thumbnail  -->               
                                          <span class="onsale">Sale!</span>
                                     
                                          <a href="">
                                            <div class="product-thumb-hover">
                                              <img  width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
                                                  src="images/21-300x300.jpg" 
                                                  srcset="images/21-300x300.jpg 300w, images/21-260x260.jpg 260w, images/21-180x180.jpg 180w, images/21.jpg 470w" 
                                                  sizes="(max-width: 300px) 100vw, 300px" />
                                            </div>
                                          </a>
                                          
                                          <a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>           
                                        </div>
                                        
                                        <div class="item-content">
                                          <!-- rating  -->
                                          <div class="reviews-content">
                                            <div class="star"></div>
                                          </div>
                                          <!-- end rating  -->
                                          
                                          <h4>
                                            <a href="" title="Kore mire dase mazen">Kore mire dase mazen</a>
                                          </h4>
                                          
                                          <div class="item-price">
                                            <span>
                                              <del>
                                                <span class="woocommerce-Price-amount amount">
                                                  <span class="woocommerce-Price-currencySymbol">$</span>3.50
                                                </span>
                                              </del> 
                                              
                                              <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                  <span class="woocommerce-Price-currencySymbol">$</span>2.99
                                                </span>
                                              </ins>
                                            </span>
                                          </div>
                                          
                                          <!-- add to cart, wishlist, compare -->
                                          <div class="add-info">
                                            <div class="yith-wcwl-add-to-wishlist">
                                              <div class="yith-wcwl-add-button show" style="display:block">
                                                <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                                <img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                              </div>
                                              
                                              <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                <span class="feedback">Product added!</span>
                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                              </div>
                                              
                                              <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                <span class="feedback">The product is already in the wishlist!</span>
                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                              </div>
                                              
                                              <div style="clear:both"></div>
                                              <div class="yith-wcwl-wishlistaddresponse"></div>
                                            </div>
                                            
                                            <div class="clear"></div>
                                            
                                            <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                            
                                            <div class="woocommerce product compare-button">
                                              <a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="item">
                                    <div class="item-wrap">
                                      <div class="item-detail">
                                        <div class="item-img products-thumb">
                                          <!-- quickview & thumbnail  -->               
                                          <a href="">
                                            <div class="product-thumb-hover">
                                              <img  width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
                                                  src="images/23_1-300x300.jpg" 
                                                  srcset="images/23_1-300x300.jpg 300w, images/23_1-260x260.jpg 260w, images/23_1.jpg 600w, images/23_1-180x180.jpg 180w" 
                                                  sizes="(max-width: 300px) 100vw, 300px" />
                                            </div>
                                          </a>
                                          
                                          <a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>             
                                        </div>
                                        
                                        <div class="item-content">
                                          <!-- rating  -->
                                          <div class="reviews-content">
                                            <div class="star"></div>
                                          </div>
                                          <!-- end rating  -->
                                          
                                          <h4>
                                            <a href="" title="Wiru mise kaztem">Wiru mise kaztem</a>
                                          </h4>
                                          
                                          <div class="item-price">
                                            <span>
                                              <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>1.99
                                              </span>
                                            </span>
                                          </div>
                                          
                                          <!-- add to cart, wishlist, compare -->
                                          <div class="add-info">
                                            <div class="yith-wcwl-add-to-wishlist">
                                              <div class="yith-wcwl-add-button show" style="display:block">
                                                <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                                <img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                              </div>
                                              
                                              <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                <span class="feedback">Product added!</span>
                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                              </div>
                                              
                                              <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                <span class="feedback">The product is already in the wishlist!</span>
                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                              </div>
                                              
                                              <div style="clear:both"></div>
                                              <div class="yith-wcwl-wishlistaddresponse"></div>
                                            </div>
                                            
                                            <div class="clear"></div>
                                            
                                            <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                            
                                            <div class="woocommerce product compare-button">
                                              <a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="item">
                                    <div class="item-wrap">
                                      <div class="item-detail">
                                        <div class="item-img products-thumb">
                                          <!-- quickview & thumbnail  -->               
                                          <a href="">
                                            <div class="product-thumb-hover">
                                              <img  width="300" height="300" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" 
                                                  src="images/6_5-300x300.jpg" 
                                                  srcset="images/6_5-300x300.jpg 300w, images/6_5-260x260.jpg 260w, images/6_5.jpg 600w, images/6_5-180x180.jpg 180w" 
                                                  sizes="(max-width: 300px) 100vw, 300px" />
                                            </div>
                                          </a>
                                          
                                          <a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>         
                                        </div>
                                        
                                        <div class="item-content">
                                          <!-- rating  -->
                                          <div class="reviews-content">
                                            <div class="star">
                                              <span style="width:55px"></span>
                                            </div>
                                          </div>
                                          <!-- end rating  -->
                                          
                                          <h4>
                                            <a href="" title="Rika mire pisan">Rika mire pisan</a>
                                          </h4>
                                         
                                          <div class="item-price">
                                            <span>
                                              <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>0.99
                                              </span>
                                            </span>
                                          </div>
                                          
                                          <!-- add to cart, wishlist, compare -->
                                          <div class="add-info">
                                            <div class="yith-wcwl-add-to-wishlist">
                                              <div class="yith-wcwl-add-button show" style="display:block">
                                                <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                                <img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                              </div>
                                              
                                              <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                <span class="feedback">Product added!</span>
                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                              </div>
                                              
                                              <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                <span class="feedback">The product is already in the wishlist!</span>
                                                <a href="#" rel="nofollow">Browse Wishlist</a>
                                              </div>
                                              
                                              <div style="clear:both"></div>
                                              <div class="yith-wcwl-wishlistaddresponse"></div>
                                            </div>
                                            
                                            <div class="clear"></div>
                                            
                                            <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                            
                                            <div class="woocommerce product compare-button">
                                              <a href="javascript:void(0)" class="compare button" rel="nofollow">Compare</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>





@endsection
