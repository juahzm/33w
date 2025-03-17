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

    <main>
        <div class="titres">
            <h1><?php echo single_cat_title(); ?></h1>
        </div>

        <section class="populaire flex-row">


            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php if (in_category('galerie')) : ?>
                        <?php the_content(); ?>
                    <?php else : ?>
                        <!-- Second Section: Carte -->
                        <div class="carte-div">
                            <?php get_template_part('gabarits/carte'); ?>
                        </div>
                    <?php endif; ?>
            <?php endwhile;
            endif; ?>

        </section>

    </main>

    <?php get_footer(); ?>

</body>

</html>