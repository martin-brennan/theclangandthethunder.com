<?php
/*
Template Name: About
*/
?>
<!-- Get the header.php file -->
<?php get_header(); ?>
<div class="g-row">
	<div class="g-col six stack">
	<div class="card">
		<h1><?php the_title(); ?></h1>
		<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
	</div>
	</div>
	<div class="g-col six stack">
		<iframe width="100%" height="250" src="//www.mixcloud.com/widget/follow/?u=http%3A%2F%2Fwww.mixcloud.com%2Fthe-clang-and-the-thunder%2F" frameborder="0"></iframe>
	</div>
</div>
<?php get_footer(); ?>