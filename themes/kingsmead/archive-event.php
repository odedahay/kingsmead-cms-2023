
<?php get_header(); ?>

<!-- Inner Banner -->
    
<section class="page-title bg-1">
   <div class="container">
      <div class="columns">
         <div class="column is-12">
            <div class="block has-text-centered">
               <h1 class="is-capitalize text-lg">More Events</h1>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Event  -->
<section class="section causes py-5">
	<div class="container">
		
        <?php         
        	while(have_posts()) { the_post(); ?>

            <div class="columns is-mobile mt-5">
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
                <div class="column is-2" style="">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="column">
                    <p class="h6 text-color is-size-6">
					<i class="icofont-clock-time mr-1"></i> <?php echo get_field('event_start_time') . " - " . get_field('event_end_time'); ?> 
						<i class="icofont-calendar text-color ml-4 mr-1"></i>  <?php echo $eventDate->format('d F, Y'); ?></p>
					</p>
                    <h2 class="content-title mb-4 is-size-3"><?php the_title(); ?></h2>
                    <p class="mb-4"><?php 
                        if(has_excerpt()){
                            the_excerpt(); 
                        } else{
                        echo wp_trim_words(get_the_content(), 24);
                        }?></p>
                    <a href="<?php the_permalink(); ?>" class="button is-outlined">Learn More</a>
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
            
        <?php }  echo paginate_links();?>

		<!-- <div>
			
			<div class="columns">
				<div class="column is-1">
					<div class="event-date is-flex is-justify-content-center is-align-content-center">
						<div>
							<div class="event-date-day text-color">21</div>
							<div class="event-date-month">Jun</div>
						</div>
					</div>
				</div>
				<div class="column">
					<p class="h6 text-color is-size-6"><i class="icofont-calendar text-color mr-2"></i> Jun 21, 2024 @ 10:00 am - Jul 9, 2024 @ 3:30 pm</p>
					<h3 class="mb-4 is-size-3"><a href="cause-single.html">Season of Creation: Love of God in Creation</a></h3>
					<p class=" mb-4">By: Fr. Francis Lim, LJ</p>
				</div>
				<div class="column is-3">
					<div class="mt-5">
						<a href="donation.html" class="btn btn-main-2 is-rounded">Learn more</a>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="column mt-0 pt-0">
					<div class="column mt-0 pt-0 lg-12">
						<div class="section-divider"></div>
					</div>
				</div>
			</div>s
		</div> -->
	
	</div>
</section>
<section>
	<div class="container">
		<div class="columns is-justify-content-center">
			<div class="column">
				<div class="is-flex is-justify-content-start">
				
					<h3 class="mt-4 mb-5">Looking for a recap of past events? <a style="text-decoration: underline;" href="<?php echo site_url('/past-events') ?>">Check out our past events archive <i class="icofont-rounded-right"></i></a>
					</h3> 
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>