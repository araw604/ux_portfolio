<?php
/**
 * The main template file.
 *
 * @package Your_Portfolio_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="aboutPageText">
			<h2 class="myPhilosopy">
				My Philosophy
			</h2>
			<p>
				I believe UX Design is the path to the future. By designing our products for the user and real life, we can create e ciency, sustainability, and happier people.
				<br><br>	
				At Red Academy I've had the privilege to be taught by some of the industry's greatest, and will graduate this program in December with a wide range of skills and tools to make your user's experiences turn into value.
			</p>
		</section>
		<section class="myToolKit aboutToolKit">
			<h2> My Toolkit </h2>
			<div class="imagesFrontPage">
				<img src="<?php echo get_template_directory_uri(); ?>/images/port_tool_research.png" alt="research"/>
				<img src="<?php echo get_template_directory_uri(); ?>/images/port_tool_planning.png" alt="planning"/>
				<img src="<?php echo get_template_directory_uri(); ?>/images/port_tool_design.png" alt="design"/>
				<img src="<?php echo get_template_directory_uri(); ?>/images/port_tool_building.png" alt="building"/>
			</div>
		</section>

		<section class="sksoap">
			<ul>
			<div class="list-parent-container">
				<div class="list-child-1">
				<li class="skills"> Skills</li>
				
					<li>Human-centred design</li>
					<li>Prototyping</li>
					<li>HTML & CSS </li>
					<li>Google Analytics</li>
					<li>SEO</li>
					<li>Leadership</li>
					<li>Agile Software Development</li>
				</div>
				<div class="list-child-2">
					<li class="software"> Software</li>
				
					<li>Sketch</li>
					<li>Invision</li>
					<li>Axure </li>
					<li>Omnigraffle</li>
					<li>Balsamiq</li>
					<li>Photoshop</li>
					<li>Illustrator</li>
					<li>Atom</li>
				</div>
			</div>
			</ul>

		</section>
		<span class="aboutmepic">
		<img src="<?php echo get_template_directory_uri(); ?>/images/port_about_me.png" alt="about me"/>
		</span>
<?php get_footer(); ?>
