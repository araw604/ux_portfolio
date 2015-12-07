<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="proj-intro-page">
		<span class="proj-heading"><?php echo get_the_title(get_the_ID()); ?></span>
		<span class="proj-intro-text">	<?php echo CFS()->get('project_intro'); ?></span>
	</div>
	<div class="the-project-text">	
		<p class="theProject">The Project</p>

		<p><?php echo CFS()->get('the_project'); ?></p>
	</div>
 	<?php echo wp_get_attachment_image(CFS()->get('highlight_role_image'),'large');?>
 	<div class="highlight-role">
 		<h3>ROLE HIGHLIGHTS</h3>
		<p class="highlight-role-text"><?php echo CFS()->get('highlight_role_text'); ?></p>
	</div>

	<?php echo wp_get_attachment_image(CFS()->get('research_image'),'large');?>

	<div class="research">
 		<h3>RESEARCH</h3>
		<p class="research-text"><?php echo CFS()->get('research_text'); ?></p>
	</div>
	
	<?php echo wp_get_attachment_image(CFS()->get('planning_image'),'large');?>
 	
 	<div class="planning">
 		<h3>PLANNING</h3>
 		<p class="planning-text"><?php echo CFS()->get('planning_text'); ?></p>
 	</div>

 	<?php echo wp_get_attachment_image(CFS()->get('design_image'),'large');?>
 	
 	<div class="design">
 		<h3>DESIGN</h3>
		<p class="design-text"><?php echo CFS()->get('design_text'); ?></p>
 	</div>

 	<?php echo wp_get_attachment_image(CFS()->get('axure_image'),'large');?>
	<?php echo CFS()->get('axure_text'); ?>

	<div class="topButton">
  	<a href="#" class="scrollup">
   		<i class="fa fa-angle-up"></i></a>
	</div>

	<?php get_footer(); ?>

