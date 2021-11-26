<?php
    CSF::createSection($option_prefix, array(
        'title'         =>  __('Social Media Links', 'plantex'),
        'fields'        =>  array(
            array(
                'title'     =>  __('Facebook', 'plantex'),
                'id'        =>  'plantex_facebook',
                'type'      =>  'text'
            ),
            array(
                'title'     =>  __('Instagram', 'plantex'),
                'id'        =>  'plantex_instagram',
                'type'      =>  'text'
            ),
            array(
                'title'     =>  __('Twitter', 'plantex'),
                'id'        =>  'plantex_twitter',
                'type'      =>  'text'
            ),
            array(
                'title'     =>  __('LinkedIn', 'plantex'),
                'id'        =>  'plantex_linkedin',
                'type'      =>  'text'
            ),
            array(
                'title'     =>  __('Whatsapp', 'plantex'),
                'id'        =>  'plantex_whatsapp',
                'type'      =>  'text'
            ),
        ),
    ));