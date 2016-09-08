<?php
/**
 * Template Name: One Page Template
 *
 * @package twentysixteen
 * @subpackage gemmastephen
 */
?>

<!DOCTYPE html>
	<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="HTML, CSS, XHTML, JavaScript, JQuery, Front end, web development">
		<meta name="description" content="Gemma Stephen - front end web developer">

		<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png" />
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>

		<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

		<?php wp_head(); ?>
	</head>

	<body>
		<!-- Navigation -->
	    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
	        <div class="container">
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
	                </button>
	                <a class="navbar-brand page-scroll" href="#page-top">Gemma L. Stephen</a>
	            </div>

	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav navbar-right">
	                    <li class="hidden">
	                        <a href="#page-top"></a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="#about">About</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="#experience">Experience</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="#work">Work</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="#education">Education</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="#contact-info">Contact</a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	        
	    </nav>	

	     <!-- Header -->
	    <header>
	        <div class="container">
	        	<div class="row">
	        		<div class="col-sm-8 col-sm-offset-2">
			            <div class="intro-text">
			            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/avatar1.jpg" class="avatar" alt="Avatar"/>
			                <h1 class="intro-heading">
			                    Gemma L. Stephen
			                </h1>
			                <p>
			                 	HTML &#155; CSS &#155; Javascript &#155; Accessible &#155; Responsive &#155; Adaptive
			                 </p>
			                
			                <a href="#about" class="page-scroll"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-down1.png" alt="Scroll down"></a>
			            </div>
			        </div>
		        </div>
	        </div>
	    </header>

	    <!-- About Section -->
	    <section id="about">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1 text-center">
	                    <h2 class="section-heading">About</h2>
	                    <h3 class="section-subheading text-muted">The lass behind the screen...</h3>
	                </div>
	            </div>

	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1">
	                	<p class="first-p">
		                	My name is Gemma and I am a Front End Developer in Fife, Scotland. With 4 years hands on experience behind me, I enjoy building responsive interfaces with HTML, CSS and Javascript using the latest UI frameworks and techniques.
		                </p>
		                <p>
							Often working closely with designers, I like to ensure the projects I work on are optimised, semantic, accessible and cross-browser compatible whether it be used via desktop or on a mobile device.  With a good eye for detail, I strive in busy, fast-paced environments and love to keep up to date with the current technology trends.
						</p>
						<p>
							I graduated from Edinburgh Napier University with a first class honours degree in Digital Media but with a focus on web development. From this, I have spent my career so far working with some fantastic people on some interesting projects learning, developing and adding to my knowledge base.
						</p>
						<p>
							Away from the computer desk, I have a <a href="http://www.last.fm/user/vertigoofbliss_" target="_blank">passion for music</a> and like going to as many gigs and festivals as I can. I enjoy keeping active and with this comes a love for nutrition and <a href="https://www.instagram.com/gemmalouisegetsfit/" target="_blank">cooking healthy food</a>. But sometimes I love nothing more than watching weird comedies on Netflix or relaxing with a good book. 
						</p>

	                </div>
	            </div>
	        </div>
	    </section>


	    <!-- Experience Section -->
	    <section id="experience" class="bg-light-gray">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1 text-center">
	                    <h2 class="section-heading">Experience</h2>
	                    <h3 class="section-subheading text-muted">My career so far...</h3>
	                </div>
	            </div>
				
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
	                    <div class="row">

	                    	<div class="job-details clearfix">
				                <div class="col-sm-4">
				                    <h2>Sept 16 – Present</h2> 
				                    <h3>E-Com Scotland, Dunfermline</h3>
				                    <p>Front-end Designer</p>
				                </div>

				                <div class="col-sm-8">
				                    <p class="description">
				                    	<strong>My role:</strong> Info coming soon.
				                    </p>
				                </div>
				            </div>

							<div class="job-details clearfix">
				                <div class="col-sm-4">
				                    <h2>July 12 – September 16</h2> 
				                    <h3>Planys Mobile, Dunfermline</h3>
				                    <p>Front-end Developer</p>
				                </div>

				                <div class="col-sm-8">
				                    <p class="description">
				                    	<strong>My role:</strong>  Responsible for front-end development using HTML, CSS3/SASS, JavaScript, PHP with the chance to work on a number of bespoke projects from simple brochure sites to complex web applications. 
				                    	This role saw me working closely to bridge the gap between the designer and backend developers in a fast paced start-up environment. 
				                    </p>
				                </div>
				            </div>

							<div class="job-details clearfix">
								<div class="col-sm-4">
				                    <h2>May 11 – July 12</h2> 
				                    <h3>Zendit Ltd, Dunfermline</h3>
				                    <p>Operations Support Engineer</p>
				                </div>
				                <div class="col-sm-8">
									<p class="description">
										<strong>My role:</strong> Initially employed as an intern for 1 month testing and creating websites and then progressed into full-time gaining more knowledge and skills in the field of web development. 
										The role included UI design and CMS integration, managing and updating current client sites using technologies such as HTML, CSS, Javascript, PHP.
										As part of this role, I also built relationships with clients and assisted operations between clients and developers. QA tested on web and mobile based applications, creating test documents and reporting and managing bugs.
									</p>
				                </div>
							</div>

			            </div>
	                </div>
	            </div>
	        </div>
	    </section>


	    <!-- Work Section -->
	    <section id="work">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1 text-center">
	                    <h2 class="section-heading">Work</h2>
	                    <h3 class="section-subheading text-muted">The things I have done...</h3>
	                </div>
	            </div>

	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1 text-center">
			            <div class="row">
			                <div class="col-md-4 col-sm-6 portfolio-item">
			                    <a href="#bh-modal" class="portfolio-link" data-toggle="modal">
			                        <div class="portfolio-hover">
			                            <div class="portfolio-hover-content">
			                                <i class="fa fa-angle-double-right fa-3x"></i>
			                            </div>
			                        </div>
			                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bh-thumb.jpg" class="img-responsive" alt="">
			                    </a>
			                    <div class="portfolio-caption">
			                        <h4>Business Hound</h4>
			                        <p class="text-muted">Brochure site &amp; web based app</p>
			                    </div>
			                </div>
			                <div class="col-md-4 col-sm-6 portfolio-item">
			                    <a href="#cgh-modal" class="portfolio-link" data-toggle="modal">
			                        <div class="portfolio-hover">
			                            <div class="portfolio-hover-content">
			                                <i class="fa fa-angle-double-right fa-3x"></i>
			                            </div>
			                        </div>
			                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clickgo-thumb.jpg" class="img-responsive" alt="">
			                    </a>
			                    <div class="portfolio-caption">
			                        <h4>Click Go Home</h4>
			                        <p class="text-muted">Brochure site &amp; web based app</p>
			                    </div>
			                </div>			               
			                <div class="col-md-4 col-sm-6 portfolio-item">
			                    <a href="#planys-modal" class="portfolio-link" data-toggle="modal">
			                        <div class="portfolio-hover">
			                            <div class="portfolio-hover-content">
			                                <i class="fa fa-angle-double-right fa-3x"></i>
			                            </div>
			                        </div>
			                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/planys-thumb.jpg" class="img-responsive" alt="">
			                    </a>
			                    <div class="portfolio-caption">
			                        <h4>Planys Mobile</h4>
			                        <p class="text-muted">Portfolio site</p>
			                    </div>
			                </div>
			                <div class="col-md-4 col-sm-6 portfolio-item">
			                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
			                        <div class="portfolio-hover">
			                            <div class="portfolio-hover-content">
			                                <i class="fa fa-angle-double-right fa-3x"></i>
			                            </div>
			                        </div>
			                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sds-thumb.jpg" class="img-responsive" alt="">
			                    </a>
			                    <div class="portfolio-caption">
			                        <h4>I Can Skills</h4>
			                        <p class="text-muted">Web based app</p>
			                    </div>
			                </div>
			                <div class="col-md-4 col-sm-6 portfolio-item">
			                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
			                        <div class="portfolio-hover">
			                            <div class="portfolio-hover-content">
			                                <i class="fa fa-angle-double-right fa-3x"></i>
			                            </div>
			                        </div>
			                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inch-thumb.jpg" class="img-responsive" alt="">
			                    </a>
			                    <div class="portfolio-caption">
			                        <h4>Inchdairnie Distillery</h4>
			                        <p class="text-muted">Brochure site with Wordpress</p>
			                    </div>
			                </div>
			                <div class="col-md-4 col-sm-6 portfolio-item">
			                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
			                        <div class="portfolio-hover">
			                            <div class="portfolio-hover-content">
			                                <i class="fa fa-angle-double-right fa-3x"></i>
			                            </div>
			                        </div>
			                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hiryzr-thumb.jpg" class="img-responsive" alt="">
			                    </a>
			                    <div class="portfolio-caption">
			                        <h4>Hiryzr</h4>
			                        <p class="text-muted">Web based app</p>
			                    </div>
			                </div>
			                <div class="col-md-4 col-sm-6 portfolio-item">
			                    <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
			                        <div class="portfolio-hover">
			                            <div class="portfolio-hover-content">
			                                <i class="fa fa-angle-double-right fa-3x"></i>
			                            </div>
			                        </div>
			                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/qmu-thumb.jpg" class="img-responsive" alt="">
			                    </a>
			                    <div class="portfolio-caption">
			                        <h4>Lydia Osteoporosis</h4>
			                        <p class="text-muted">Social network website</p>
			                    </div>
			                </div>
			                <div class="col-md-4 col-sm-6 portfolio-item">
			                    <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
			                        <div class="portfolio-hover">
			                            <div class="portfolio-hover-content">
			                                <i class="fa fa-angle-double-right fa-3x"></i>
			                            </div>
			                        </div>
			                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spot-thumb.jpg" class="img-responsive" alt="">
			                    </a>
			                    <div class="portfolio-caption">
			                        <h4>Spot</h4>
			                        <p class="text-muted"> Brochure site &amp; web based app</p>
			                    </div>
			                </div>
			                <div class="col-md-4 col-sm-6 portfolio-item">
			                    <a href="#cgf-modal" class="portfolio-link" data-toggle="modal">
			                        <div class="portfolio-hover">
			                            <div class="portfolio-hover-content">
			                                <i class="fa fa-angle-double-right fa-3x"></i>
			                            </div>
			                        </div>
			                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cgf-thumb.jpg" class="img-responsive" alt="">
			                    </a>
			                    <div class="portfolio-caption">
			                        <h4>Click Go Family</h4>
			                        <p class="text-muted">Brochure site &amp; web based app</p>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
	    </section>


	    <section id="education" class="bg-light-gray">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1 text-center">
	                    <h2 class="section-heading">Education</h2>
	                    <h3 class="section-subheading text-muted">How I got to where I am...</h3>
	                </div>
	            </div>


	            <div class="row">
					<div class="col-sm-10 col-sm-offset-1">
	                    <div class="row">

							<div class="job-details clearfix">
				                <div class="col-sm-4">
				                    <h2>2009 – 2011</h2> 
				                    <h3>Edinburgh Napier University</h3>
				                    <p>Edinburgh</p>
				                </div>

				                <div class="col-sm-8">
				                    <h4>BSc Digital Media, First Class Honours</h4> 
				                    <p class="description">	 
				                    	Moving to Napier, this course furthered my skills in web development &amp; user experience and provided me with more programming skills such as Javascript and PHP. 
				                    	The course also included sound theory &amp; production, a group project creating a video in HMP Prison Perth and 
				                    	an internship within a startup company. This included design &amp; development of a website for a new product, graphic design and photography.
				                   
				                    </p>
				                </div>
				            </div>
							<div class="job-details clearfix">
								<div class="col-sm-4">
				                    <h2>2006 – 2009</h2> 
				                    <h3>Carnegie College</h3>
				                    <p>Dunfermline</p>
				                </div>
				                <div class="col-sm-8">
									<h4>HND Interactive Multimedia Creation</h4> 
									<p class="description">
										I developed a range of digital media skills from this course. It included a variety of subjects such as web design &amp; development, photography, 2D &amp; 3D animation, video production, sound production, digital imaging and graphic design. 
										Having always been interested in web development, this is course is where I truly found my love for it. 
									</p>
				                </div>
							</div>

			            </div>
	                </div>
	            </div>

	        </div>
	    </section>

	    <section id="contact-info">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1">
	                    <div class="details text-center">
	                        <p>Want to have a chat? <strong><a href="mailto:hello@gemmastephen.co.uk" target="_top">hello@gemmastephen.co.uk</a></strong></p>

	                        <ul>
	                        	<li id="li-icon"><a href="#" target="_blank"></a></li>
  								<li id="tw-icon"><a href="#" target="_blank"></a></li>
	                        </ul>

	                    </div>
	                 </div>
	             </div>
	         </div>              
	    </section>


	    <footer>
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                    <p>&copy; <?php echo date(Y)?> Gemma L. Stephen. All rights reserved. </p>
	                </div>
	            </div>
	        </div>
	    </footer>


	




	<!-- Portfolio Modals -->

    <!-- Business Hound -->
    <div class="portfolio-modal modal fade" id="bh-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Business Hound</h2>
                                <img class="img-responsive img-centered" src="<?php echo get_stylesheet_directory_uri(); ?>/images/bh-screens.png" alt="Business Hound Screens">
                                <p>
	                                <strong>What I did:</strong> HTML, CSS, Javascript, SEO, Responsive Design
	                            </p>
                                <p>
                                    Business Hound is a financial admin site for small businesses to manage invoicing, record mileage via an app and track expenses. This included development of a responsive brochure site and web app. I worked on the front-end of this Ruby on Rails project collaboratively with the designer and back-end developers.
                                </p>
                                <ul class="list-inline">
                                    <li>Date: April 2016</li>
                                    <li>Client: Business Hound</li>
                                </ul>
                                <a href="https://www.mybusinesshound.com/" target="_blank" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="cgh-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Click Go Home</h2>
                                <img class="img-responsive img-centered" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cg-screens.png" alt="Click Go Screens">
                                <p>
                                	<strong>What I did:</strong> HTML, CSS, Javascript, Responsive Design
                                </p>
                                <p>
	                                The Click Go app is used to support people in care and help manage their appointments and budgets together with the team around them. This meant the app would be used by mainly an older target user so the app had to be accessible, clear and easy to use. 
	                                The user was also supplied with a Samsung tablet by the client so the site was built responsively with this in mind.
	                            </p>
                                <ul class="list-inline">
                                    <li>Date: August 2015</li>
                                    <li>Client: Carr Gomm</li>
                                </ul>
                                <a href="http://user.clickgo2.com/" target="_blank" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="planys-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Planys Mobile</h2>
                                <img class="img-responsive img-centered" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pl-screens.png" alt="Planys Mobile Screens">
                                <p>
                                	<strong>What I did:</strong> HTML, CSS, Javascript, Responsive Design, PHP, SEO
                                </p>
                                <p>
	                                The project was to re-develop and build a portfolio site to showcase work by the company. Having been provided the design from the designer, development was my sole responsibility. This included all front-end work, PHP and SEO improvements.
	                            </p>
                                <ul class="list-inline">
                                    <li>Date: May 2016</li>
                                    <li>Client: Planys Mobile</li>
                                </ul>
                                <a href="http://www.planysmobile.com/" target="_blank" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>I Can Skills</h2>
                                <img class="img-responsive img-centered" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sds-screens.png" alt="I Can Skills Screens">
                                <p>
                                	<strong>What I did:</strong> HTML, CSS, Javascript, Responsive Design
                                </p>
                                <p>
	                                I Can Skills was an extension of an existing project (My World of Work) aimed at primary school children. Helping teachers to ensure children learn skills for work using "I Can" statements. The app was used to allow pupils to report their progress on activities and the skills they gained towards completing a statement. Working with the back-end developers, my focus on this project was developing the front-end code.
	                            </p>
                                <ul class="list-inline">
                                    <li>Date: Nov 2015</li>
                                    <li>Client: Skills Development Scotland</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Inchdairnie Distillery</h2>
                                <img class="img-responsive img-centered" src="<?php echo get_stylesheet_directory_uri(); ?>/images/inch-screens.png" alt="Inchdairnie Distillery Screens">
                                <p>
                                	<strong>What I did:</strong> HTML, CSS, Javascript, Responsive Design, Wordpress Integration
                                </p>
                                <p>
	                                A brochure website was needed for a new whisky distillery opening in Inchdairnie. The project required a countdown to the first whisky available (13 years) and management via Wordpress. I worked with the designer to develop this responsive site, build a theme and integrate Wordpress.
	                            </p>
                                <ul class="list-inline">
                                    <li>Date: Feb 2016</li>
                                    <li>Client: Steely Fox</li>
                                </ul>
                                <a href="http://www.inchdairniedistillery.com/" target="_blank" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Hiryzr</h2>
                                <img class="img-responsive img-centered" src="<?php echo get_stylesheet_directory_uri(); ?>/images/hi-screens.png" alt="Hiryzr Screens">
                                <p>
                                	<strong>What I did:</strong> HTML, CSS, Javascript, Responsive Design
                                </p>
                                <p>
	                                Hiryzr is web app that helps to match users skills to potential jobs and opportunities. I worked on the front-end development of this project collaboratively with back-end developers and the designer.
	                            </p>
                                <ul class="list-inline">
                                    <li>Date: Dec 2015</li>
                                    <li>Client: Digital Connextions</li>
                                </ul>
                                <a href="http://www.inchdairniedistillery.com/" target="_blank" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Portfolio Modal 7 -->
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Lydia Osteoporosis</h2>
                                <img class="img-responsive img-centered" src="<?php echo get_stylesheet_directory_uri(); ?>/images/qmu-screens.png" alt="Lydia Osteoporosis Screens">
                                <p>
                                	<strong>What I did:</strong> HTML, CSS, Javascript, Responsive Design
                                </p>
                                <p>
	                                The Lydia Osteoporosis Project is aimed at raising awareness for the Osteoporosis condition and a blog style website was developed to provide information and allow management of articles. On this project,  I developed the front-end code working with the designer and back-end developers.
	                            </p>
                                <ul class="list-inline">
                                    <li>Date: Aug 2015</li>
                                    <li>Client: Queen Margaret University</li>
                                </ul>
                                <a href="http://www.lydiaosteoporosis.com/" target="_blank" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 8 -->
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Spot</h2>
                                <img class="img-responsive img-centered" src="<?php echo get_stylesheet_directory_uri(); ?>/images/spot-screens.png" alt="Spot Screens">
                                <p>
                                	<strong>What I did:</strong> HTML, CSS, Javascript, Responsive Design
                                </p>
                                <p>
									Spot is a HTML5 webapp built using backbone.js and is a calculator used to assist medical professionals when transferring patients from one drug to another or transferring how it's administered. Designed for use on a mobile device, I worked on the front-end code together with back-end developers. 
	                            </p>
                                <ul class="list-inline">
                                    <li>Date: Jun 2016</li>
                                    <li>Client: Dr. Flint</li>
                                </ul>
                                <a href="http://www.doctorflint.co.uk/" target="_blank" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 9 -->
    <div class="portfolio-modal modal fade" id="cgf-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Click Go Family</h2>
                                <img class="img-responsive img-centered" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cgf-screens.png" alt="Click Go Family Screens">
                                <p>
	                                <strong>What I did:</strong> HTML, CSS, Javascript, Responsive Design
	                            </p>
                                <p>
	                                Similar to Click Go Home, the Click Go Family app focuses on helping people who are cared for by their own families as opposed to a formal care system. A responsive webapp was developed to help manage scheduling, appointments, status updates, tasks and visits. I worked on the front-end of this mainly in HTML, CSS and jQuery/Javascript with the back-end development team.
	                            </p>
                                <ul class="list-inline">
                                    <li>Date: Aug 2016</li>
                                    <li>Client: Carr Gomm</li>
                                </ul>
                                <a href="https://www.mybusinesshound.com/" target="_blank" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <?php wp_footer(); ?>
	</body>
</html>