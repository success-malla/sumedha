<?php
/**
 * The template for displaying all pages
 *
 * @package Sumedha_Air
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="page-header">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </div>

    <div class="page-content">
        <?php the_content(); ?>
    </div>

<?php endwhile; ?>

<?php
get_footer();
