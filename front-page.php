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


    <div class="">
        <?php get_template_part('gabarits/grille_destinations'); ?>
    </div>

    </section>
    <section class="destination">
        <div class="conteneur__api">
            <div class="flex-block TexteSurImage__bouton">
                <?php categories_liste("destination"); ?>
            </div>

            <div class="destination__container destination__list">

            </div>
        </div>
    </section>





</main>


<?php get_footer(); ?>

</body>

</html>