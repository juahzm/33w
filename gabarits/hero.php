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