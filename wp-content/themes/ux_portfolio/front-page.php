<?php
/**
 * The main template file.
 *
 * @package Your_Portfolio_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="blueCircle">
			<section class="frontPageH2">
				<h2>ANDEE</h2>
				<h2>PITTMAN</h2>
			</section>
			<section class="frontPageP">
				<p>UX Designer who innovates through achieving the goals of the business and it’s users with a human-centred design process.</p>
			
			</section>
		</div>
		<section class="projects">
			<h3> Projects</h3>
			
		</section>
		
		<section class="pull2projects">
			
            <?php
               $projects = portfolio_get_latest_posts( 'projects', 2 );
               if ( ! empty( $projects ) ) :
            ?>
              
              
               
                  <?php foreach( $projects as $post ) : setup_postdata( $post ); ?>
                     <span class="parent-project">
  						<a href="<?php the_permalink(); ?>">
                        <?php echo wp_get_attachment_image(CFS()->get( 'featured_image' ), 'large'); ?>
                        </a>
                    </span>
                    
                  <?php endforeach; wp_reset_postdata(); ?>
              
            <?php endif; ?>
         
      	


		</section>


		<!-- <section class="caseStudies">
			<h3> Projects</h3>
			<div class="seeAllButton">
				SEE ALL
			</div>
		</section> -->
		<section class="caseStudies">
			<!-- <h3> Projects</h3> -->
			<a href="<?php echo home_url('/projects/');?>">
			<div class="seeAllButton">
				SEE ALL
			</div></a>
		</section>

		<section class="myToolKit">
			<h2> My Toolkit </h2>
			<div class="imagesFrontPage">
				<img src="<?php echo get_template_directory_uri(); ?>/images/port_tool_research.png" alt="research"/>
				<img src="<?php echo get_template_directory_uri(); ?>/images/port_tool_planning.png" alt="planning"/>
				
			</div>
		</section>
		<div class="learnMore">
			<a href="<?php echo home_url('/about/');?>">
			<div class="seeAllButton">
				learn more
			</div>
			</a>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>