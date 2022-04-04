<?php wp_reset_query(); ?>
<?php if(!is_front_page()){ ?>

<?php $image_url = cpotheme_header_image(); ?>
<?php if($image_url != ''): ?>
<div id="banner" class="banner">
	<img class="banner-image" src="<?php echo esc_url($image_url); ?>">
</div>
<?php endif; ?>

<section id="pagetitle" class="pagetitle">
	<div class="container">
		<?php do_action('cpotheme_title'); ?>
	</div>
</section>
<?php } ?>