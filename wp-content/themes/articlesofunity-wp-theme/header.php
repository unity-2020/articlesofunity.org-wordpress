<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
    
?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KGVNJ5J');</script>
        <!-- End Google Tag Manager -->

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >

        <link rel="profile" href="https://gmpg.org/xfn/11">

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KGVNJ5J"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

        <?php
        wp_body_open();
        ?>

        <header id="site-header" class="header-footer-group" role="banner">

            <div class="header-inner section-inner">

                <div class="header-titles-wrapper">

                    <?php

                    // Check whether the header search is activated in the customizer.
                    $enable_header_search = get_theme_mod( 'enable_header_search', true );

                    if ( true === $enable_header_search ) {

                        ?>

                        <button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
                            <span class="toggle-inner">
                                <span class="toggle-icon">
                                    <?php twentytwenty_the_theme_svg( 'search' ); ?>
                                </span>
                                <span class="toggle-text"><?php _e( 'Search', 'twentytwenty' ); ?></span>
                            </span>
                        </button><!-- .search-toggle -->

                    <?php } ?>

                    <div class="header-titles">

                        <?php
                            // Site title or logo.
                            twentytwenty_site_logo();
                        ?>

                    </div><!-- .header-titles -->

                    <button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                        <span class="toggle-inner">
                            <span class="toggle-icon">
                                <?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
                            </span>
                            <span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
                        </span>
                    </button><!-- .nav-toggle -->

                </div><!-- .header-titles-wrapper -->

                <div class="header-navigation-wrapper">
                    
                    <div class="header-navigation-primary">
                        <?php
                        
                        if ( has_nav_menu( 'articlesPrimary' ) || ! has_nav_menu( 'expanded' ) ) {
                            ?>

                                <nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Primary', 'articlesofunity' ); ?>" role="navigation">

                                    <ul class="primary-menu reset-list-style">

                                    <?php
                                    if ( has_nav_menu( 'articlesPrimary' ) ) {

                                        wp_nav_menu(
                                            array(
                                                'container'  => '',
                                                'items_wrap' => '%3$s',
                                                'theme_location' => 'articlesPrimary',
                                            )
                                        );

                                    } elseif ( ! has_nav_menu( 'expanded' ) ) {

                                        wp_list_pages(
                                            array(
                                                'match_menu_classes' => true,
                                                'show_sub_menu_icons' => true,
                                                'title_li' => false,
                                                'walker'   => new TwentyTwenty_Walker_Page(),
                                            )
                                        );

                                    }
                                    ?>

                                    </ul>

                                </nav><!-- .primary-menu-wrapper -->

                            <?php
                        }
                        if ( has_nav_menu( 'expanded' ) ) {
                            ?>

                            <div class="header-toggles hide-no-js">

                            <?php
                            if ( has_nav_menu( 'expanded' ) ) {
                                ?>

                                <div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

                                    <button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                                        <span class="toggle-inner">
                                            <span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
                                            <span class="toggle-icon">
                                                <?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
                                            </span>
                                        </span>
                                    </button><!-- .nav-toggle -->

                                </div><!-- .nav-toggle-wrapper -->

                                <?php
                            }
                            ?>

                            </div><!-- .header-toggles -->
                            <?php
                        }
                        ?>
                    </div><!-- .header-navigation-primary -->
                    
                    
                    <div class="header-navigation-secondary">
                        <?php
                        if ( has_nav_menu( 'articlesSecondary' ) ) {
                            ?>

                                <nav class="secondary-menu-wrapper" aria-label="<?php esc_attr_e( 'Secondary', 'articlesofunity' ); ?>" role="navigation">

                                    <ul class="primary-menu reset-list-style">

                                    <?php
                                    if ( has_nav_menu( 'articlesSecondary' ) ) {

                                        wp_nav_menu(
                                            array(
                                                'container'  => '',
                                                'items_wrap' => '%3$s',
                                                'theme_location' => 'articlesSecondary',
                                            )
                                        );

                                    }
                                    ?>

                                    </ul>

                                </nav><!-- .secondary-menu-wrapper -->

                            <?php
                        }
                        if ( has_nav_menu( 'social' ) ) {
                            ?>
                            <nav aria-label="<?php esc_attr_e( 'Social links', 'articlesofunity' ); ?>" class="header-social-wrapper">
    
                                <ul class="social-menu header-social reset-list-style social-icons fill-children-current-color">
    
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location'  => 'social',
                                            'container'       => '',
                                            'container_class' => '',
                                            'items_wrap'      => '%3$s',
                                            'menu_id'         => '',
                                            'menu_class'      => '',
                                            'depth'           => 1,
                                            'link_before'     => '<span class="screen-reader-text">',
                                            'link_after'      => '</span>',
                                            'fallback_cb'     => '',
                                        )
                                    );
                                    ?>
    
                                </ul><!-- .header-social -->
    
                            </nav><!-- .header-social-wrapper -->
                            <?php
                        }
                        
                        if ( true === $enable_header_search ) {
                            ?>

                            <div class="header-toggles hide-no-js">

                            <?php
                            if ( true === $enable_header_search ) {
                                ?>

                                <div class="toggle-wrapper search-toggle-wrapper">

                                    <button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
                                        <span class="toggle-inner">
                                            <?php twentytwenty_the_theme_svg( 'search' ); ?>
                                            <span class="toggle-text"><?php _e( 'Search', 'twentytwenty' ); ?></span>
                                        </span>
                                    </button><!-- .search-toggle -->

                                </div>

                                <?php
                            }
                            ?>

                            </div><!-- .header-toggles -->
                            <?php
                        }
                        ?>
                    </div><!-- .header-navigation-secondary -->

                </div><!-- .header-navigation-wrapper -->

            </div><!-- .header-inner -->

            <?php
            // Output the search modal (if it is activated in the customizer).
            if ( true === $enable_header_search ) {
                get_template_part( 'template-parts/modal-search' );
            }
            ?>

        </header><!-- #site-header -->

        <?php
        // Output the menu modal.
        get_template_part( 'template-parts/modal-menu' );
