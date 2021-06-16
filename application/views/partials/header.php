<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Boda Systems</title>
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
                                    <a href="<?=site_url()?>portfolio">
                                        <span class="menu-text"> Portfolio</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-submenu dropdown-hover">
                                        <li><a href="<?=site_url()?>portfolio">Portfolio One</a></li>
                                        <li><a href="<?=site_url()?>portfolio-2">Portfolio Two</a></li>
                                        <li><a href="<?=site_url()?>portfolio-details">Portfolio Details</a></li>
                                    </ul>
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
                                    <li class="menu-item-has-children"><a href="<?=site_url()?>">Home</a>
                                       
                                    </li>
                                    <li><a href="<?=site_url()?>about">About</a></li>
                                    <li><a href="<?=site_url()?>service">Service</a></li>
                                    <li class="menu-item-has-children"><a href="#">Portfolio</a>
                                        <ul class="dropdown">
                                            <li><a href="<?=site_url()?>portfolio">Portfolio One</a></li>
                                            <li><a href="<?=site_url()?>portfolio-2">Portfolio Two</a></li>
                                            <li><a href="<?=site_url()?>portfolio-details">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="<?=site_url()?>career">Career</a>
                                       
                                    </li>
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
                            <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                        </div>
                        <!-- Social Link End -->
                    </div>
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
        <!-- Offcanvas Serach Start -->
        <aside class="off-canvas-search-wrapper">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="off-canvas-inner">
                    <form action="#" method="post">
                        <input type="search" placeholder="Search..">
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </aside>
        <!-- Offcanvas Search End -->
        <!-- off-canvas menu start -->
        <aside class="off-canvas-menu-wrapper" id="sideMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="off-canvas-inner">
                    <!-- offcanvas widget area start -->
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
                        <ul class="menu-top-menu">
                            <li><span>Who We Are</span></li>
                        </ul>
                        <p class="desc-content">Bodasystems Inc. is a project consulting and strategic staffing solutions
                            provider focusing on to provide highly talented and knowledgeable resources to satisfy all
                            your IT needs</p>
                        <ul class="useful-link">
                            <li><a href="<?=site_url()?>">Home</a></li>
                            <li><a href="<?=site_url()?>service">Service</a></li>
                            <li><a href="<?=site_url()?>portfolio">Portfolio</a></li>
                            <li><a href="<?=site_url()?>about">About Us</a></li>
                            <li><a href="<?=site_url()?>contact">Contact Us</a></li>
                        </ul>
                        <div class="widget-social">
                            <ul class="menu-top-menu">
                                <li><span>Connect With Us</span></li>
                            </ul>
                            <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                            <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                            <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                        </div>
                    </div>
                    <!-- offcanvas widget area end -->
                </div>
                <div class="btn-close-off-canvas">
                    <i class="fa fa-times"></i>
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
    </header>
    <!-- Header Area End Here -->