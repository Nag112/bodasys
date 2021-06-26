<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Boda Systems</title>
    <meta http-equiv="expires" content="Mon, 10 Dec 2021 00:00:00 GMT" />
    <link rel="preconnect" href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="<?=site_url()?>assets/css/style.min.css">
</head>
    <!-- Header Area Start Here -->
    <header class="main-header-area header-transparent header-sticky">
        <!-- Main Header Area Start -->
        <div class="main-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-xl-2 col-md-6 col-6">
                        <div class="header-logo d-flex align-items-center">
                            <a href="<?=site_url()?>">
                                <img class="nonsticky-logo img-full" src="assets/images/logo/logo.png"
                                    alt="Header Logo">
                                <img class="sticky-logo img-full" src="assets/images/logo/logo.png" alt="Header Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-6 col-6 d-flex justify-content-end">
                        <nav class="main-nav d-none d-lg-flex">
                            <ul class="nav">
                                <li>
                                    <a class="active" href="<?=site_url()?>">
                                        <span class="menu-text"> Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=site_url()?>about">
                                        <span class="menu-text">About</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=site_url()?>services">
                                        <span class="menu-text"> Services</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=site_url()?>career">
                                        <span class="menu-text"> Career</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=site_url()?>contact">
                                        <span class="menu-text">Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-right-area main-nav">
                            <ul class="nav">
                                <li class="account-menu-wrap d-none d-lg-flex">
                                    <a href="#" class="off-canvas-menu-btn">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                                <li class="search-box-menu d-block d-lg-none">
                                    <a href="#" class="off-canvas-search-btn">
                                        <span class="btn-search"><i class="fa fa-search"></i></span>
                                    </a>
                                </li>
                                <li class="mobile-menu-btn d-block d-lg-none">
                                    <a class="off-canvas-btn" href="#">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area End -->
        <!-- off-canvas mobile menu start -->
        <aside class="off-canvas-wrapper" id="mobileMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-times"></i>
                </div>
                <div class="off-canvas-inner">
                    <div class="offcanvas-widget-area">
                        <!-- Start Serach Box -->
                        <div class="search-box-wrap off-canvas-item">
                            <form action="#" method="post">
                                <input placeholder="Search..">
                                <button class="btn-search"><i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- End Search Box -->
                        <!-- mobile menu start -->
                        <div class="mobile-navigation">
                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li><a href="<?=site_url()?>">Home</a></li>
                                    <li><a href="<?=site_url()?>about">About</a></li>
                                    <li><a href="<?=site_url()?>services">Services</a></li>
                                    <li><a href="<?=site_url()?>career">Career</a></li>
                                    <li><a href="<?=site_url()?>contact">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->
                        <!-- Soclial Link Start -->
                        <div class="widget-social">
                            <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                            <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                        <!-- Social Link End -->
                    </div>
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
     
    </header>
    <!-- Header Area End Here -->