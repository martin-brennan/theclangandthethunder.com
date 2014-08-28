<div class="g-col stack three">
<div class="card mix">
	<a href="<?php echo get_permalink($post->ID); ?>"><img src="http://dev.theclangandthethunder.com/wp-content/uploads/2014/08/clangandthunder.png" /></a>
	<div class="title">
		<h1><strong><a href="<?php get_permalink($post->ID); ?>"><?php the_title(); ?></a></strong></h1>
		<h2><?php the_date(); ?></h2>
		<h3><a href="<?php echo get_post_meta($post->ID,'mix_link',true) ?>"><?php echo get_post_meta($post->ID,'mix_link',true) ?></a>
	</div>
	<div class="excerpt">
		<?php the_excerpt(); ?>
	</div>
</div>
</div>