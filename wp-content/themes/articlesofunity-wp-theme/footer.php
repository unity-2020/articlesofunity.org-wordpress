<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
            <footer id="site-footer" role="contentinfo" class="header-footer-group">

                <div class="section-inner">

                    <div class="footer-credits">

                        <p class="footer-copyright">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                        </p><!-- .footer-copyright -->
                        
                        <?php
                        if ( has_nav_menu( 'articlesLegal' ) ) {
                            ?>

                                <nav class="legal-menu-wrapper" aria-label="<?php esc_attr_e( 'Primary', 'articlesofunity' ); ?>" role="navigation">

                                    <ul class="legal-menu reset-list-style">

                                    <?php
                                    if ( has_nav_menu( 'articlesLegal' ) ) {

                                        wp_nav_menu(
                                            array(
                                                'container'  => '',
                                                'items_wrap' => '%3$s',
                                                'theme_location' => 'articlesLegal',
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
                        ?>

                    </div><!-- .footer-credits -->

                    <a class="to-the-top" href="#site-header">
                        <span class="to-the-top-long">
                            <?php
                            /* translators: %s: HTML character for up arrow. */
                            printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
                            ?>
                        </span><!-- .to-the-top-long -->
                        <span class="to-the-top-short">
                            <?php
                            /* translators: %s: HTML character for up arrow. */
                            printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
                            ?>
                        </span><!-- .to-the-top-short -->
                    </a><!-- .to-the-top -->

                </div><!-- .section-inner -->

            </footer><!-- #site-footer -->

        <?php wp_footer(); ?>

    </body>
</html>
