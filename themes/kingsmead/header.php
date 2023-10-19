<!DOCTYPE html>
<html <?php language_attributes();?> >
  <head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<?php wp_head(); ?>
	</head>
<body <?php bodY_class(); ?>>

<!-- Header Start --> 
<header class="navigation">
	<div class="header-top ">
		<div class="container">
			<div class="columns is-gapless is-justify-content-space-between is-align-items-center">
				<div class="column is-6-desktop is-4-tablet has-text-left-desktop has-text-centered-mobile">
					<div class="header-top-info">
						<a href="<?php echo site_url('spiritual-direction/#spiritualderectors');?>"><i class="icofont-users mr-2"></i><span>Meet our spiritual directors</span></a>
						<a href="<?php echo site_url('programmes/counselling/#counsellors');?>" ><i class="icofont-users mr-2"></i><span>Meet Our Counsellors</span></a>
					</div>
				</div>
				<div class="column is-6-desktop is-8-tablet">
					<div class="header-top-right has-text-right-tablet has-text-centered-mobile">
						<a href="https://www.facebook.com/KingsmeadSpiritualityCentre" target="_blank"><i class="icofont-facebook"></i></a>
						<a href="https://www.youtube.com/channel/UC0kU-yBIkZvlqBUMfYJhGjA" target="_blank"><i class="icofont-youtube-play"></i></a>
						<a href="https://www.instagram.com/jesuits.malaysia.singapore/" target="_blank"><i class="icofont-instagram"></i></a>
						<a href="tel:+6564676072" target="_blank"><i class="icofont-phone"></i></a>
						<!-- <a href="#" class="top-btn"><i class="icofont-ui-search"></i></a> -->
						<a href="<?php echo site_url('/donation'); ?>" class="top-btn">Donate</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav id="navbar" class="navbar main-nav">
		<div class="container">
			<div class="navbar-brand">
				<a class="navbar-item" href="<?php echo site_url(); ?>">
					<img src="<?php echo get_theme_file_uri('/images/kingsmead-logo.png'); ?>" alt="Kingsmead">
				</a>
				<button role="button" class="navbar-burger burger" data-hidden="true" data-target="navigation">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</button>
			</div>

			<div class="navbar-menu mr-0" id="navigation">
				<ul class="navbar-end mr-0">			
					<li class="navbar-item <?php if(is_page('about-us') OR  wp_get_post_parent_id(0) == 9 ) echo 'active' ?>">
						<a class="navbar-link" href="<?php echo site_url('/about-us')?>">About Us</a>
					</li>
					<li class="navbar-item has-dropdown <?php if(is_page('retreat') OR is_page('spiritual-direction') OR is_page('counselling') OR wp_get_post_parent_id(0) == 25 OR is_page('ignatian-spirituality') ) echo 'active' ?>">
						<a href="#" class="navbar-link">Programmes<span class="ml-1"><i class="icofont-rounded-down"></i></span></a>
						<div class="navbar-dropdown has-shadow">
							<a class="navbar-item" href="<?php echo site_url('/retreat'); ?>">Retreat</a>
							<a class="navbar-item" href="<?php echo site_url('/spiritual-direction'); ?>">Spiritual Direction</a>
							<a class="navbar-item" href="<?php echo site_url('/programmes/counselling'); ?>">Counselling</a>
							<a class="navbar-item" href="<?php echo site_url('/ignatian-spirituality'); ?>">Ignatian Spirituality</a>
						</div>
					</li>
					<li class="navbar-item <?php if(get_post_type() == 'event' OR is_page('past-events')) echo 'active'?>">
						<a class="navbar-link" href="<?php echo site_url('/events')?>">Events</a>
					</li>
					<li class="navbar-item <?php if(get_post_type() == 'post') echo 'active'?>">
						<a href="<?php echo site_url('/newsletters-articles');?>" class="navbar-link">Newsletters & Articles</a>
					</li>
					
					<li class="navbar-item <?php if(is_page('contact-us')) echo 'active'?>">
						<a href="<?php echo site_url('/contact-us'); ?>" class="navbar-link pr-5" >Contact Us </a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<!-- Header Close -->