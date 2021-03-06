<article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
	<?php cpotheme_postpage_title(); ?>
	<div class="post-image">
		<?php cpotheme_postpage_image(); ?>		
	</div>	
	<div class="post-body">
		<div class="post-byline">
			<?php wp_enqueue_style('cpotheme-fontawesome'); ?>
			<?php cpotheme_postpage_date(); ?>
			<?php cpotheme_postpage_author(); ?>
			<?php cpotheme_postpage_categories(); ?>			
			<?php cpotheme_postpage_comments('%s'); ?>
			<?php cpotheme_edit(); ?>
		</div>
		<div class="post-content">
			<?php cpotheme_postpage_content(); ?>
			<?php if(is_singular('post')) cpotheme_postpage_tags(false, '', '', ''); ?>
			<?php cpotheme_postpage_readmore(); ?>
		</div>
		
	</div>
	<div class="clear"></div>
</article>