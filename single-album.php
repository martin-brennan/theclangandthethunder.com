<div class="g-col four stack">
	<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
	<a href="<?php echo get_permalink($post->ID); ?>"><img src="<?php echo $thumbnail['0']; ?>" class="full border" /></a>
</div>
<div class="g-col eight stack">
	<div class="card">
		<h1><strong><?php the_title(); ?></strong> (<?php echo get_the_term_list( $post->ID, 'year', '', '' ); ?>)</h1>
		<?php the_content(); ?>
	</div>

	<div class="card">
		<!-- Post comments -->
		<p><?php comments_template(); ?></p>
	</div>
</div>