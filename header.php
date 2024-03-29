<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> content
 *
 * @package shipyard-theme
 *
 */

?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset = "<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>

</head>

<body>
<?php get_template_part('template-parts/nav/logged_out_nav'); ?>
<div class="shpyd-divider"></div>


