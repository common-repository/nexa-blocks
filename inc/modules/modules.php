<?php 
/**
 * All Nexa Modules 
 * 
 * @since 1.0.0
 */

if( ! defined( 'ABSPATH' ) ) {
    exit;
}

return apply_filters( 'nexa_modules', [
    [
        'name'   => 'custom-css',
        'title'  => __('Custom CSS', 'nexa-blocks'),
        'is_pro' => true,
        'active' => true,
    ],
]); 

