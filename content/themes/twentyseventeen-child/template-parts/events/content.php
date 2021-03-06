<?php
/**
 * Template part for displaying events, based on posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen_child
 * @since Twenty Seventeen Child 1.0.0
 * @version 1.0.0
 */

?>

<article id="post-<?php the_ID();?>" <?php post_class();?>>
    <?php
    if (is_sticky() && is_home()) {
        echo twentyseventeen_get_svg(array('icon' => 'thumb-tack'));
    }
    ?>
    <header class="entry-header">
        <?php
        if ('post' === get_post_type()) {
            echo '<div class="entry-meta">';
            if (is_single()) {
                twentyseventeen_posted_on();
            } else {
                echo twentyseventeen_time_link();
                twentyseventeen_edit_link();
            }
            echo '</div><!-- .entry-meta -->';
        }

        if (is_single()) {
            the_title('<h1 class="entry-title">', '</h1>');
        } elseif (is_front_page() && is_home()) {
            the_title(sprintf(
                '<h3 class="entry-title"><a href="%s" rel="bookmark">',
                esc_url(get_permalink())
            ), '</a></h3>');
        } else {
            the_title(sprintf(
                '<h2 class="entry-title"><a href="%s" rel="bookmark">',
                esc_url(get_permalink())
            ), '</a></h2>');
        }
        ?>
    </header><!-- .entry-header -->

    <?php if ('' !== get_the_post_thumbnail() && !is_single()) { ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail('twentyseventeen-featured-image');?>
            </a>
        </div><!-- .post-thumbnail -->
    <?php } ?>

    <div class="entry-content">
        <?php
        the_content(
            sprintf(
                /* translators: %s: Post title. */
                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen'),
                get_the_title()
            )
        );

        get_template_part('template-parts/events/flexible-content');

        wp_link_pages([
            'before' => '<div class="page-links">' . __('Pages:', 'twentyseventeen'),
            'after' => '</div>',
            'link_before' => '<span class="page-number">',
            'link_after' => '</span>',
        ]);
        ?>
    </div><!-- .entry-content -->

    <?php
    if (is_single()) {
        twentyseventeen_entry_footer();
    }
    ?>

</article><!-- #post-<?php the_ID();?> -->
