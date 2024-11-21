<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */
require_once get_stylesheet_directory() . "/components/header/modalUserMenu.php";
require_once get_stylesheet_directory() . "/components/header/modalCategories.php";
require_once get_stylesheet_directory() . "/components/header/modalCategoriesMobile.php";







?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class=" scroll-smooth">
    <?php wp_body_open(); ?>
    <?php do_action('storefront_before_site'); ?>
    <div id="page" class="hfeed site">
        <?php do_action('storefront_before_header'); ?>


        <header class="w-screen  hidden md:flex flex-col  justify-center items-center fixed top-0 shadow-lg bg-myWhite " style="z-index: 1000;">
            <div class="flex items-center  justify-center w-screen py-2 bg-primary text-white">
                <div class="w-[95vw] flex justify-between">
                    <p>This is a <span class="font-semibold">DEMO version</span>, the website is under build 🏗️</p>
                    <div class="flex gap-2 items-center">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <a href="www.csair.org" target="_blank" class="text-white"> csair.org</a>

                    </div>

                </div>
            </div>
            <div class="flex items-center justify-between w-[95vw] bg-myWhite h-[70px]">

                <div class="flex gap-4 h-full items-center">
                    <div class="flex items-center h-full cursor-pointer">
                        <div class="w-[180px] py-2">
                            <?php
                            if (function_exists('the_custom_logo')) {
                                echo '<a href="' . esc_url(home_url('/')) . '">';
                                the_custom_logo();
                                echo '</a>';
                            } else {
                                echo '<a href="' . esc_url(home_url('/')) . '"><p>Logotype here</p></a>';
                            }
                            ?>
                        </div>
                    </div>
                    <div id="categoriesBtn" class="relative flex items-center h-full  gap-2 cursor-pointer">
                        <p class="font-medium text-sm">Explore our categories</p>
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                        <!-- Modal Categories -->
                        <?php modalCategories() ?>


                    </div>
                    <div class="flex items-center h-full cursor-pointer">
                        <?php echo do_shortcode('[fibosearch]'); ?>

                    </div>

                </div>
                <div class="h-full flex ">
                    <nav class="h-full">
                        <div class=" flex gap-8 h-full items-center">
                            <div id="" class="flex items-center gap-2 h-full">
                                <i class="fa fa-mobile"></i>
                                <span>Show With Apps</span>
                            </div>
                            <div class="pt cursor-pointer">
                                <!-- <i class="fa fa-globe"></i> -->
                                <div class="max">
                                    <?php echo do_shortcode('[gtranslate]'); ?>

                                </div>

                            </div>
                            <div class="flex h-full items-center gap-2 cursor-pointer relative">
                                <?php
                                if (is_user_logged_in()) :
                                    // Mostrar el botón para usuarios logueados
                                    echo '<div id="userBtn" class="flex items-center gap-2 cursor-pointer relative h-full">
            <i class="far fa-user"></i>
            <p>My Account</p>
          </div>';

                                    // Llamada a la función que renderiza el modal
                                    userModal();
                                else :
                                    // Mensaje para usuarios no logueados
                                    echo '<div class="flex items-center gap-2 cursor-pointer relative h-full">
                                      <a href="/my-account">
                        <i class="far fa-user"></i>
                        <span>Login/Register</span>
                        </a>
          </div>';
                                endif;
                                ?>
                            </div>
                            <div class="flex items-center justify-center ">
                                <a id="userBtn" href="<?php echo esc_url(wc_get_cart_url()); ?>" class="flex items-center">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span class="ml-1"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>


        <!-- Header Mobile -->


        <header class="md:hidden  flex justify-center items-center relative " style="z-index:1000;">
            <div class="flex items-center justify-between w-full bg-primary  fixed top-0 left-0 h-[60px] ">

                <div class="flex gap-4 h-full">

                    <div class="px-4 flex items-center justify-center h-full bg-slate-600 gap-2 cursor-pointer relative">
                        <i id="categoriesBtnMobile" class="fa fa-bars fa-lg" aria-hidden="true"></i>

                        <!-- Modal Categories -->
                        <?php modalCategoriesMobile(); ?>
                    </div>

                </div>
                <div>
                    <nav>
                        <div class="flex gap-8 px-4">
                            <div class="flex items-center gap-2 cursor-pointer">
                                <i class="fa fa-globe"></i>
                                <span>EN</span>
                            </div>
                            <div id="userBtn" class="flex items-center gap-2 cursor-pointer">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="flex items-center gap-2 cursor-pointer">
                                <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="flex items-center">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span class="ml-1"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>