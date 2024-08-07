<?php
    // register main menu
    function register_my_menu() {
        register_nav_menu('main-menu',__( 'Main Menu' ));
    }
    add_action( 'init', 'register_my_menu' );

    // enqueue tailwind css
    function enqueue_tailwind_css() {
        wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );
    }
    add_action( 'wp_enqueue_scripts', 'enqueue_tailwind_css' );

    // enqueue custom css
    function my_theme_enqueue_styles() {
        wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/custom.css', array(), '1.0' );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

    function enqueue_custom_scripts() {
        // Enqueue Font Awesome CSS
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/all.min.css');
        
        // Enqueue Swiper CSS
        wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), null);

        // Enqueue Swiper JS
        wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);

        // Enqueue your custom JavaScript file
        wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array(), '1.0', true);
    }
    add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

    // customizer settings
    function mytheme_customize_register( $wp_customize ) {
        // Add Hero Section
        $wp_customize->add_section( 'hero_section' , array(
            'title'      => __( 'Hero Section', 'mytheme' ),
            'priority'   => 30,
        ) );

        // Add Logo Setting
        $wp_customize->add_setting( 'hero_logo' , array(
            'default'   => '',
            'transport' => 'refresh',
        ) );

        // Add Logo Control
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_logo', array(
            'label'      => __( 'Logo', 'mytheme' ),
            'section'    => 'hero_section',
            'settings'   => 'hero_logo',
        ) ) );

        // Add Heading Setting
        $wp_customize->add_setting( 'hero_heading' , array(
            'default'   => '',
            'transport' => 'refresh',
        ) );

        // Add Heading Control
        $wp_customize->add_control( 'hero_heading', array(
            'label'      => __( 'Heading', 'mytheme' ),
            'section'    => 'hero_section',
            'settings'   => 'hero_heading',
            'type'       => 'text',
        ) );

        // Add First Subheading Setting
        $wp_customize->add_setting( 'hero_subheading1' , array(
            'default'   => '',
            'transport' => 'refresh',
        ) );
        
        // Add First Subheading Control
        $wp_customize->add_control( 'hero_subheading1', array(
            'label'      => __( 'Subheading 1', 'mytheme' ),
            'section'    => 'hero_section',
            'settings'   => 'hero_subheading1',
            'type'       => 'text',
        ) );
        
        // Add Second Subheading Setting
        $wp_customize->add_setting( 'hero_subheading2' , array(
            'default'   => '',
            'transport' => 'refresh',
        ) );
        
        // Add Second Subheading Control
        $wp_customize->add_control( 'hero_subheading2', array(
            'label'      => __( 'Subheading 2', 'mytheme' ),
            'section'    => 'hero_section',
            'settings'   => 'hero_subheading2',
            'type'       => 'text',
        ));

        // Add Second Subheading Setting
        $wp_customize->add_setting( 'hero_subheading3' , array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        
        // Add Second Subheading Control
        $wp_customize->add_control( 'hero_subheading3', array(
            'label'      => __( 'Subheading 3', 'mytheme' ),
            'section'    => 'hero_section',
            'settings'   => 'hero_subheading3',
            'type'       => 'text',
        ));
    }
    add_action( 'customize_register', 'mytheme_customize_register' );

    // template support
    add_action( 'after_setup_theme', 'mytheme_add_page_templates' );
    function mytheme_add_page_templates() {
        add_theme_support( 'page-templates' );
    }
?>