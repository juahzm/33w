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
                    'container_class' => 'menu-populaire',
                    'menu_class' => 'menu'
                )
            );
            ?>

        </div>

        <div>
            <ul class="navigationPrincipal__conteneurUL">
                <li><a href="">Séjours</a></li>
                <li><a href="">Dernière Minute</a></li>
                <li><a href="">Promo</a></li>
                <li><a href="">Achetez vos billets</a></li>

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


        <section class="recherche__section">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article>
                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 80); ?></p>
                        <hr>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p>Aucun résultat trouvé.</p>
            <?php endif; ?>
        </section>


    </main>

    <?php get_footer(); ?>
</body>

</html>