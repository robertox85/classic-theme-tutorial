<?php

get_header(); ?>

<main class="content">
	<section>
		<h1><?php the_title(); ?></h1>
		<?php
		the_content();
		?>
	</section>
</main>
<?php get_footer(); ?>
