@extends('layouts.shop-active')

@section('acontent')

	<!-- Page Title
============================================= -->
	<section id="page-title" class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<h1>{{$manufacturername[0]->car_manufacturer_name}} / {{$manufacturername[0]->model}}</h1>
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
	
	<!-- Shop Single left sidebar
============================================= -->
	<section id="shopgrid" class="shop shop-single">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
					<!-- Categories
============================================= -->
					<div class="widget widget-categories">
						<div class="widget-title">
							<h5>Модель авто</h5>
						</div>

						<div class="widget-content">

							<ul class="list-unstyled forhiding">
								<li>
									<a href="/shop1/armrests/model/{{$lists[0]->car_manufacturer_code}}"><i class="fa fa-angle-double-right"></i>{{$lists[0]->car_manufacturer_name}} ({{(explode(",",$countmodels)[$lists[0]->car_manufacturer_code])}}) </a>
								</li>
								<li>
									<a href="/shop1/armrests/model/{{$lists[1]->car_manufacturer_code}}"><i class="fa fa-angle-double-right"></i>{{$lists[1]->car_manufacturer_name}} ({{(explode(",",$countmodels)[$lists[1]->car_manufacturer_code])}}) </a>
								</li>
							</ul>

							<div class="collapse" id="collapseExample">
								<div class="well">
									<ul class="list-unstyled">
										@for($i = 0; $i < count($lists); $i++)

											<li>
												<a href="/shop1/armrests/model/{{$lists[$i]->car_manufacturer_code}}"><i class="fa fa-angle-double-right"></i>{{$lists[$i]->car_manufacturer_name}} ({{(explode(",",$countmodels)[$lists[$i]->car_manufacturer_code])}}) </a>
											</li>

									@endfor
									</ul>
								</div>
							</div>
							<a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="forhiding">
								Все модели
							</a>


						</div>
					</div>
					<!-- .widget-categories end -->
					
					<!-- Recent Products
============================================= -->

					<!-- .widget-recent-product end -->
					
					<!-- Filter
============================================= -->

					<!-- .widget-filter end -->
					
					<!-- Select Brand
============================================= -->

					<!-- Recent Products
============================================= -->

					<!-- Tag Clouds
============================================= -->
					<div class="widget widget-tags">
						<div class="widget-title">
							<h5>Лучшие товары</h5>
						</div>
						<div class="widget-content">
							@for($i = 0; $i < count($lists); $i++)
							<a href="{{url('/shop1/armrests/model/'.$lists[$i]->car_manufacturer_code)}}">{{$lists[$i]->car_manufacturer_name}}</a>
							@endfor
						</div>
					</div>
					<!-- .widget-tags end -->
				</div>
				<!-- .col-md-3 end -->
				<div class="col-xs-12 col-sm-12 col-md-9 shop-content">
					<!-- Alert Message -->


					<!-- Product Image -->
					<div class="popup-gallery text-center">

						<a href="{{asset($pictures[0]->path.'full/'.'1.jpg')}}" title="{{$manufacturername[0]->car_manufacturer_name}} {{$manufacturername[0]->model}}">

							<div class="product-img product-feature-img mb-50">
								<img src="{{asset($pictures[0]->path.'full/'.'1.jpg')}}" alt="{{$manufacturername[0]->car_manufacturer_name}} {{$manufacturername[0]->model}}"/>
							</div>
						</a>
						@for($j = 1; $j <=$pictures[0]->quantity_logo; $j++)
							<a href="{{asset($pictures[0]->path.'full/'.$j.'.jpg')}}" title="{{$manufacturername[0]->car_manufacturer_name}} {{$manufacturername[0]->model}}"><img src="{{asset($pictures[0]->path.'thumb/'.$j.'.jpg')}}" width="75" height="75"></a>
						@endfor
					</div>


					<!-- Product Content -->
					<div class="product-content">
						<div class="product-title text-center-xs">
							<h3>Подлокотник</h3>
						</div>
						<!-- .product-img end -->
						
						<div class="product-meta mb-30">
							<div class="product-price pull-left pull-none-xs">
								<p><span class="discount">{{$pictures[0]->price+300}}руб</span>{{$pictures[0]->price}} руб.</p>
							</div>
							<!-- .product-price end -->

							<!--- .product-review end -->
						</div>
						<!-- .product-img end -->
						
						<div class="product-desc text-center-xs">
							<br/><br/>
							<p>Для производства используются только высококачественные материалы, такие, как автомобильная кожа и автомобильный карпет с высоким уровнем износостойкости. Монтаж не требует дополнительного вмешательства в конструкцию центральной консоли. Специально разработанная система крепления наших подлокотников по своему уникальна и позволяет устанавливать подлокотник на консоль автомобиля за считанные секунды без использования саморезов, болтов и другого крепежа, не прибегая к вмешательству в конструкцию консоли автомобиля. При этом устойчивость, удобство и надежность подлокотника не страдает. Вертикальная нагрузка на подлокотник может достигать до 100 -120 кг. Функционал не нарушается. Сиденья двигаются, все ремни пристегиваются, ручник дергается до упора, выходы 1ММ, USB, AUX не закрываются.

								Идеально вписывается в интерьер автомобиля, материалы из которых сделан подлокотник идеально подобраны по цвету, структуре кожи или пластика туннеля именно вашего автомобиля.

								Корпус подлокотника обшит специальной анатомической пеной, поверх обтянут автомобильной кожей. На ощупь подлокотник полностью мягкий: крышка, корпус, но в то же время заложен очень большой запас прочности конструкции.

								Конструкция подлокотника сделана очень прочной и жесткой, не будут возникать никакие скрипы и сверчки когда вы облокачиваетесь на подлокотник.</p>
							<p>
								Имеется возможность заменить цвет нитей или выполнить подлокотник других цветов.
							</p>
						</div>
						<!-- .product-desc end -->
						
						<hr class="mt-50 mb-30">
						<div class="product-details text-center-xs">
							<h5>Детали :</h5>
							<ul class="list-unstyled">
								<li>Товар : <span>Подлокотник</span></li>
								<li>Код : <span>#{{$pictures[0]->armrest_id}}</span></li>
								<li>Наличие : <span>да</span></li>
								<li>Бренд : <span>{{$manufacturername[0]->car_manufacturer_name}}</span></li>
							</ul>
						</div>
						<!-- .product-details end -->

						<!-- .product-tabs end -->
					</div>
					<!-- .product-content -->
					


					<!-- .product-related end -->
				</div>

				<!-- .shop-content end -->
			</div>
			<!-- .row end -->

		</div>
		<!-- .container end -->
	</section>
	<!-- #blog end -->

<!-- #wrapper end -->
@endsection

