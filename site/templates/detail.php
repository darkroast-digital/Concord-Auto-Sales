<?php snippet('header') ?>

	<main class="main">
		
		<div class="lightbox">
			<div class="lightbox__content">
			<div class="prev arrow"><i class="fa fa-angle-left"></i></div>
				<div class="next arrow"><i class="fa fa-angle-right"></i></div>
				<div class="lightbox__feature">
					<img src="<?php echo $page->images()->sortBy('sort', 'asc')->first()->url() ?>">
				</div>
			</div>
			
			<div class="overlay"></div>
		</div>

		<?php snippet('nav-off') ?>

			<?php snippet('title') ?>

				<?php snippet('breadcrumbs') ?>

					<div class="details">
						<section class="details__title">
							<div class="details__title--info">
								<h2><?php echo $page->title()->html() ?></h2>
								<h4 class="price"><?php echo $page->price()->html() ?></h4>
							</div>
							<div class="seperator">
								<div class="triangle"></div>
							</div>
						</section>

						<!-- End Title -->

						<section class="details__gallery">
							<div class="images">
								<div class="images__featured">
									<img src="<?php echo $page->images()->sortBy('sort', 'asc')->first()->url() ?>">
								</div>
								<ul class="images__nav">
									<?php foreach($page->images() as $image): ?>
										<li><img src="<?php echo $image->url() ?>" alt=""></li>
										<?php endforeach ?>
								</ul>
							</div>

							<!-- End Gallery Images -->

							<div class="description">
								<h6>Description</h6>
								<ul>
									<li><span>Make</span><span><?php echo $page->title()->html() ?></span></li>
									<li><span>Kilometres</span><span><?php echo $page->kilos()->html() ?></span></li>
									<li><span>Body Type</span><span><?php echo $page->type()->html() ?></span></li>
									<li><span>Style/ Trim</span><span><?php echo $page->style()->html() ?></span></li>
									<li><span>Engine</span><span><?php echo $page->engine()->html() ?></span></li>
									<li><span>Drivetrain</span><span><?php echo $page->drivetrain()->html() ?></span></li>
									<li><span>Transmission</span><span><?php echo $page->transmition()->html() ?></span></li>
									<li><span>Exterior Colour</span><span><?php echo $page->colour()->html() ?></span></li>
									<li><span>Interior Colour</span><span><?php echo $page->interior()->html() ?></span></li>
									<li><span>Fuel Type</span><span><?php echo $page->fuel()->html() ?></span></li>
								</ul>
							</div>

							<!-- End Gallery Description -->

						</section>

						<!-- End Gallery -->

						<section class="details__description">

							<div class="details__features">
								<div class="details__features--stats">
									<ul>
										<li>
										<span class="icon">
											<img src="/assets/img/stats/1.png">
										</span>
										<?php echo $page->condition()->html() ?></li>
										<li>
										<span class="icon">
											<img src="/assets/img/stats/2.png">
										</span>
										<?php echo $page->kilos()->html() ?></li>
										<li>
										<span class="icon">
											<img src="/assets/img/stats/3.png">
										</span>
										<?php echo $page->transmition()->html() ?></li>
										<li>
										<span class="icon">
											<img src="/assets/img/stats/4.png">
										</span>
										<?php echo $page->drivetrain()->html() ?></li>
										<li>
										<span class="icon">
											<img src="/assets/img/stats/5.png">
										</span>
										<?php echo $page->fuel()->html() ?></li>
										<li>
										<span class="icon">
											<img src="/assets/img/stats/6.png">
										</span>
										<?php echo $page->type()->html() ?></li>
									</ul>
								</div>
								<div class="details__features--description">
									<h6>Vehicle Overview</h6>
									<div class="seperator"><div class="triangle"></div></div>
									<?php echo $page->text()->kirbytext() ?>
								</div>
							</div>

							<div class="details__contact">
								<h6>Inquire</h6>
								<div class="form__phone">
									<i class="fa fa-phone"></i>
									<div class="phone__details">
										<h5>519-682-1400</h5>
										<p>If you have questions, feel free to call.</p>
									</div>
								</div>
								<?php snippet('form-sidebar') ?>
							</div>

						</section>

						<!-- End Features -->

						<section class="related">

							<h6>Find Out More</h6>
							<h4>Related Vehicles On Sale</h4>

							<div class="inventory">

								<?php foreach(page('inventory')->children()->visible()->filterBy('tags', 'car', ',')->limit(4) as $inventory): ?>

									<div class="product">
										<?php if($image = $inventory->images()->sortBy('sort', 'asc')->first()): ?>
											<a class="product__image" href="<?php echo $inventory->url() ?>">
												<span class="product__price"><?php echo $inventory->price()->html() ?></span>
												<img src="<?php echo $image->url() ?>" alt="<?php echo $inventory->title()->html() ?>">
												<span class="product__title">
							      							<?php echo $inventory->title()->html() ?>
							      						</span>
											</a>
											<?php endif ?>
												<div class="seperator">
													<div class="triangle"></div>
												</div>
												<p class="product__kilometres">
													<?php echo $inventory->kilos()->html() ?>
												</p>
												<ul class="product__details">
													<li>
														<?php echo $inventory->condition()->html() ?>
													</li>
													<li>
														<?php echo $inventory->year()->html() ?>
													</li>
													<li>
														<?php echo $inventory->transmition()->html() ?>
													</li>
													<li>
														<?php echo $inventory->colour()->html() ?>
													</li>
													<li>
														<?php echo $inventory->type()->html() ?>
													</li>
												</ul>
									</div>
									<?php endforeach ?>
							</div>
						</section>

						<!-- End Related -->

					</div>


	</main>

	<?php snippet('footer') ?>
