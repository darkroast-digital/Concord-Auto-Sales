<section class="products">
	<div class="tabs">

		<div class="tabs__container">
			<h6 class="tab__drawer" rel="tab1">Featured Vehicles</h6>
			<div id="tab1" class="tab__content">
				<h6>Featured Vehicles</h6>
				<div class="inventory">

					<?php foreach(page('inventory')->children()->visible()->limit(4) as $inventory): ?>

						<div class="product">
							<?php if($image = $inventory->images()->sortBy('sort', 'asc')->first()): ?>
								<a class="product__image" href="<?php echo $inventory->url() ?>">
     							<span class="product__price"><?php echo $inventory->price()->html() ?></span>
      						<img src="<?php echo $image->url() ?>" alt="<?php echo $inventory->title()->html() ?>" >
      						<span class="product__title">
      							<?php echo $inventory->title()->html() ?>
      						</span>
   							</a>
								<?php endif ?>
							<div class="seperator">
								<div class="triangle"></div>
							</div>
								<p class="product__kilometres"><?php echo $inventory->kilos()->html() ?></p>
								<ul class="product__details">
									<li><?php echo $inventory->condition()->html() ?></li>
									<li><?php echo $inventory->year()->html() ?></li>
									<li><?php echo $inventory->transmition()->html() ?></li>
									<li><?php echo $inventory->colour()->html() ?></li>
									<li><?php echo $inventory->type()->html() ?></li>
								</ul>
						</div>
						<?php endforeach ?> 
				</div>
				
				<!-- End Inventory -->
				
			</div>

			<!-- End Cars -->

		</div>
	</div>
	<a href="inventory" class="button">See All</a>
</section>
