<?php
/**
 * Template Name: index
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>
    <h1 class="pagetitle"><?php the_title(); ?></h1>

    <div class="container">
        <div class="block1">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <div class="block1content">
                    <?php the_content();?>
                </div>
                <a href="/scaldis/over" class="perma-button">Lees meer</a>
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
                echo '<h2 class="cat-name">' . get_cat_name( $category_id ) . '</h2>';
                echo '<h3 class="cat-description">' . category_description( $category_id ) . '</h3>';

            $catquery = new WP_Query( 'cat='. $category_id . '&posts_per_page=2' );

            if ( $catquery->have_posts() ) :
                while($catquery->have_posts()) : $catquery->the_post();
                    ?>
                    <!--Post Content Start-->
                    <div class="post-block" id="post-<?php the_ID(); ?>">
                        <div class="col-lg-12">
                            <!-- Title -->
                            <a href="<?php the_permalink(); ?>"> <h3 class="post-title"><?php the_title(); ?></h3></a>
                            <!-- Subtitle -->
                            <h5 class="post-subtitle"><?php echo get_the_date(); ?></h5>
                            <!-- Content -->
                            <div class="post-content"><?php echo wp_trim_words( get_the_content(), 36, '...' );?></div>
                            <a href="<?php the_permalink(); ?>#post-scroll" class="perma-button">Bekijk Vacature</a>
                        </div>
                    </div>
                    <!--Post Content End-->
                <?php
                endwhile;
            else:
                echo '<h3 id="results">Er zijn op dit moment geen beschikbare vacatures.</h3>';
            endif; ?>





            <?php wp_reset_query(); // reset the query ?>
        </div>
<!--Container End-->
    </div>


<?php get_footer(); ?>