<?php get_header(); ?>


<main>

    <div class="titres flex-">
        <h1>Galerie</h1>
    </div>



    <div class="">


        <h3><?php echo single_cat_title(); ?></h3>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php if (in_category('galerie')) : ?>
                    <!-- If the post is in the 'galerie' category, display the content -->
                    <?php the_content(); ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No posts found in this category.</p>
        <?php endif; ?>




    </div>

    <div class="titres">
        <h1>Nos destinations populaires</h1>
    </div>

    <section class="populaire ">

        <div class="flex-row">
            <h1></h1>
            <h3><?php echo single_cat_title(); ?></h3>

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="carte-div">
                        <?php get_template_part('gabarits/carte'); ?>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>No posts found in this category.</p>
            <?php endif; ?>

        </div>

    </section>





    <div class="titres">
        <h1>Destinations les plus vendus</h1>
    </div>


    <div class="flex-row">
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