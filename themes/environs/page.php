<?php get_header(); ?>
<?php 
    while( have_posts() ):
        the_post();
    // pageBanner();
    get_template_part( 'parts/content', 'breadcrumb' );

     ?>





        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="container">
                        <div class="page-item">
                            <?php 
                                get_template_part( 'parts/content', 'page' );

                                if( comments_open() || get_comments_number() ){
                                    comments_template();
                                }
                            ?>                                
                        </div>
                    </div>
                </main>
            </div>
        </div>
<?php endwhile; ?>
<?php get_footer(); ?>