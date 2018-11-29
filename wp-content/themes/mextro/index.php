<?php
/**
 * Template Name: index
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>

    <div class="container"


        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

        the_content();
    endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>





    <h1 class="page-title"><?php get_the_title(); ?></h1>
    <!-- Featured Posts loop -->
    <?php
    $catquery = new WP_Query( 'cat=4&posts_per_page=1' );
    while($catquery->have_posts()) : $catquery->the_post();
        ?>
        <!--Post Content Start-->
        <div class="row featured-post-block">
            <div class="col-lg-12">
                <!-- Title -->
                <h2 class="featured-post-title"><?php the_title(); ?></h2>
                <!-- Content -->
                <div class="featured-post-content"><?php the_content();?></div>
            </div>
        </div>
        <!--Post Content End-->
    <?php endwhile; ?>
    <?php wp_reset_query(); // reset the query ?>
<!---->
<!--    <div class="yt-video">-->
<!--        <iframe id="yt-video" src="https://www.youtube-nocookie.com/embed/PnaqJTnmvBM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--    </div>-->

<?php get_footer(); ?>