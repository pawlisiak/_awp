<?php get_header(); ?>

	<?php if( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail(); ?>
			<?php endif; ?>

			<section class="post-body">
				<h1>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h1>
				<?php the_content(); ?>
			</section>
			<a class="more-link" href="<?php bloginfo('url'); ?>">
				&laquo; <?php _e('Back to home', 'awp'); ?>
			</a>
		</article>
	<?php endif; ?>

<?php get_footer(); ?>
