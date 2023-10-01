<?php get_header(); ?>

<!-- Header Close -->
<section class="page-title bg-1">
   <div class="container">
      <div class="columns">
         <div class="column is-12">
            <div class="block has-text-centered">
               <h1 class="is-capitalize text-lg">Newsletter & Articles</h1>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="section blog-wrap">
    <div class="container">
        <div class="columns is-multiline is-desktop">
            <div class="column is-8-desktop">
                <div class="columns is-multiline">
					<?php while(have_posts()) { the_post(); ?>
						<div class="column is-6-desktop is-6-tablet mb-4">
							<div class="blog-item-content">
								<img src="<?php echo get_theme_file_uri('images/blog/blog_1.jpg'); ?>" alt="<?php the_title(); ?>" class="w-100">

								<div class="blog-item-content-content mt-3">
									<span class="text-sm text-color is-uppercase has-text-weight-bold"><?php the_time('F j, Y');?></span>

									<h3 class="mb-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p class="mb-5">
										<?php 
											if(has_excerpt()){
												the_excerpt();
											}else{
												echo wp_trim_words(get_the_content(), 18);
											} 
										?>
									</p>

									<a href="<?php the_permalink(); ?>" class="btn btn-small btn-main is-rounded">Learn More</a>
								</div>
							</div>
						</div>
					<?php } ?>

					<div class="column is-12 mt-4">
						<nav class="pagination">
							<div class="nav-links">
									<a class="page-numbers current" href="#">1</a>
									<a class="page-numbers" href="#">2</a>
									<a class="page-numbers" href="#">3</a>
									<a class="page-numbers" href="#"><i class="icofont-long-arrow-right"></i></a>
							</div>
						</nav>
					</div>
				</div>
            </div>
            <div class="column is-4-desktop">
                <div class="sidebar-wrap">
					<div class="sidebar-widget search p-4 mb-3 ">
						<input type="text" class="input" placeholder="Search">
						<a href="#"><i class="icofont-search"></i></a>
					</div>

				<div class="sidebar-widget latest-post p-3 mb-3">
					<h5>Latest Posts</h5>

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
				</div>

				<div class="sidebar-widget categories p-3 mb-3">
					<h5 class="mb-4">Caregory</h5>
					<ul class="list-unstyled">
						<li><a href="#"><i class="icofont-folder mr-3"></i>Education</a></li>
						<li><a href="#"><i class="icofont-folder mr-3"></i>Water</a></li>
						<li><a href="#"><i class="icofont-folder mr-3"></i>Food</a></li>
						<li><a href="#"><i class="icofont-folder mr-3"></i>Medicine</a></li>
						<li><a href="#"><i class="icofont-folder mr-3"></i>Shelter</a></li>
					</ul>
				</div>
				<div class="sidebar-widget tags p-3 mb-3">
					<h5 class="mb-4 is-block">Tags</h5>
					<a href="#">Web</a>
					<a href="#">agency</a>
					<a href="#">company</a>
					<a href="#">creative</a>
					<a href="#">html</a>
					<a href="#">Marketing</a>
					<a href="#">Social Media</a>
					<a href="#">Branding</a>
				</div>

			</div>
            </div>   
        </div>
    </div>
</section>

<!-- footer Start -->

<?php get_footer(); ?>