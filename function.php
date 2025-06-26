<?php

/**
 * Enqueue script and styles for child theme
 */
function woodmart_child_enqueue_styles()
{
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('woodmart-style'), woodmart_get_theme_info('Version'));
}
add_action('wp_enqueue_scripts', 'woodmart_child_enqueue_styles', 10010);

// Ocultar el precio en la categoría 'tour-especiales'
add_filter('woocommerce_get_price_html', 'ocultar_precio_categoria_especifica', 10, 2);
