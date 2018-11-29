<?php
/**
 * Template Name: index
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>

    <div class="container">
        <div class="block1">
            <h1 class="pagetitle"><?php the_title(); ?></h1>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <div class="block1content"><?php the_content();?></div>
            <?php endwhile;
            else:?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </div>
        <div class="block2">
            <div class="row footer-widget-wrapper">
                <?php
                if(is_active_sidebar('index-widget-1')){?>
                    <div class="col-sm-4"><?php dynamic_sidebar('index-widget-1');?></div><?php
                }

                if(is_active_sidebar('index-widget-2')){?>
                    <div class="col-sm-4"><?php dynamic_sidebar('index-widget-2');?></div><?php
                }

                if(is_active_sidebar('index-widget-3')){?>
                    <div class="col-sm-4"><?php dynamic_sidebar('index-widget-3');?></div><?php
                }

                ?>
            </div>
        </div>
    <!--Vacatures Block-->
        <div class="block3">
            <?php
            $catquery = new WP_Query( 'cat=3&posts_per_page=2' );
            while($catquery->have_posts()) : $catquery->the_post();
                ?>
                <!--Post Content Start-->
                <div class="row featured-post-block" id="post-<?php the_ID(); ?>">
                    <div class="col-lg-12">
                        <!-- Title -->
                        <a href="<?php the_permalink(); ?>"> <h2 class="post-title"><?php the_title(); ?></h2></a><br>
                        <!-- Subtitle -->
                        <h5 class="post-subtitle">Posted by: <?php the_author() ?> - <?php echo get_the_date(); ?></h5>
                        <!-- Content -->
                        <div class="post-content"><?php echo wp_trim_words( get_the_content(), 150, '...' );?></div>
                        <a href="<?php the_permalink(); ?>#post-scroll" id="read-more-index" class="read-more">Read More</a>
                    </div>
                </div>
                <!--Post Content End-->
            <?php endwhile; ?>
            <?php wp_reset_query(); // reset the query ?>
        </div>
<!--Container End-->
    </div>


<?php get_footer(); ?>