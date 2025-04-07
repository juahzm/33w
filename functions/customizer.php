<?php


function theme_tp_customize_register($wp_customize)
{

    $wp_customize->add_section('section_404_background', array(
        'title' => __('section_404', 'theme_tp'),
        'priority' => 30,
    ));


    $wp_customize->add_setting('section_404_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'section_404_background', array(
            'label' => __('section_404', 'theme_tp'),
            'section' => 'section_404_background',
        ))
    );




    $wp_customize->add_setting('error_titre_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, 'error_titre_couleur', array(
            'label' => __('errorTitreCouleurDuTexte', 'theme_tp'),
            'section' => 'section_404_background',
        ))
    );




    $wp_customize->add_setting('error_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, 'error_couleur', array(
            'label' => __('errorCouleurDuTexte', 'theme_tp'),
            'section' => 'section_404_background',
        ))
    );



    $wp_customize->add_setting('background_bouton_menu', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, 'background_bouton_menu', array(
            'label' => __('backgroundBoutonMenu', 'theme_tp'),
            'section' => 'section_404_background',
        ))
    );

    $wp_customize->add_setting('retour_background_bouton', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));



    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, 'retour_background_bouton', array(
            'label' => __('RetourBackgroundBouton', 'theme_tp'),
            'section' => 'section_404_background',
        ))
    );







    $wp_customize->add_section('hero_background', array(
        'title' => __('Hero background', 'theme_tp'),
        'priority' => 30,
    ));


    $wp_customize->add_setting('hero_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
            'label' => __('Hero background', 'theme_tp'),
            'section' => 'hero_background',
        ))
    );

    $wp_customize->add_setting('hero_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
            'label' => __('CouleurDuTexte', 'theme_tp'),
            'section' => 'hero_background',
        ))
    );

    //telephone


    $wp_customize->add_setting('hero_telephone', array(
        'default' => __('514-111-3330', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('hero_telephone', array(
        'label' => __('Telephone', 'theme_tp'),
        'section' => 'hero_background',
        'type' => 'text',
    ));
}

add_action('customize_register', 'theme_tp_customize_register');
