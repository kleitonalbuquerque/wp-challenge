<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

$navigation_format = '<span class="screen-reader-text">%s</span>' .
    '<span aria-hidden="true" class="nav-subtitle">%s</span> ' .
    '<span class="nav-title"><span class="nav-title-icon-wrapper">%s</span>%%title</span>';

get_header(); ?>

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            // Start the Loop.
            while (have_posts()) {
                the_post();

                get_template_part('template-parts/events/content', get_post_format());

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }

                the_post_navigation([
                    'prev_text' => sprintf(
                        $navigation_format,
                        __('Previous Post', 'twentyseventeen'),
                        __('Previous', 'twentyseventeen'),
                        twentyseventeen_get_svg(['icon' => 'arrow-left'])
                    ),
                    'next_text' => sprintf(
                        $navigation_format,
                        __('Next Post', 'twentyseventeen'),
                        __('Next', 'twentyseventeen'),
                        twentyseventeen_get_svg(['icon' => 'arrow-right'])
                    ),
                ]);
            }; // End the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
