<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="sass/style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Accueil</title>
    <?php wp_head(); ?>
</head>

<body>

    <nav class="navigationPrincipal">
        <input class="navigationPrincipal__input pour-ouvrir-fermer boutonNavigation" type="checkbox">
        <?php
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        }
        ?>


        <div class="menu-populaire navigationPrincipal__conteneurDIV">


            <?php wp_nav_menu(
                array(
                    'menu' => 'principal',
                    'container' => 'nav',

                )
            );
            ?>

        </div>

        <div>
            <ul class="navigationPrincipal__conteneurUL">
                <li><a href="https://www.lufthansa.com/ca/en/homepage">Séjours</a></li>
                <li><a href="https://www.expedia.com/">Dernière Minute</a></li>
                <li><a href="https://www.aircanada.com">Promo</a></li>
                <li><a href="https://www.airtransat.com/">Achetez vos billets</a></li>

            </ul>

        </div>

        <div>

            <form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <label>
                    <input class="recherche__input" type="search" placeholder="bio.com" value="<?php echo get_search_query(); ?>" name="s" />
                </label>
                <button class="recherche__bouton" type="submit">
                    <span class="recherche__icone">🔍</span>
                </button>
            </form>

        </div>

    </nav>


    <?php
    $hero_background = get_theme_mod('hero_background', 'Default Title');
    $hero_telephone = get_theme_mod('hero_telephone', 'Default Title');
    ?>
    <style>
        .hero_couleur {
            color: <?php echo get_theme_mod('hero_couleur', '#000000'); ?>;
        }
    </style>


    <header class="TexteSurImage">

        <img class="TexteSurImage__image" style="background-image: url('<?php echo $hero_background; ?>')">


        <div class="TexteSurImage__texte hero_couleur">
            <h3>Évasion Horizon</h3>
            <h4>"Évadez-vous, on s’occupe du reste."</h4>
            <p>Notre agence vous accompagne dans la création de voyages sur mesure, pour que chaque destination devienne une expérience unique, mémorable et adaptée à vos envies.</p>
            <p class="hero__telephone">Téléphone: <?php echo $hero_telephone; ?></p>
            <button class="TexteSurImage__bouton">
                <a>S'inscrire</a>
                </a>
        </div>




    </header>
</body>