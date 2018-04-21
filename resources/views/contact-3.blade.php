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
	<title>Avtobox - магазин автозапчастей - отправить заявку</title>
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
					<h1>Сделать заявку</h1>
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
	

	
	<!-- Contact #1
============================================= -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 widget-contact pl-0 pr-0 p-none-xs p-none-sm">
					@if ($errors->any())
						<div class="alert alert-danger formargin">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
							<div class='text-center'>
								<h3>Заполните, пожалуйста, все поля формы, для того чтобы мы смогли найти оптимальную для вас автозапчасть как по цене так и по качеству</h3>
							</div>
							{{ Form::open(['url'=>'contact-3']) }}
							<div class="col-xs-6">
								<div class="form-group mb-30">
									{!! Form::label('myPhone', 'Номер телефона:') !!}<br>
									{!!  Form::text('phonenumber',null,['class'=>'form-control mb-30','maxlength'=>'10','placeholder'=>'9XXXXXXXXX'])!!}
								</div>
								<div>
									<ul>
										@if ($errors->has('phonenumber'))


											<li class="alert-danger">{{$errors->first('phonenumber')}}</li>

										@endif
									</ul></div>
							</div>

							<div class="col-xs-6">
								<div class="form-group mb-30">
									{!! Form::label('myMaker', 'Марка авто:') !!}<br>
									{!!  Form::text('automaker',null,['class'=>'form-control mb-30','maxlength'=>'30','placeholder'=>'HUYNDAI'])!!}
								</div>
								<div><ul>
										@if ($errors->has('automaker'))
											<li class="alert-danger">{{$errors->first('automaker')}}</li>
										@endif
									</ul>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group mb-30">
									{!! Form::label('mymodel', 'Модель:') !!}<br>
									{!!  Form::text('automodel',null,['class'=>'form-control mb-30','maxlength'=>'30','placeholder'=>'Solaris'])!!}
								</div>
								<div><ul>
										@if ($errors->has('automodel'))
											<li class="alert-danger">{{$errors->first('automodel')}}</li>
										@endif
									</ul>
								</div>
							</div>
							 <div class="col-xs-6">
								<div class="form-group mb-30">
									{!! Form::label('myVin', 'Идентификационный номер транспортного средства (VIN):') !!}<br>
									{!!  Form::text('vin',null,['class'=>'form-control mb-30','maxlength'=>'17', 'placeholder'=>'12345678912345678'])!!}
								</div>
								<div><ul>
										@if ($errors->has('vin'))
											<li class="alert-danger">{{$errors->first('vin')}}</li>
										@endif
									</ul>
								</div>
							 </div>
								<div class="col-xs-6">
								<div class="form-group mb-30">
									{!! Form::label('myDescription', 'Описание автозапчасти:') !!}<br>
									{!!  Form::textarea('description',null,['class'=>'form-control mb-30','maxlength'=>'250','placeholder'=>'Описание необходимой запчасти'])!!}
								</div>
								<div><ul>
										@if ($errors->has('description'))
											<li class="alert-danger">{{$errors->first('description')}}</li>
										@endif
									</ul>
								</div>
								</div>
							<div class="col-xs-6">

									<div class="form-group">
										{!! Form::label('myEngineVolume', 'Объем двигателя (л):') !!}<br>
										{!!  Form::text('engine',null,['class'=>'form-control', 'placeholder'=>'1.8','maxlength'=>'3'])!!}
									</div>
									<div><ul>
											@if ($errors->has('engine'))
												<li class="alert-danger">{{$errors->first('engine')}}</li>
											@endif
										</ul>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										{!! Form::label('myYear', 'Год выпуска:') !!}<br>
										{!!  Form::text('Year',null,['class'=>'form-control','placeholder'=>'2012','maxlength'=>'4'])!!}
									</div>
									<div><ul>
											@if ($errors->has('Year'))
												<li class="alert-danger">{{$errors->first('Year')}}</li>
											@endif
										</ul>
									</div>
								</div>
									<div class="col-xs-6">
									<div class="form-group">
										{!! Form::label('myArt', 'Артикул (заполнять не обязательно):') !!}<br>
										{!!  Form::text('Artikul',null,['class'=>'form-control','maxlength'=>'50'])!!}
									</div>
									<div><ul>
											@if ($errors->has('Artikul'))
												<li class="alert-danger">{{$errors->first('Artikul')}}</li>
											@endif
										</ul>
									</div>
									</div>

										<div class="col-xs-12">
											<div class="form-group mb-30">
												<button class="btn btn-primary btn-block">
													{!!Form::submit('Заказать',['class'=>'btn btn-primary btn-block'])  !!}</button>
											</div>
										<div>
											<p>Нажимая на кнопку вы принимаете условия <a href="{{url('/regulations')}}">Положения</a> и <a href="{{url('/agreement')}}">Соглашения</a> на обработку персональных данных </p></div>
										</div>



								{{ Form::close() }}
				</div>
				<!-- .col-md-8 end -->
			</div>
					<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="contct-widget-content">
{{--
						<p class="mb-0">Мы занимаемся продажей и подбором автозапчастей, жидкостей, и аксессуаров для авто. Наши клиенты получают самые выгодные цены в городе</p>
--}}
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
					</div>
				<!-- .col-md-4 end -->

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

								{{--<li>
									<a href="#">Положение и Соглашение на обработку персональных данных</a>
								</li>--}}
							</ul>
						</div>
					</div>
					<!-- .col-md-2 end -->

					<!-- .col-md-2 end -->

					<div class="col-xs-12 col-sm-6 col-md-6 footer-widget-link">
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
							<p>Avtobox.net &copy; All Rights Reserved
							</p>
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
