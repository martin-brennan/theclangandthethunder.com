<!-- Get the header.php file -->
<?php get_header(); ?>
<div class="g-row">
<!-- The Loop -->
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php if (in_category('album')) { ?>
				<?php get_template_part( 'single', 'album' ); ?>
			<?php } ?>
			<?php if (in_category('mix')) { ?>
				<?php get_template_part( 'single', 'mix' ); ?>
			<?php } ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>