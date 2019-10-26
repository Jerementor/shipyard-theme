<?php

/**
 * The template for the index page
 *
 * @package shipyard-theme
 */

get_header();

?>

<!--Index.php-->
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <?php the_title('<h1 class="title">', '</h1>'); ?>

                <a href="<?php the_permalink(); ?>"><?php the_title( '<h2 class="post-title">', '</h2>'); ?></a>

                <?php the_excerpt(); ?>

    <?php endwhile; ?>


<?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php
get_footer();

