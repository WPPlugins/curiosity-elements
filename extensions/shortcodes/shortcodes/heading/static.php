<?php if (!defined('FW')) die('Forbidden');

$uri = CURIOSITY_ELEMENTS_PLUGIN_URL .'/extensions/shortcodes/shortcodes/heading';

wp_enqueue_style(
    'curiosity-heading-shortcode',
    $uri . '/static/css/styles.css'
);
