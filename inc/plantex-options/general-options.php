<?php
    CSF::createSection($option_prefix, array(
        'title'                 =>  __('Header', 'plantex'),
        'parent'                =>  'general',
        'fields'                =>  array(
            array(
                'title'                 =>  __('Newsletter Form Title', 'plantex'),
                'id'                    =>  'newsletter_form_title',
                'type'                  =>  'wp_editor',
                'height'                =>  '100px',
                'media_buttons'         =>  false
            ),
        ),
    ));