@extends('layouts.about-active')


@section('acontent')
	
	<!-- Page Title
============================================= -->
	<section id="page-title" class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<h1>О нас</h1>
				</div>
				<!-- .col-md-6 end -->
				<div class="col-xs-12 col-sm-12 col-md-6">
					<ol class="breadcrumb text-right">
						<li>
							<a href="index.html">Главная</a>
						</li>
						<li class="active">О нас</li>
					</ol>
				</div>
				<!-- .col-md-6 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	<!-- #page-title end -->
	
	<!-- Featured #1
============================================= -->
	<section id="featured1" class="featured featured-1">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="heading">
						<p class="subheading">История</p>
						<h2>Организация</h2>
					</div>
					<!-- .heading end -->
					<div class="about-accordion">
						<div class="panel-group accordion" id="accordion02" role="tablist" aria-multiselectable="true">
							
							<!-- Panel 01 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse02-1" aria-expanded="true" aria-controls="collapse02-1">О компании</a>
										<span class="icon"></span>
									</h4>
								</div>
								<div id="collapse02-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false">
									<div class="panel-body">
										<div class="pull-left pr-30">
											<img src="{{asset('/images/shortcode/aboutus.jpg')}}" alt="about">
										</div>
										<div> Компания Avtobox занимается подбором автозапчастей, комплектующих и аксессуаров с 2014г. За все время накоплен огромный опыт в поиске необходимых вам товаров под любые нужды. Мы заинтересованы в предоставлении наилучшего качества, что дает нам надежду на дальнейшее сотрудничество.    </div>
									</div>
								</div>
							</div>
							
							<!-- Panel 02 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse02-2" aria-expanded="false" aria-controls="collapse02-2"> Наше предназначение </a>
									</h4>
								</div>
								<div id="collapse02-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
									<div class="panel-body">Предоставить наиболее подходящий товар для  ремонта, обслуживания, предпродажной подготовки, восстановления после аварий, повышения комфортности авто. Вы просто связываетесь с нами любыми удобными способами, а мы всегда рады помочь вам в подборе.  </div>
								</div>
							</div>
							
							<!-- Panel 03 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse02-3" aria-expanded="false" aria-controls="collapse02-3">Наши преимущества</a>
									</h4>
								</div>
								<div id="collapse02-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="true">
									<div class="panel-body">
									<p>
										Осуществляем поставки с заводов-производителей напрямую, поэтому цены на запчасти остаются на привлекательном уровне.
									</p>
										<p>
											Мы выбираем для наших клиентов проверенных производителей автозапчастей, поэтому гарантируем качество товара и его высокую износостойкость.
										</p>
										<p>
											Поможем с выбором первоклассных и доступных оригинальных и неоригинальных запасных частей, шин, дисков, аккумуляторов, аксессуаров, автохимии, автомобильных масел и оборудования для автосервисов.
										</p>
										<p>
											Большая база неоригинальных деталей-заменителей, не уступающих качеством и позволяющих вам не переплачивать за “бренд”.
										</p>
									</div>
								</div>
							</div>
							
							<!-- Panel 04 -->
						{{--	<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFour">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse02-4" aria-expanded="false" aria-controls="collapse02-4"> Our Goals </a>
									</h4>
								</div>
								<div id="collapse02-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="true">
									<div class="panel-body"> Duis dapibus aliquam mi, eget euismod scelerisque ut. Vivamus at elit quis urna adipiscing , Curabitur vitae velit in neque dictum blansadit. Duis dapibus aliquam mi, eget euismod sceler ut.Duis dapibus aliquam mi, eget euismod scelseerisque at elit quis urna adipiscing , Curabitur vitae velit in neque dictum blandit. Duis dapibus aliqiuam mi, egeet euismod sceler ut.
										Duis dapibus aliquam mi, eget euismod scelerisque ut. Vivamus at elit quis urna adipiscing , Curabitur vitae velit in neque dictum blansadit. Duis dapibus aliquam mi, eget euismod sceler ut.Duis dapibus aliquam mi, eget euismod scelseerisque at elit quis urna adipiscing , Curabitur vitae velit in neque dictum blandit. egeet euismod sceler ut. </div>
								</div>
							</div>--}}
						</div>
						<!-- .accordion end -->
					</div>
					<!-- .about-accordion end -->
				</div>
				<!-- .col-md-6 end -->
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="heading">
						<p class="subheading">Мы лучшие если вы с нами</p>
						<h2>Плюсы</h2>
					</div>
					<!-- .heading end -->
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="feature-panel">
								<div class="feature-icon">
									<i class="icon icon-Time"></i>
								</div>
								<h4 class="text-uppercase">Доступны 24 часа</h4>
								<p>Заказ деталей можно осуществлять 24 часа в сутки.</p>
							</div>
						</div>
						<!-- .col-md-6 end -->
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="feature-panel">
								<div class="feature-icon">
									<i class="icon icon-Shield"></i>
								</div>
								<h4 class="text-uppercase">Опытные сотрудникик</h4>
								<p>Позволяют удовлетворить любой спрос</p>
							</div>
						</div>
						<!-- .col-md-6 end -->
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="feature-panel mb-0">
								<div class="feature-icon">
									<i class="icon icon-Wallet"></i>
								</div>
								<h4 class="text-uppercase">Доступные цены</h4>
								<p>Большой выбор поставщиков позволяет подобрать товар под любой "кошелек"</p>
							</div>
						</div>
						<!-- .col-md-6 end -->
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="feature-panel mb-0">
								<div class="feature-icon">
									<i class="icon icon-Star"></i>
								</div>
								<h4 class="text-uppercase">Скидки</h4>
								<p>Действует система скидок постоянным покупателям</p>
							</div>
						</div>
					</div>
				</div>
				<!-- .col-md-6 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	<!-- #featured1 end -->
	
	<!-- Blog
============================================= -->
	<section id="blog" class="blog blog-grid bg-gray">
		<div class="container heading">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<p class="subheading">Новости</p>
					<h2>Последние</h2>
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
			
			<div class="row heading-desc">
				<div class="col-xs-12 col-sm-12 col-md-10">
					<p>Появилась возможность привозить шины и диски под заказ. Цены вас приятно удивят.</p>
				</div>
				<!-- .col-md-10 end -->
				<div class="col-xs-12 col-sm-12 col-md-2">
					<a class="btn btn-primary btn-block" href="https://vk.com/avtoboxnk">Все новости</a>
				</div>
				<!-- .col-md-2 end -->
			</div>
			<!-- .row end -->
			
		</div>
		<!-- .container end -->
{{--
		<div class="container">
			<div class="row">
				<!-- Entry Article #1 -->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="entry">
						<div class="entry-img">
							<a href="#">
							<img src="assets/images/blog/grid/1.jpg" alt="Entry Title">
							</a>
						</div>
						<!-- .entry-img end -->
						<div class="entry-content">
							<div class="entry-format">
								<i class="fa fa-image"></i>
							</div>
							<div class="entry-title">
								<h3>
									<a href="#">Framing and Insulating Walls In Warehouse and Corporate</a>
								</h3>
							</div>
							<!-- .entry-title end -->
							<ul class="entry-meta list-inline clearfix">
								<li class="entry-date">On: <span>Feb 12, 2015</span>
								</li>
								<li class="entry-author">By:
									<a href="#">Begha</a>
								</li>
								<li class="entry-num-comments">Comments:
									<a href="#">45</a>
								</li>
							</ul>
							<!-- .entry-meta end -->
							<div class="entry-snippet">
								<p>Duis dapibus aliquam mi, et euismod scelerisque ut. Vivamus elit quis urna adipiscing, Duis dapibus aliquam mi, et euismod scelerisque ut. Vivamus elit quis urna adipiscing ...</p>
							</div>
							<!-- .entry-snippet end -->
						</div>
						<!-- .entry-content end -->
					</div>
					<!-- .entry end -->
				</div>
				<!-- .col-md-4 end -->
				
				<!-- Entry Article #2 -->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="entry">
						<div class="entry-img">
							<a href="#">
							<img src="assets/images/blog/grid/2.jpg" alt="Entry Title">
							</a>
						</div>
						<!-- .entry-img end -->
						<div class="entry-content">
							<div class="entry-format">
								<i class="fa fa-youtube-play"></i>
							</div>
							<div class="entry-title">
								<h3>
									<a href="#">Framing and Insulating Walls In Warehouse and Corporate</a>
								</h3>
							</div>
							<!-- .entry-title end -->
							<ul class="entry-meta list-inline clearfix">
								<li class="entry-date">On: <span>Feb 12, 2015</span>
								</li>
								<li class="entry-author">By:
									<a href="#">Begha</a>
								</li>
								<li class="entry-num-comments">Comments:
									<a href="#">45</a>
								</li>
							</ul>
							<!-- .entry-meta end -->
							<div class="entry-snippet">
								<p>Duis dapibus aliquam mi, et euismod scelerisque ut. Vivamus elit quis urna adipiscing, Duis dapibus aliquam mi, et euismod scelerisque ut. Vivamus elit quis urna adipiscing ...</p>
							</div>
							<!-- .entry-snippet end -->
						</div>
						<!-- .entry-content end -->
					</div>
					<!-- .entry end -->
				</div>
				<!-- .col-md-4 end -->
				
				<!-- Entry Article #3 -->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="entry">
						<div class="entry-img">
							<a href="#">
							<img src="assets/images/blog/grid/3.jpg" alt="Entry Title">
							</a>
						</div>
						<!-- .entry-img end -->
						<div class="entry-content">
							<div class="entry-format">
								<i class="fa fa-image"></i>
							</div>
							<div class="entry-title">
								<h3>
									<a href="#">Framing and Insulating Walls In Warehouse and Corporate</a>
								</h3>
							</div>
							<!-- .entry-title end -->
							<ul class="entry-meta list-inline clearfix">
								<li class="entry-date">On: <span>Feb 12, 2015</span>
								</li>
								<li class="entry-author">By:
									<a href="#">Begha</a>
								</li>
								<li class="entry-num-comments">Comments:
									<a href="#">45</a>
								</li>
							</ul>
							<!-- .entry-meta end -->
							<div class="entry-snippet">
								<p>Duis dapibus aliquam mi, et euismod scelerisque ut. Vivamus elit quis urna adipiscing, Duis dapibus aliquam mi, et euismod scelerisque ut. Vivamus elit quis urna adipiscing ...</p>
							</div>
							<!-- .entry-snippet end -->
						</div>
						<!-- .entry-content end -->
					</div>
					<!-- .entry end -->
				</div>
				<!-- .col-md-4 end -->
			</div>
			<!-- .row end -->
		</div>
--}}
		<!-- .container end -->
	</section>
	<!-- #blog end -->
	
	<!-- Team
============================================= -->
{{--
	<section id="team" class="team">
		<div class="container heading">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<p class="subheading">Creatives</p>
					<h2>Our Team</h2>
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
			
			<div class="row heading-desc">
				<div class="col-xs-12 col-sm-12 col-md-10">
					<p>Car Shop is a business theme. Perfectly suited for Auto Mechanic, Car Repair Shops, Car Wash, Garages, Automobile Mechanicals, Mechanic Workshops, Auto Painting, Auto Centres.</p>
				</div>
				<!-- .col-md-10 end -->
				<div class="col-xs-12 col-sm-12 col-md-2">
					<a class="btn btn-primary btn-block" href="#">Check All Creatives</a>
				</div>
				<!-- .col-md-2 end -->
			</div>
			<!-- .row end -->
			
		</div>
		<!-- .container end -->
		<div class="container">
			<div class="row">
				<!-- Member #1 -->
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="member">
						<div class="member-img">
							<img src="assets/images/team/1.jpg" alt="member"/>
							<div class="member-hover">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								<div class="member-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<!-- .member-hover end -->
						</div>
						<!-- .member-img end -->
						<div class="member-info">
							<h5>Mahmoud Baghagho</h5>
							<h6>Art Director</h6>
						</div>
						<!-- .memebr-info end -->
					</div>
					<!-- .member end -->
				</div>
				
				<!-- Member #2 -->
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="member">
						<div class="member-img">
							<img src="assets/images/team/2.jpg" alt="member"/>
							<div class="member-hover">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								<div class="member-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<!-- .member-hover end -->
						</div>
						<!-- .member-img end -->
						<div class="member-info">
							<h5>Ahmed abd - Alhaleem</h5>
							<h6>Branding</h6>
						</div>
						<!-- .memebr-info end -->
					</div>
					<!-- .member end -->
				</div>
				
				<!-- Member #3 -->
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="member">
						<div class="member-img">
							<img src="assets/images/team/3.jpg" alt="member"/>
							<div class="member-hover">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								<div class="member-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<!-- .member-hover end -->
						</div>
						<!-- .member-img end -->
						<div class="member-info">
							<h5>Mostafa Amin</h5>
							<h6>Graphic Design</h6>
						</div>
						<!-- .memebr-info end -->
					</div>
					<!-- .member end -->
				</div>
				
				<!-- Member #4 -->
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="member">
						<div class="member-img">
							<img src="assets/images/team/4.jpg" alt="member"/>
							<div class="member-hover">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								<div class="member-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<!-- .member-hover end -->
						</div>
						<!-- .member-img end -->
						<div class="member-info">
							<h5>Ahmed Hassan</h5>
							<h6>Web Developing</h6>
						</div>
						<!-- .memebr-info end -->
					</div>
					<!-- .member end -->
				</div>
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
--}}
	<!-- #team end -->
	
	<!--  Testimonials
============================================= -->
{{--
	<section id="testimonials" class="testimonial  bg-gray">
		<div class="container heading">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<p class="subheading">People Say</p>
					<h2>Testimonials</h2>
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
			
			<div class="row heading-desc">
				<div class="col-xs-12 col-sm-12 col-md-10">
					<p>Car Shop is a business theme. Perfectly suited for Auto Mechanic, Car Repair Shops, Car Wash, Garages, Automobile Mechanicals, Mechanic Workshops, Auto Painting, Auto Centres.</p>
				</div>
				<!-- .col-md-10 end -->
				<div class="col-xs-12 col-sm-12 col-md-2">
					<a class="btn btn-primary btn-block" href="#">Check All talks</a>
				</div>
				<!-- .col-md-2 end -->
			</div>
			<!-- .row end -->
			
		</div>
		<!-- .container end -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div id="testimonial-oc" class="testimonial-carousel">
						
						<!-- testimonial item #1 -->
						<div class="testimonial-item">
							<div class="testimonial-content">
								<i class="fa fa-quote-left"></i>
								<p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum tristique vel, eleifend sed turpis.</p>
							</div>
							<div class="testimonial-meta">
								<img src="assets/images/testimonials/1.jpg" alt="author">
								<div class="testimonial-bio">
									<h6>Begha</h6>
									<p>UI Designer, 7oroof Agency</p>
								</div>
							</div>
						</div>
						<!-- .testimonial-item end -->
						
						<!-- testimonial item #2 -->
						<div class="testimonial-item">
							<div class="testimonial-content">
								<i class="fa fa-quote-left"></i>
								<p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum tristique vel, eleifend sed turpis.</p>
							</div>
							<div class="testimonial-meta">
								<img src="assets/images/testimonials/2.jpg" alt="author">
								<div class="testimonial-bio">
									<h6>Omar Elnagar</h6>
									<p>Civil Engineer , 7oroof Agency</p>
								</div>
							</div>
						</div>
						<!-- .testimonial-item end -->
						
						<!-- testimonial item #3 -->
						<div class="testimonial-item">
							<div class="testimonial-content">
								<i class="fa fa-quote-left"></i>
								<p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum tristique vel, eleifend sed turpis.</p>
							</div>
							<div class="testimonial-meta">
								<img src="assets/images/testimonials/3.jpg" alt="author">
								<div class="testimonial-bio">
									<h6>Ahmed Abd Alhaleem</h6>
									<p>Graphic Designer, 7oroof Agency</p>
								</div>
							</div>
						</div>
						<!-- .testimonial-item end -->
						
						<!-- testimonial item #4 -->
						<div class="testimonial-item">
							<div class="testimonial-content">
								<i class="fa fa-quote-left"></i>
								<p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum tristique vel, eleifend sed turpis.</p>
							</div>
							<div class="testimonial-meta">
								<img src="assets/images/testimonials/2.jpg" alt="author">
								<div class="testimonial-bio">
									<h6>ayman fikry</h6>
									<p>web developer, 7oroof Agency</p>
								</div>
							</div>
						</div>
						<!-- .testimonial-item end -->
						
						<!-- testimonial item #5 -->
						<div class="testimonial-item">
							<div class="testimonial-content">
								<i class="fa fa-quote-left"></i>
								<p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum tristique vel, eleifend sed turpis.</p>
							</div>
							<div class="testimonial-meta">
								<img src="assets/images/testimonials/3.jpg" alt="author">
								<div class="testimonial-bio">
									<h6>mohamed fikry</h6>
									<p>web developer, 7oroof Agency</p>
								</div>
							</div>
						</div>
						<!-- .testimonial-item end -->
						
						<!-- testimonial item #6 -->
						<div class="testimonial-item">
							<div class="testimonial-content">
								<i class="fa fa-quote-left"></i>
								<p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum tristique vel, eleifend sed turpis.</p>
							</div>
							<div class="testimonial-meta">
								<img src="assets/images/testimonials/2.jpg" alt="author">
								<div class="testimonial-bio">
									<h6>Begha</h6>
									<p>UI Designer, 7oroof Agency</p>
								</div>
							</div>
						</div>
						<!-- .testimonial-item end -->
						
						<!-- testimonial item #7 -->
						<div class="testimonial-item">
							<div class="testimonial-content">
								<i class="fa fa-quote-left"></i>
								<p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum tristique vel, eleifend sed turpis.</p>
							</div>
							<div class="testimonial-meta">
								<img src="assets/images/testimonials/2.jpg" alt="author">
								<div class="testimonial-bio">
									<h6>Omar Elnagar</h6>
									<p>Civil Engineer , 7oroof Agency</p>
								</div>
							</div>
						</div>
						<!-- .testimonial-item end -->
						
						<!-- testimonial item #8 -->
						<div class="testimonial-item">
							<div class="testimonial-content">
								<i class="fa fa-quote-left"></i>
								<p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum tristique vel, eleifend sed turpis.</p>
							</div>
							<div class="testimonial-meta">
								<img src="assets/images/testimonials/3.jpg" alt="author">
								<div class="testimonial-bio">
									<h6>Ahmed Abd Alhaleem</h6>
									<p>Graphic Designer, 7oroof Agency</p>
								</div>
							</div>
						</div>
						<!-- .testimonial-item end -->
						
						<!-- testimonial item #9 -->
						<div class="testimonial-item">
							<div class="testimonial-content">
								<i class="fa fa-quote-left"></i>
								<p>Lorem ipsum dolor sit consctetur adipiscing elit. Se lore quam, adipiscing in condimentum tristique vel, eleifend sed turpis.</p>
							</div>
							<div class="testimonial-meta">
								<img src="assets/images/testimonials/2.jpg" alt="author">
								<div class="testimonial-bio">
									<h6>ayman fikry</h6>
									<p>web developer, 7oroof Agency</p>
								</div>
							</div>
						</div>
						<!-- .testimonial-item end -->
						
					</div>
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
--}}
	<!-- #testimonials end -->
	
	<!-- Clients
============================================= -->
{{--
	<section id="clients" class="clients">
		<div class="container heading">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<p class="subheading">They Trust Us</p>
					<h2>Our Clients</h2>
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
			
			<div class="row heading-desc">
				<div class="col-xs-12 col-sm-12 col-md-10">
					<p>Car Shop is a business theme. Perfectly suited for Auto Mechanic, Car Repair Shops, Car Wash, Garages, Automobile Mechanicals, Mechanic Workshops, Auto Painting, Auto Centres.</p>
				</div>
				<!-- .col-md-10 end -->
				<div class="col-xs-12 col-sm-12 col-md-2">
					<a class="btn btn-primary btn-block" href="#">Check All Clients</a>
				</div>
				<!-- .col-md-2 end -->
			</div>
			<!-- .row end -->
			
		</div>
		<!-- .container end -->
		<div class="container">
			<div class="clients-bg">
				<div class="row">
					<!-- Client #1 -->
					<div class="col-xs-12 col-sm-6 col-md-2 client">
						<img src="assets/images/clients/1.png" alt="client">
					</div>
					<!-- .col-md-2 end -->
					
					<!-- Client #2 -->
					<div class="col-xs-12 col-sm-6 col-md-2 client">
						<img src="assets/images/clients/2.png" alt="client">
					</div>
					<!-- .col-md-2 end -->
					
					<!-- Client #3 -->
					<div class="col-xs-12 col-sm-6 col-md-2 client">
						<img src="assets/images/clients/3.png" alt="client">
					</div>
					<!-- .col-md-2 end -->
					
					<!-- Client #4 -->
					<div class="col-xs-12 col-sm-6 col-md-2 client">
						<img src="assets/images/clients/4.png" alt="client">
					</div>
					<!-- .col-md-2 end -->
					
					<!-- Client #5 -->
					<div class="col-xs-12 col-sm-6 col-md-2 client">
						<img src="assets/images/clients/5.png" alt="client">
					</div>
					<!-- .col-md-2 end -->
					
					<!-- Client #6 -->
					<div class="col-xs-12 col-sm-6 col-md-2 client">
						<img src="assets/images/clients/6.png" alt="client">
					</div>
					<!-- .col-md-2 end -->
				</div>
				<!-- .row end -->
			</div>
		</div>
		<!-- .container end -->
	</section>
--}}
	<!-- #clients end -->
	
	<!-- Footer #1
============================================= -->
	{{--<footer id="footer" class="footer footer-1">
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
								<h4>Free Shipping</h4>
								<p>Lorem ipsum dolor siamet, adipiscing condimen tristique vel.</p>
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
								<h4>Fair Prices</h4>
								<p>Lorem ipsum dolor siamet, adipiscing condimen tristique vel.</p>
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
								<h4>Secure Shopping</h4>
								<p>Lorem ipsum dolor siamet, adipiscing condimen tristique vel.</p>
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
								<h4>Customer Support</h4>
								<p>Lorem ipsum dolor siamet, adipiscing condimen tristique vel.</p>
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
					<div class="col-xs-12 col-sm-12 col-md-4 footer-widget-about">
						<div class="footer-widget-title">
							<h5>About Us</h5>
						</div>
						<div class="footer-widget-content">
							<p>Lorem ipsum dolor sit amet, adipiscing condimentum tristique vel, eleifend sed turpis. Amet, consectetur adipising elit Integer.</p>
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
					
					<div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
						<div class="footer-widget-title">
							<h5>My Account</h5>
						</div>
						<div class="footer-widget-content">
							<ul class="list-unstyled">
								<li>
									<a href="#">My Account</a>
								</li>
								<li>
									<a href="#">Order History</a>
								</li>
								<li>
									<a href="#">Wish List</a>
								</li>
								<li>
									<a href="#">Newsletter</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- .col-md-2 end -->
					
					<div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
						<div class="footer-widget-title">
							<h5>Information</h5>
						</div>
						<div class="footer-widget-content">
							<ul class="list-unstyled">
								<li>
									<a href="#">About Us</a>
								</li>
								<li>
									<a href="#">Delivery Information</a>
								</li>
								<li>
									<a href="#">Privacy Policy</a>
								</li>
								<li>
									<a href="#">Terms & Conditions</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- .col-md-2 end -->
					
					<div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
						<div class="footer-widget-title">
							<h5>Customer Service</h5>
						</div>
						<div class="footer-widget-content">
							<ul class="list-unstyled">
								<li>
									<a href="#">Contact Us</a>
								</li>
								<li>
									<a href="#">Returns</a>
								</li>
								<li>
									<a href="#">Site Map</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- .col-md-2 end -->
					
					<div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
						<div class="footer-widget-title">
							<h5>Extras</h5>
						</div>
						<div class="footer-widget-content">
							<ul class="list-unstyled">
								<li>
									<a href="#">Brands</a>
								</li>
								<li>
									<a href="#">Gift Vouchers</a>
								</li>
								<li>
									<a href="#">Affiliates</a>
								</li>
								<li>
									<a href="#">Specials</a>
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
							<p>Car Shop &copy; All Rights Reserved. With Made With Love By
								<a href="http://themeforest.net/user/7oroof/portfolio?ref=7oroof">7oroof.com</a>
							</p>
							<ul class="list-inline mb-0">
								<li>
									<a href="#">Privacy Policy</a>
								</li>
								<li>
									<a href="#">Terms of Use</a>
								</li>
								<li>
									<a href="#">Stores</a>
								</li>
								<li>
									<a href="#">About Us</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="payment-methods text-right">
							<ul class="list-inline mb-0">
								<li><img src="assets/images/footer/visa.png" alt="payment"></li>
								<li><img src="assets/images/footer/mastercard.png" alt="payment"></li>
								<li><img src="assets/images/footer/american-express.png" alt="payment"></li>
								<li><img src="assets/images/footer/delta.png" alt="payment"></li>
								<li><img src="assets/images/footer/cirrus.png" alt="payment"></li>
								<li><img src="assets/images/footer/paypal.png" alt="payment"></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- .container end -->
		</div>
		<!-- .footer-copyright end -->
	</footer>--}}
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
{{--
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/functions.js"></script>
</body>
</html>--}}
@endsection