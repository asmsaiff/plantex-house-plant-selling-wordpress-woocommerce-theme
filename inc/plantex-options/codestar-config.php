<?php
    if( class_exists( 'CSF' ) ) {
        $option_prefix = 'plantex_options';

        CSF::createOptions( $option_prefix, array(
            'menu_title'    => 'Plantex Options',
            'menu_slug'     => 'plantex-options',
            'menu_icon'     =>  'dashicons-screenoptions'
        ));

        CSF::createSection( $option_prefix, array(
            'title'     => 'General',
            'id'        =>  'general',
            'fields'    => array(
                array(
                    'id'        => 'op',
                    'type'      => 'text',
                    'title'     => 'Some Options Will Go Here',
                ),
            )
        ));
        
        include_once get_template_directory().'/inc/plantex-options/general-options.php';
        include_once get_template_directory().'/inc/plantex-options/home-page-options.php';
        include_once get_template_directory().'/inc/plantex-options/plantex-social-media.php';
    }