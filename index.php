<?php get_header() ?>
    <section class="container">
        <div class="row">
            <div class="jrnl_post_content col-md-9">
                <?php
                    if (have_posts()):
                        while(have_posts()):
                            the_post();
                            ?>
                                <div class="jrnl_post_wrapper">
                                    <div class="jrnl_post_title">
                                        <h1>
                                            <a href="<?php the_permalink();?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h1>
                                    </div>
                                    <div class="jrnl_post_thumb">
                                        <a href="<?php the_permalink();?>">
                                            <?php the_post_thumbnail( 'post-thumbnails' ) ?>
                                        </a>
                                    </div>
                                    <div class="jrnl_post_excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>

                                </div>    
                            <?php
                        endwhile;
                    else:
                        echo "There Is no post yet!";    
                    endif;
                ?>
                <div class="jrnl_pagination">
                    <?php
                        global $wp_query;
                        $big = 10; // need an unlikely integer
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ))),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged')),
                            'total' => $wp_query->max_num_pages,
                            'prev_text' => __( '< Prev', 'textdomain' ),
                            'next_text' => __( 'Next >', 'textdomain' ) 
                        ) );
                    ?>
                </div>
            </div>
            <div class="jrnl_side_bar col-md-3">
                <h3>This is sidebar</h3>
            </div>
        </div>
    </section>
    <!-- header part end -->

    <?php get_footer();?>
    <?php wp_footer();?>
