<?php snippet('header') ?>

	<main class="main">

		<?php snippet('nav-off') ?>

			<?php snippet('title') ?>

				<?php snippet('breadcrumbs') ?>

					<section class="map">
						<div class="map__container"></div>
						<div class="map__zoom-in"></div>
						<div class="map__zoom-out"></div>
					</section>

					<!-- End Map -->

					<div class="contact">
						<div class="contact__form">
							<h6>Contact Form</h6>
							<div class="seperator">
								<div class="triangle"></div>
							</div>
							<p>If you have any questions use the form below, and our customer service professionals will contact you as soon as possible.


						<?php snippet('form') ?>

						</div>
						<div class="contact__details">
							<h6>Opening Hours</h6>
							<div class="detail__card">
								<ul>
									<li><h6>Sales Department</h6></li>
									<li>Mon-Fri : 9:00am - 6:00pm</li>
									<li>Saturday : 10:00am - 4:00pm</li>
									<li>Sunday : Closed</li>
									<li><h6>Service Department</h6></li>
									<li>Mon-Fri : 9:00am - 5:00pm</li>
									<li>Saturday : 10:00am - 3:00pm</li>
									<li>Sunday : Closed</li>

								</ul>
							</div>
							<h6>Contact Information</h6>
							<div class="detail__card">
								<ul>
									<li><i class="fa fa-home"></i><strong>Address</strong>76 Woolwich St. N, Breslau ON</li>
									<li><h6>Sales</h6></li>
									<li><i class="fa fa-phone"></i><strong>Phone</strong>Office - 1-519-648-9595 | Cell - 519-760-2400</li>
									<li><i class="fa fa-envelope"></i><strong>Email</strong>info@concordautosales.com</li>
									<li><h6>Service</h6></li>
									<li><i class="fa fa-phone"></i><strong>Phone</strong>1-519-648-2030</li>
									<li><i class="fa fa-envelope"></i><strong>Email</strong>service@concordautosales.com</li>
								</ul>
							</div>
						</div>
					</div>

	</main>

	<footer class="footer">
		<div class="footer__info">
			<h6>Opening Hours</h6>
			<p><strong>Sales Department</strong></p>
			<ul>
				<li>Mon-Fri : 9:00am - 6:00pm</li>
				<li>Saturday: 10:00am - 4:00pm</li>
				<li>Sunday: Closed</li>
			</ul>
			<p><strong>Service Department</strong></p>
			<ul>
				<li>Mon-Fri : 9:00am - 5:00pm</li>
				<li>Saturday : 10:00am - 3:00pm</li>
				<li>Sunday: Closed</li>
			</ul>
			<h6>About Us</h6>
			<p>Welcome to Concord Auto Sales. We offer a fully stocked inventory of quality used cars and a full service auto repair center which includes collision and accident repair. Come on down and see the difference.
			</p>
			<a href="contact" class="button">Contact Us</a>
		</div>
		<div class="footer__cta">
			<div class="footer__cta--content">
				<div class="spacer"></div>
				<ul>
					<li>Everyday Low Prices</li>
					<li>Extensive Inventory</li>
					<li>Friendly Sales Staff</li>
				</ul>
			</div>
		</div>
		<div class="footer__content">
			<div class="spacer"></div>
			<div class="footer__content--listings">

				<h6>New Listings</h6>

				<?php foreach(page('inventory')->children()->visible()->limit(3) as $inventory): ?>

					<div class="listing">
						<?php if($image = $inventory->images()->sortBy('sort', 'asc')->first()): ?>
							<a href="<?php echo $inventory->url() ?>" class="listing__image">
					<img src="<?php echo $image->url() ?>" alt="<?php echo $inventory->title()->html() ?>">
				</a>
							<?php endif ?>
								<div class="listing__info">
									<p><strong><?php echo $inventory->title()->html() ?></strong></p>
									<p>
										<?php echo $inventory->kilos()->html() ?>
									</p>
								</div>
					</div>

					<?php endforeach ?>

			</div>
			<div class="footer__content--contact">
			<h6>Contact Us</h6>
			<ul>
				<li><i class="fa fa-home"></i><strong>Address</strong>76 Woolwich St. N, Breslau ON</li>
				<li><strong>Sales</strong></li>
				<li><i class="fa fa-phone"></i><strong>Phone</strong>Office - 1-519-648-9595 | Cell - 519-760-2400</li>
				<li><i class="fa fa-envelope"></i><strong>Email</strong>info@concordautosales.com</li>
				<li><strong>Service</strong></li>
				<li><i class="fa fa-phone"></i><strong>Phone</strong>1-519-648-2030</li>
				<li><i class="fa fa-envelope"></i><strong>Email</strong>service@concordautosales.com</li>
			</ul>
		</div>
		<div class="footer__content--contact">
			<div class="contact__map">
				<a href="contact">Open Location Map</a>
			</div>
		</div>
		</div>
		<div class="footer__copyright">
			<div class="footer__copyright--content">
				<div class="footer__copyright--logo">
					<a href="/"><img src="<?php echo url('assets/img/logo.png') ?>" alt="<?php echo $site->title()->html() ?>" draggable="false"/></a>
					<p>&copy;
						<?php echo date("Y") ?> Designed by <a href="darkroast.co">Darkroast Digital</a></p>
				</div>
				<div class="footer__nav">
					<ul class="footer__socials">
						<li><a href="https://www.facebook.com/ConcordAutoSales/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="#0"><i class="fa fa-twitter-square"></i></a></li>
						<li><a href="#0"><i class="fa fa-google-plus-square"></i></a></li>
						<li><a href="#0"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<ul class="footer__navigation">
						<?php foreach($pages->visible() as $p): ?>
							<li>
								<a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
							</li>
							<?php endforeach ?>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!--[if lt IE 9]>
      <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
      <script src="js/polyfill/ie-love.js"></script>
   <![endif]-->
	<!--[if gt IE 8]><!-->
	<script src="../assets/js/jquery-2.1.4.js"></script>
	<!--<![endif]-->
	<script src="../assets/js/polyfill/flexibility.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.1/TweenMax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB55YgcB0YJv6eZ00qfQK2EcWGaX2M7Yv8"></script>
	<script src="../assets/js/map.js"></script>
	<script src="../assets/js/main.js"></script>

	</body>

	<!-- See You Space Cowboy... -->

	</html>
