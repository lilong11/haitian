<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">

	<title>{{$title or '商城' }}</title>
	<meta name="description" content="">


	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="./home_public/img/favicon.ico">
	
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
	<!-- css  -->
	<!-- Bootstrap CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/bootstrap.min.css">
	<!-- Icon Font CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/material-design-iconic-font.min.css">
	<!-- Mean Menu CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/meanmenu.min.css">
	<!-- Owl Carousel CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/owl.carousel.css">
	<!-- Nivo Slider CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/nivo-slider.css">
	<!-- Price Slider CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/jquery-ui.min.css">
	<!-- Magnific Popup CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/magnific-popup.css">
	<!-- Animate CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/animate.min.css">
	<!-- Style CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/style.css">
	<!-- Default Color CSS
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/color/color-one.css">
	<!-- Responsive CSS 
	============================================ -->
	<link rel="stylesheet" href="./home_public/css/responsive.css">
	<!-- Modernizer JS
	============================================ -->
	<script src="./home_public/js/vendor/modernizr-2.8.3.min.js"></script>

	    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
</head>
<body>
<!-- Pre Loader
============================================ -->
<div class="preloader">
	<div class="loading-center">
		<div class="loading-center-absolute">
			<div class="object object_one"></div>
			<div class="object object_two"></div>
			<div class="object object_three"></div>
		</div>
	</div>
</div>
<div class="as-mainwrapper">
<!-- Header
============================================ -->
<div class="header transparent fixed">
	<!-- 头部 导航开始 -->
    <div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-4 header-top-left">
					<!-- Header Language Currency -->
					<ul class="header-lan-cur float-left">
						<!-- Header Language -->
						<li><a href="/">首页</a></li>
						<li><a href="/hissues">问题</a></li>
						<li><a href="/hworks">文章</a></li>
						<li><a href="/home/opinion/create">意见</a></li>
						<li><a href="/home/mess/create">留言</a></li>
						<li><a href="/home/investor/create">我要加盟</a></li>
					</ul>
				</div>
				<div class="col-sm-6 col-xs-8 header-top-right">

					<!-- 登入显示开始 -->
					@if(empty(session('home')))
					<div class="header-account-login float-right">  
						<div class="header-login float-left text-center">
							<a href="#">登入 <i class="zmdi zmdi-chevron-down"></i></a>
							<div class="header-login-opt top-sub-menu sub-menu-right">
								<h5>登入 或 注册</h5>
								<a class="button small" href="users/login">登入</a>
								<span>or</span>
								<a class="button small transparent" href="/register">立即注册</a>
							</div>
						</div>
					</div>
					
					@else
					<div class="header-account-login float-right">
						<!-- 右边模块 -->
						<ul class="header-acc float-left">
							<li><a href="/home/report/create">举报</a>
							</li>
						</ul>

						<ul class="header-acc float-left">
							<li><a href="/fsignin">签到</a>
							</li>
						</ul>
						<ul class="header-acc float-left">
							<li><a href="/users">个人中心<i class="zmdi zmdi-chevron-down"></i></a>
								<ul class="top-sub-menu sub-menu-right">
									<li><a href="#">个人中心</a></li> 
									<li><a href="/Collection">我的收藏</a></li>  
									<li><a href="/index/orders">我的订单</a></li>
								</ul>
							</li>
						</ul>
						<!-- 登入 --> 
						<ul class="header-acc float-left">
							<li><a href="/users"> <span style="color:red;">{{session('home')}}</span><i class="zmdi zmdi-chevron-down"></i></a>
								<ul class="top-sub-menu sub-menu-right">
									<li><a class="button small transparent" href="/usersexit">退出登入</a></li> 
									<li><a class="button small transparent" href="/register">立即注册</a></li>
								</ul>
							</li>
						</ul>
						<!-- =============================购物车图标开始================================ -->
					@if(empty($arr))
						<div class="mini-cart float-right">
							<a onclick="return confirm('您还没有购物~')" href="/"><i class="zmdi zmdi-shopping-basket"></i></a>
						</div>
					

					@else
					<div class="mini-cart float-right">
						<a href="/cart"><i class="zmdi zmdi-shopping-basket"></i><sub>{{ $num }}</sub></a>
						<!-- Mini Cart Wrapper -->
						<div class="mini-cart-wrapper top-sub-menu sub-menu-right">
							<!-- Product List -->
							@foreach($arr as $k=>$v)
							<div class="mc-pro-list fix">
							
								<div class="mc-sin-pro fix">
									<a href="#" class="mc-pro-image float-left"><img src="uploads/{{ $v->pic }}" alt=""></a>
									<div class="mc-pro-details fix">
										<a href="#">{{ $v->gname }}</a>
										<span>尺寸:{{ $size[$k]->gsizename }}</span>
										<span>数量: {{ $arr1[$k] }}</span>

										
									</div>
									<div class="mc-pro-details fix float-right">
										<span>{{ $v->price }} 元</span>
										
									</div>
								</div>
								
							</div>
							@endforeach
							<!-- Sub Total -->
							<div class="mc-subtotal fix">
								<h4>小计<span>{{ $total }} 元</span></h4>
								
							</div>
							<!-- Cart Button -->
							<div class="mc-button">
								<a href="/cart" class="button color-hover small">我的购物车</a>
							</div>
						</div>
					</div>
					@endif	

<!-- =============================购物车图标结束================================ -->
					</div>
					@endif	
					<!-- 登入显示结束 -->

				</div>
			</div>
		</div>
	</div>
	<!-- 头部导航结束 -->
	<div class="header-bottom">
		<div class="container">
			<div class="row">
				<div class="header-bottom-wrap">
					<!-- Logo -->
					<div class="header-logo col-lg-3 col-md-2">
						<div class="logo"><a href="index.html"><img src="./home_public/img/logo.png" alt="logo" /></a></div>
					</div>
					<!-- Main Menu -->
					<div class="main-menu-wrap col-lg-6 col-md-7 hidden-sm hidden-xs">
						<div class="main-menu text-center">
							<nav>
								<ul>
									@foreach($type_data as $k=>$v)
									<li><a href="shop.html">{{ $v->tname }}<i class="zmdi zmdi-chevron-down"></i></a>
										<!-- Mega Menu -->
										<div class="mega-menu mm-5-column mm-left">
											<div class="mm-column mm-column-link float-left">
												<h3>商品</h3>
												@foreach($v['sub'] as $kk=>$vv)
													<a href="/homegoods?id={{ $vv->id }}">{{	$vv->tname }}</a>
												@endforeach
											</div>
											
										</div>
									</li>
									@endforeach
								</ul>
							</nav>
						</div>
					</div>

					<div class="header-search col-lg-3 col-md-3">
						<form action="/homegoods" method="get">
							<input type="text" name="search" placeholder="搜索" />
							<button type="submit"><i class="zmdi zmdi-search"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Home Slider
============================================ -->
<div class="slider-wrap">
	<div id="mainSlider" class="nivoSlider slider-image">
		@foreach($slids_data as $k=>$v)
		<a href="#"><img src="uploads/{{ $v->simg }}" alt="main slider" title="#htmlcaption1"/></a>
		@endforeach
		<!-- <a href="#"><img src="./home_public/img/slider/2.jpg" alt="main slider" title="#htmlcaption2"/></a> -->
	</div>
	<div id="htmlcaption1" class="nivo-html-caption">			
		<div class="slide-text-right text-white slide-text">
			<div class="middle-text text-center">
				<h2 class="cap-sub-title wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">XOSS SHOP</h2>
<!-- 前台遍历公告开始 -->
	@foreach($notice as $k=>$v)
				@if($v->status == 1)
				<h1 class="cap-title wow fadeInLeft" data-wow-duration=".9s" data-wow-delay="1.5s">
				{{ $v->notice }}
				</h1>
				@endif
				
	@endforeach
<!-- 前台遍历公告结束 -->
				<p class="cap-dec wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="2.2s">See our full collection.s summer 2019 Lookbook</p>
				<a href="#" class="cap-readmore button color white-hover wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="3s">Shop Now</a>
			</div>										
		</div>
	</div>
			</div>										
		</div>
	</div>
</div>

<!-- Banner Add Area
============================================ -->

<!-- Latest Product Area
============================================ --> 
<div class="latest-product-area tab-product-area margin-bottom-25">
	<div class="container">
		<div class="row">
			<!-- Section Title -->
			<div class="section-title col-xs-12 text-center"><h1>最新商品</h1></div>
			<div class="col-xs-12">
				<!-- Product Tab List -->
				<div class="pro-tab-list text-center fix">
					<ul>
						<li class="active"><a href="#women" data-toggle="tab">最新上市商品</a></li>
					</ul>
				</div>
				<!-- Product Tab Content -->
				<div class="pro-tab-content tab-content row">
					<!-- Product Tab -->
					<div class="pro-tab tab-pane active" id="women">
						<!-- Single Product -->


						@foreach($new_goods as $k=>$v)
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="/newdetailgoods?id={{ $v->id }}" class="sin-pro-img"><img src="uploads/{{ $v->pic }}"  alt="" /></a>
									<a href="/newdetailgoods?id={{ $v->id }}" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">加入购物车</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">{{ $v->gname }}</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ {{ $v->price }}</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						@endforeach




					</div>
					<!-- Product Tab -->
					<div class="pro-tab tab-pane" id="men">
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Product Tab -->
					<div class="pro-tab tab-pane" id="accessories">
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Product Tab -->
					<div class="pro-tab tab-pane" id="trendy">
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
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
<!-- Special Offer Area

<!-- 广告开始 -->
<div class="latest-product-area tab-product-area margin-bottom-25">
	<div class="container">
		<div class="row">
			<!-- Section Title -->
			<div class="section-title col-xs-12 text-center"><h1>澳门赌场上线了,性感美女荷官在线发牌</h1></div>
			<div class="col-xs-12">
				<!-- Product Tab List -->
				<div class="pro-tab-list text-center fix">
<!-- 					<ul>
						<li class="active"><a href="#women" data-toggle="tab">最新上市商品</a></li>
					</ul> -->
				</div>
				<!-- Product Tab Content -->
				<div class="pro-tab-content tab-content row">
					<!-- Product Tab -->
					<div class="pro-tab tab-pane active" id="women">
						<!-- Single Product -->


						@foreach($adv as $k=>$v)
						@if($v->status == 1)
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1553858733560&di=8dfe5c19a5eb5a28e5815b6c3437ded4&imgtype=0&src=http%3A%2F%2F5b0988e595225.cdn.sohucs.com%2Fimages%2F20171103%2F52a8413ee0ff4245b3fc7eef447e48d4.jpeg" class="sin-pro-img">
									
									<img src="/uploads/{{ $v->guanggao }}"  alt="" />

									</a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"></a>
									<!-- Product Action -->
									<!-- <div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">加入购物车</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div> -->
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<!-- <a class="sin-pro-title" href="#">娃娃</a> -->
									<!-- Product Price -->
									<!-- <div class="sin-pro-price float-left">
										<span class="new">$ 111</span>
									</div> -->
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<!-- <div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div> -->
										
									</div>
								</div>
							</div>
						</div>
						@endif
						@endforeach




					</div>
					<!-- Product Tab -->
					<div class="pro-tab tab-pane" id="men">
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Product Tab -->
					<div class="pro-tab tab-pane" id="accessories">
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Product Tab -->
					<div class="pro-tab tab-pane" id="trendy">
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./home_public/img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
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
<!-- 广告结束 -->
<div class="latest-product-area tab-product-area margin-bottom-25">
	<div class="container">
		<div class="row">
			<!-- Section Title -->
			<div class="section-title col-xs-12 text-center"><h1>latest products</h1></div>
			<div class="col-xs-12">
				<!-- Product Tab List -->
				<div class="pro-tab-list text-center fix">
					<ul>
						<li class="active"><a href="#women" data-toggle="tab">women</a></li>
					</ul>
				</div>
				<!-- Product Tab Content -->
				<div class="pro-tab-content tab-content row">
					<!-- Product Tab -->
					<div class="pro-tab tab-pane active" id="women">
						<!-- Single Product -->

						@foreach($goodss as $v)
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="/uploads/{{ $v->pic }}" alt=""></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">加入购物车</button>
										<a href="/Collectionadd/{{ $v->id }}" class="pro-act-btn btn-icon">&nbsp;&nbsp;&nbsp;&nbsp;<i class="zmdi zmdi-favorite-outline"></i></a>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">{{ $v->gname }}</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ {{ $v->price }}</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>

						@endforeach
	



					</div>
					
				
			

				
					</div>

					</div>
				</div>
			</div>
		</div>
{{--底部引入--}}
@include('Home.public.footer')