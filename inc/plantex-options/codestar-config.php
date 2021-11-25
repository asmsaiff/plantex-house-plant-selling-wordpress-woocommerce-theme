<?php
    if( class_exists( 'CSF' ) ) {
        $option_prefix = 'plantex_options';

        CSF::createOptions( $option_prefix, array(
            'menu_title' => 'Plantex Options',
            'menu_slug'  => 'plantex-options',
        ));

        CSF::createSection( $option_prefix, array(
            'title'  => 'Tab Title 1',
            'fields' => array(
                array(
                    'id'    => 'opt-text',
                    'type'  => 'text',
                    'title' => 'Simple Text',
                ),
            )
        ));
        CSF::createSection( $option_prefix, array(
            'title'  => 'Tab Title 2',
            'id'     => 'tab-2',
            'fields' => array(
                array(
                    'id'    => 'opt-text2',
                    'type'  => 'text',
                    'title' => 'Simple Text2',
                ),
            )
        ));
        CSF::createSection( $option_prefix, array(
            'title'  => 'Tab Title 3',
            'parent'    =>  'tab-2',
            'fields' => array(
                array(
                    'id'    => 'opt-text3',
                    'type'  => 'text',
                    'title' => 'Simple Text2',
                ),
            )
        ));
        CSF::createSection( $option_prefix, array(
            'title'  => 'Tab Title 4',
            'fields' => array(
                array(
                    'id'    => 'opt-text4',
                    'type'  => 'text',
                    'title' => 'Simple Text2',
                ),
            )
        ));
        CSF::createSection( $option_prefix, array(
            'title'  => 'Tab Title 5',
            'fields' => array(
                array(
                    'id'    => 'opt-text5',
                    'type'  => 'text',
                    'title' => 'Simple Text2',
                ),
            )
        ));
    }