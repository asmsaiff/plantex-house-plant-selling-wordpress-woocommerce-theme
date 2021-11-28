<?php
    CSF::createSection($option_prefix, array(
        'title'                 =>  __('Footer', 'plantex'),
        'parent'                =>  'general',
        'fields'                =>  array(
            array(
                'title'                 =>  __('MC4WP Form Shortcode', 'plantex'),
                'id'                    =>  'footer_description',
                'type'                  =>  'wp_editor',
                'height'                =>  '100px',
                'media_buttons'         =>  false
            ),
            array(
                'title'                 =>  __('Address Area Title', 'plantex'),
                'id'                    =>  'address_area_title',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Address', 'plantex'),
                'id'                    =>  'address',
                'type'                  =>  'wp_editor',
                'height'                =>  '100px',
                'media_buttons'         =>  false
            ),
            array(
                'title'                 =>  __('Contact Area Title', 'plantex'),
                'id'                    =>  'contact_area_title',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Contact Phone Number', 'plantex'),
                'id'                    =>  'contact_phone_number',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Credit Card Area Title', 'plantex'),
                'id'                    =>  'credit_card_area_title',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Card Thumbnails', 'plantex'),
                'id'                    =>  'card_thumbs',
                'type'                  =>  'repeater',
                'min'                   =>  1,
                'max'                   =>  4,
                'fields'                =>  array(
                    array(
                        'title'             =>  __('Thumbnails', 'plantex'),
                        'id'                =>  'thumb_img',
                        'type'              =>  'media',
                        'url'               => true
                    ),
                ),
            ),
            array(
                'title'                 =>  __('Footer Credit', 'plantex'),
                'id'                    =>  'footer_credit',
                'type'                  =>  'wp_editor',
                'height'                =>  '100px',
                'media_buttons'         =>  false
            ),
        ),
    ));