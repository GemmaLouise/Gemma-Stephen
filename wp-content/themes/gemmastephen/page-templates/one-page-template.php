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
							Away from the computer desk, I have a passion for music and like going to as many gigs and festivals as I can. I enjoy keeping active whether it be going to the gym or swimming and with this comes a love for nutrition and cooking healthy food. But sometimes I love nothing more than watching weird comedies on Netflix or relaxing with a good book. 
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
			                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
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
			                <div class="col-md-4 col-sm-6 portfolio-item">
			                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
			                        <div class="portfolio-hover">
			                            <div class="portfolio-hover-content">
			                                <i class="fa fa-angle-double-right fa-3x"></i>
			                            </div>
			                        </div>
			                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/planys-thumb.jpg" class="img-responsive" alt="">
			                    </a>
			                    <div class="portfolio-caption">
			                        <h4>Planys Mobile</h4>
			                        <p class="text-muted">Brochure site</p>
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
			                        <h4>SDS</h4>
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
			                        <h4>Inchdairnie</h4>
			                        <p class="text-muted">Brochure site &amp; Wordpress</p>
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
			                        <p class="text-muted">Brochure site &amp; web based app</p>
			                    </div>
			                </div>
			                <div class="col-md-4 col-sm-6 portfolio-item">
			                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
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
			                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
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
			                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
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
	                        <p>Want to get in touch? Email <strong><a href="mailto:hello@gemmastephen.co.uk" target="_top">hello@gemmastephen.co.uk</a></strong></p>
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
                                <p class="item-intro text-muted">Brochure site &mp; web based app</p>
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                                <p>
	                                <strong>What I did:</strong> HTML, CSS, Javascript, SEO, Responsive Design
	                            </p>
                                <p>
                                    Business Hound is a financial admin site for small businesses to manage invoicing, record mileage via an app and track expenses. 
                                    This included development of a responsive brochure site and the main web app. 
                                    I worked on the front-end of this Ruby on Rails project collaboratively with the designer and back-end developers.
                                </p>
                                <ul class="list-inline">
                                    <li>Date: April 2016</li>
                                    <li>Client: Business Hound</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <h2>Project Heading</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                                <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                                <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                                <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
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
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                                <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
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
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                                <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
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
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                                <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
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