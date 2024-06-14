<?php get_header() ?>
    <section class="container">
        <div class="row">
            <div class="jrnl_post_content col-md-9">
                <?php
                    the_archive_title('<h1 class="archive_title">','</h1>');
                ?>
                <?php
                    get_template_part( 'template_part/blog_post' )
                ?>                  
                <div class="jrnl_pagination">
                    <?php
                        get_template_part( 'template_part/pagination' )
                    ?>                    
                </div>
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
