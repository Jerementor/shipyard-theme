<?php
/**
 * The main template for any sales pages
 *
 * Template Name: Sales Page
 *
 * @package shipyard-theme
 */
get_header();
?>

<!--Screencast Header-->
<div class="shpyd-wrapper shpyd-wrapper-header">
    <div class="shpyd-centered-text">
        <h1 class="shpyd-page-title"><?php the_field('screencast_name'); ?></h1>
    </div>
</div>

<!--Screencast Text & Video -->
<div class="shpyd-wrapper">
    <div class="w-container">
        <div class="w-row">
            <div class="w-col w-col-6">
                <?php the_field('paragraph_one'); ?>
            </div>
            <div class="w-col w-col-6">
                <div class="embed-container">
                <?php the_field('screencast_video'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="w-container">
        <div class="shpyd-no-column">
            <?php the_field('paragraph_long'); ?>
        </div>
    </div>
</div>

<!--Screencast Countdown Timer-->
<div class="shpyd-wrapper">
    <div class="w-container">
        <div class="shpyd-no-column">
            <div class="shpyd-countdown">
                <?php the_field('screencast_countdown'); ?>
            </div>
        </div>
    </div>
</div>

<!--Screencast Testimonials-->
<div class="shpyd-wrapper">
    <div class="w-container">
        <div class="shpyd-quote">
            <div class="w-row">
                <div class="w-col w-col-3">
                    <div class="shpyd-centered-text">
<!--                        <img src="--><!?php //the_field('quote_image'); ?><!--" />-->
                    </div>
                </div>
                <div class="w-col w-col-9">
                    <blockquote><strong><em><?php the_field('quote_text'); ?></em></strong><br></blockquote>
                </div>
            </div>
        </div>
    </div>
</div>

<!--FAQ & Checkout Money Back Guarantee -->
<div class="shpyd-wrapper">
    <div class="w-container">
        <div class="shpyd-faq">
            <div class="w-row">
                <div class="w-col w-col-6">
                    <?php the_field('screencast_faq'); ?>
                </div>
                <div class="w-col w-col-6">
                    <?php the_field('screencast_guarantee'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Screencast Checkout-->
<div class="shpyd-wrapper">
    <div class="w-container">
        <div class="shpyd-checkout-form">

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php
            the_content();
        ?>
    <?php endwhile; ?>
<?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>

