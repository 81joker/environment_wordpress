<?php
add_action('customize_register', 'themename_customize_register');
function themename_customize_register($wp_customize)
{

    $wp_customize->add_section('slides', array(
        'title'          => 'Slides',
        'priority'       => 25,
    ));

    $wp_customize->add_setting('first_slide', array(
        'default'        => '',
    ));

    // First Slide
    // Title
    $wp_customize->add_setting(
        'first_slide_title',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some title', 'environs'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'first_slide_title',
        array(
            'label' => __('First Title', 'environs'),
            'description' => __('Please, type your here title here', 'environs'),
            'section' => 'slides',
            'type' => 'text'
        )
    );
    // Subtitle
    $wp_customize->add_setting(
        'first_slide_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some subtitle', 'environs'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'first_slide_subtitle',
        array(
            'label' => __('First Subtitle', 'environs'),
            'description' => __('Please, type your subtitle here', 'environs'),
            'section' => 'slides',
            'type' => 'text'
        )
    );

    // First Slide content
    $wp_customize->add_setting(
        'first_slide_content',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some subtitle', 'environs'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'first_slide_content',
        array(
            'label' => __('First Content', 'environs'),
            'description' => __('Please, type your subtitle here', 'environs'),
            'section' => 'slides',
            'type' => 'textarea'
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'first_slide', array(
        'label'   => 'First Slide',
        'section' => 'slides',
        'settings'   => 'first_slide',
    )));


    //Secoond Slide
    $wp_customize->add_setting('second_slide', array(
        'default'        => '',
    ));

    // Second Title
    $wp_customize->add_setting(
        'second_slide_title',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some title', 'environs'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'second_slide_title',
        array(
            'label' => __('Second Title', 'environs'),
            'description' => __('Please, type your here title here', 'environs'),
            'section' => 'slides',
            'type' => 'text'
        )
    );
    // Second Subtitle
    $wp_customize->add_setting(
        'second_slide_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some subtitle', 'environs'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'second_slide_subtitle',
        array(
            'label' => __('second Subtitle', 'environs'),
            'description' => __('Please, type your subtitle here', 'environs'),
            'section' => 'slides',
            'type' => 'text'
        )
    );

    // Second Slide content
    $wp_customize->add_setting(
        'second_slide_content',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some subtitle', 'environs'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'second_slide_content',
        array(
            'label' => __('Second Content', 'environs'),
            'description' => __('Please, type your subtitle here', 'environs'),
            'section' => 'slides',
            'type' => 'textarea'
        )
    );
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'second_slide', array(
        'label'   => 'Second Slide',
        'section' => 'slides',
        'settings'   => 'second_slide',
    )));


    // Third Slide
    $wp_customize->add_setting('third_slide', array(
        'default'        => '',
    ));

    // Third Title
    $wp_customize->add_setting(
        'third_slide_title',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some title', 'environs'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'third_slide_title',
        array(
            'label' => __('Third Title', 'environs'),
            'description' => __('Please, type your here title here', 'environs'),
            'section' => 'slides',
            'type' => 'text'
        )
    );
    // Third Subtitle
    $wp_customize->add_setting(
        'third_slide_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some subtitle', 'environs'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'third_slide_subtitle',
        array(
            'label' => __('Third Subtitle', 'environs'),
            'description' => __('Please, type your subtitle here', 'environs'),
            'section' => 'slides',
            'type' => 'text'
        )
    );

    // Third Slide content
    $wp_customize->add_setting(
        'third_slide_content',
        array(
            'type' => 'theme_mod',
            'default' => __('Please, add some subtitle', 'environs'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'third_slide_content',
        array(
            'label' => __('Third Content', 'environs'),
            'description' => __('Please, type your subtitle here', 'environs'),
            'section' => 'slides',
            'type' => 'textarea'
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'third_slide', array(
        'label'   => 'Third Slide',
        'section' => 'slides',
        'settings'   => 'third_slide',
    )));
}
