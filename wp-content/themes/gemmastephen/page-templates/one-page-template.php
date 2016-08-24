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

		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

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
			                 	Front End Development
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
	                <div class="col-sm-5 text-center">
	                    Case study image
	                </div>

	                <div class="col-sm-7">
	                    <h3>Julie's Story</h3>
	                    <p>As a junior doctor, I know this acutely. Out of hours, two weeks after starting work in my first rotation as an FY1 in General Medicine, I was asked to switch a dying patient on nasogastric opiates to a syringe driver. Her nasogastric route was compromised. It was not a familiar procedure, and I asked for help.</p> 

	                    <p>I contacted the registrar, who was busy with acutely unwell patients. Once I found the correct guideline, I manually converted the patient’s nasogastric opiate intake to a subcutaneous syringe driver. This took me a considerable amount of time, and all the while the patient was not receiving her pain relief.  </p>

	                    <p>In the end, I did not have the confidence to prescribe the opiates, as I was unsure that I had made the correct conversion using pen and paper. I called the registrar to double-check the dosages.</p>

	                    <p>It was a sobering lesson, and I was determined that no other junior doctor or nurse prescriber should be put in the same position. At that time, I decided to create a program to ensure that junior staff can double-check their opiate calculations.</p>
	                </div>

	            </div>
	        </div>
	    </section>


	    <!-- Work Section -->
    <section id="work" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <h2 class="section-heading">Work</h2>
                    <h3 class="section-subheading text-muted">The things I have done...</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Round Icons</h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Startup Framework</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Treehouse</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/golden.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Golden</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/escape.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Escape</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Dreams</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


	    <section id="education">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1 text-center">
	                    <h2 class="section-heading">Education</h2>
	                    <h3 class="section-subheading text-muted">How I got to where I am...</h3>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-4">
	                    <div class="team-member">
	                        <h4>Prof. Sir Alfred Cuschieri</h4>
	                        <p class="text-muted">Chief Scientific Advisor</p>
	                    </div>
	                </div>
	                <div class="col-sm-8">
	                    <p style="margin-top: 0;">
	                        Alfred Cuschieri is Professor of Surgery at the Scuola Superiore Sant’Anna in Pisa and Chief Scientific Advisor to the Institute of Medical Science and Technology (IMSaT). Previously he was Professor and Head of Department of Surgery and Molecular Oncology at Ninewells Hospital and Medical School, University of Dundee. His research interests include minimal access therapy, endoscopic surgery, technology and micro-robotics, ergonomics, nanotechnology and nanoscience and virtual/augmented reality systems for skills training. Alfred Cuschieri is the European Editor-in-Chief of Surgical Endoscopy and serves on the Editorial Board of 10 other peer review journals.
	                    </p>
	                </div>
	            </div>

	            <div class="row">
	                <div class="col-sm-4">
	                    <div class="team-member">
	                        <h4>Dr. Jacob George</h4>
	                        <p class="text-muted">Validation and Academic Lead</p>
	                    </div>
	                </div>
	                <div class="col-sm-8">
	                    <p>
	                        Dr Jacob George, MB ChB, MRCP, MD is a senior clinical lecturer, consultant physician in clinical pharmacology and acute medicine. He is a trials expert and the Tayside representative of the Scottish Medicines Consortium. To date, Dr George has attracted in excess of £1.2m research funding.
	                    </p>
	                </div>
	            </div>

	            <div class="row">
	                <div class="col-sm-4">
	                    <div class="team-member">
	                        <h4>Dr Deans Buchanan</h4>
	                        <p class="text-muted">Civic Lead and Palliative Care Consultant</p>
	                    </div>
	                </div>
	                <div class="col-sm-8">
	                   <p>
	                        Dr Deans Buchanan, MB ChB, BSc (Hons), M.D., FRCP. Clinical lead for Palliative care research in NHS Tayside and consultant in Palliative care medicine. He has published widely and the co-director for the Dundee University MPH programme. Dr Buchanan is a civic co-sponsor of the project.
	                    </p>
	                </div>
	            </div>

	            <div class="row">
	                <div class="col-sm-4">
	                    <div class="team-member">
	                        <h4>Dr Roger Flint</h4>
	                        <p class="text-muted">Doctor</p>
	                    </div>
	                </div>
	                <div class="col-sm-8">
	                    <p>
	                        Founder. Doctor Flint Ltd is led by Dr Roger Flint, MB ChB, BSc. (Hons), MSc., OF., a medical doctor with a background in Public Health. His Masters degree involved the interrogation of large general practice data sets and producing novel search strategies. His work has been published in the Primary care respiratory journal.
	                    </p>
	                </div>
	            </div>

	        </div>
	    </section>

	    <section id="contact-info" class="bg-light-gray">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1">
	                    <div class="details text-center">
	                        <p>Want to get in touch? Email <strong><a href="mailto:info@planysmobile.com" target="_top">info@doctorflint.co.uk</a></strong></p>
	                    </div>
	                 </div>
	             </div>
	         </div>              
	    </section>


	    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
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
                                <!-- Project Details Go Here -->
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
                                <!-- Project Details Go Here -->
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
                                <!-- Project Details Go Here -->
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
                                <!-- Project Details Go Here -->
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

	    <footer>
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                    <span class="copyright">Copyright &copy; Doctor Flint Limited 2016 &bull; Company Number SC500992</span>
	                </div>
	            </div>
	        </div>
	    </footer>
	    <?php wp_footer(); ?>
	</body>
</html>