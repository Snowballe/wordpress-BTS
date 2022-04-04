<div class="portfolio-item">
	<a class="portfolio-item-image" href="<?php the_permalink(); ?>">
		<div class="portfolio-item-overlay primary-color-bg"></div>
		<div class="portfolio-item-icon"></div>
		<?php the_post_thumbnail('portfolio', array('title' => '')); ?>
	</a>
	<h3 class="portfolio-item-title secondary-color-bg dark">
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h3>	
</div>