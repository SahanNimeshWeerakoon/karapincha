<?php
$args = array(
    'post_type' => array('casestudies',),
    'post_status' => array('publish',),
    'order'               => 'DESC',
    'orderby'             => 'date',
    'category_name'    => 'investor',
    'posts_per_page'         => 1,            
);
$casestudies = new WP_Query( $args );
?>

<!-- Blokk Testimonials B -->
<section class="investor-case-study blokk-testimonials-b">
    <!-- Testimonial banners -->
    <div class="testimonial-banners">
        <?php
            if ( $casestudies->have_posts() ) : while ( $casestudies->have_posts() ) : $casestudies->the_post();

            $casestudy_startup = get_post_meta( get_the_ID(), 'casestudy_startup', true );
        ?>
        <!-- Big Image -->
        <div data-parallax="scroll" data-image-src="<?php echo $casestudy_startup['startup_banner'];?>" class="parallax-window big-image"></div><!-- // Big Image -->
        <?php 
            endwhile;
            endif;
            wp_reset_postdata();
        ?>        
    </div><!-- // Testimonial banners -->

    <!-- Slider Container -->
    <div class="container slider-container">
        
        <!-- Inner -->
        <div class="inner">
            <!-- Testimonials Wrapper -->
            <div id="testimonialsWrapper" class="testimonials-wrapper">

                <?php
                    if ( $casestudies->have_posts() ) : while ( $casestudies->have_posts() ) : $casestudies->the_post();

                    $casestudy_startup = get_post_meta( get_the_ID(), 'casestudy_startup', true );
                ?>
                <!-- Testimonial Item -->
                <div class="testimonial-item">
                    
                    <!-- Testimony -->
                    <div class="testimony">
                        <!-- Title -->
                        <div class="title">
                            <h2><?php echo $casestudy_startup['startup_name'];?></h2>
                        </div><!-- // Title -->

                        <!-- Description -->
                        <div class="description">
                            <p><?php echo get_the_content(); ?></p>
                        </div><!-- // Description -->

                    </div><!-- // Testimony -->
                </div><!-- // Testimonial Item -->
                <?php 
                    endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
            </div><!-- // Testimonials Wrapper -->

            <!-- Testimonials Controller -->
            <div id="testimonialsController" class="testimonial-controls">
                <?php
                    if ( $casestudies->have_posts() ) : while ( $casestudies->have_posts() ) : $casestudies->the_post();
                    $casestudy_author = get_post_meta( get_the_ID(), 'casestudy_author', true );
                ?>

                <!-- Author -->
                <div class="author">
                    
                    <!-- Author Picture -->
                    <div class="picture">
                        <img src="<?php echo $casestudy_author['author_picture'];?>" alt="<?php echo $casestudy_author['author_name'];?>">
                    </div><!-- // Author Picture -->

                    <!-- Author Data -->
                    <div class="author-data">

                        <!-- Name -->
                        <span class="name"><?php echo $casestudy_author['author_name'];?></span><!-- // Name -->

                        <!-- Job Title -->
                        <span class="job-title"><?php echo $casestudy_author['author_title'];?></span><!-- // Job Title -->
                    </div><!-- // Author Data -->
                </div><!-- // Author -->

                <?php 
                    endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
            </div><!-- // Testimonials Controller -->
        </div><!-- // Inner -->
    </div><!-- // Slider Container -->
</section><!-- // Blokk Testimonials B -->