<!-- Get the header.php file -->
<?php get_header(); ?>
<?php $genre = get_term_by('slug', get_query_var('genre'), 'genre'); ?>
<div class="g-row">
	<div class="g-col twelve stack">
		<div class="card">
		<h1><?php echo $genre->name; ?></h1>
		<?php 
			$args = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'genre',
						'field' => 'slug',
						'terms' => get_query_var('genre')
					)
				)
			);
			$query = new WP_Query( $args );
		?>
		<ul class="tax-list">
			<?php while($query->have_posts()) : $query->the_post(); ?>
				<li><?php echo get_the_term_list( $post->ID, 'artist', '', '' ); ?> - <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> (<?php echo get_the_term_list( $post->ID, 'year', '', '' ); ?>)</li>
			<?php endwhile; ?>
		</ul>
		</div>
	</div>
</div>
<?php get_footer(); ?>