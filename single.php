<?php
/**
 * Single post router
 */
$is_ru = (strpos($_SERVER['REQUEST_URI'], '/ru/') !== false || get_post_meta(get_the_ID(), '_bf_title_ru', true));

if ($is_ru) {
    include(get_stylesheet_directory() . '/single-journal-ru.php');
} else {
    include(get_stylesheet_directory() . '/single-journal.php');
}
