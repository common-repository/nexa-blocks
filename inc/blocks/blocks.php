<?php 
/**
 * All Nexa Blocks 
 * 
 * @since 1.0.0
 */

if( ! defined( 'ABSPATH' ) ) {
    exit;
}

return apply_filters( 'nexa_blocks', [
    [
        'name'   => 'container',
        'is_pro' => false,
        'active' => true,
        'demo'   => 'https://lib.nexablocks.com/container'
    ],
    [
        'name'   => 'advanced-heading',
        'is_pro' => false,
        'active' => true,
        'demo'   => 'https://lib.nexablocks.com/advanced-heading/'
    ],
    [
        'name'   => 'button',
        'is_pro' => false,
        'active' => true,
        'demo'   => 'https://lib.nexablocks.com/button/'
    ],
    [
        'name'   => 'icon-box',
        'is_pro' => false,
        'active' => true,
        'demo'   => 'https://lib.nexablocks.com/icon-box/'
    ],
    [
        'name'   => 'social-icons',
        'is_pro' => false,
        'active' => true,
        'demo'   => 'https://lib.nexablocks.com/social-icons/'
    ],
    [
        'name'   => 'social-share',
        'is_pro' => false,
        'active' => true,
        'demo'   => 'https://lib.nexablocks.com/social-share/'
    ],
    [
        'name'   => 'google-map',
        'is_pro' => false,
        'active' => true,
        'demo'   => 'https://lib.nexablocks.com/google-map/'
    ],
    [
        'name'     => 'accordion-item',
        'is_pro'   => false,
        'active'   => true,
        'is_child' => true,
    ],
    [
        'name'   => 'accordion',
        'is_pro' => false,
        'active' => true,
        'demo'   => 'https://lib.nexablocks.com/accordion/'
    ],
    [
        'name'     => 'image-accordion-item',
        'is_pro'   => false,
        'active'   => true,
        'is_child' => true,
    ],
    [
        'name'   => 'image-accordion',
        'is_pro' => false,
        'active' => true,
        'demo'   => 'https://lib.nexablocks.com/image-accordion/'
    ],
    [
        'name'     => 'slide-item',
        'is_pro'   => false,
        'active'   => true,
        'is_child' => true,
    ],
    [
        'name'   => 'slider',
        'is_pro' => false,
        'active' => true,
        'demo'   => 'https://lib.nexablocks.com/slider/'
    ],
    [
        'name'   => 'flip-box',
        'is_pro' => true,
        'active' => true,
        'demo'   => 'https://lib.nexablocks.com/flip-box/',
    ],
    [
        'name'   => 'dynamic-slider',
        'is_pro' => true,
        'active' => true,
        'demo'   => 'https://lib.nexablocks.com/dynamic-slider/',
    ],
    [
        'name'     => 'tab',
        'is_pro'   => false,
        'active'   => true,
        'is_child' => true,
    ],
    [
        'name'        => 'tabs',
        'is_pro'      => false,
        'is_freemium' => true,
        'active'      => true,
        'demo'        => 'https://lib.nexablocks.com/tabs/',
    ],
    [
        'name'        => 'form',
        'is_upcoming' => true,
        'active'      => true,
        'demo'        => 'https://lib.nexablocks.com/tabs/',
    ],
    [
        'name'        => 'advanced-slider',
        'is_upcoming' => true,
        'active'      => true,
        'demo'        => 'https://lib.nexablocks.com/tabs/',
    ],
]); 