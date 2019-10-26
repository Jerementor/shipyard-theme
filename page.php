<?php

/**
 * The template for every page in the theme
 *
 * @package shipyard-theme
 */

get_header();
?>
<div class="shpyd-wrapper">
    <div class="w-container">
        <div class="w-row">
        <?php
            if ( have_posts() ){

                while( have_posts() ){

                    the_post();

                    the_content();

                }

            }

        ?>
        </div>
    </div>
</div>

<?php
get_footer();