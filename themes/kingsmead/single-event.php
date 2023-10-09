<?php get_header(); ?>


<section class="section blog-wrap">
    <div class="container">
        <div class="columns is-multiline is-desktop">
            <div class="column is-8-desktop">
                <div class="columns is-multiline">
                    <div class="column is-12 mb-5">
                        <div class="single-blog-item">
                            <?php while(have_posts()) { 
                                the_post();?>

                                <img src="<?php echo get_theme_file_uri('images/blog/image-5.jpg'); ?>" alt="" class="w-100">

                                <div class="blog-item-content mt-3">
                                    <h2 class="mt-4"><?php the_title(); ?></h2>

                                    <?php the_content(); ?>

                                    <!-- <div class="share-option mt-5 clearfix">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"> <strong>Share:</strong> </li>
                                            <li class="list-inline-item"><a href="#" target="_blank">
                                                <i class="icofont-facebook mr-2"></i>Facebook</a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank">
                                                <i class="icofont-twitter mr-2"></i>Twitter</a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank">
                                                <i class="icofont-pinterest mr-2"></i>Pinterest</a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank">
                                                <i class="icofont-linkedin mr-2"></i>Linkedin</a></li>
                                        </ul>
                                    </div> -->
                                </div>
                            <?php } ?>
                            
                        </div>
                    </div>

              

            </div>
            </div>
            <div class="column is-4-desktop">
                <div class="sidebar-wrap">

	<div class="sidebar-widget latest-post p-3 mb-3">
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
	</div>
</div>
            </div>   
        </div>
    </div>
</section>

<?php get_footer(); ?>