<?php 

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

<section class="section about-page">
	<div class="container">
		<div class="columns is-align-items_">
			<div class="column is-12-desktop is-7-tablet">
				<div class="about-item-content pl-5">
               <?php 
                  if(has_post_thumbnail()){
                     the_post_thumbnail();
                  }else{ ?>
                     <img class="profile-creative-image" src="<?php echo get_theme_file_uri('images/img-1024x480.jpg')?>" alt="<?php the_title(); ?>"/>
                  <?php } 
               ?> 
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

</section>


<?php } 

get_footer();
?>

