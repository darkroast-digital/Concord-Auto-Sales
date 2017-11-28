<ul class="inventory">

	<?php foreach(page('inventory')->children()->visible()->filterBy('tags', 'car', ',')->limit(4) as $inventory): ?>

		<li>
			<?php if($image = $inventory->images()->sortBy('sort', 'asc')->first()): ?>
				<a href="<?php echo $inventory->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $inventory->title()->html() ?>" >
    </a>
				<?php endif ?>
					<p>
						<?php echo $inventory->title()->html() ?>
					</p>
					<p>
						<?php echo $inventory->condition()->html() ?>
					</p>
					<p>
						<?php echo $inventory->price()->html() ?>
					</p>
		</li>
		<?php endforeach ?>
</ul>
