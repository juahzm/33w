<?php get_header(); ?>

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


    <div class="">

        <?php get_template_part("gabarits/partie-404"); ?>

    </div>
</main>

<?php get_footer(); ?>