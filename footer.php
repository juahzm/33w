<footer>

    <div class="flex-column footer_recherche">
        <?php get_search_form(); ?>
    </div>

    <div class="PieDePage-menu">



        <article class="flex-row">
            <div>
                <h3>NOS OFFRES SPÉCIALES</h3>
                <ul class="flex-column">
                    <li><a href="">Offres de dernière minute</a></li>
                    <li><a href="">Voyages tout inclus</a></li>
                    <li><a href="">Séjours en famille</a></li>
                    <li><a href="">Voyages de lune de miel</a></li>
                </ul>
            </div>
        </article>


        <article class="flex-row">
            <div>
                <h3>CONTACTEZ-NOUS</h3>
                <ul class="flex-column">
                    <li><a href="">Quebec</a></li>
                    <li><a href="">Montreal</a></li>
                    <li><a href="">Toronto</a></li>
                    <li><a href="">Vancouver.</a></li>
                </ul>
            </div>
        </article>

        <div class="navigationPrincipal__conteneurDIV">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>
        </div>

        <article class="flex-row">
            <div>
                <h3>NOS SERVICES</h3>
                <ul class="flex-column">
                    <li><a href="">Billets d'avions.</a></li>
                    <li><a href="">Location des voitures</a></li>
                    <li><a href="">Reservation des hotels</a></li>
                    <li><a href="">Voyages en groupes</a></li>
                </ul>
            </div>
        </article>

        <article class="flex-row">
            <div>
                <h3>À PROPOS</h3>
                <ul class="flex-column">
                    <li><a href="">Présentation de l'entreprise</a></li>
                    <li><a href="">Notre équipe</a></li>
                    <li><a href="">Carrières</a></li>
                    <li><a href="">Politique de confidentialité</a></li>
                </ul>
            </div>
        </article>



    </div>


    <div class="PieDePage-reseaux-sociaux">

        <?php get_template_part("gabarits/icone-sociaux"); ?>

    </div>

    <div>
        <p>Juan Hernandez. Tous droits réservés 2025</p>
    </div>
    <?php wp_footer(); ?>

</footer>