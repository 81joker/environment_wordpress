        
        
                
       <!-- Carousel Start -->
       <div class="container-fluid carousel-header vh-100 px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="<?php echo get_theme_mod('first_slide')  ?>" class="img-fluid" alt="Image">
                        <img src="<?php /** echo get_theme_file_uri( 'img/carousel-1.jpg' ) **/?>" class="img-fluid" alt="Image">
                        
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;"><?php echo get_theme_mod('first_slide_title'); ?></h4>

                                <h1 class="display-1 text-capitalize text-white mb-4"><?php echo get_theme_mod('first_slide_subtitle'); ?></h1>
                                <p class="mb-5 fs-5"><?php echo get_theme_mod('first_slide_content'); ?></p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#">Join With Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_theme_file_uri( 'img/carousel-2.jpg' ) ?>" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;"><?php echo get_theme_mod('second_slide_title'); ?></h4>
                                <h1 class="display-1 text-capitalize text-white mb-4"><?php echo get_theme_mod('second_slide_subtitle'); ?></h1>
                                <p class="mb-5 fs-5"><?php echo get_theme_mod('second_slide_content'); ?> </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#">Join With Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_theme_file_uri( 'img/carousel-3.jpg' ) ?>" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;"><?php echo get_theme_mod('third_slide_title'); ?></h4>
                                <h1 class="display-1 text-capitalize text-white mb-4"><?php echo get_theme_mod('third_slide_subtitle'); ?></h1>
                                <p class="mb-5 fs-5"><?php echo get_theme_mod('third_slide_content'); ?> </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#">Join With Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

    