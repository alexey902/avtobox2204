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

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
	<script type='text/javascript' src="assets/js/html5shiv.js"></script>
	<script type='text/javascript' src="{{ asset('js/respond.min.js') }}"></script>
	<![endif]-->

	<!-- Document Title
        ============================================= -->
	<title>Avtobox - магазин автозапчастей - контакты</title>
</head>


<body>
<!-- Document Wrapper
	============================================= -->

<div id="wrapper" class="wrapper clearfix">

	<!-- Page Title
============================================= -->
	<section id="page-title" class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<h1>Контакты</h1>
				</div>
				<!-- .col-md-6 end -->
				<div class="col-xs-12 col-sm-12 col-md-6">
					<ol class="breadcrumb text-right">
						<li>
							<a href="{{url('/home-1')}}">Главная</a>
						</li>
						<li class="active">Магазин</li>
					</ol>
				</div>
				<!-- .col-md-6 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	<!-- #page-title end -->
	
	<!-- Google Maps
============================================= -->
	<section class="google-maps pb-0 pt-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 pr-0 pl-0">
					<div id="googleMap" style="width:100%;height:478px;">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- .google-maps end -->
	
	<!-- Contact #1
============================================= -->
		{{--For flash message--}}
	{{--<div class="container">
		@include('flash::message')
	</div>--}}
	{{--End flash message--}}

	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 widget-contact pl-0 pr-0 p-none-xs p-none-sm">
					{{ Form::open(['url'=>'contacts']) }}
						<div class="col-xs-6">
						<div class="form-group mb-30">
							{!! Form::label('myPhone', 'Номер телефона:') !!}<br>
							{!!  Form::text('phonenumber',null,['class'=>'form-control mb-30','maxlength'=>'10','placeholder'=>'9XXXXXXXXX'])!!}
						</div>
						<div>
							<ul>
								@if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
							</ul></div>


						</div>
						<div class="col-xs-6">
						<div class="form-group  mb-30">
							{!! Form::label('Name', 'Имя:') !!}<br>
							{!!  Form::text('name',null,['class'=>'form-control mb-30','maxlength'=>'30','placeholder'=>'Руслан'])!!}
						</div>
						</div>
						<div class="col-xs-12">
						<div class="form-group mb-30">
							<button class="btn btn-primary btn-block">
								{!!Form::submit('Обратный звонок',['class'=>'btn btn-primary btn-block'])  !!}</button>
						</div>
						</div>
						{{ Form::close() }}

							<!--Alert Message-->
							<div id="contact-result">
							</div>
						</div>
				<!-- .col-md-8 end -->
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="contct-widget-content">
						<p class="mb-0">Мы занимаемся продажей и подбором автозапчастей, жидкостей, и аксессуаров для авто. Наши клиенты получают самые выгодные цены в городе</p>
						<div class="widget-contact-info mt-md">
							<div class="col-xs-12 col-sm-12 col-md-6 pl-0 mb-30-xs mb-30-sm">
								<h6>Phone :</h6>
								<p><i class="fa fa-phone"></i>+ 7 917 394 0466</p>
								<p class="mb-0"><i class="fa fa-fax"></i>+ 7 917 394 0466</p>
							</div>
							<!-- .col-md-6 end -->
							<div class="col-xs-12 col-sm-12 col-md-6">
								<h6>Email :</h6>
								<p class="mb-0"><i class="fa fa-envelope"></i>avtoboxnk@mail.ru</p>
							</div>
							<!-- .col-md-6 end -->
							<div class="col-xs-12 col-sm-12 col-md-12 pl-0 mt-30 mb-30-xs mb-30-sm">
								<h6>Адрес:</h6>
								<p class="mb-0"><i class="fa fa-map-marker"></i>г. Нижнекамск, ТЦ Ювена, проспект Мира 63Б</p>
							</div>
							<!-- .col-md-12 end -->
						</div>
					</div>
				</div>
				<!-- .col-md-4 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
<!---------------------------------

MY FORMS

-->
	<!-- Footer #1
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
							<p>Оффлайн магазин Avtobox находится по адресу г.Нижнекамск, проспект Мира 63б, ТЦ Ювэна</p>
							<div class="footer-social">
								<a class="share-facebook" href="#"><i class="fa fa-facebook"></i></a>
								<a class="share-google-plus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a>
								<a class="share-pinterest" href="#"><i class="fa fa-pinterest"></i></a>
								<a class="share-vimeo" href="#"><i class="fa fa-vimeo"></i></a>
								<a class="share-rss" href="#"><i class="fa fa-rss"></i></a>
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
									<a href="#">О нас</a>
								</li>
								<li>
									<a href="#">Доставка</a>
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
							<p>Avtobox &copy; All Rights Reserved</p>
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
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $('#flash-overlay-modal').modal();
</script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCaLgb1teJ3OGXASnl7FxXEae8AJCSpixQ"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jquery.gmap.min.js') }}"></script>
<script type="text/javascript">
	$('#googleMap').gMap(
		{
		address: "63Б проспект Мира,Нижнекамск, Россия",
		zoom: 15,
		markers:[
			{
				address: "Проспект Мира 63Б, Нижнекамск, Россия",
				maptype:'ROADMAP',
				html:"Магазин Автобокс"+"<p>"+ "Продажа, подбор автозапчастей. Гарантия"+"</p>"+"Адрес: г.Нижнекамск, ТЦ Ювена, проспект Мира 63Б"
			}
		]
	});
</script>

</body>
</html>
