<?php get_header(); 
$eventDate2 = new DateTime(get_field('event_date'));
?>


<section class="section blog-wrap">
    <div class="container">
        <?php while(have_posts()) : the_post();?>
        <div class="columns is-multiline is-desktop">
            <div class="column is-7-desktop">
                <div class="single-blog-item">
                    <div class="">

                        <?php 
                            if(has_post_thumbnail()){
                                the_post_thumbnail();
                            }else{ ?>
                                <img class="profile-creative-image" src="<?php echo get_theme_file_uri('images/img-1024x480.jpg')?>" alt="<?php the_title(); ?>"/>
                            <?php } 
                        ?> 
                        <br>
                        <p class="mt-0"><a href="<?php echo get_post_type_archive_link('event'); ?>" class="btn btn-main-2 is-rounded mt-5"> See More Events <i class="icofont-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="column is-5-desktop">
                <div class="sidebar-wrap">
                    <div class="sidebar-widget latest-post p-3 mb-3">
                        <h2 class="text-color">About the Event</h2>
                        <p class="mt-4 mb-3 is-size-4 has-text-weight-semibold"><?php the_title(); ?></p>
                        <p class="has-text-weight-semibold text-color is-size-6">
                            <i class="icofont-clock-time mr-1"></i> <?php echo get_field('event_start_time') . " - " . get_field('event_end_time') ?> 
                            <i class="icofont-calendar ml-4 mr-1"></i> <?php echo $eventDate2->format('d F, Y'); ?>
                        </p>
                        <hr>
                        <?php the_content(); ?>    
                    </div>
                    <hr>
                    <div class="py-3">
                        <p class="mt-0"><a href="#" class="btn btn-main is-rounded mt-3 mr-5"> Sign Up <i class="icofont-arrow-right"></i></a></p>
                       
                    </div>
                </div>
                    <!-- <div class="share-option mt-5 clearfix">
                        <strong>Share:</strong> 
                        <ul class="list-inline ml-0">
                            <li class="list-inline-item"><a href="#" target="_blank">
                                <i class="icofont-facebook mr-2"></i>Facebook</a></li>
                            <li class="list-inline-item"><a href="#" target="_blank">
                                <i class="icofont-twitter mr-2"></i>Twitter</a></li>
                        </ul>
                    </div> -->

                    <!-- <div class="sidebar-widget latest-post p-3 mb-3 mt-5">
                        <h2>Upcoming Events</h2>

                        <div class="border-bottom py-3">
                            <span class="text-sm text-muted">03 Mar 2018</span>
                            <h5 class="my-2"><a href="#">Thoughtful living in los Angeles</a></h5>
                        </div>

                        <div class="border-bottom py-3">
                            <span class="text-sm text-muted">03 Mar 2018</span>
                            <h5 class="my-2"><a href="#">Vivamus molestie gravida turpis.</a></h5>
                        </div>

                        <div class="py-3">
                            <span class="text-sm text-muted">03 Mar 2018</span>
                            <h5 class="my-2"><a href="#">Fusce lobortis lorem at ipsum semper sagittis</a></h5>
                        </div>
                    </div> -->
                </div>
            </div>   
        </div>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>

<div class="blog-item-content mt-3">