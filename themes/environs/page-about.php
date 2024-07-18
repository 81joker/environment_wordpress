<?php
/* Template Name: About Us Template */
get_header();
?>
<?php 
    while( have_posts() ):
        the_post();
    // pageBanner();
    get_template_part( 'parts/content', 'breadcrumb' );

?>


<!-- About Start -->
<div class="container-fluid about  py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-5">
                    <div class="h-100">
                    <?php if( $image = get_field('about_image') ): ?>
                        <img src="<?php echo $image['url']; ?>" class="img-fluid w-100 h-100" alt="Image">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-7">
                    <h5 class="text-uppercase text-primary"><?php echo esc_html( get_field('first_title') ); ?></h5>
                    <h1 class="mb-4"><?php echo esc_html( get_field('second_title') ); ?></h1>
                    <p class="fs-5 mb-4"><?php echo esc_html( get_field('body_text') ); ?></p>
                    <div class="tab-class bg-secondary p-4">
                        <ul class="nav d-flex mb-2">
                        <?php if(get_field('tab1_title_url')): ?>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#<?php echo esc_html( strtolower(get_field('tab1_title_url')) ); ?>-1">
                                    <span class="text-dark" style="width: 150px;"><?php echo esc_html( ucfirst(get_field('tab1_title_url')) ); ?></span>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if(get_field('tab2_title_url')): ?>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#<?php echo esc_html( strtolower(get_field('tab2_title_url')) ); ?>-2">
                                    <span class="text-dark" style="width: 150px;"><?php echo esc_html( ucfirst(get_field('tab2_title_url')) ); ?></span>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if(get_field('tab3_title_url')): ?>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 150px;"><?php echo esc_html( ucfirst(get_field('tab3_title_url')) ); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                        </ul>

                        <?php if(get_field('tab1_title_url')): ?>
                        <div class="tab-content">
                            <div id="<?php echo esc_html( strtolower(get_field('tab1_title_url')) ); ?>-1" class="tab-pane fade show p-0 active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-start my-auto">
                                                <h5 class="text-uppercase mb-3"><?php echo esc_html( get_field('tab1_title') ); ?></h5>
                                                <p class="mb-4"><?php echo esc_html( get_field('tab1_text') ); ?></p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if(get_field('tab2_title_url')): ?>
                            <div id="<?php echo esc_html( strtolower(get_field('tab2_title_url')) ); ?>-2" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-start my-auto">
                                                <h5 class="text-uppercase mb-3"><?php echo esc_html( get_field('tab2_title') ); ?></h5>
                                                <p class="mb-4"><?php echo esc_html( get_field('tab2_text') ); ?></p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if(get_field('tab3_title_url')): ?>
                            <div id="<?php echo esc_html( strtolower(get_field('tab3_title_url')) ); ?>-3" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-start my-auto">
                                                <h5 class="text-uppercase mb-3"><?php echo esc_html( get_field('tab3_title') ); ?></h5>
                                                <p class="mb-4"><?php echo esc_html( get_field('tab3_text') ); ?></p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


<?php endwhile; ?>
<?php
get_footer();
?>
