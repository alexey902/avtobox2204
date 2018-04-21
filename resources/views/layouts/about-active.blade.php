<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<!-- Document Meta
    ============================================= -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--IE Compatibility Meta-->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Avtobox.net - Магазин автозапчастей и аксесcуаров для авто. Большой выбор, низкие цены, гарантия. Помощь при выборе качественного производителя">
<meta name="author" content="нижнекамск автозапчасти">
<meta name="keywords" content="подлокотник, шаровая, рулевая рейка, подшипник, опорник, стартер, радиатор, граната, шрус, фильтр, стекло, лобовое, бампер, форд, киа, ваз">
<meta name='wmail-verification' content='01f8585478bcf13b645fccb1ddf3688b'/>
<meta name="google-site-verification" content="ps-IzpPoW46eKEthmkisAIqJC6Hg1nobHDaUnAmdmsk"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{ asset('favicon_166.ico')}}" rel="icon">

<!-- Fonts
    ============================================= -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRaleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CUbuntu:300,300i,400,400i,500,500i,700,700i' rel='stylesheet' type='text/css'>

<!-- Stylesheets
    ============================================= -->
	<link href="{{ asset('css/external.css')}}" rel="stylesheet">
	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
	<link href="{{ asset('css/style.css')}}" rel="stylesheet">
	<link href="{{ asset('css/custom.css')}}" rel="stylesheet">
	<link href="{{ asset('css/library/font-awesome.min.css')}}" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
	<script type='text/javascript' src="js/html5shiv.js'"></script>
	<script type='text/javascript' src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->

<!-- Document Title
    ============================================= -->
<title>Avtobox - магазин автозапчастей</title>
</head>
<body>
<!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="wrapper clearfix">
	<header id="navbar-spy" class="header header-1">
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-5">
						<ul class="list-inline top-contact">
							<li><span>Телефон :</span> +7 917 394 0466</li>
							<li><span>Email :</span> avtoboxnk@mail.ru</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-7">
					</div>
				</div>
				<!-- .row end -->
			</div>
			<!-- .container end -->
		</div>
		<!-- .top-bar end -->
		<nav id="primary-menu" class="navbar navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="logo" href="{{url('/home-1')}}">
					<img src="{{ asset('Avtobox_logo_5.png')}}" alt="Avtobox">
					</a>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse pull-right" id="header-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left">
						<li class="has-dropdown">
							<a href="{{url('/home-1')}}" >главная</a>

						</li>
						<li class="has-dropdown">
							<a href="{{url('/shop1/armrests')}}" >магазин</a>

						</li>
						<li class="active">
							<a href="{{url("about")}}">о нас</a>
						</li>
						<li>
							<a href="{{url("/contacts")}}">контакты</a>
						</li>

 				</ul>
					
					<!-- Mod-->
					<!-- .module-search-->
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
	</header>
     @yield('acontent')

	<!-- Footer #2
============================================= -->
	<footer id="footer" class="footer footer-2">
		<!-- Footer Info
	============================================= -->
		<div class="footer-info">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="panel-info">
							<div class="info-icon">
								<i class="icon icon-Truck"></i>
							</div>
							<div class="info-content">
								<h4>Доставка</h4>
								<p>Осуществляется во все регионы России</p>
							</div>
						</div>
					</div>
					<!-- .col-md-3 end -->
					
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="panel-info">
							<div class="info-icon">
								<i class="icon icon-Dollars"></i>
							</div>
							<div class="info-content">
								<h4>Низкие цены</h4>
								<p>Мы тщательно отбираем поставщиков и подберем для вас запчасть из приемлемой для вас ценовой категории</p>
							</div>
						</div>
					</div>
					<!-- .col-md-3 end -->
					
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="panel-info">
							<div class="info-icon">
								<i class="icon icon-Shield"></i>
							</div>
							<div class="info-content">
								<h4>Скидки клиентам</h4>
								<p>Мы предоставляем скидки и предоставляем нашим постоянным клиентам еще больше</p>
							</div>
						</div>
					</div>
					<!-- .col-md-3 end -->
					
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="panel-info">
							<div class="info-icon">
								<i class="icon icon-Headset"></i>
							</div>
							<div class="info-content">
								<h4>Гарантии покупателям</h4>
								<p>Мы ответственны за то,что продаем и предоставляем гарантию на продаваемые запчасти</p>
							</div>
						</div>
					</div>
					<!-- .col-md-3 end -->
				</div>
			</div>
			<!-- .container end -->
		</div>
		<!-- .footer-info end -->
		
		<!-- Footer Widget
	============================================= -->
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 footer-widget-about">
						<div class="footer-widget-title">
							<h5>О нас</h5>
						</div>
						<div class="footer-widget-content">
							<p>Оффлайн магазин Avtobox находится по адресу г.Нижнекамск, проспект Мира 63б, ТЦ Ювена</p>
							<div class="footer-social">
								<a class="share-facebook" href="https://vk.com/avtoboxnk"><i class="fa fa-vk"></i></a>
								<a class="share-google-plus" href="https://www.google.ru/search?newwindow=1&ei=iInPWprmC8GVsgHgioPgBQ&q=avtobox.net&oq=avtobox.net&gs_l=psy-ab.3..0i13k1j0i10i30k1.86135.105289.0.105869.55.24.31.0.0.0.134.2156.12j10.24.0....0...1c.1.64.psy-ab..0.47.2167.0..0j0i131k1j0i10i1i67i42k1j0i67k1j0i131i67k1j0i10i1i67k1j0i10i1k1j0i10i1i42k1j0i10k1j0i10i42k1j0i30k1j0i13i30k1j0i10i67k1j0i5i10i30k1j0i5i30k1.62.HI9SXQUYrC4"><i class="fa fa-google-plus"></i></a>
								<a class="share-twitter" href="https://www.instagram.com/podlokotnikavtobox/"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
					<!-- .col-md-4 end -->
					<!-- .col-md-2 end -->
					
					<div class="col-xs-12 col-sm-6 col-md-3 footer-widget-link">
						<div class="footer-widget-title">
							<h5>Информация</h5>
						</div>
						<div class="footer-widget-content">
							<ul class="list-unstyled">
								<li>
									<a href="{{url('/about')}}">О нас</a>
								</li>
								<li>
									<a href="{{url('/delivery')}}">Доставка</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- .col-md-2 end -->
					
					<div class="col-xs-12 col-sm-6 col-md-3 footer-widget-link">
						<div class="footer-widget-title">
							<h5>Дополнения</h5>
						</div>
						<div class="footer-widget-content">
							<ul class="list-unstyled">
								<li>
									<a href="#">Карта сайта</a>
								</li>
								<li>
									<a href="#">Брэнды</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- .col-md-2 end -->
					
					<div class="col-xs-12 col-sm-6 col-md-3 footer-widget-link">
						<div class="footer-widget-title">
							<h5>Соглашения</h5>
						</div>
						<div class="footer-widget-content">
							<ul class="list-unstyled">
								<li>
									<a href="{{url('/agreement')}}">Положение по обработке персональных данных</a>
								</li>
								<li>
									<a href="{{url('/regulations')}}">Соглашение на обработку персональных данных</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- .col-md-2 end -->
				</div>
			</div>
			<!-- .container end -->
		</div>
		<!-- .footer-widget end -->
		
		<!-- Footer Bar
	============================================= -->
		<div class="footer-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="powered">
							<p>Avtobox.net &copy; All Rights Reserved</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="payment-methods text-right">
							<ul class="list-inline mb-0">
								<li><img src="{{asset('images/footer/visa.png')}}" alt="payment"></li>
								<li><img src="{{asset('images/footer/mastercard.png')}}" alt="payment"></li>
								<li><img src="{{asset('images/footer/american-express.png')}}" alt="payment"></li>
								<li><img src="{{asset('images/footer/delta.png')}}" alt="payment"></li>
								<li><img src="{{asset('images/footer/cirrus.png')}}" alt="payment"></li>
								<li><img src="{{asset('images/footer/paypal.png')}}" alt="payment"></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- .container end -->
		</div>
		<!-- .footer-copyright end -->
	</footer>
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/functions.js') }}"></script>

</body>
</html>