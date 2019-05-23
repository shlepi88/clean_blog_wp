<?php 

    function clean_customize_register($wp_customize) {
        $wp_customize->add_section('header', array(
            'title' =>  __('Header', 'cleanblog'),
            'description'   =>  sprintf(__('Options for Header', 'cleanblog')),
            'priority'  =>  130
        ));

        $wp_customize->add_setting('heading_image', array(
            'default'   =>  get_bloginfo('template_directory') . '/img/header.jpg',
            'type'      =>  'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'heading_image', array(
            'label' =>  __('Heading Image', 'cleanblog'),
            'section'   =>  'header',
            'settings'  =>  'heading_image',
            'priority'  => 1
        )));

        $wp_customize->add_setting('heading', array(
            'default'   =>  _x('Clean Blog', 'cleanblog'),
            'type'      =>  'theme_mod'
        ));

        $wp_customize->add_control('heading', array(
            'label' =>  __('Heading', 'cleanblog'),
            'section'   =>  'header',
            'priority'  => 2
        ));

        $wp_customize->add_setting('heading_text', array(
            'default'   =>  _x('Just another WordPress site', 'cleanblog'),
            'type'      =>  'theme_mod'
        ));

        $wp_customize->add_control('heading_text', array(
            'label' =>  __('Text', 'cleanblog'),
            'section'   =>  'header',
            'priority'  => 3
        ));
    }

    add_action('customize_register', 'clean_customize_register');
?>