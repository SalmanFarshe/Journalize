<?php
    function custom_button_shortcode($atts) {
        $atts = shortcode_atts(
            array(
                'text'  => 'Click Me',
                'url'   => '#',
                'class' => 'btn btn-primary',
            ),
            $atts,
            'custom_button'
        );
        return '<a href="' . esc_url($atts['url']) . '" class="' . esc_attr($atts['class']) . '">' . esc_html($atts['text']) . '</a>';
    }
    add_shortcode('custom_button', 'custom_button_shortcode');
?>
<?php
// custom service
    function service_shortcode(){
        ob_start();
        $service_posts = array(
            'post_type' => 'service',
            'posts_per_page' => 6,
            'order' => 'ASC'
        );
        $services_query = new WP_Query($service_posts); 
?>        
        <div class="services-container">
            <div class="services-list">
                <div class="service-item">
                    <div class="container">
                        <div class="row">
                            <?php
                                if ($services_query->have_posts()) :
                                    while ($services_query->have_posts()) : $services_query->the_post();
                             ?>
                                    <div class="col-md-4">
                                        <div class="">
                                            <h2 class=""><?php the_title(); ?></h2>
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="" alt="">
                                            <p class=""><?php the_excerpt(); ?></p>
                                        </div>
                                    </div> 
                            <?php 
                                    endwhile;
                                    wp_reset_postdata();
                                else :
                                    _e('No services found.', 'jrnl');
                                endif;
                            ?>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
<?php
    $service_ret = ob_get_clean();
    return $service_ret;
    }
    add_shortcode('custom_service', 'service_shortcode');
?>