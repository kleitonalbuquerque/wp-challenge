<?php
/**
 * Template part for the content section of an event
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen_child
 * @since Twenty Seventeen Child 1.0.0
 * @version 1.0.0
 */

$section = get_query_var('__section');
$image = $section['image'];
$text = $section['text'];

if (!empty($image)) {
    ?><img src="<?= $image['url']; ?>" /><?php
}

if (!empty($text)) {
    echo $text;
}
