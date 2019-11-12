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

    // Cards-Overall
    $wp_customize->add_section('CardsOverall', array(
        'title' => __('CardsOverall', 'pt1602'),
        'description' => sprintf(__('CardsOverall', 'pt1602')),
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
        'section' => 'CardsOverall',
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

    // Collapsible * * * //
    $wp_customize->add_panel( 'Collapsible', array(
        'title' => __( 'Collapsible' ),
        'description' => '<p>Edit the Collapsible</p>',
        'priority' => 132,
    ));

    // Collapsible Overall
    $wp_customize->add_section('CollapsibleOverall', array(
        'title' => __('CollapsibleOverall', 'pt1602'),
        'description' => sprintf(__('CollapsibleOverall', 'pt1602')),
        'priority' => 1,
        'panel' => 'Collapsible',
    ));

    // Section Title
    $wp_customize->add_setting('Collapsible-title', array(
        'deafult' => _x('Collapsible Title', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('Collapsible-title', array(
        'label' => __('Collapsible Title', 'pt1602'),
        'section' => 'CollapsibleOverall',
        'priority' => 1,
    ));

    // Collapsible Section 1
    $wp_customize->add_section('CollapsibleOne', array(
        'title' => __('CollapsibleOne', 'pt1602'),
        'description' => sprintf(__('Options for CollapsibleOne', 'pt1602')),
        'priority' => 1,
        'panel' => 'Collapsible',
    ));

    // CollapsibleOne Title 1
    $wp_customize->add_setting('CollapsibleOne-title-1', array(
        'deafult' => _x('CollapsibleOne Title 1', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('CollapsibleOne-title-1', array(
        'label' => __('CollapsibleOne Title 1', 'pt1602'),
        'section' => 'CollapsibleOne',
        'priority' => 1,
    ));

    // CollapsibleOne Text 1
    $wp_customize->add_setting('CollapsibleOne-text-1', array(
        'deafult' => _x('CollapsibleOne Text 1', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('CollapsibleOne-text-1', array(
        'label' => __('CollapsibleOne Text 1', 'pt1602'),
        'section' => 'CollapsibleOne',
        'priority' => 2,
    ));

    // Collapsible Section 2
    $wp_customize->add_section('CollapsibleTwo', array(
        'title' => __('CollapsibleTwo', 'pt1602'),
        'description' => sprintf(__('Options for CollapsibleTwo', 'pt1602')),
        'priority' => 2,
        'panel' => 'Collapsible',
    ));

    // CollapsibleTwo Title 1
    $wp_customize->add_setting('CollapsibleTwo-title-1', array(
        'deafult' => _x('CollapsibleTwo Title 1', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('CollapsibleTwo-title-1', array(
        'label' => __('CollapsibleTwo Title 1', 'pt1602'),
        'section' => 'CollapsibleTwo',
        'priority' => 1,
    ));

    // CollapsibleTwo Text 1
    $wp_customize->add_setting('CollapsibleTwo-text-1', array(
        'deafult' => _x('CollapsibleTwo Text 1', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('CollapsibleTwo-text-1', array(
        'label' => __('CollapsibleTwo Text 1', 'pt1602'),
        'section' => 'CollapsibleTwo',
        'priority' => 2,
    ));

    // Collapsible Section 3
    $wp_customize->add_section('CollapsibleThree', array(
        'title' => __('CollapsibleThree', 'pt1602'),
        'description' => sprintf(__('Options for CollapsibleThree', 'pt1602')),
        'priority' => 3,
        'panel' => 'Collapsible',
    ));

    // CollapsibleThree Title 1
    $wp_customize->add_setting('CollapsibleThree-title-1', array(
        'deafult' => _x('CollapsibleThree Title 1', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('CollapsibleThree-title-1', array(
        'label' => __('CollapsibleThree Title 1', 'pt1602'),
        'section' => 'CollapsibleThree',
        'priority' => 1,
    ));

    // CollapsibleThree Text 1
    $wp_customize->add_setting('CollapsibleThree-text-1', array(
        'deafult' => _x('CollapsibleThree Text 1', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('CollapsibleThree-text-1', array(
        'label' => __('CollapsibleThree Text 1', 'pt1602'),
        'section' => 'CollapsibleThree',
        'priority' => 2,
    ));

    // Teaser * * * //
    $wp_customize->add_section('Teaser', array(
        'title' => __('Teaser', 'pt1602'),
        'description' => sprintf(__('Teaser', 'pt1602')),
        'priority' => 129,
    ));

    // Teaser Display
    $wp_customize->add_setting('Teaser-display', array(
        'deafult' => _x('Teaser Display', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('Teaser-display', array(
        'label' => __('Teaser Display', 'pt1602'),
        'section' => 'Teaser',
        'priority' => 1,
        'description' => __( 'Use CSS arguments like: none, initial, ...' ),
    ));

    // Teaser Featured
    $wp_customize->add_setting('Teaser-featured', array(
        'deafult' => _x('Teaser Featured', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('Teaser-featured', array(
        'label' => __('Teaser Featured', 'pt1602'),
        'section' => 'Teaser',
        'priority' => 2,
    ));

    // Teaser Heading
    $wp_customize->add_setting('Teaser-heading', array(
        'deafult' => _x('Teaser Heading', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('Teaser-heading', array(
        'label' => __('Teaser Heading', 'pt1602'),
        'section' => 'Teaser',
        'priority' => 2,
    ));

    // Teaser Content
    $wp_customize->add_setting('Teaser-content', array(
        'deafult' => _x('Teaser Content', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('Teaser-content', array(
        'label' => __('Teaser Content', 'pt1602'),
        'section' => 'Teaser',
        'priority' => 2,
    ));

    // Teaser Button
    $wp_customize->add_setting('Teaser-button', array(
        'deafult' => _x('Teaser Button', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('Teaser-button', array(
        'label' => __('Teaser Button', 'pt1602'),
        'section' => 'Teaser',
        'priority' => 2,
    ));

    // Teaser Link
    $wp_customize->add_setting('Teaser-link', array(
        'deafult' => _x('Teaser Link', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('Teaser-link', array(
        'label' => __('Teaser Link', 'pt1602'),
        'section' => 'Teaser',
        'priority' => 2,
    ));

    // Teaser Time
    $wp_customize->add_setting('Teaser-time', array(
        'deafult' => _x('Teaser Time', 'pt1602'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('Teaser-time', array(
        'label' => __('Teaser Time', 'pt1602'),
        'section' => 'Teaser',
        'priority' => 2,
    ));
}
add_action('customize_register', 'customizer');
?>