<?php
get_header(); ?>

<main class="content">
	<section class="single-post">
		<article class="post">
			<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			?>
			<h2 class="post-title">
				<?php the_title(); ?>
			</h2>
			<p class="post-meta">
				Published on <?php echo esc_html( get_the_date() ); ?>
			</p>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
		</article>
	</section>
</main>

<?php get_footer(); ?>
