@extends('layouts.home')
@section('acontent')
	<!-- Page Title
============================================= -->
	<section id="page-title" class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8">
					<h1>Доставка</h1>
				</div>
				<!-- .col-md-8 end -->
				<div class="col-xs-12 col-sm-12 col-md-4">
					<ol class="breadcrumb text-right">
						<li>
							<a href="{{url('/home-1')}}">Главная</a>
						</li>
						<li class="active">Доставка</li>
					</ol>
				</div>
				<!-- .col-md-4 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	<!-- #page-title end -->
	
	<!-- FQA Section
============================================= -->
	<section id="faqss" class="faqs faqs-1">
		<div class="container">
			<div class="row">
				<div class="col-xs-12  col-sm-12  col-md-9">
					<div class="panel-group accordion" id="accordion02" role="tablist" aria-multiselectable="true">
						
						<!-- question #1 -->
						<div class="panel">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title"><i class="fa fa-question-circle"></i>
									<a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse01" aria-expanded="true" aria-controls="collapse01">Самовывоз </a>
								</h4>
							</div>
							<div id="collapse01" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">Вы можете забрать свой заказ самостоятельно по адресу:РТ, г.Нижнекамск, проспект Мира 63Б, ТЦ Ювена. (<a href="{{url('/contacts')}}")>Здесь</a>)</div>
							</div>
						</div>
						<!-- .panel end -->
						
						<!-- question #2 -->
						<div class="panel">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title"><i class="fa fa-question-circle"></i>
									<a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse02" aria-expanded="false" aria-controls="collapse02">Доставка почтой России</a>
								</h4>
							</div>
							<div id="collapse02" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body"> Доставка осуществляется наложенным платежом либо после предварительной оплаты. Срок доставки 4-15 дней, но фактически бывают более длительные задержки.
									Для точного расчета вы можете обратиться к менеджеру нашего магазина. Посылку можно будет забрать в своем почтовом отделении, предъявив извещение, которое придет вам в почтовый ящик.
									Если извещения долго нет, обязательно свяжитесь с почтовым отделением и узнайте, не пришла ли посылка (случается, что извещения не доходят). Для вашего спокойствия имеется возможность отслеживания посылки с помощью онлайн-сервиса. Достаточно ввести в поле запроса идентификационный номер, присвоенный при отправке.
									<p>1. Доставка наложенным платежом Почтой России. Преимущество данного метода доставки заключается в том, что вы оплачиваете вашу покупку наличными средствами при получении на почте. Есть и недостатки — вам придется заплатить повышенную стоимость доставки и комиссионный сбор за наложенный платёж. Итоговая цена доставки, при этом, составит более 500 рублей.
									</p>
									<p>	2. Доставка Почтой России 1 класса по предоплате. Преимущество же этого метода заключается в существенной экономии: вам не нужно будет оплачивать комиссию почты России, а доставка Почтой России вам обойдется со скидкой 55%!</div>
								</p>
							</div>
						</div>
						<!-- .panel end -->
						
						<!-- question #3 -->
						<div class="panel">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title"><i class="fa fa-question-circle"></i>
									<a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse03" aria-expanded="false" aria-controls="collapse03"> Доставка транспортной компанией</a>
								</h4>
							</div>
							<div id="collapse03" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">Мы отравим вам посылку транспортной компанией, после предварительной оплаты. Для уточнения доставки этим способом свяжитесь с менеджером.
								Доступны следующие транспортые компании:
								<p>- ПЭК (https://pecom.ru) </p>
								<p>- СДЭК (https://www.cdek.ru)</p>
									<p>- Деловые линии (https://www.dellin.ru)</p>
									<p>- КИТ (https://www.tk-kit.ru)</p>




								</div>
							</div>
						</div>
						<!-- .panel end -->
						
						<!-- question #4 -->
{{--
						<div class="panel">
							<div class="panel-heading" role="tab" id="heading4">
								<h4 class="panel-title"><i class="fa fa-question-circle"></i>
									<a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse04" aria-expanded="false" aria-controls="collapse04"> Can I offer my items for free on a promotional basis? </a>
								</h4>
							</div>
							<div id="collapse04" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
								<div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.Lorem ipsum dolor sit amet, consectetur elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. </div>
							</div>
						</div>
--}}
						<!-- .panel end -->
						


					</div>
					<!-- End .Accordion-->
				</div>
				<!-- .col-md-8 end -->
				<div class="col-xs-12  col-sm-12  col-md-3 sidebar">
					<!-- Categories
============================================= -->
{{--
					<div class="widget widget-categories">
						<div class="widget-title">
							<h5>categories</h5>
						</div>
						<div class="widget-content">
							<ul class="list-unstyled">
								<li>
									<a href="#"><i class="fa fa-angle-double-right"></i>Branding<span>(5)</span></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-angle-double-right"></i>Typography<span>(77)</span></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-angle-double-right"></i>UI Design<span>(6)</span></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-angle-double-right"></i>Wordpress<span>(11)</span></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-angle-double-right"></i>Development<span>(54)</span></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-angle-double-right"></i>Photography<span>(22)</span></a>
								</li>
							</ul>
						</div>
					</div>
--}}
					<!-- .widget-categories end -->
					
					<!-- Recent Posts
============================================= -->
{{--
					<div class="widget widget-recent">
						<div class="widget-title">
							<h5>recent posts</h5>
						</div>
						<div class="widget-content">
							<div class="entry">
								<img src="assets/images/sidebar/1.jpg" alt="title"/>
								<div class="entry-desc">
									<div class="entry-title">
										<a href="#">home renovations with modern style</a>
									</div>
									<div class="entry-meta">
										<div>on: <span>Dec 10, 2014</span></div>
										<div>by:
											<a href="#"> Begha</a>
										</div>
									</div>
								</div>
							</div>
							<!-- .recent-entry end -->
							
							<div class="entry">
								<img src="assets/images/sidebar/2.jpg" alt="title"/>
								<div class="entry-desc">
									<div class="entry-title">
										<a href="#">make your home your paradise</a>
									</div>
									<div class="entry-meta">
										<div>on: <span>Dec 10, 2014</span></div>
										<div>by:
											<a href="#"> Begha</a>
										</div>
									</div>
								</div>
							</div>
							<!-- .recent-entry end -->
							
							<div class="entry">
								<img src="assets/images/sidebar/3.jpg" alt="title"/>
								<div class="entry-desc">
									<div class="entry-title">
										<a href="#">How Important is Light in the Living Room?</a>
									</div>
									<div class="entry-meta">
										<div>on: <span>Dec 10, 2014</span></div>
										<div>by:
											<a href="#"> Begha</a>
										</div>
									</div>
								</div>
							</div>
							<!-- .recent-entry end -->
							
						</div>
						<!-- .widget-content end -->
					</div>
--}}
					<!-- .widget-recent end -->
					
					<!-- Tag Clouds
============================================= -->
{{--
					<div class="widget widget-tags">
						<div class="widget-title">
							<h5>tag clouds</h5>
						</div>
						<div class="widget-content">
							<a href="#">responsive</a>
							<a href="#">modern</a>
							<a href="#">blog</a>
							<a href="#">corporate</a>
							<a href="#">mount</a>
							<a href="#">business</a>
							<a href="#">awesome</a>
							<a href="#">marketing</a>
							<a href="#">fresh</a>
						</div>
					</div>
--}}
					<!-- .widget-tags end -->
					
					<!-- Flickr Stream
============================================= -->
{{--
					<div class="widget widget-flickr">
						<div class="widget-title">
							<h5>Flickr Stream</h5>
						</div>
						<div class="widget-content">
							<div id="flickr-feed"></div>
							<a class="flickr-more" href="#">View Stream On Flickr</a>
						</div>
					</div>
--}}
					<!-- .widget-flickr end -->
				</div>
				<!-- .col-md-3 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	
	<!-- Footer #1
============================================= -->
	<footer id="footer" class="footer footer-1">
		<!-- Footer Info
	============================================= -->
{{--
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
--}}
		<!-- .footer-info end -->
		
		<!-- Footer Widget
	============================================= -->
{{--
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
--}}
		<!-- .footer-widget end -->
		
		<!-- Footer Bar
	============================================= -->
{{--
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
--}}
		<!-- .footer-copyright end -->
{{--	</footer>
</div>--}}
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
{{--<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/functions.js"></script>
</body>
</html>--}}



@endsection