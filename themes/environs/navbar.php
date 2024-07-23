<div class="container-fluid fixed-top px-0">
            <div class="container px-0">
                <div class="topbar">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8">
                            <div class="topbar-info d-flex flex-wrap">
                                <a href="#" class="text-light me-4"><i class="fas fa-envelope text-white me-2"></i>Example@gmail.com</a>
                                <a href="#" class="text-light"><i class="fas fa-phone-alt text-white me-2"></i>+01234567890</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="topbar-icon d-flex align-items-center justify-content-end">
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-pinterest"></i></a>
                                <a href="#" class="btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-light bg-light navbar-expand-xl">
                    <a href="index.html" class="navbar-brand ms-3">
                        <h1 class="text-primary display-5">Environs</h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="<?php echo site_url('/') ?>" class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/') ? 'active' : ''; ?>">Home</a>
                        <a href="<?php echo site_url('/about') ?>" class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/about/') ? 'active' : ''; ?>">About</a>
                        <a href="<?php echo site_url('/service') ?>" class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/services/') ? 'active' : ''; ?>">Services</a>
                        <a href="<?php echo site_url('/causes') ?>" class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/causes') ? 'active' : ''; ?>">Causes</a>
                        <a href="<?php echo site_url('/events') ?>" class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/events') ? 'active' : ''; ?>">Events</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="<?php echo site_url('/blog') ?>" class="dropdown-item <?php echo ($_SERVER['REQUEST_URI'] == '/blog') ? 'active' : ''; ?>">Blog</a>
                                <a href="<?php echo site_url('/gallery') ?>" class="dropdown-item <?php echo ($_SERVER['REQUEST_URI'] == '/gallery') ? 'active' : ''; ?>">Gallery</a>
                                <a href="<?php echo site_url('/volunteer') ?>" class="dropdown-item <?php echo ($_SERVER['REQUEST_URI'] == '/volunteer') ? 'active' : ''; ?>">Volunteers</a>
                                <a href="<?php echo site_url('/donation') ?>" class="dropdown-item <?php echo ($_SERVER['REQUEST_URI'] == '/donation') ? 'active' : ''; ?>">Donation</a>
                            </div>
                        </div>
                        <a href="<?php echo site_url('/contact') ?>" class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/contact/') ? 'active' : ''; ?>">Contact</a>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
                        <a href="" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">Donate Now</a>
                    </div>
                </div>
                </nav>
            </div>
        </div>

