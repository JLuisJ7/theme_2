<?php get_header(); ?>
<!-- site content -->
			<div id="main">
			<!-- Breadcrumb Section Start Here -->
				<div class="breadcrumb-section">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1><?php the_title(); ?></h1>
								<ul class="breadcrumb">
									<li>
										<a href="index.html">Inicio</a>
									</li>
									<li class="active">
										<?php the_title(); ?>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<!-- Breadcrumb Section End Here -->

<?php global $post;  ?>
				<div class="content-wrapper" id="page-info">
					<div class="container">
						<!-- Our Story Section Start Here -->
						<section class="our-story row">
							<div class="col-xs-12">

								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<header class="story-heading section-header">
									<h2><strong><?php the_title(); ?></strong></h2>
								</header>
								<div class="row">
									
									<div class="col-xs-12 col-sm-5">
										<section class="slider-wrap flex-slide flexslider">
											<ul class="slides">
												<?php 
        $args = array(
            'order' => 'DESC',
            'post_type' => 'attachment',
            'posts_per_page' => 2,
            'post_parent' => $post->ID,   // cuidado personal
            'post_mime_type' => 'image'
        );
       $attachments = get_posts($args);
        if ($attachments) {
            foreach ($attachments as $attachment) {                            
                $image_atts = wp_get_attachment_image_src( $attachment->ID, 'full' );?>
                 
                  
                   <li>
												<img src="<?php echo  $image_atts[0];  ?>" alt="">
											</li>
											<li>
												<img src="<?php echo $image_atts[0]; ?>" alt="">
											</li>
           <?php  }
        }
    ?> 
											
											</ul>
										</section>
									</div>
									<div class="col-xs-12 col-sm-7">								
									
    
										<?php the_content(); ?>
									
									</div>
								</div>
								<?php endwhile; endif;  ?>
							</div>
						</section>
						<!-- Our Story Section Start Here -->
						
					</div>



				</div>

			</div>
			<!-- site content ends -->
<?php get_footer(); ?>