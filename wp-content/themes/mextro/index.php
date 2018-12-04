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
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <div class="block1content"><?php the_content();?></div>
                <a href="" class="perma-button">Lees meer</a>
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
                $category_id = 3;
                echo '<div class="cat-name">' . get_cat_name( $category_id ) . '</div>';
                echo '<div class="cat-description">' . category_description( $category_id ) . '</div>';

            $catquery = new WP_Query( 'cat=$category_id&posts_per_page=2' );
            while($catquery->have_posts()) : $catquery->the_post();
                ?>
                <!--Post Content Start-->
                <div class="post-block" id="post-<?php the_ID(); ?>">
                    <div class="col-lg-12">
                        <!-- Title -->
                        <a href="<?php the_permalink(); ?>"> <h2 class="post-title"><?php the_title(); ?></h2></a>
                        <!-- Subtitle -->
                        <h5 class="post-subtitle"><?php echo get_the_date(); ?></h5>
                        <!-- Content -->
                        <div class="post-content"><?php echo wp_trim_words( get_the_content(), 150, '...' );?></div>
                        <a href="<?php the_permalink(); ?>#post-scroll" class="perma-button">Bekijk Vacature</a>
                    </div>
                </div>
                <!--Post Content End-->
            <?php endwhile; ?>
            <?php wp_reset_query(); // reset the query ?>
        </div>
<!--Container End-->
    </div>


<?php get_footer(); ?>