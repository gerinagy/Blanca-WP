<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php wp_head();?>

</head>
<body>
<div class="outer-container">
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 flex align-items-center">
                        <div class="header-bar-text d-none d-lg-block">
                            <p>Hello world, My name is Blanca</p>
                        </div><!-- .header-bar-text -->

                        <div class="header-bar-email d-none d-lg-block">
                            <a href="#">Contactme@email.com</a>
                        </div><!-- .header-bar-email -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-6 flex justify-content-between justify-content-lg-end align-items-center">
                        <div class="header-bar-social d-none d-md-block">
                            <ul class="flex align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .header-bar-social -->

                        <div class="header-bar-search d-none d-md-block">
                            <form>
                                <input type="search" placeholder="Search">
                            </form>
                        </div><!-- .header-bar-search -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .top-header-bar -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="site-branding flex flex-column align-items-center">
                        <h1 class="site-title"><a href="index.html" rel="home">Blanca</a></h1>
                        <p class="site-description">Personal Blog</p>
                    </div><!-- .site-branding -->

                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul class="flex-lg flex-lg-row justify-content-lg-center align-content-lg-center">
                            <li class="current-menu-item"><a href="index.html">Home</a></li>
                            <li><a href="#">features</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">blog</a></li>
                            <li><a href="#">about me</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>

                        <div class="header-bar-social d-md-none">
                            <ul class="flex justify-content-center align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .header-bar-social -->

                        <div class="header-bar-search d-md-none">
                            <form>
                                <input type="search" placeholder="Search">
                            </form>
                        </div><!-- .header-bar-search -->
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </header><!-- .site-header -->
