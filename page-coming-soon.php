<?php
/**
 * The template for a coming soon page
 *
 * Template Name: Coming Soon
 */
get_header('none');
?>

<div class="shpyd-fullscreen">
    <div>
        <div class="w-container">
            <div>
                <h1 class="shpyd-h1">New Site Coming Soon</h1>
            </div>
            <div class="shpyd-centered-text">
                <div>Sign up below to get notified when the site goes live</div>
            </div>
            <div class="shpyd-form-wrapper">
                <div class="w-row">
                    <div class="w-col w-col-2"></div>
                    <div class="w-col w-col-8">
                        <?php the_field('email_form'); ?>
                    </div>
                    <div class="w-col w-col-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

