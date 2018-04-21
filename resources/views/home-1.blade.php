@extends('layouts.home')
@section('acontent')
	<!-- Hero #1
============================================= -->

	<section id="hero" class="hero">

		<div id="hero-slider" class="hero-slider">
			<!-- Slide #1 -->
			{{-- deleted class='bg-overlay'--}}
			<div class="slide ">
				<div class="bg-section">
					<img src="{{ asset('images/sliders/13.jpg') }}" alt="Background"/>
				</div>
				<div class="container vertical-center">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
							<div class="slide-content">
								{{--<div class="slide-icon">
									<i class="icon icon-Settings"></i>
								</div>--}}
								<div class="slide-heading"> Магазин автозапчастей </div>
								<div class="slide-title">
									<h2>мы делаем цены ниже на <span class="color-theme">Avtobox.net!</span></h2>
								</div>
								<div class="slide-desc"> Avtobox.net - автозапчасти в наличии и под заказ. Доставка от 1 дня. Гарантия. Вы будете приятно удивлены ценой и качеством продукции</div>
								<div class="slide-action">
									<a class="btn btn-primary" href="{{url('/contacts')}}">Обратный звонок</a>
									<a class="btn btn-primary btn-white" href="{{url('/contact-3')}}">Заказать запчасть</a>
								</div>
							</div>
						</div>
						<!-- .col-md-12 end -->
					</div>
					<!-- .row end -->
				</div>
				<!-- .container end -->
			</div>
			<!-- .slide end -->

			<!-- Slide #2 -->
			<div class="slide ">
				<div class="bg-section">
					<img src="{{ asset('images/sliders/8.jpg') }}" alt="Background"/>
				</div>
				<div class="container vertical-center">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
							<div class="slide-content">
								<div class="slide-heading">НИЗКИЕ ЦЕНЫ </div>
								<div class="slide-title">
									<h2>Закажи любую автозапчасть</h2>
								</div>
								<div class="slide-desc"> Avtobox.net - Мы отсеиваем продукцию низкого качества на основе нашего опыта, чтобы вы экономили ваше время и средства</div>
								<div class="slide-action">
									<a class="btn btn-primary" href="#">Заказать запчасть</a>
								</div>
							</div>
						</div>
						<!-- .col-md-12 end -->
					</div>
					<!-- .row end -->
				</div>
				<!-- .container end -->
			</div>
			<!-- .slide end -->

			<!-- Slide #3 -->
			<div class="slide">
				<div class="bg-section">
					<img src="{{ asset('images/sliders/6.jpg') }}" alt="Background"/>
				</div>
				<div class="container vertical-center">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
							<div class="slide-content">
								<div class="slide-heading"> ОГРОМНЫЙ ВЫБОР ПОСТАВЩИКОВ </div>
								<div class="slide-title">
									<h2>выбери <span class="color-theme">лучшее</span></h2>
								</div>
								<div class="slide-desc"> Имея за плечами большой опыт подбора комплектующих, мы поможем вам не переплатить и получить качественный товар </div>
							</div>
						</div>
						<!-- .col-md-12 end -->
					</div>
					<!-- .row end -->
				</div>
				<!-- .container end -->
			</div>
			<!-- .slide end -->

		</div>
		<!-- #hero-slider end -->
	</section>
	<!-- #hero -->

	<!-- Featured Items
============================================= -->
	<section id="featuredItems" class="shop">
		<!-- .container end -->
		<div class="container heading">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<p class="subheading">лучшая цена</p>
					<h2>Большой выбор подлокотников для различных марок автомобилей</h2>
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->

		</div>
		<!-- .container end -->
		<div class="container">
			<div class="row product-carousel text-center">
				<!-- Product #1 -->
				<div class="product">
					<div class="product-img">
						<img  src="{{ asset('images/shop/grid/forarmrestgrid270x326/chcruze.jpg') }}" alt="Подлокотник"/>
						<div class="product-hover">
							<div class="product-action">
								<a class="btn btn-primary" href="{{url('/shop1/armrests/all/16')}}">Подробнее</a>
							</div>
						</div>
						<!-- .product-overlay end -->
					</div>
					<!-- .product-img end -->
					<div class="product-bio">
						<div class="prodcut-cat">
							<a href="#">Шевроле Круз</a>
						</div>
						<!-- .product-cat end -->
						<div class="product-price">
							<span>1800</span><span class="symbole"> руб</span>
						</div>
						<!-- .product-price end -->

					</div>
					<!-- .product-bio end -->
				</div>
				<!-- .product end -->

				<!-- Product #2 -->
				<div class="product">
					<div class="product-img">
						<img  src="{{ asset('images/shop/grid/forarmrestgrid270x326/chlach.jpg') }}" alt="Подлокотник">
						<div class="product-hover">
							<div class="product-action">
								<a class="btn btn-primary" href="{{url('/shop1/armrests/all/14')}}">Подробнее</a>
							</div>
						</div>
						<!-- .product-overlay end -->
					</div>
					<!-- .product-img end -->
					<div class="product-bio">
						<div class="prodcut-cat">
							<a href="#">Шевроле Лачетти </a>
						</div>
						<!-- .product-cat end -->
						<!-- .product-title end -->
						<div class="product-price">
							<span>1800</span><span class="symbole"> руб</span>
						</div>
						<!-- .product-price end -->

					</div>
					<!-- .product-bio end -->
				</div>
				<!-- .product end -->

				<!-- Product #3 -->
				<div class="product">
					<div class="product-img">
						<img  src="{{ asset('images/shop/grid/forarmrestgrid270x326/dewnex.jpg') }}" alt="Подлокотник">
						<div class="product-hover">
							<div class="product-action">
								<a class="btn btn-primary" href="{{url('/shop1/armrests/all/37')}}">Подробнее</a>
							</div>
						</div>
						<!-- .product-overlay end -->
					</div>
					<!-- .product-img end -->
					<div class="product-bio">
						<div class="prodcut-cat">
							<a href="#">Дэу Нексиа</a>
						</div>
						<!-- .product-cat end -->
						<!-- .product-title end -->
						<div class="product-price">
							<span>1800</span><span class="symbole"> руб</span>
						</div>
						<!-- .product-price end -->

					</div>
					<!-- .product-bio end -->
				</div>
				<!-- .product end -->

				<!-- Product #4 -->
				<div class="product">
					<div class="product-img">
						<img  src="{{ asset('images/shop/grid/forarmrestgrid270x326/fordfocus3.jpg') }}" alt="Подлокотник">
						<div class="product-hover">
							<div class="product-action">
								<a class="btn btn-primary" href="{{url('/shop1/armrests/all/20')}}">Подробнее</a>
							</div>
						</div>
						<!-- .product-overlay end -->
					</div>
					<!-- .product-img end -->
					<div class="product-bio">
						<div class="prodcut-cat">
							<a href="#">Форд Фокус III</a>
						</div>
						<!-- .product-cat end -->
						<!-- .product-title end -->
						<div class="product-price">
							<span>1800</span><span class="symbole"> руб</span>
						</div>
						<!-- .product-price end -->

					</div>
					<!-- .product-bio end -->
				</div>
				<!-- .product end -->

				<!-- Product #5 -->
				<div class="product">
					<div class="product-img">
						<img  src="{{ asset('images/shop/grid/forarmrestgrid270x326/huyndaysol2.jpg') }}" alt="Подлокотник">
						<div class="product-hover">
							<div class="product-action">
								<a class="btn btn-primary" href="{{url('/shop1/armrests/all/21')}}">Подробнее</a>
							</div>
						</div>
						<!-- .product-overlay end -->
					</div>
					<!-- .product-img end -->
					<div class="product-bio">
						<div class="prodcut-cat">
							<a href="#">Хёндай Солярис I</a>
						</div>
						<!-- .product-cat end -->
						<!-- .product-title end -->
						<div class="product-price">
							<span>1800</span><span class="symbole"> руб</span>
						</div>
						<!-- .product-price end -->

					</div>
					<!-- .product-bio end -->
				</div>
				<!-- .product end -->

				<!-- Product #6 -->
				<div class="product">
					<div class="product-img">
						<img  src="{{ asset('images/shop/grid/forarmrestgrid270x326/ladakalina2.jpg') }}" alt="Подлокотник">
						<div class="product-hover">
							<div class="product-action">
								<a class="btn btn-primary" href="{{url('/shop1/armrests/all/2')}}">Подробнее</a>

							</div>
						</div>
						<!-- .product-overlay end -->
					</div>
					<!-- .product-img end -->
					<div class="product-bio">
						<div class="prodcut-cat">
							<a href="#">Лада Калина </a>
						</div>
						<!-- .product-cat end -->
						<!-- .product-title end -->
						<div class="product-price">
							<span>1800</span><span class="symbole"> руб</span>
						</div>
						<!-- .product-price end -->

					</div>
					<!-- .product-bio end -->
				</div>
				<!-- .product end -->

				<!-- Product #7 -->
				<div class="product">
					<div class="product-img">
						<img  src="{{ asset('images/shop/grid/forarmrestgrid270x326/ladavesta.jpg') }}" alt="Подлокотник">
						<div class="product-hover">
							<div class="product-action">
								<a class="btn btn-primary" href="{{url('/shop1/armrests/all/6')}}">Подробнее</a>
							</div>
						</div>
						<!-- .product-overlay end -->
					</div>
					<!-- .product-img end -->
					<div class="product-bio">
						<div class="prodcut-cat">
							<a href="#">Лада Веста</a>
						</div>
						<!-- .product-cat end -->
						<!-- .product-title end -->
						<div class="product-price">
							<span>1800</span><span class="symbole"> руб</span>
						</div>
						<!-- .product-price end -->

					</div>
					<!-- .product-bio end -->
				</div>
				<!-- .product end -->
				<!-- Product #8 -->
				<div class="product">
					<div class="product-img">
						<img  src="{{ asset('images/shop/grid/forarmrestgrid270x326/ladaxray.jpg') }}" alt="Подлокотник">
						<div class="product-hover">
							<div class="product-action">
								<a class="btn btn-primary" href="{{url('/shop1/armrests/all/7')}}">Подробнее</a>
							</div>
						</div>
						<!-- .product-overlay end -->
					</div>
					<!-- .product-img end -->
					<div class="product-bio">
						<div class="prodcut-cat">
							<a href="#">Лада X-Ray</a>
						</div>
						<!-- .product-cat end -->

						<!-- .product-title end -->
						<div class="product-price">
							<span>1800</span><span class="symbole"> руб</span>
						</div>
						<!-- .product-price end -->

					</div>
					<!-- .product-bio end -->
				</div>
				<!-- .product end -->

			</div>
			<div class="row heading-desc">
				<div class="col-xs-12 col-sm-12 col-md-10">
					<p>Выбрать подлокотник для вашей модели авто</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-2">
					<a class="btn btn-primary btn-block " href="{{url('/shop1/armrests')}}">Подлокотники</a>
				</div>
			</div>
			<!-- .row end -->
		</div>

		<!-- .container end -->
	</section>
	<!-- #featuredItems end -->

	<!-- Clients
============================================= -->
	<section id="clients" class="clients bg-gray">
		<div class="container heading">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<p class="subheading">Интересное</p>
					<h2>АВТОПРОИЗВОДИТЕЛИ</h2>
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->

			<div class="row heading-desc">
				<div class="col-xs-12 col-sm-12 col-md-10">
					<p>Мы подберем запчасть на любую марку автомобиля.</p>
				</div>
				<!-- .col-md-10 end -->
				<div class="col-xs-12 col-sm-12 col-md-2">
					<a class="btn btn-primary btn-block" href="{{url('/shop1/armrests')}}">Все производители</a>
				</div>
				<!-- .client end -->
			</div>
			<!-- .row end -->

		</div>
		<!-- .container end -->
		<div class="container">
			<div class="clients-bg">
				<div class="row">
					<div class="col-xs-12 colsm-12 col-md-12 client-carousel">
						<!-- Client #1 -->
						<div class="client">
							<img src="{{ asset('images/clients/brands/2073-130x130.jpg') }}" alt="Hyundai Хёндай">
						</div>
						<!-- .client end -->

						<!-- Client #2 -->
						<div class="client">
							<img src="{{ asset('images/clients/brands/cheryy-130x130.jpg') }}" alt="Cherry Черри">
						</div>
						<!-- .client end -->

						<!-- Client #3 -->
						<div class="client">
							<img src="{{ asset('images/clients/brands/chevrolet-130x130.jpeg') }}" alt="Chevrolet Шевролет">
						</div>
						<!-- .client end -->

						<!-- Client #4 -->
						<div class="client">
							<img src="{{ asset('images/clients/brands/ford-130x130.jpg') }}" alt="Ford Форд">
						</div>
						<!-- .client end -->

						<!-- Client #5 -->
						<div class="client">
							<img src="{{ asset('images/clients/brands/kia-130x130.jpg') }}" alt="Kia Киа">
						</div>
						<!-- .client end -->

						<!-- Client #6 -->
						<div class="client">
							<img src="{{ asset('images/clients/brands/LADA-130x130.jpg') }}" alt="lada лада">
						</div>
						<!-- .client end -->
						<!-- Client #7 -->
						<div class="client">
							<img src="{{ asset('images/clients/brands/nissan-130x130.jpg') }}" alt="nissan ниссан">
						</div>
						<!-- .client end -->

						<!-- Client #8 -->
						<div class="client">
							<img src="{{ asset('images/clients/brands/opel-130x130.jpg') }}" alt="opel опель">
						</div>
						<!-- .client end -->

						<!-- Client #9 -->
						<div class="client">
							<img src="{{ asset('images/clients/brands/skoda-130x130.jpg') }}" alt="skoda шкода">
						</div>
						<!-- .client end -->

						<!-- Client #10 -->
						<div class="client">
							<img src="{{ asset('images/clients/brands/suzu-130x130.jpg') }}" alt="suzuki сузуки">
						</div>
						<!-- .client end -->

						<!-- Client #11 -->
						<div class="client">
							<img src="{{ asset('images/clients/brands/toyata-130x130.jpg') }}" alt="toyota тойота">
						</div>
						<!-- .client end -->

						<!-- Client #12 -->
						<div class="client">
							<img src="{{ asset('images/clients/brands/vw-130x130.jpg') }}" alt="folksvagen фольксваген">
						</div>
						<!-- .client end -->
					</div>
				</div>
				<!-- .row end -->
			</div>
		</div>
		<!-- .container end -->
	</section>
	<!-- #clients end -->



	<div class="container">
		@include('flash::message')

	</div>
@endsection

