<!DOCTYPE html>
<html lang="en">
<head>	
	<title>Shoppersmaaza |@yield('title')</title>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="msapplication-TileImage" content="icons/cropped-favicon-270x270.png" />
	
	<!-- FAVICONS -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="icons/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="icons/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="icons/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="icons/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="icons/favicon.png" />
	
	<!-- GOOGLE WEB FONTS -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:100,400,500,700,900&ver=1.0.0" type="text/css" media="all" />
	
	<!-- BOOTSTRAP 3.3.7 CSS -->
	<link rel="stylesheet" href="{{asset('frontend/css/theme/bootstrap.min.css')}}" />
	<!--  -->
	
	<!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
	
	<!-- OPEN LIBS CSS -->
	<link rel="stylesheet" href="{{asset('frontend/css/theme/font-awesome.min.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/owl-carousel/owl.carousel.min.css')}}" />
	
	<link rel="stylesheet" href="{{asset('frontend/css/js_composer/js_composer.min.css')}}" />
	
	<!-- YT CSS -->
	<link rel="stylesheet" href="{{asset('frontend/css/colorbox/colorbox.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/bbpress/bbpress.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/sw_core/jquery.fancybox.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/sw_woocommerce/slider.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/woocommerce/woocommerce-layout.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/woocommerce/woocommerce-smallscreen.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/woocommerce/woocommerce.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/theme/wishtlist.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/theme/app-blue.min.css')}}" id="theme" /> 
	
	<link rel="stylesheet" href="{{asset('frontend/css/theme/app-responsive.min.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/theme/custom-blue.min.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/theme/home-style-1.min.css')}}" />

@yield('extra-css')
</head>

<body id="body_wrapper" class=" archive page-template page-template-page-nocomment page page-id-27 vc_responsive woocommerce woocommerce-page ">	
	<!-- Preloading Screen -->
	
	<!-- End Preloading Screen -->
	
	<div class="body-wrapper theme-clearfix">
		<!-- HEADER -->
	
				<!-- END HEADER MENU -->
				
				@include('frontend_layout.header_ca');
		<!-- END HEADER -->
		
		<!-- MAIN -->
		<div id="main" class="theme-clearfix" role="document">
			<div class="breadcrumbs theme-clearfix">
				<div class="container">
					<ul class="breadcrumb">
						<li>
							<a id="home" href="home_style_1.html">Home</a>
							<span class="go-page"></span>
						</li>
						
						<li class="active">
							<span style="text-transform: uppercase;">@yield('name')</span>
						</li>
					</ul>
				</div>
			</div>

			<div class="container">
				<div class="row">
					@yield('pagecontent');
				</div>
				
			</div>

			<div class="container">
				<div class="row">
					<div id="contents" role="main" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="page type-page status-publish hentry">
							<div class="entry-content">
								<div class="vc_row wpb_row vc_row-fluid about-v1 about-us-1">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner padding-right-15 padding-left-15">
											<div class="wpb_wrapper">
												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
													@yield('content');
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								
								
							</div>
							
							<script type="text/javascript">
								function submitform(){
									if(document.commentform.comment.value=='' || document.commentform.author.value=='' || document.commentform.email.value==''){
										alert('Please fill the required field.');
										return false;
									} else return true;
								}
							</script>						
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN -->
		
		<!-- FOOTER -->
		<div id="yt_footer" class="yt-footer wrap">
			<div class="yt-footer-wrap-style1">
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="footer1">
									<div class="footer-title">
										<h2>footer:style1</h2>
									</div>
							 
									
								</div>
							</div>
						</div>
					</div>
				</div>
			  
				@include('frontend_layout.footer');
			<!-- end : footer wrap-->
		</div>
		<!-- END FOOTER -->
	</div>
	<a id="ya-totop" href="#" style="display: none;"></a>
	
	<!-- THEME SETTINGS -->
	
	
	<!-- PLUGINS JS -->
	<script type="text/javascript" src="{{asset('frontend/js/jquery-3.1.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/jquery-migrate-1.4.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/modernizr-2.6.2.min.js')}}"></script>
	
	<!-- BOOTSTRAP 3.3.7 JS -->
	<script type="text/javascript" src="{{asset('frontend/js/bootstrap/bootstrap.min.js')}}"></script>
	
	<!-- OPEN LIBS JS -->
	<script type="text/javascript" src="{{asset('frontend/js/owl-carousel/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/js.cookie.min.js')}}"></script>
	
	<!-- PLUGINS JS-->
	<script type="text/javascript" src="{{asset('frontend/js/colorbox/jquery.colorbox-min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/sw_core/jquery.fancybox.pack.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/sw_woocommerce/category-ajax.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/sw_woocommerce/slick.min.js')}}"></script>
	
	<!-- THEME JS -->
	<script type="text/javascript" src="{{asset('frontend/js/main.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/megamenu.min.js')}}"></script>	
	<script type="text/javascript" src="{{asset('frontend/js/pathLoader.min.js')}}"></script>
	@yield('extra-js')
	<script type="text/javascript">
		(function($){jQuery('.phone-icon-search').on('click',function(){jQuery('.sm-serachbox-pro').toggle("slide")});var sticky_navigation_offset=$(".yt-header-middle").offset();var sticky_navigation_offset_top=sticky_navigation_offset.top;var sticky_navigation=function(){var scroll_top=$(window).scrollTop();if(scroll_top>sticky_navigation_offset_top){$(".yt-header-middle").addClass("sticky-menu");$(".yt-header-middle").css({"position":"fixed","top":0,"left":0,"right":0,"z-index":800})}else{$(".yt-header-middle").removeClass("sticky-menu");$(".yt-header-middle").css({"position":"relative","z-index":30})}};sticky_navigation();$(window).scroll(function(){sticky_navigation()});$(document).ready(function(){$(".show-dropdown").each(function(){$(this).on("click",function(){$(this).toggleClass("show");$(this).parent().find("> ul").toggle(300)})})})}(jQuery))
	</script>
</body>
</html>