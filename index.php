	<!-- Get the header.php file -->
	<?php get_header(); ?>

	<div class="g-row">
			<?php if (have_posts()) : ?>
			<?php
				$index = 1;
				$posted = array();
				$row_1 = array();
				$row_2 = array();
				$row_3 = array();
				$row_4 = array();
				query_posts( 'posts_per_page=20' );

				while ( have_posts() ) : the_post();
					if ($index < 5) {
				    	array_push($row_1, $post);
					} else if ($index < 10) {
				    	array_push($row_2, $post);
					} else if ($index < 15) {
				    	array_push($row_3, $post);
					} else if ($index < 20) {
				    	array_push($row_4, $post);
					}
					$index++;
				endwhile;
			?>

			<div class="g-row">
				<?php for ($i = 0; $i < sizeof($row_1); $i++) { ?>
				    <?php $post = $row_1[$i]; ?>
					<?php if (in_category('album')) { ?>
						<?php get_template_part( 'feed', 'album' ); ?>
					<?php } ?>
					<?php if (in_category('mix')) { ?>
						<?php get_template_part( 'feed', 'mix' ); ?>
					<?php } ?>
				<?php } ?>
			</div>

			<div class="g-row">
				<?php for ($i = 0; $i < sizeof($row_2); $i++) { ?>
					<?php $post = $row_2[$i]; ?>
					<?php if (in_category('album')) { ?>
						<?php get_template_part( 'feed', 'album' ); ?>
					<?php } ?>
					<?php if (in_category('mix')) { ?>
						<?php get_template_part( 'feed', 'mix' ); ?>
					<?php } ?>
				<?php } ?>
			</div>

			<div class="g-row">
				<?php for ($i = 0; $i < sizeof($row_3); $i++) { ?>
					<?php $post = $row_3[$i]; ?>
					<?php if (in_category('album')) { ?>
						<?php get_template_part( 'feed', 'album' ); ?>
					<?php } ?>
					<?php if (in_category('mix')) { ?>
						<?php get_template_part( 'feed', 'mix' ); ?>
					<?php } ?>
				<?php } ?>
			</div>

			<div class="g-row">
				<?php for ($i = 0; $i < sizeof($row_4); $i++) { ?>
					<?php $post = $row_4[$i]; ?>
					<?php if (in_category('album')) { ?>
						<?php get_template_part( 'feed', 'album' ); ?>
					<?php } ?>
					<?php if (in_category('mix')) { ?>
						<?php get_template_part( 'feed', 'mix' ); ?>
					<?php } ?>
				<?php } ?>
			</div>
			<?php endif; ?>
	</div>
	<div class="g-row">
		<!-- Check if there is more than one page of posts, if there are then display the page navigation links -->
		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
			<div class="pagination">
				<?php echo get_next_posts_link(); ?>
				<?php echo get_previous_posts_link(); ?>
			</div>
			<div class="clearfix"></div>
		<?php else: ?>
			<p></p>
		<?php endif; ?>
	</div>

	<!-- Get the footer.php file -->
	<?php get_footer(); ?>