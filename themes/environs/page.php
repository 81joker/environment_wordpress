<?php get_header(); ?>
<?php 
    while( have_posts() ):
        the_post();
    // pageBanner();
     ?>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(<?php header_image(); ?>);"  height="<?php echo esc_attr( get_custom_header()->height ); ?>"  width="<?php echo esc_attr( get_custom_header()->width ); ?>">
        <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4"><?php the_title() ?></h1>
                <p class="fs-5 text-white mb-4"><?php echo wp_trim_words(get_the_content(), 20)?></p>
                <!-- <p class="fs-5 text-white mb-4">Help today because tomorrow you may be the one who needs more helping!</p> -->
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('/') ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">About Us</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->



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