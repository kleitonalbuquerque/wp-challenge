<?php
/**
 * Template part for the information section of an event
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen_child
 * @since Twenty Seventeen Child 1.0.0
 * @version 1.0.0
 */

$section = get_query_var('__section');
$dates = $section['dates'];

if (is_array($dates)) {
    foreach ($dates as $date) {
        ?>
        <p><?= $date['text']; ?>: <?= $date['start']; ?> - <?= $date['end']; ?></p>
        <?php
    }
}
