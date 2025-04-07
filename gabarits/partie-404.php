<?php
$error_background = get_theme_mod('section_404_background', 'Default Title');
?>
<style>
    .error_couleur {
        color: <?php echo get_theme_mod('error_couleur', '#000000'); ?>;
    }
</style>

<style>
    .error_titre_couleur {
        color: <?php echo get_theme_mod('error_titre_couleur', '#000000'); ?>;
    }
</style>

<style>
    .background_bouton_menu {
        background-color: <?php echo get_theme_mod('background_bouton_menu', '#000000'); ?>;
    }
</style>


<style>
    .retour_background_bouton {
        background-color: <?php echo get_theme_mod('retour_background_bouton', '#000000'); ?>;
    }
</style>



<header class="TexteSurImage">

    <img class="TexteSurImage__image" style="background-image: url('<?php echo $error_background; ?>')">

    <div class="TexteSurImage__texte ">
        <h2 class="error_titre_couleur h1">Oops, vous avez échoué sur l'île 404 !</h2>
        <p class="error_couleur">Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !
        </p>


        <!-- <p class="hero__telephone">Téléphone: <?php echo $hero_telephone; ?></p> -->
        <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <button class="TexteSurImage__bouton retour_background_bouton">
                <a href="<?php echo esc_url(home_url('/')); ?>">'Retour à l'accueil</a>
            </button>
        </form>


        <div class="nav2">


            <?php wp_nav_menu(
                array(
                    'menu' => 'examen1',
                    'container' => 'nav2',
                    'container_class' => 'background_bouton_menu'

                )
            );
            ?>

        </div>


        <form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <label>
                <input class="recherche__input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="" />
            </label>


        </form>



    </div>







</header>