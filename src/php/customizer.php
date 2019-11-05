<?php 
function customizer($wp_customize) {
    // Masthead
    $wp_customize->add_section('Masthead', array(
        'title' => __('Masthead', 'pt1602'),
        'description' => sprintf(__('Options for masthead', 'pt1602')),
        'priority' => 130,
    ));

    // Masthead Image
    $wp_customize->add_setting('masthead-image', array(
        'default' => get_bloginfo('template_directory').'/src/img/masthead.jpg',
        'type' => 'theme_mod',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'masthead-image', array(
        'label' => __('Masthead Image', 'pt1602'),
        'section' => 'Masthead',
        'settings' => 'masthead-image',
        'priority' => 1,
    )));

    // Masthead Title
    $wp_customize->add_setting('masthead-title', array(
        'deafult' => _x('Title', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('masthead-title', array(
        'label' => __('Title', 'pt1602'),
        'section' => 'Masthead',
        'priority' => 2,
    ));

    // Masthead Subtitle
    $wp_customize->add_setting('masthead-subtitle', array(
        'deafult' => _x('Subtitle', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('masthead-subtitle', array(
        'label' => __('Subtitle', 'pt1602'),
        'section' => 'Masthead',
        'priority' => 3,
    ));

}
add_action('customize_register', 'customizer');
?>