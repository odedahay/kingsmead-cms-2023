<?php 
/*
    Template Name: Programmes - 2 Columns Page
*/


get_header();
$theParent = wp_get_post_parent_id(get_the_ID()); 

?>
   
<section class="page-title bg-1">
   <div class="container">
      <div class="columns">
         <div class="column is-12">
            <div class="block has-text-centered">
               <h1 class="is-capitalize text-lg"><?php echo get_the_title(); ?></h1>
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

                            <?php while(have_posts()){ the_post(); ?>

                                <div class="blog-item-content mt-3">
                                    <?php the_content(); ?>
                                </div>

                            <?php } ?>
                            
                            <!-- Meet Spiritual Direction Profiles-->
                          
                                
                            <?php if( is_page('spiritual-direction') or  wp_get_post_parent_id(0) == 23){ ?>

                                <?php $args = array(
                                    'post_type' => 'spiritualdirector',
                                    'posts_per_type' => -1,
                                    'orderby ' => 'title',
                                    'order' => 'ASC'
                                );
                                
                                $directorDisplay = new WP_Query($args); 
                                
                                ?>
                                
                                <hr class="" style="margin: 60px 0;">
                                <div class="content mt-5" id="spiritualderectors">
                                    <h2 class="mt-4">Meet our spiritual directors</h2>
                                </div>
                                <?php while( $directorDisplay->have_posts() ){
                                    $directorDisplay->the_post(); ?>
                                    <div class="comment-area profile-list">
                                        <ul class="comment-tree list-unstyled">
                                            <li class="mb-5">
                                                <div class="profile-area-box is-flex">

                                                    <?php 
                                                        if(has_post_thumbnail()){
                                                            the_post_thumbnail('frontpage-testimonial');
                                                        }else{ ?>
                                                            <img src="<?php echo get_theme_file_uri('images/testimonials-person-1-48x48.jpg');?>" alt="" width="100" height="100"/>
                                                        <?php } 
                                                    ?>  
                                                                
                                                    <div>
                                                        <div class="is-flex is-justify-content-space-between is-align-items-center">
                                                            <div>
                                                                <h5><?php the_title(); ?></h5>
                                                            </div>
                                                        </div>
                                                        <div class="comment-content mt-3">
                                                            <?php the_content(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                <?php  } wp_reset_postdata();
                            } ?>

                            <!-- Council-->
                            <?php if( is_page('counselling') or  wp_get_post_parent_id(0) == 25){ ?>

                            <?php $args = array(
                                'post_type' => 'counselling',
                                'posts_per_type' => -1,
                                'orderby ' => 'title',
                                'order' => 'ASC'
                            );

                            $directorDisplay = new WP_Query($args); 

                            ?>

                            <hr class="" style="margin: 60px 0;">
                            <div class="content mt-5" id="spiritualderectors">
                                <h2 class="mt-4">Meet Our Counsellors</h2>
                                <p>The following persons offer the ministry of Counselling at Kingsmead Centre</p>
                            </div>
                            <?php while( $directorDisplay->have_posts() ){
                                $directorDisplay->the_post(); ?>
                                <div class="comment-area profile-list">
                                    <ul class="comment-tree list-unstyled">
                                        <li class="mb-5">
                                            <div class="profile-area-box is-flex">

                                                <?php 
                                                    if(has_post_thumbnail()){
                                                        the_post_thumbnail('frontpage-testimonial');
                                                    }else{ ?>
                                                        <img src="<?php echo get_theme_file_uri('images/testimonials-person-1-48x48.jpg');?>" alt="" width="100" height="100"/>
                                                    <?php } 
                                                ?>  
                                                            
                                                <div>
                                                    <div class="is-flex is-justify-content-space-between is-align-items-center">
                                                        <div>
                                                            <h5><?php the_title(); ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="comment-content mt-3">
                                                        <?php the_content(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            <?php  } wp_reset_postdata();
                            } ?>
                                                            
                                <?php get_template_part('template-parts/page', 'bottomlinks'); ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="column is-4-desktop">
                    <div class="sidebar-wrap sticky-sidebar">
                        <div class="sidebar-widget latest-post p-3 mb-3">
                            <h2 class="">Programmes</h2>
                            <?php 
                                if($theParent){
                                    $findChildrenOf = $theParent;
                                }else{
                                    $findChildrenOf = get_the_ID();
                                }

                                wp_list_pages(array(
                                    'title_li' => NULL,
                                    'child_of' => $findChildrenOf,
                                    'sort_column' => 'menu_order'
                                ));
                            ?>
                            
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>

