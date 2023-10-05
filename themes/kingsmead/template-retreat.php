<?php 
/*
    Template Name: Two Columns
*/


get_header();

while(have_posts()){
    the_post(); ?>
   
    
<section class="page-title bg-1">
   <div class="container">
      <div class="columns">
         <div class="column is-12">
            <div class="block has-text-centered">
               <h1 class="is-capitalize text-lg"><?php the_title(); ?></h1>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="section blog-wrap">
        <div class="container page">
            <div class="columns is-multiline is-desktop">
                <div class="column is-8-desktop">
                    <div class="columns is-multiline">
                        <div class="column is-12 mb-5">
                            <div class="single-blog-item">

                            <?php 
                                if(has_post_thumbnail()){
                                    the_post_thumbnail();
                                }else{ ?>
                                    <img class="profile-creative-image" src="<?php echo get_theme_file_uri('images/img-1024x480.jpg')?>" alt="<?php the_title(); ?>"/>
                                <?php } 
                            ?> 
                                <div class="blog-item-content mt-3">
                                <?php the_content(); ?>
                                    
                                    <div class="share-option mt-6 clearfix has-background-warning p-5">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"> <strong>Please access the application forms for the various retreats at Kingsmead Centre from our website.</strong> </li>
                                            <li class="list-inline-item">
                                                <a href="https://tinyurl.com/Kingsmead-IGR" target="_blank" class="text-black">
                                                    <i class="icofont-link mr-2"></i>Individual Guided Retreat (IGR)
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://tinyurl.com/Kingsmead-DOR" target="_blank" class="text-black">
                                                    <i class="icofont-link mr-2"></i>Day of Recollection (DoR)
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://tinyurl.com/GroupIGRDOR" target="_blank" class="text-black">
                                                    <i class="icofont-link mr-2"></i>Group IGR / DoR
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="column is-4-desktop">
                    <div class="sidebar-wrap">
                       
                        <div class="sidebar-widget latest-post p-3 mb-3">
                            <h2 class="">Other Programmes</h2>

                            <div class="border-bottom py-3">
                                <h5 class="my-2"><a href="retreat.html">Retreat</a></h5>
                            </div>

                            <div class="border-bottom py-3">
                                <h5 class="my-2"><a href="spiritual-direction.html">Spriritual Direction</a></h5>
                            </div>
                            <div class="border-bottom py-3">
                                <h5 class="my-2"><a href="counselling.html">Counselling</a></h5>
                            </div>
                            <div class="py-3">
                                <h5 class="my-2"><a href="events.html">Events & Past Events</a></h5>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


<?php } 

get_footer();
?>

