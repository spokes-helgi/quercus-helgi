<?php
/**
* Template Name: HomePage
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site will use a
* different template.
*
* @package understrap
*/



get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

$current_case = 0;
$current_employee = 0;
$cases = carbon_get_theme_option('case');
$case_content = [];
foreach ($cases as $case) {
    array_push($case_content, $case["qr_case_content"]);
};
$employees = carbon_get_theme_option('employee');
$video = get_stylesheet_directory_uri().'/imgs/background.mp4';
$dataToBePassed = array(
	'cases' => $cases,
    'cases_content' => $case_content,
	'employees' => $employees,
	'video' => $video,
);
wp_localize_script( 'spokespeople', 'php_vars', $dataToBePassed );
?>
<div class="container-fluid" id="fullpage">
	<div class="section active" id="section0">
		<div class="row justify-content-center padding-30">
			<div class="video-container">
				<video id="qr-video" autoplay loop>
					<source src="<?php echo get_stylesheet_directory_uri();?>/imgs/background.mp4" type="video/mp4">
				</video>
			</div>
			<div class="col-12 first-section">
				<div class="col-md-10 justify-content-center">
					<h1><i>REMOVING BARRIERS FOR ADDRESSING CLIMATE CHANGE & POPULATION GROWTH</i></h1>
				</div>
			</div>
		</div>
	</div>
	<div class="section" id="section1">
		<div class="row justify-content-center padding-30">
			<div class="col-sm- 10 col-md-10 col-lg-8 col-xl-8">
				<h1 class="red-line">QUERCUS GROUP</h1>
				<p>The world needs more coordination, collaboration and communication. Silo thinking and silo organization is too prevalent. Knowledge gaps prevent funding from reaching solutions, and solutions from reaching the problems they can solve.</p>
				<p>Founded in 2012, Quercus believes that the world needs more partnerships and more inclusion. Quercus believes in co-creation, multi-stakeholder engagement and that the private sector has an indispensable role to play in helping planet and people.</p>
				<p>From offices in Denmark, Kenya and India, Quercus Group has worked in more than 25 countries. We lead multi-stakeholder processes and projects, facilitate partnerships and dialogue, advise and train governments and organizations and connect companies to the markets where they are needed.</p>
			</div> <!--wrap ENDS -->
		</div>
	</div>
	<div class="section" id="section2">
		<div class="row justify-content-center padding-30">
			<div id="case-section" class=" col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-8">
				<h1>CASES</h1>
				<p>The world needs more coordination, collaboration and communication.</p>
				<br /><br />
				<div class="row case-row">
					<?php
						foreach ($cases as $case) {
							echo '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 case">';
							echo '<a class="case-link" href="#" data-case="'.$current_case.'"><img class="img-fluid case-img" src="'.$case["qr_case_image"].'" /></a>';
							echo '<h2>'.$case["qr_case_title"].'</h2>';
							echo '</div>';
							$current_case++;
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="section" id="section3">
		<div class="row justify-content-center align-items-center padding-30">
            <div class="col-xs-12 col-sm-12 un-goals-mobile">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <a href='http://www.un.org/sustainabledevelopment/globalpartnerships/'><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/TGG_Icon_Color_17.png"></a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href='http://www.un.org/sustainabledevelopment/globalpartnerships/'><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/TGG_Icon_Color_06.png"></a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href='http://www.un.org/sustainabledevelopment/globalpartnerships/'><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/TGG_Icon_Color_07.png"></a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href='http://www.un.org/sustainabledevelopment/globalpartnerships/'><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/TGG_Icon_Color_08.png"></a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href='http://www.un.org/sustainabledevelopment/globalpartnerships/'><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/TGG_Icon_Color_09.png"></a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href='http://www.un.org/sustainabledevelopment/globalpartnerships/'><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/TGG_Icon_Color_11.png"></a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href='http://www.un.org/sustainabledevelopment/globalpartnerships/'><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/TGG_Icon_Color_12.png"></a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href='http://www.un.org/sustainabledevelopment/globalpartnerships/'><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/TGG_Icon_Color_13.png"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 un-goals-desktop">
                <div class='circle-container'>
				    <a href='http://www.un.org/sustainabledevelopment/globalpartnerships/' class='center'><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/TGG_Icon_Color_17.png"></a>
				    <a href='http://www.un.org/sustainabledevelopment/water-and-sanitation/' width="175" class='deg0'><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/TGG_Icon_Color_06.png"></a>
				    <a href='http://www.un.org/sustainabledevelopment/energy/' width="175" class='deg45'><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/TGG_Icon_Color_07.png"></a>
				    <a href='http://www.un.org/sustainabledevelopment/economic-growth/' width="175" class='deg90'><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/TGG_Icon_Color_08.png"></a>
				    <a href='http://www.un.org/sustainabledevelopment/infrastructure-industrialization/' width="175" class='deg135'><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/TGG_Icon_Color_09.png"></a>
				    <a href='http://www.un.org/sustainabledevelopment/cities/' width="175" class='deg180'><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/TGG_Icon_Color_11.png"></a>
				    <a href='http://www.un.org/sustainabledevelopment/sustainable-consumption-production/' width="175" class='deg225'><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/TGG_Icon_Color_12.png"></a>
				    <a href='http://www.un.org/sustainabledevelopment/climate-change-2/' width="175" class='deg315'><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/TGG_Icon_Color_13.png"></a>
				</div>

            </div>
		</div>
	</div>
	<div class="section" id="section4 ">
		<div class="row justify-content-center padding-30">
			<div id="employee-section" class=" col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
				<h1 class="red-line">OUR PEOPLE</h1>
				<br /><br />
				<div class="row case-row">
					<?php
						foreach ($employees as $employee) {
							echo '<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">';
							echo '<a class="employee-link" href="#" data-employee="'.$current_employee.'"><img class="img-fluid case-img" src="'.$employee["qr_employee_image"].'" /></a>';
							echo '<h2>'.$employee["qr_employee_name"].'</h2>';
							echo '<p>'.$employee["qr_employee_title"].'</p>';
							echo '</div>';
							$current_employee++;
						}
					?>				
				</div>
			</div>
		</div>
	</div>
	<div class="section" id="section5">
		<div class="row justify-content-center news-sectionw">
			<div class="col-xl-10">
				<h1 class="red-line" style="color: white;">NEWS</h1>
				<div class="row" id="quercus-news">
					<?php 
						$args = array( 
							'numberposts' => '4',
							'orderby' => 'date'
						);
						$recent_posts = wp_get_recent_posts( $args );
						foreach ($recent_posts as $post) {
							echo '<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
									<div class="news-card">
										<div class="news-card-top" style="background: url('.get_the_post_thumbnail_url($post["ID"]).')center center; background-size: cover;"></div>
										<div class="news-card-middle">
											<p class="news-card-title">'.date('d.m.Y', strtotime($post['post_date'])).'</p>
											<h3 class="news-card-headline">'.$post["post_title"].'</h3>
										</div>
										<div class="news-card-bottom">
											<a href="'.get_post_permalink($post["ID"]).'">Read more</a>
										</div>
									</div>
								</div>';
						};
					?>
				</div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>
