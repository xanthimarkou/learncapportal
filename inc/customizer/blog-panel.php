<?php

/**
 * Blog Settings panel at Theme Customizer
 *
 * @package  * @since 1.0.0
 */
add_action( 'customize_register', 'best_news_blog_settings_register' );

function best_news_blog_settings_register( $wp_customize ) {

/**
 * Add Blog Settings Panel
 *
 * @since 1.0.0
 */
$wp_customize->add_panel(
    'best_news_blog_settings_panel',
    array(
        'priority'       => 15,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Blog Settings', "best-news" ),
    )
);


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Blog Archive Section
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'best_news_blog_archive_options_section',
    array(
        'priority'       => 1,
        'panel'          => 'best_news_blog_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Blog post/page/archive/search layout', "best-news" ),
        'description'    => __( 'Choose this options to display at Blog post display section', "best-news" ),
    )
);


$wp_customize->add_setting('best_news_blog_archive_layout_settings', 
    array(
        'sanitize_callback' => 'best_news_sanitize_select',
        'default'           => 'right'
    )
);

$wp_customize->add_control('best_news_blog_archive_layout_settings', 
    array(
        'label'             => __( 'Blog layouts settings', "best-news" ),
        'section'           => 'best_news_blog_archive_options_section',
        'type'              => 'radio',
        'choices'           => array(
            'right'         => esc_html__('Right Sidebar',"best-news"),
            'left'         => esc_html__('Left Sidebar',"best-news"),
            'none'         => esc_html__('None',"best-news"),
        ),
        'settings'          => 'best_news_blog_archive_layout_settings'
    ) 
);


   // Enable/Disable word count
   $wp_customize->add_setting(
    'best_news_wordcount_enable',
    array(
    'default'           => 1,
    'sanitize_callback' => 'best_news_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'best_news_wordcount_enable',
    array(
    'section'     => 'best_news_blog_archive_options_section',
    'label'       => __( 'Enable/Disable word count', 'best-news' ),
    'type'        => 'checkbox'
    )       
);

 // Enable/Disable time ago
 $wp_customize->add_setting(
    'best_news_timeago_enable',
    array(
      'default'           => 1,
      'sanitize_callback' => 'best_news_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'best_news_timeago_enable',
    array(
      'section'     => 'best_news_blog_archive_options_section',
      'label'       => __( 'Enable/Disable time ago', 'best-news' ),
      'type'        => 'checkbox'
    )       
  );


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Blog Single Section
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'best_news_blog_single_options_section',
    array(
        'priority'       => 2,
        'panel'          => 'best_news_blog_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Single page/post layout', "best-news" ),
        'description'    => __( 'Choose this options to display single post/page', "best-news" ),
    )
);


$wp_customize->add_setting('best_news_blog_single_layout_settings', 
    array(
        'sanitize_callback' => 'best_news_sanitize_select',
        'default'           => 'right',
    )
);

$wp_customize->add_control('best_news_blog_single_layout_settings', 
    array(
        'label'             => __( 'Single page/post layouts', "best-news" ),
        'section'           => 'best_news_blog_single_options_section',
        'type'              => 'select',
        'choices'           => array(
                'right'         => esc_html__('Right sidebar','best-news'),
                'left'         => esc_html__('Left sidebar','best-news'),
                'none'         => esc_html__('No sidebar','best-news'),
     ),
        'settings'          => 'best_news_blog_single_layout_settings'
    ) 
);

   // Enable/Disable word count
   $wp_customize->add_setting(
    'best_news_singlepage_wordcount_enable',
    array(
    'default'           => 1,
    'sanitize_callback' => 'best_news_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'best_news_singlepage_wordcount_enable',
    array(
    'section'     => 'best_news_blog_single_options_section',
    'label'       => __( 'Enable/Disable word count', 'best-news' ),
    'type'        => 'checkbox'
    )       
);

// Enable/Disable time ago
$wp_customize->add_setting(
  'best_news_singlepage_timeago_enable',
  array(
    'default'           => 1,
    'sanitize_callback' => 'best_news_sanitize_checkbox',
  )
);

$wp_customize->add_control(
  'best_news_singlepage_timeago_enable',
  array(
    'section'     => 'best_news_blog_single_options_section',
    'label'       => __( 'Enable/Disable time ago', 'best-news' ),
    'type'        => 'checkbox'
  )       
);

}