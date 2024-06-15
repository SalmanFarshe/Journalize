<?php
/*
Template Name: Services
*/
get_header(); ?>

<div class="services-container">
    <div class="services-list">
        <?php
            $service_posts = array(
                'post_type' => 'service',
                'posts_per_page' => 6,
                'order' => 'ASC'
            );
            $services_query = new WP_Query($service_posts);
        ?>
        <div class="service-item">
            <div class="container">
                <div class="row">
            <?php
                if ($services_query->have_posts()) :
                while ($services_query->have_posts()) : $services_query->the_post(); ?>
                        <div class="col-md-4">
                            <div class="">
                                <h2 class=""><?php the_title(); ?></h2>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="" alt="">
                                <p class=""><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                        <?php endwhile;
                wp_reset_postdata();
                else :
                    _e('No services found.', 'jrnl');
                endif; ?>
                </div>
            </div>
        </div>    
    </div>
</div>

<?php get_footer(); ?>
