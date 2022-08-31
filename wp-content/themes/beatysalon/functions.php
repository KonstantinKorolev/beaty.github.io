<?php
add_action('wp_enqueue_scripts', 'beatysalon_styles');
add_action('wp_enqueue_scripts', 'beatysalon_scripts');
add_action('customize_register', 'my_customize_register');

function beatysalon_styles() {
    wp_enqueue_style('beatysalon-style', get_stylesheet_uri());

    wp_enqueue_style('header-style', get_template_directory_uri() . '/style.css');
}

function beatysalon_scripts() {
    wp_enqueue_script('beatysalon-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
    wp_enqueue_script('beatysalon-scripts', get_template_directory_uri() . '/assets/js/login.js', array(), null, true);
    wp_enqueue_script('beatysalon-scripts', get_template_directory_uri() . '/assets/js/adminlk.js', array(), null, true);
};

function my_customize_register($wp_customize) {
    $wp_customize->add_setting('header_logo', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'header_logo', array(
        'section' => 'title_tagline',
        'label' => 'Логотип'
    )));

    $wp_customize->selective_refresh->add_partial('header_logo', array(
        'selector' => '.header-logo',
        'render_callback' => function() {
            $logo = get_theme_mod('header_logo');
            $img = wp_get_attachment_image_src($logo, 'full');
            if ($img) {
                return '<img src="' . $img[0] . '" alt="">';
            } else {
                return '';
            }
        }
    ));
};

add_theme_support('custom-logo');
?>