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
			   <span class="text-white is-size-4">Get in Touch</span>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="section">
   <div class="container">
      <div class="columns is-justify-content-center is-multiline">
         <div class="column is-6-desktop is-6-tablet">
            <div class="contact-content">
               <h2 class="mb-5">We’d love to hear from you! <br>Give us call, send us a message?</h2>
               <ul class="address-block list-unstyled">
                  <li>
                     <h6 class="mb-2">Address</h6>
                     <i class="icofont-ui-message"></i> 8 Victoria Park Road Singapore 266492
                  </li>
                  <li>
                     <h6 class="mb-2">email us</h6>
                     <i class="icofont-ui-email"></i> <a href="mailto:cisc2664@gmail.com" target="_blank">cisc2664@gmail.com</a>
                  </li>
                  <li>
                     <h6 class="mb-2">Phone Number</h6>
                     <i class="icofont-phone"></i> <a href="tel:+6564676072" target="_blank">(65) 6467-6072</a>
                  </li>
               </ul>

               <ul class="social-icons list-inline mt-5">
                  <li>
                     <h6 class="mb-3">Find us on social media</h6>
                  </li>
                  <li class="list-inline-item">
                     <a href="https://www.facebook.com/KingsmeadSpiritualityCentre"><i class="icofont-facebook mr-2"></i></a>
                  </li>
				  <li class="list-inline-item">
                     <a href="https://www.youtube.com/channel/UC0kU-yBIkZvlqBUMfYJhGjA"><i class="icofont-youtube-play mr-2"></i></a>
                  </li>
                  <li class="list-inline-item">
                     <a href="https://www.instagram.com/jesuits.malaysia.singapore"><i class="icofont-instagram"></i></a>
                  </li>
               </ul>
						
						

            </div>
         </div>
         <div class="column is-5-desktop is-6-tablet">
            <div class="google-map">
			
               <div id="map"></div>
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
					<a href="<?php echo site_url('facilities'); ?>" class="btn btn-main is-rounded">Learn more</a>
				</div>
			</div>
		</div>
	</div>
</div>


<?php } 

get_footer();
?>

<script type="text/javascript">
	// Initialize and add the map

	function initMap() {
		// The location of Uluru
		const uluru = { lat: 1.32029, lng: 103.805102 };
		// The map, centered at Uluru
		const map = new google.maps.Map(document.getElementById("map"), {
		zoom: 16,
		center: uluru,
		});
		// The marker, positioned at Uluru
		const marker = new google.maps.Marker({
		position: uluru,
		map: map,
		});
	}

</script>

