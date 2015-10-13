<?php get_header(); ?>

	<?php if( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if( has_post_thumbnail() ) : ?>
				<section class="post-image">
					<?php the_post_thumbnail(); ?>
				</section>
			<?php endif; ?>
			<section class="post-body">
				<h1>
					<?php the_title(); ?>
				</h1>
				<section class="meta">
					<small>Opublikowane <?php echo get_the_date(); ?> przez <?php the_author(); ?></small>
				</section>
				<?php the_content(''); ?>
			</section>
		</article>
	<?php endif; ?>

<?php get_footer(); ?>
