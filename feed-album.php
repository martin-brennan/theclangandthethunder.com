<div class="g-col stack three">
<div class="card album">
	<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
	<a href="<?php echo get_permalink($post->ID); ?>"><img src="<?php echo $thumbnail['0']; ?>" /></a>
	<div class="title">
		<h1><strong><a href="<?php get_permalink($post->ID); ?>"><?php the_title(); ?></a></strong></h1>
		<h2><?php echo get_the_term_list( $post->ID, 'artist', '', '' ); ?> (<?php echo get_the_term_list( $post->ID, 'year', '', '' ); ?>)</h2>
		<h3><?php echo get_the_term_list( $post->ID, 'genre', '', ', ' ); ?></h3>
	</div>
	<div class="excerpt">
		<?php the_excerpt(); ?>
	</div>
</div>
</div>