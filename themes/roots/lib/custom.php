<?php
/**
 * Custom functions
 */

function get_asset_timestamp($file) {
    $time = filemtime(get_stylesheet_directory() . '/assets/' . $file);
    return "?{$time}";
}