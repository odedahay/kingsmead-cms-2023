
<?php get_header(); ?>

<!-- Slider Start -->
<section class="slider_ hero is-success" _style="background: url('./images/mainpagebanner.jpg') no-repeat;">
	<div class="hero-body hero-body-custom">
		<picture>
			<source media="(min-width:720px)" srcset="<?php echo get_theme_file_uri('images/mainpagebanner.jpg'); ?>">
			<img src="<?php echo get_theme_file_uri('images/mainpagebanner-mobile.jpg'); ?>" alt="Prizes" class="main-kv-mobile-responsive">
		  </picture>
	</div>
		<!-- <div class="container">
			<div class="columns is-justify-content-center">
				<div class="column is-9-desktop is-10-tablet">
					<div class="block has-text-centered">
						<span class="is-block mb-4 text-white is-capitalized">Small help can make change</span>
						<h1 class="mb-5">New hope for <br>near future</h1>
						<p class="mb-6">Your small contribution means a lot. Natus officia amet <br>accusamus repellat magni reprehenderit dolorem.</p>
						<a href="#" target="_blank" class="btn btn-main is-rounded">Donate Now</a>
					</div>
				</div>
			</div>
		</div> -->
</section>

<section class="section py-5-home">
	<div class="container">
		<div class="columns is-align-items-center is-desktop mb-6">
			<div class="column is-6-desktop">
				<div class="section-title mb-0">
					<h2 class="mt-4 content-title">About<br>Kingsmead Centre</h2>
				</div>
			</div>
			<div class="column is-6-desktop">
				<p class="mb-5">The emphasis of Kingsmead Centre in Singapore, is on Ignatian Spirituality and Counselling, aimed at helping people to become whole and well-integrated members of society.</p>
				<p class="mt-5"><a href="#" class="more-btns"> Read more <i class="icofont-arrow-right"></i></a></p>
			</div>
		</div>
	</div>
</section>

<section class="section py-5">
	<div class="container">
		<div class="columns">
			<div class="column">
				<div class="home-card-item">
					<div class="card is-blue">
						<a href="" class="home-link-item">
							<header class="card-header">
								<p class="card-header-title is-size-5 is-white-text">
								Ignitian Spiritual
								</p>
								<div class="card-header-icon">
									<i class="icofont-arrow-right"></i>
								</div>
							</header>
						</a>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="home-card-item">
					<div class="card is-orange">
						<a href="" class="home-link-item">
							<header class="card-header">
								<p class="card-header-title is-size-5 is-white-text">
									Spiritiual Direction
								</p>
								<div class="card-header-icon">
									<i class="icofont-arrow-right"></i>
								</div>
							</header>
						</a>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="home-card-item">
					<div class="card is-yellow">
						<a href="" class="home-link-item">
							<header class="card-header">
								<p class="card-header-title is-size-5 is-white-text">
									Counselling
								</p>
								<div class="card-header-icon">
									<i class="icofont-arrow-right"></i>
								</div>
							</header>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="column">
			<div class="column lg-12">
				<div class="section-divider"></div>
			</div>
		</div>
	</div>
</section>

<!-- Event  -->
<section class="section causes py-5">
	<div class="container">
		<div class="columns is-justify-content-center">
			<div class="column is-7-desktop is-8-tablet">
				<div class="section-title has-text-centered">
					<h2 class="mt-4 mb-5 is-relative content-title">Upcoming Event</h2>
				</div>
			</div>
		</div>

        <?php 
			$today = date('Ymd');
			$homepageEvents = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type' => 'event',
			'meta_key' => 'event_date',
			'orderby' => 'meta_value_num',
			'order' => 'ASC',
			'meta_query' => array(
				array(
					'key' => 'event_date',
					'compare' => '>=',
					'value' => $today,
					'type' => 'numeric'
				)
			)

        )); 
        
        while($homepageEvents->have_posts()){
            $homepageEvents->the_post(); ?>

            <div class="columns is-mobile">
                <div class="column is-1">
                    <div class="event-date is-flex is-justify-content-center is-align-content-center">
                        <div>
                            <div class="event-date-day text-color">
								<?php 
									$eventDate = new DateTime(get_field('event_date'));
									echo $eventDate->format('d');
								?>
							</div>
                            <div class="event-date-month"><?php echo $eventDate->format('M'); ?></div>
                        </div>
                    </div>
                </div>
                <div class="column is-one-fifth" style="">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="column">
					<p class="has-text-weight-semibold text-color is-size-6 mb-0">
						<i class="icofont-clock-time mr-1"></i> <?php echo get_field('event_start_time') . " - " . get_field('event_end_time'); ?> 
						<i class="icofont-calendar text-color ml-4 mr-1"></i>  <?php echo $eventDate->format('d F, Y'); ?></p>
                    <h2 class="content-title mb-4 is-size-3"><?php the_title(); ?></h2>
                    <p class="mb-6"><?php 
                        if(has_excerpt()){
                            the_excerpt(); 
                        } else{
                        echo wp_trim_words(get_the_content(), 24);
                        }?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-main is-rounded">Learn More</a>
                </div>
		    </div>
            <section>
                <div class="container">
                    <div class="column">
                        <div class="column lg-12">
                            <div class="section-divider"></div>
                        </div>
                    </div>
                </div>
		    </section>
            
        <?php } wp_reset_postdata(); ?>

		<div>

	<?php 
		$today = date('Ymd');
		$homepageSubEvents = new WP_Query(array(
        'posts_per_page' => 2,
		'offset'        => 1,
        'post_type' => 'event',
		'meta_key' => 'event_date',
		'orderby' => 'meta_value_num',
		'order' => 'ASC',
		'meta_query' => array(
			array(
				'key' => 'event_date',
				'compare' => '>=',
				'value' => $today,
				'type' => 'numeric'
			)
		)

    )); 
	
		while($homepageSubEvents->have_posts()) { 
			$homepageSubEvents->the_post()?>

			<div class="columns">
			<div class="column is-1">
				<div class="event-date is-flex is-justify-content-center is-align-content-center">
				<div>
                        <div class="event-date-day text-color">
							<?php 
								$eventDate2 = new DateTime(get_field('event_date'));
								echo $eventDate2->format('d');
							?>
						</div>
                        <div class="event-date-month"><?php echo $eventDate2->format('M'); ?></div>
                    </div>
				</div>
			</div>
			<div class="column">
				<p class="has-text-weight-semibold text-color is-size-6 mb-0">
					<i class="icofont-clock-time mr-1"></i> <?php echo get_field('event_start_time') . " - " . get_field('event_end_time') ?> 
					<i class="icofont-calendar text-color ml-4 mr-1"></i> <?php echo $eventDate2->format('d F, Y'); ?></p>
				<h3 class="mb-4 is-size-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			</div>
			<div class="column is-3">
				<div class="mt-5">
					<a href="<?php the_permalink(); ?>" class="btn btn-main-2 is-rounded">Learn more</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="column mt-0 pt-0">
				<div class="column mt-0 pt-0 lg-12">
					<div class="section-divider"></div>
				</div>
			</div>
		</div>
	</div> 
	<?php } wp_reset_postdata();?>
</div>

	</section>
<section>
	<div class="container">
		<div class="columns is-justify-content-center">
			<div class="column">
				<div class="is-flex is-justify-content-start">
					<h3 class="mt-4 mb-5">
						<a href="<?php echo get_post_type_archive_link('event'); ?>" class="more-btns">See More Events <i class="icofont-rounded-right"></i></a>
					</h3> 
					<!-- <p class="mt-5"><a href="#" > More Events <i class="icofont-arrow-right"></i></a></p> -->
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="column">
			<div class="column lg-12">
				<div class="section-divider"></div>
			</div>
		</div>
	</div>
</section>

<!-- Section more events -->
<div class="container">
	<div class="columns is-justify-content-center">
		<div class="column is-7-desktop is-8-tablet">
			<div class="section-title has-text-centered">
				<h2 class="mt-4 mb-5 is-relative content-title">Newsletters & Articles</h2>
			</div>
		</div>
	</div>
</div>
<div class="volunteer section ">
	<div class="container">
		<div class="columns is-multiline">
            <?php $args = array(
                'post_type' => 'post',
                'posts_per_type' => 2,
                'category_name' => 'articles'
            ); 
            $postDisplay = new WP_Query($args);

            while( $postDisplay->have_posts() ){
            $postDisplay->the_post(); ?>
                
            <div class="column is-6-desktop is-12-tablet">
				<div class="volunteer-content">
					<img src="<?php echo get_theme_file_uri('images/bg/image-5.jpg'); ?>" alt="" class="">
					<h2 class="text-md mb-5 mt-3"><?php the_title(); ?></h2>
					<p><?php if(has_excerpt()){
                        the_excerpt();
                    }else{
                        echo wp_trim_words(get_the_content(), 22);
                    }
                    ?></p>
					<a href="<?php the_permalink(); ?>" class="btn btn-main is-rounded mt-5">Read More</a>
				</div>
			</div>
            
            <?php } wp_reset_postdata(); ?>
		</div>
	</div>
</div>


<section>
	<div class="container">
		<div class="columns is-justify-content-center">
			<div class="column">
				<div class="is-flex is-justify-content-flex-start">
					<h3 class="mt-4 mb-5"><a href="<?php echo site_url('/newsletters-articles')?>" class="more-btns">More Newsletter & Articles <i class="icofont-rounded-right"></i></a></h3>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="column">
			<div class="column lg-12">
				<div class="section-divider"></div>
			</div>
		</div>
	</div>
</section>
<!-- Need Counselling -->
<div class="cta-block section" _style='background: url("./images/bg/bg-3.jpg") fixed 50% 50%;'>
	<div class="container">
		<div class="columns is-justify-content-center ">
			<div class="column is-7-desktop is-12-tablet">
				<div class="cta-content has-text-centered">
					<img src="<?php echo get_theme_file_uri('images/council.svg'); ?>" class="council-icon">
					<h2 class="text-white text-lg mb-3 mt-4">Explore Our Facilities</h2>
					<p class="text-white mb-6">Kingsmead Centre offers counselling and psychotherapy services to promote the psychological health and well-being of each person. The Centre has a team of trained counsellors who provide counselling to individuals, couples and families. </p>
					<a href="<?php echo site_url('/facilities'); ?>" class="btn btn-main is-rounded">Learn more</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Message from Director -->
<section class="section about-page">
	<div class="container">
		<div class="columns is-align-items-center">
			<div class="column is-2-desktop is-5-tablet">
				<div class="about-item-img">
					<img src="https://kingsmeadcentre.sg/wp-content/uploads/2023/07/director-profile-pic.jpg" alt="" class="">
				</div>
			</div>

			<div class="column is-10-desktop is-7-tablet">
				<div class="about-item-content pl-5">
					<h2 class="mb-5 content-title">Director of Counselling, Kingsmead Center</h2>
					<p class="mb-5">Dr. Charles Sim, S.J, graduated from the Institute of Psychiatry, King’s College, London, with a Master of Science in Family Therapy in 2002. He did his clinical training at the Department of Child and Family Psychiatry, King’s College Hospital, as well as the renowned Maudsley Psychiatric Hospital in London, England.  He then went on to complete his doctorate in Couple and Family Therapy at the University of Minnesota (USA), including specialized training at the Minuchin Family Centre (NYC), Gottman Institute (Seattle), and Medical Family Therapy at the Medical Centre, Rochester University (USA).  He is the master trainer for the “Person-of-the-Therapist” (POTT) and the “Marital First Responder” (MFR) training workshops. </p>
					
					<a href="#" class="btn btn-main is-rounded">Learn More</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>