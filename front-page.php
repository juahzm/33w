<?php get_header(); ?>


<main>
    <div class="titres">
        <h1>Populaires</h1>
    </div>


    <section class="populaire flex-row">

        <h3><?php echo single_cat_title(); ?></h3>
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

    <div class="titres">
        <h1>Destinations</h1>
    </div>



    <section class="Grille">

        <article class="Grille__carte">
            <div class="Grille__carte-titre">
                <h2>Tokyo</h2>
            </div>

            <picture>
                <img class="Grille__carte-image" src="<?php echo get_template_directory_uri() . '/sass/assets/japan2.jpg' ?>" alt="tokio2">
            </picture>
            <button class="TexteSurImage__bouton">
                <a>Plus d'info</a>
            </button>

        </article>

        <article class="Grille__carte">
            <div class="Grille__carte-titre">
                <h2>Patagonia</h2>
            </div>

            <picture>
                <img class="Grille__carte-image" src="<?php echo get_template_directory_uri() . '/sass/assets/argentinapa.jpeg' ?>" alt="argentinapa">

            </picture>
            <button class="TexteSurImage__bouton">
                <a>Plus d'info</a>
            </button>

        </article>

        <article class="Grille__carte">
            <div class="Grille__carte-titre">
                <h2>Canyon du Colorado</h2>
            </div>

            <picture>
                <img class="Grille__carte-image" src="<?php echo get_template_directory_uri() . '/sass/assets/canyon.jpeg' ?>" alt="canyon">

            </picture>
            <button class="TexteSurImage__bouton">
                <a>Plus d'info</a>
            </button>

        </article>

        <article class="Grille__carte">
            <div class="Grille__carte-titre">
                <h2>La thailande</h2>
            </div>

            <picture>
                <img class="Grille__carte-image" src="<?php echo get_template_directory_uri() . '/sass/assets/tailandia.jpeg' ?>" alt="tailandia">

            </picture>
            <button class="TexteSurImage__bouton">
                <a>Plus d'info</a>
            </button>

        </article>

        <article class="Grille__carte">
            <div class="Grille__carte-titre">
                <h2>Machu Pichu</h2>
            </div>

            <picture>
                <img class="Grille__carte-image" src="<?php echo get_template_directory_uri() . '/sass/assets/peru.jpeg' ?>" alt="peru">

            </picture>
            <button class="TexteSurImage__bouton">
                <a>Plus d'info</a>
            </button>

        </article>

        <article class="Grille__carte">
            <div class="Grille__carte-titre">
                <h2>L'égypte</h2>
            </div>

            <picture>
                <img class="Grille__carte-image" src="<?php echo get_template_directory_uri() . '/sass/assets/egypt.jpeg' ?>" alt="egypt">

            </picture>
            <button class="TexteSurImage__bouton">
                <a>Plus d'info</a>
            </button>

        </article>

        <article class="Grille__carte">
            <div class="Grille__carte-titre">
                <h2>L'Australie</h2>
            </div>

            <picture>
                <img class="Grille__carte-image" src="<?php echo get_template_directory_uri() . '/sass/assets/sydney.jpeg' ?>" alt="sydney">

            </picture>
            <button class="TexteSurImage__bouton">
                <a>Plus d'info</a>
            </button>

        </article>

        <article class="Grille__carte">
            <div class="Grille__carte-titre">
                <h2>Paris</h2>
            </div>

            <picture>
                <img class="Grille__carte-image" src="<?php echo get_template_directory_uri() . '/sass/assets/paris.jpeg' ?>" alt="paris">

            </picture>
            <button class="TexteSurImage__bouton">
                <a>Plus d'info</a>
            </button>

        </article>

        <article class="Grille__carte">
            <div class="Grille__carte-titre">
                <h2>Bogota</h2>
            </div>

            <picture>
                <img class="Grille__carte-image" src="<?php echo get_template_directory_uri() . '/sass/assets/bogota.jpeg' ?>" alt="bogota">

            </picture>
            <button class="TexteSurImage__bouton">
                <a>Plus d'info</a>
            </button>

        </article>

    </section>







</main>


<?php get_footer(); ?>

</body>

</html>