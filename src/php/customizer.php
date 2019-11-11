<?php 
function customizer($wp_customize) {
    // Masthead * * * //
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

    // Cards * * * //
    $wp_customize->add_panel( 'Cards', array(
        'title' => __( 'Cards' ),
        'description' => '<p>Edit the Cards</p>',
        'priority' => 131,
    ));

    // Cards Overall
    $wp_customize->add_section('Overall', array(
        'title' => __('Overall', 'pt1602'),
        'description' => sprintf(__('Overall', 'pt1602')),
        'priority' => 1,
        'panel' => 'Cards',
    ));

    // Section Title
    $wp_customize->add_setting('Cards-title', array(
        'deafult' => _x('Cards Title', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('Cards-title', array(
        'label' => __('Cards Title', 'pt1602'),
        'section' => 'Overall',
        'priority' => 1,
    ));

    // Card Section 1
    $wp_customize->add_section('CardOne', array(
        'title' => __('CardOne', 'pt1602'),
        'description' => sprintf(__('Options for CardOne', 'pt1602')),
        'priority' => 2,
        'panel' => 'Cards',
    ));

    // Card Image 1
    $wp_customize->add_setting('card-image-1', array(
        'default' => get_bloginfo('template_directory').'/src/img/masthead.jpg',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'card-image-1', array(
        'label' => __('Card Image 1', 'pt1602'),
        'section' => 'CardOne',
        'settings' => 'card-image-1',
        'priority' => 1,
    )));

    // Card Title 1
    $wp_customize->add_setting('card-title-1', array(
        'deafult' => _x('Card Title 1', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('card-title-1', array(
        'label' => __('Card Title 1', 'pt1602'),
        'section' => 'CardOne',
        'priority' => 2,
    ));

    // Card Text 1
    $wp_customize->add_setting('card-text-1', array(
        'deafult' => _x('Card Text 1', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('card-text-1', array(
        'label' => __('Card Text 1', 'pt1602'),
        'section' => 'CardOne',
        'priority' => 3,
    ));

    // Card Button 1
    $wp_customize->add_setting('card-button-1', array(
        'deafult' => _x('Card Button 1', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('card-button-1', array(
        'label' => __('Card Button 1', 'pt1602'),
        'section' => 'CardOne',
        'priority' => 4,
    ));

    // Card Link 1
    $wp_customize->add_setting('card-link-1', array(
        'deafult' => _x('Card link 1', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('card-link-1', array(
        'label' => __('Card link 1', 'pt1602'),
        'section' => 'CardOne',
        'priority' => 5,
    ));

    // Card Section 2
    $wp_customize->add_section('CardTwo', array(
        'title' => __('CardTwo', 'pt1602'),
        'description' => sprintf(__('Options for CardTwo', 'pt1602')),
        'priority' => 3,
        'panel' => 'Cards',
    ));

    // Card Image 2
    $wp_customize->add_setting('card-image-2', array(
        'default' => get_bloginfo('template_directory').'/src/img/masthead.jpg',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'card-image-2', array(
        'label' => __('Card Image 2', 'pt1602'),
        'section' => 'CardTwo',
        'settings' => 'card-image-2',
        'priority' => 1,
    )));

    // Card Title 2
    $wp_customize->add_setting('card-title-2', array(
        'deafult' => _x('Card Title 2', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('card-title-2', array(
        'label' => __('Card Title 2', 'pt1602'),
        'section' => 'CardTwo',
        'priority' => 2,
    ));

    // Card Text 2
    $wp_customize->add_setting('card-text-2', array(
        'deafult' => _x('Card Text 2', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('card-text-2', array(
        'label' => __('Card Text 2', 'pt1602'),
        'section' => 'CardTwo',
        'priority' => 3,
    ));

    // Card Button 2
    $wp_customize->add_setting('card-button-2', array(
        'deafult' => _x('Card Button 2', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('card-button-2', array(
        'label' => __('Card Button 2', 'pt1602'),
        'section' => 'CardTwo',
        'priority' => 4,
    ));

    // Card Link 2
    $wp_customize->add_setting('card-link-2', array(
        'deafult' => _x('Card link 2', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('card-link-2', array(
        'label' => __('Card link 2', 'pt1602'),
        'section' => 'CardTwo',
        'priority' => 5,
    ));

    // Card Section 3
    $wp_customize->add_section('CardThree', array(
        'title' => __('CardThree', 'pt1602'),
        'description' => sprintf(__('Options for CardThree', 'pt1602')),
        'priority' => 4,
        'panel' => 'Cards',
    ));

    // Card Image 3
    $wp_customize->add_setting('card-image-3', array(
        'default' => get_bloginfo('template_directory').'/src/img/masthead.jpg',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'card-image-3', array(
        'label' => __('Card Image 3', 'pt1602'),
        'section' => 'CardThree',
        'settings' => 'card-image-3',
        'priority' => 1,
    )));

    // Card Title 3
    $wp_customize->add_setting('card-title-3', array(
        'deafult' => _x('Card Title 3', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('card-title-3', array(
        'label' => __('Card Title 3', 'pt1602'),
        'section' => 'CardThree',
        'priority' => 2,
    ));

    // Card Text 3
    $wp_customize->add_setting('card-text-3', array(
        'deafult' => _x('Card Text 3', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('card-text-3', array(
        'label' => __('Card Text 3', 'pt1602'),
        'section' => 'CardThree',
        'priority' => 3,
    ));

    // Card Button 3
    $wp_customize->add_setting('card-button-3', array(
        'deafult' => _x('Card Button 3', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('card-button-3', array(
        'label' => __('Card Button 3', 'pt1602'),
        'section' => 'CardThree',
        'priority' => 4,
    ));

    // Card Link 3
    $wp_customize->add_setting('card-link-3', array(
        'deafult' => _x('Card link 3', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('card-link-3', array(
        'label' => __('Card link 3', 'pt1602'),
        'section' => 'CardThree',
        'priority' => 5,
    ));
}
add_action('customize_register', 'customizer');
?>