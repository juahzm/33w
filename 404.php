<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
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
                    'container' => 'div',
                )
            );
            ?>

        </div>

        <div>
            <ul class="navigationPrincipal__conteneurUL">
                <li><a href="https://www.lufthansa.com/ca/en/homepage">Séjours</a></li>
                <li><a href="https://www.expedia.com/">Dernière Minute</a></li>
                <li><a href="https://www.aircanada.com/home/ca">Promo</a></li>
                <li><a href="https://www.airtransat.com/">Achetez vos billets</a></li>

            </ul>

        </div>

        <div>

            <form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <label>
                    <input class="recherche__input" type="search" placeholder="bioSearch.com" value="<?php echo get_search_query(); ?>" name="s" />
                </label>
                <button class="recherche__bouton" type="submit">
                    <span class="recherche__icone">🔍</span>
                </button>
            </form>

        </div>

    </nav>

    <main>

        <div class="content_carte_travel">

            <?php
            if (isset($_GET['excerpt_value'])) {
                echo '...' . esc_html($_GET['excerpt_value']);
            }
            ?>

        </div>




    </main>



</body>

</html>