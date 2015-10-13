<?php get_header(); ?>

	<?php while( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail(); ?>
			<?php endif; ?>
			<section class="post-body">
				<?php if( is_sticky() ) : ?>
					<div class="sticky-info">
						<?php _e('Sticky post', 'amp'); ?>
					</div>
				<?php endif; ?>
				<h1>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h1>
				<section class="meta">
					<small><?php _e('Published', 'amp'); ?> <?php echo get_the_date(); ?> <?php _e('by', 'amp'); ?> <?php the_author(); ?></small>
				</section>
				<?php the_content(''); ?>
			</section>
			<a class="more-link" href="<?php the_permalink(); ?>">
				<?php _e('Read more', 'amp'); ?>
			</a>
		</article>
	<?php endwhile; ?>

<?php get_footer(); ?>
