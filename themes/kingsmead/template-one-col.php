<?php 
/*
    Template Name: One Column
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
            <div class="columns is-flex is-justify-content-center is-multiline is-desktop">
                <div class="column is-10-desktop">
                    <div class="columns is-multiline">
                        <div class="column is-12 mb-5">
                            <div class="single-blog-item">
                                <div class="blog-item-content mt-3">
                                <?php the_content(); ?>
                                   
                                </div>
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

