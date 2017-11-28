	<?php snippet('header') ?>

	<main class="main">

		<?php snippet('nav-off') ?>

			<?php snippet('title') ?>
				
				<?php snippet('breadcrumbs') ?>

				<section class="inventory-products">
					<section class="inventory__sidebar">
						<h6>Refine Your Search</h6>
						<div class="inventory__sidebar--search">
						<form id="filters" method="post">
								<!-- give the select the name of the category to filter by -->
								<label for="make">Select A Make</label>
								<div class="field__container">
									<select name="make">
										<option selected value="">Any Make</option>
										
										<!-- fill the options with colours -->
										<?php foreach($make as $item): ?>
											<!-- no empty items -->
											<?php if(!$item) continue ?>
											
											<!-- set the option to the selected if selected -->
											<option <?php e(isset($data['make']) && $data['make'] == $item, 'selected') ?> value="<?php echo $item ?>"><?php echo $item ?></option>
											
											<?php endforeach ?>
											
									</select>
									</div>
								<!-- End Select -->
								
								<!-- give the select the name of the category to filter by -->
								<label for="model">Select A Model</label>
								<div class="field__container">
									<select name="model">
										<option selected value="">Any Model</option>
										
										<!-- fill the options with colours -->
										<?php foreach($model as $item): ?>
											<!-- no empty items -->
											<?php if(!$item) continue ?>
											
											<!-- set the option to the selected if selected -->
											<option <?php e(isset($data['model']) && $data['model'] == $item, 'selected') ?> value="<?php echo $item ?>"><?php echo $item ?></option>
											
											<?php endforeach ?>
											
									</select>
								</div>
								
								<!-- End Select -->
								
								<!-- give the select the name of the category to filter by -->
								<label for="type">Vehicle Type</label>
								<div class="field__container">
									<select name="type">
										<option selected value="">Any Type</option>
										
										<!-- fill the options with colours -->
										<?php foreach($type as $item): ?>
											<!-- no empty items -->
											<?php if(!$item) continue ?>
											
											<!-- set the option to the selected if selected -->
											<option <?php e(isset($data['type']) && $data['type'] == $item, 'selected') ?> value="<?php echo $item ?>"><?php echo $item ?></option>
											
											<?php endforeach ?>
											
									</select>
								</div>
								
								<!-- End Select -->
								
								<!-- give the select the name of the category to filter by -->
								<label for="colour">Vehicle Colour</label>
								<div class="field__container">
									<select name="colour">
										<option selected value="">Any Colour</option>
										
										<!-- fill the options with colours -->
										<?php foreach($colour as $item): ?>
											<!-- no empty items -->
											<?php if(!$item) continue ?>
											
											<!-- set the option to the selected if selected -->
											<option <?php e(isset($data['colour']) && $data['colour'] == $item, 'selected') ?> value="<?php echo $item ?>"><?php echo $item ?></option>
											
											<?php endforeach ?>
											
									</select>
								</div>
								
								<!-- End Select -->
								
								<!-- give the select the name of the category to filter by -->
								<label for="fuel">Fuel Type</label>
								<div class="field__container">
									<select name="fuel">
										<option selected value="">All Fuel Types</option>
										
										<!-- fill the options with colours -->
										<?php foreach($fuel as $item): ?>
											<!-- no empty items -->
											<?php if(!$item) continue ?>
											
											<!-- set the option to the selected if selected -->
											<option <?php e(isset($data['fuel']) && $data['fuel'] == $item, 'selected') ?> value="<?php echo $item ?>"><?php echo $item ?></option>
											
											<?php endforeach ?>
											
									</select>
								</div>
								
								<!-- End Select -->
								
								<input class="submit" type="submit">
							</form>
						</div>
						<div class="inventory__sidebar--cta">
							<img src="/assets/img/sidebar-img.jpg">
							<div>
								<p>Keep your used car running like new.  Checkout our comprehensive list of auto services.</p>
								<a href="services" class="button">Auto Services</a>
							</div>
						</div>
					</section>

					<section class="inventory-list">
						<?php foreach($products as $products): ?>
						<div class="product">
								<?php if($image = $products->images()->sortBy('sort', 'asc')->first()): ?>
									<a class="product__image" href="<?php echo $products->url() ?>">
									<img src="<?php echo $image->url() ?>" alt="<?php echo $products->title()->html() ?>">
								</a>
									<?php endif ?>
										<a class="product__title" href="<?php echo $products->url() ?>"><?php echo $products->title() ?></a>
										<div class="seperator">
											<div class="triangle"></div>
										</div>
										<p>
											<?php echo excerpt($products->text(), 12, 'words') ?>
										</p>
										<ul class="product__details">
											<li>
												<strong>Body Style:</strong>
												<?php echo $products->type()->html() ?>
											</li>
											<li><strong>Mileage:</strong>
												<?php echo $products->kilos()->html() ?>
											</li>
											<li>
												<strong>Transmission:</strong>
												<?php echo $products->transmition()->html() ?>
											</li>
											<li>
												<strong>Colour:</strong>
												<?php echo $products->colour()->html() ?>
											</li>
										</ul>
										<p class="price">Price: <span><?php echo $products->price()?></span></p>
							</div>
						<?php endforeach ?>
					</section>
				</section>
	</main>

	<?php snippet('footer') ?>
