<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
        <?php if (has_term('plusvendu', 'category')): ?>
            <article class="carte-container2 ">
                <div class="thumbnail-image">
                    <h2><?php the_title(); ?></h2>

                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    } ?>
                </div>


                <div>
                    <form method="get" action="<?php echo esc_url(home_url('/333')); ?>">
                        <!-- Hidden input field to pass the trimmed excerpt value -->
                        <input type="hidden" name="excerpt_value" value="<?php echo esc_attr(get_the_content()); ?>" />

                        <button type="submit" class="TexteSurImage__bouton">Plus d'info</button>
                    </form>
                </div>
            </article>
        <?php endif; ?>
    <?php endwhile; ?>
<?php else: ?>
    <p>No posts found.</p>
<?php endif; ?>