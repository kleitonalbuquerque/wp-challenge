<?php
/**
 * Template part for displaying event sections
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen_child
 * @since Twenty Seventeen Child 1.0.0
 * @version 1.0.0
 */

$sections = get_field('sections');

if (is_array($sections)) {
    foreach ($sections as $section) {
        set_query_var('__section', $section);
        get_template_part('template-parts/events/section', $section['acf_fc_layout']);
    }
}
