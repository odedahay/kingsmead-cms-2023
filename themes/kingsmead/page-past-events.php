
<?php get_header(); ?>

<!-- Inner Banner -->
    
<section class="page-title bg-1">
   <div class="container">
      <div class="columns">
         <div class="column is-12">
            <div class="block has-text-centered">
               <h1 class="is-capitalize text-lg">Past Events</h1>
               <p>A recap of our past events.</p>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Event  -->
<section class="section causes py-5">
	<div class="container">
		
        <?php 
			$today = date('Ymd');
			$pastEvents = new WP_Query(array(
            'paged' => get_query_var('paged', 1),
            'post_type' => 'event',
			'meta_key' => 'event_date',
			'orderby' => 'meta_value_num',
			'order' => 'ASC',
			'meta_query' => array(
				array(
					'key' => 'event_date',
					'compare' => '<',
					'value' => $today,
					'type' => 'numeric'
				)
			)

        )); 
        
        while($pastEvents->have_posts()){
            $pastEvents->the_post(); ?>

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
                    <p class="h6 text-color is-size-6"><i class="icofont-calendar text-color mr-2"></i> Jun 20, 2024 @ 10:00 am - Jul 9, 2024 @ 3:30 pm</p>
                    <h2 class="content-title mb-4 is-size-3"><?php the_title(); ?></h2>
                    <p class=" mb-4">By: Fr. Francis Lim, LJ</p>
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
            
        <?php } echo paginate_links(array(
            'total' => $pastEvents->max_num_pages
        )); ?>	
		
	</div>
</section>
<section>
	<div class="container">
		<div class="columns is-justify-content-center">
			<div class="column">
				<div class="is-flex is-justify-content-start">
				
					<h3 class="mt-4 mb-5"><a href="<?php echo site_url('/events') ?>">Back to Upcoming Events <i class="icofont-rounded-right"></i></a>
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



<?php get_footer(); ?>