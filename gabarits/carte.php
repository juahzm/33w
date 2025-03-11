<?php

/**
 * Template Name: carte
 */
?>


<article class=" carte-container thumbnail">
    <div class="thumbnail-image">

        <h2><?php the_title(); ?></h2>
        <span class="thumbnail-texte"><?php the_category(', ') ?></span>
        <?php if (has_post_thumbnail()) {
            the_post_thumbnail('thumbnail');
        }
        ?>

    </div>
    <div class="thumbnail-texte">

        <?php echo wp_trim_words(get_the_excerpt(), 70, " ... "); ?>
        <p>Temp max: <?php the_field('temp_max') ?></p>
        <p>Temp min: <?php the_field('temp_min') ?></p>

    </div>


</article>