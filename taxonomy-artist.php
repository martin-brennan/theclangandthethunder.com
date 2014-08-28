<!-- Get the header.php file -->
<?php get_header(); ?>
<?php $artist = get_term_by('slug', get_query_var('artist'), 'artist'); ?>
<div class="g-row">
<!-- The Loop -->
	<div class="g-col four stack">
		<img class="full border" src="<?php echo apply_filters( 'taxonomy-images-queried-term-image-url', '', array('image_size' => 'full') ); ?>" />
	</div>
	<div class="g-col eight stack">
		<div class="card">
			<h1><strong><?php echo $artist->name; ?></strong></h1>
			<p><?php echo $artist->description; ?></p>
			<?php 
				$args = array(
					'tax_query' => array(
						array(
							'taxonomy' => 'artist',
							'field' => 'slug',
							'terms' => get_query_var('artist')
						)
					)
				);
				$query = new WP_Query( $args );
			?>
			<?php while($query->have_posts()) : $query->the_post(); ?>
			<div class="g-row album-list-row">
				<div class="g-col two">
					<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
					<a href="<?php echo get_permalink($post->ID); ?>"><img src="<?php echo $thumbnail['0']; ?>" class="full border" /></a>
				</div>
				<div class="g-col ten">
					<h3><strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong></h3>
					<?php the_excerpt(); ?>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>