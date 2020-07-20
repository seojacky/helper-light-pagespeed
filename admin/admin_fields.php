<?php

defined('ABSPATH') or exit('No direct script access allowed');
defined('HLFP_DIR') or exit('No HLFP_DIR defined');

if (!defined('HLFP_DIR_ADMIN'))
{
    define('HLFP_DIR_ADMIN', HLFP_DIR . '/admin');
}

// require field configuration class
require_once HLFP_DIR_ADMIN . '/class_admin_fields.php';

// create admin fields
if (class_exists('HLFP_OSA'))
{
    $wposa_obj = new HLFP_OSA();

    // Settings section
    $wposa_obj->add_section(
        array(
            'id' => 'hlfp_settings',
            'title' => __('Settings', 'helper-lite-for-pagespeed'),
        )
    );

    // Filter type selection field
    $wposa_obj->add_field(
        'hlfp_settings',
        array(
            'id' => 'filter_type',
            'type' => 'select',
            'name' => __('Select filter type', 'helper-lite-for-pagespeed'),
            'desc' => __("Filter - use default Wordpress filters. Will not filter all images on page.
            <br />
            Buffer - use PHP buffer. Filter all images on page. Might cause problems on some servers.", 'helper-lite-for-pagespeed'),
            'options' => array(
                'filter' => 'Filters',
                'buffering' => 'Buffer',
            ),
        )
    );

    // Filter type selection field
    $wposa_obj->add_field(
        'hlfp_settings',
        array(
            'id' => 'loading_type',
            'type' => 'select',
            'name' => __('loading', 'helper-lite-for-pagespeed'),
            'options' => array(
                'lazy' => 'lazy',
                'eager' => 'eager',
                'auto' => 'auto',
                'none' => '-',
            ),
        )
    );

    // Filter type selection field
    $wposa_obj->add_field(
        'hlfp_settings',
        array(
            'id' => 'decoding_type',
            'type' => 'select',
            'name' => __('decoding', 'helper-lite-for-pagespeed'),
            'options' => array(
                'async' => 'async',
                'sync' => 'sync',
                'auto' => 'auto',
                'none' => '-',
            ),
        )
    );

    // =======================================================

    // Scripts section
    $wposa_obj->add_section(
        array(
            'id' => 'hlfp_scripts',
            'title' => __('Scripts', 'helper-lite-for-pagespeed'),
        )
    );

    // Filter type selection field
    $wposa_obj->add_field(
        'hlfp_scripts',
        array(
            'id' => 'passive_events',
            'type' => 'checkbox',
            'name' => __('Use passive events', 'hlfp'),
            'desc' => __('Events with attribute passive perform better for touch and wheel', 'helper-lite-for-pagespeed'),
        )
    );
}
