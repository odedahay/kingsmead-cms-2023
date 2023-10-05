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
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

</section>
<!--  Section Services End -->
<!-- Need Facilities -->
<div class="cta-block section" _style='background: url("<?php echo get_theme_file_uri('images/bg/bg-3.jpg'); ?>") fixed 50% 50%;'>
	<div class="container">
		<div class="columns is-justify-content-center ">
			<div class="column is-7-desktop is-12-tablet">
				<div class="cta-content has-text-centered">
					<img src="<?php echo get_theme_file_uri('images/council.svg'); ?>" class="council-icon">
					<h2 class="text-white text-lg mb-3 mt-4">Explore our facilities?</h2>
					<p class="text-white mb-6">Kingsmead Centre offers counselling and psychotherapy services to promote the psychological health and well-being of each person. The Centre has a team of trained counsellors who provide counselling to individuals, couples and families. </p>
					<a href="donation.html" class="btn btn-main is-rounded">Learn more</a>
				</div>
			</div>
		</div>
	</div>
</div>


<?php } 

get_footer();
?>

