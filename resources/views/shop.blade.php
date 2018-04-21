@extends('layouts.shop-active')

@section('acontent')

	<!-- Page Title
============================================= -->
	<section id="page-title" class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<h1>Выберите модель</h1>
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

	<!-- Shop product grid right sidebar
============================================= -->
	<section id="shopgrid" class="shop shop-grid">
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

							<ul class="forhiding list-unstyled">
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
										@for($i = 2; $i < count($lists); $i++)

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
					<!-- Filter
============================================= -->
					<!-- Select Brand
============================================= -->
					<!-- Recent Products
============================================= -->
					<!-- Tag Clouds
============================================= -->
					<div class="widget widget-tags">
						<div class="widget-title">
							<h5>Лучшая цена</h5>
						</div>
						<div class="widget-content">
							@for($i = 2; $i < 10 /*count($lists)*/; $i++)
							<a href="#">{{$lists[$i]->car_manufacturer_name}}</a>
							@endfor
						</div>
					</div>
					<!-- .widget-tags end -->
				</div>
				<!-- .col-md-3 end -->
				<div class="col-xs-12 col-sm-12 col-md-9">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="product-num pull-left pull-none-xs">
								<h3>Всего <span class="color-theme">{{count($goods)}}</span> моделей</h3>
							</div>
							<!-- .product-num end -->

							{{--Sort products--}}
							<!-- .product-options end -->
						</div>
						<!-- .col-md-12 end -->
					</div>
					<!-- .row end -->
					<div class="row" >
                        <p id="ajaxfirst"></p>

						@for($j = 0; $j <count($pictures); $j++)
							@if (!($pictures[$j]->path)==0)
							<div class="col-xs-12 col-sm-6 col-md-4 product">
								<div class="product-img">
									<img  src="{{ asset($pictures[$j]->path.'0.jpg') }}" alt="Product"/>
									<div class="product-hover">
										<div class="product-action">
											<a class="btn btn-primary" href="{{url('/shop1/armrests/all', $pictures[$j]->car_id )}}">Заказать</a>
											<a class="btn btn-primary" href="#">Описание</a>
										</div>
									</div>
									<!-- .product-overlay end -->
								</div>
								<!-- .product-img end -->
								<div class="product-bio">
									<div class="prodcut-cat">
										<a href="#">{{$pictures[$j]->model}}</a>
									</div>
									<!-- .product-cat end -->

									<div class="product-price">
										<span class="symbole"></span><span>{{$pictures[$j]->price}} руб.</span>
									</div>
									<!-- .product-price end -->

								</div>
								<!-- .product-bio end -->
							</div>
						@endif
							<!-- .product end -->

					@endfor

						<!-- Product #1 -->
						<!-- .product end -->


						<!-- Product #12 -->
						<!-- .product end -->

					</div>
					<!-- .row end -->
					<div class="row ">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="text-center">
						{{ $pictures->links() }}
						</div>
					</div>
					</div>
				</div>
				<!-- .col-md-9 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	<!-- #shopgrid end -->


@endsection
