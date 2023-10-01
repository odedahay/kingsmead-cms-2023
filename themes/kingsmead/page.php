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
			<div class="column is-4-desktop is-5-tablet">
				<div class="about-item-img mt-3">
					<img src="<?php echo get_theme_file_uri('images/img-520x480.jpg'); ?>" alt="<?php the_title(); ?>" class=" w-100">
				</div>
			</div>

			<div class="column is-8-desktop is-7-tablet">
				<div class="about-item-content pl-5">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="section pt-0 pb-0">
	<div class="container">
		<div class="columns is-justify-content-center">
			<div class="column is-8-desktop is-12-tablet">
				<div class="content has-text-centered">
					<h2 class="content-title mb-5">Historical Milestones</h2>
					<p>Assumenda reiciendis delectus dolore incidunt molestias omnis quo quaerat voluptate, eligendi perspiciatis ipsa laudantium nesciunt officia, odit nemo quidem hic itaque. Fugiat.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="section feature pb-0">
	<div class="container">
		<div class="columns is-gapless is-multiline">
			<div class="column is-4-desktop is-4-tablet">
				<div class="feature-inner">
					<i class="icofont-home"></i>
					<h4>21 October 1990:</h4>
					<p class="mb-4"> Kingsmead Centre was officially opened at 8 Victoria Park Road in Singapore, coinciding with the twin celebrations of the 500 year anniversary of the birth of St Ignatius of Loyola (the founder of the Society of Jesus), and the 450 year anniversary of the formal approval of the Society of Jesus by Pope Paul III.</p>
				</div>
			</div>
			<div class="column is-4-desktop is-4-tablet">
				<div class="feature-inner">
					<i class="icofont-web"></i>
					<h4 >2013:</h4>
					<p class="mb-4">Kingsmead Centre was renovated to provide more facilities for individual spiritual direction. A new logo was also designed.</p>
				</div>
			</div>
			<div class="column is-4-desktop is-4-tablet">
				<div class="feature-inner">
					<i class="icofont-users"></i>
					<h4>2015: </h4>
					<p class="mb-4">Kingsmead Centre celebrated its 25th anniversary.</p>
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

