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
                                        <?php the_content(); ?>
                                    </div>

                                </div>    
                            <?php
                        endwhile;
                    else:
                        echo "There Is no post yet!";    
                    endif;
                ?>
                
            </div>
            <div class="jrnl_side_bar col-md-3 h-100">
                <?php
                    dynamic_sidebar( 'Main-Sidebar' );
                ?>
            </div>
        </div>
    </section>
    <!-- header part end -->

    <?php get_footer();?>
    <?php wp_footer();?>
