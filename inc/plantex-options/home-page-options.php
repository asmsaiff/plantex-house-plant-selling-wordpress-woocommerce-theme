<?php
    CSF::createSection($option_prefix, array(
        'title'         =>  __('Home Page', 'plantex'),
        'id'            =>  'home_page'
    ));

    CSF::createSection($option_prefix, array(
        'parent'        =>  'home_page',
        'title'         =>  __('Hero Section', 'plantex'),
        'fields'        =>  array(
            array(
                'id'            =>  'hero_title',
                'title'         =>  __('Hero Title', 'plantex'),
                'type'          =>  'wp_editor',
                'media_buttons' =>  false,
                'height'            =>  '100px',
            ),
            array(
                'id'            =>  'hero_description',
                'title'         =>  __('Hero Description', 'plantex'),
                'type'          =>  'wp_editor',
                'media_buttons' =>  false,
                'height'            =>  '100px',
            ),
            array(
                'id'            =>  'is_show_hero_button',
                'title'         =>  __('Show Button', 'plantex'),
                'type'          =>  'switcher',
            ),
            array(
                'id'            =>  'hero_button_label',
                'title'         =>  __('Button Label', 'plantex'),
                'type'          =>  'text',
            ),
            array(
                'id'            =>  'button_link',
                'title'         =>  __('Button Link', 'plantex'),
                'type'          =>  'text',
            ),
            array(
                'id'            => 'hero_featured_image',
                'title'         => __('Hero Featured Image', 'plantex'),
                'type'          => 'media',
                'preview'       => true,
                'url'           => true
            ),
            array(
                'id'            =>  'social_media_follow_title',
                'title'         =>  __('Title Under Social Media Icons', 'plantex'),
                'type'          =>  'text',
            ),
        ),
    ));

    CSF::createSection($option_prefix, array(
        'title'             =>  __('About Section', 'plantex'),
        'parent'            =>  'home_page',
        'fields'            =>  array(
            array(
                'title'         =>  __('Featured Image', 'plantex'),
                'id'            =>  'about_section_featured_image',
                'type'          =>  'media',
            ),
            array(
                'title'         =>  __('Section Title', 'plantex'),
                'id'            =>  'about_section_title',
                'type'          =>  'wp_editor',
                'media_buttons' =>  false,
                'height'            =>  '100px',
            ),
            array(
                'title'         =>  __('Section Description', 'plantex'),
                'id'            =>  'about_section_description',
                'type'          =>  'wp_editor',
                'media_buttons' =>  false,
                'height'            =>  '100px',
            ),
            array(
                'title'         =>  __('Section Description', 'plantex'),
                'id'            =>  'about_section_details_lists',
                'type'          =>  'repeater',
                'min'           =>  1,
                'max'           =>  5,
                'fields' => array(
                    array(
                        'title' => __('Single Line Description', 'plantex'),
                        'id'    => 'about_details_list_item',
                        'type'  => 'text',
                    ),
                ),
            ),
            array(
                'id'            =>  'is_show_about_section_button',
                'title'         =>  __('Show Button', 'plantex'),
                'type'          =>  'switcher',
            ),
            array(
                'title'         =>  __('Button Label', 'plantex'),
                'id'            =>  'about_section_button_label',
                'type'          =>  'text',
            ),
            array(
                'title'         =>  __('Button Link', 'plantex'),
                'id'            =>  'about_section_button_link',
                'type'          =>  'text',
            ),
        ),
    ));

    CSF::createSection($option_prefix, array(
        'title'             =>  __('Service Step Section', 'plantex'),
        'parent'            =>  'home_page',
        'fields'            =>  array(
            array(
                'title'         =>  __('Title', 'plantex'),
                'id'            =>  'step_section_title',
                'type'          =>  'wp_editor',
                'media_buttons' =>  false,
                'height'            =>  '100px',
            ),
            array(
                'title'         =>  __('Steps', 'plantex'),
                'id'            =>  'step_section',
                'type'          =>  'repeater',
                'min'           =>  1,
                'max'           =>  3,
                'fields' => array(
                    array(
                        'title' => __('Step Title', 'plantex'),
                        'id'    => 'step_item_title',
                        'type'  => 'text',
                    ),
                    array(
                        'title'             => __('Step Description', 'plantex'),
                        'id'                => 'step_item_description',
                        'type'              => 'wp_editor',
                        'media_buttons'     =>  false,
                        'height'            =>  '100px',
                    ),
                ),
            ),
        ),
    ));

    CSF::createSection($option_prefix, array(
        'title'                 =>  __('Product', 'plantex'),
        'parent'                =>  'home_page',
        'fields'                =>  array(
            array(
                'title'                 =>  __('Section Title', 'plantex'),
                'id'                    =>  'product_section_title',
                'type'                  =>  'wp_editor',
                'height'                =>  '100px',
                'media_buttons'         =>  false
            ),
            array(
                'title'                 =>  __('Section Description', 'plantex'),
                'id'                    =>  'product_section_description',
                'type'                  =>  'wp_editor',
                'height'                =>  '100px',
                'media_buttons'         =>  false
            ),
            array(
                'title'                 =>  __('Product Shortcode', 'plantex'),
                'id'                    =>  'product_section_shortcode',
                'type'                  =>  'text',
            ),
        ),
    ));

    CSF::createSection($option_prefix, array(
        'title'                 =>  __('Question/F.A.Q', 'plantex'),
        'parent'                =>  'home_page',
        'fields'                =>  array(
            array(
                'title'                 =>  __('Section Title', 'plantex'),
                'id'                    =>  'faq_section_title',
                'type'                  =>  'wp_editor',
                'height'                =>  '100px',
                'media_buttons'         =>  false
            ),
            array(
                'title'         =>  __('F.A.Q Items', 'plantex'),
                'id'            =>  'faqs',
                'type'          =>  'repeater',
                'min'           =>  1,
                'max'           =>  6,
                'fields' => array(
                    array(
                        'title'             => __('F.A.Q Title', 'plantex'),
                        'id'                => 'faq_item_title',
                        'type'              => 'text',
                    ),
                    array(
                        'title'             =>  __('Section Description', 'plantex'),
                        'id'                =>  'faq_item_description',
                        'type'              =>  'wp_editor',
                        'height'            =>  '100px',
                        'media_buttons'     =>  false
                    ),
                ),
            ),
        ),
    ));