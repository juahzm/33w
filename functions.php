<?php


function theme_tp_customize_register($wp_customize)
{

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

//////////////////////////////////////////////////////////////////

function mon_theme_supports()
{
    // add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));


    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'mon_theme_supports');

//////////////////////////////////////////////////////////////////////////////////

function theme_tp_enqueue_styles()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style(
        'main-styles',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
}
add_action('wp_enqueue_scripts', 'theme_tp_enqueue_styles');




/**
 * Modifie la requete principale de WordPress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas ci nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function modifie_requete_principal($query)
{
    if ($query->is_home() && $query->is_main_query() && ! is_admin()) {
        $query->set('category_name', 'populaire');
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'modifie_requete_principal');
