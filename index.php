<?php get_header(); ?>
<main class="content">
<?php
if ( have_posts() ) :
	?>
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article class="post">
			<h2 class="post-title">
				<?php the_title(); ?>
			</h2>>
			<div class="post-content">
				<?php the_excerpt(); ?>
			</div>
		</article>
	<?php endwhile; ?>
<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts found.', 'my-classic-theme' ); ?></p>
<?php endif; ?>
</main>
<?php get_footer(); ?>
