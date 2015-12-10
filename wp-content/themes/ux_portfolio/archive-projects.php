<?php
/**
 * The template for displaying archive-projects pages.
 *
 * @package Portfolio_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<section class="archive-project-heading">
				<a href="<?php the_permalink(); ?>">
				<?php echo wp_get_attachment_image(CFS()->get('featured_image'),'large');?>
				<br>
				<span><?php echo get_the_title(get_the_ID()); ?></span>
				</a>
				</section>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
