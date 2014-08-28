<div class="g-col one disappear"></div>
<div class="g-col ten stack">
	<div class="card">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
	<div class="card">
		<!-- Post comments -->
		<p><?php comments_template(); ?></p>
	</div>
</div>
<div class="g-col one disappear"></div>