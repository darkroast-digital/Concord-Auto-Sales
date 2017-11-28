<div class="menu">
	<ul class="menu__nav">

		<?php foreach($pages->visible() as $p): ?>
			<li>
				<a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
			</li>
			<?php endforeach ?>

	</ul>
</div>

<div class="menu__trigger">
	
	<span></span>
	<span></span>
	<span></span>
	
</div>

<nav class="nav offpage">
	<div class="nav__content">
		<a class="nav__brand" href="<?php echo url() ?>">
      <img src="<?php echo url('assets/img/logo-dark.png') ?>" alt="<?php echo $site->title()->html() ?>" draggable="false"/>
    </a>

		<div class="nav__items">
			<ul class="nav__contact">
				<li>76 Woolwich St. N, Kitchener ON</li>
				<li>1-519-648-9595</li>
			</ul>

			<ul class="nav__navbar">

				<?php foreach($pages->visible() as $p): ?>
					<li>
						<a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
					</li>
					<?php endforeach ?>
			</ul>
		</div>
	</div>
</nav>


