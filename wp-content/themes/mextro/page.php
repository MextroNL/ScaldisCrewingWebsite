<?php
/**
 * Template Name: Page
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>

    <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <div class="block1content"><?php the_content();?></div>
            <?php endwhile;
            else:?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
    </div>



<?php get_footer(); ?>