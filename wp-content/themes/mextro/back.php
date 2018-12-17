<?php
/**
 * Template Name: Vacatures
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>
    <div class="container">
        <?php get_search_form(); ?>
        <form name="frm" class="db_posts_per_page_form" method="post" target="_self" action="<?php echo the_permalink();?>">
            <label for="db_posts_per_page">Vacatures per pagina</label>
            <select onchange="document.frm.submit()" name="db_posts_per_page" id="db_posts_per_page">
                <option value="4" <?php selected(4,$_REQUEST['db_posts_per_page']);?>>4</option>
                <option value="8" <?php selected(8,$_REQUEST['db_posts_per_page']);?>>8</option>
                <option value="16" <?php selected(16,$_REQUEST['db_posts_per_page']);?>>16</option>
                <option value="alle" <?php selected(" ",$_REQUEST['db_posts_per_page']);?>>Alle</option>
            </select>
        </form>
        <?php
        if( isset($_REQUEST['db_posts_per_page'] ))
            $posts_per_page = $_REQUEST['db_posts_per_page'];
        else
            $posts_per_page = 4; // default value


        ?>



        <!--Pagination-->
        <?php

        // Define custom query parameters
        $custom_query_args = array(
            'posts_per_page' => $posts_per_page,
            'cat' => 3
        );

        // Get current page and append to custom query parameters array
        $custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

        // Instantiate custom query
        $custom_query = new WP_Query( $custom_query_args );

        // Pagination fix
        $temp_query = $wp_query;
        $wp_query   = NULL;
        $wp_query   = $custom_query;

        // Output custom query loop
        if ( $custom_query->have_posts() ) :
            while ( $custom_query->have_posts() ) :
                $custom_query->the_post();?>
                <div class="post-block" id="post-<?php the_ID(); ?>">
                    <div class="col-lg-12">
                        <!-- Title -->
                        <a href="<?php the_permalink(); ?>"> <h2 class="post-title"><?php the_title(); ?></h2></a>
                        <!-- Subtitle -->
                        <h5 class="post-subtitle"><?php echo get_the_date(); ?></h5>
                        <!-- Content -->
                        <div class="post-content"><?php echo wp_trim_words( get_the_content(), 36, '...' );?></div>
                        <a href="<?php the_permalink(); ?>#post-scroll" class="perma-button">Bekijk Vacature</a>
                    </div>
                </div>
            <?php


            endwhile;
            $showedPosts = $custom_query->post_count;
            $countPosts = $custom_query->found_posts;
            echo $showedPosts . ' van de ' . $countPosts . ' vacatures getoond';

            //if found posts < post per page ^-^
        endif;
        // Reset postdata
        wp_reset_postdata();

        // Custom query loop pagination
        echo '<nav><div id="page-nav">';
        previous_posts_link( '<i class="fas fa-chevron-circle-left" id="prev-button"></i>' );
         if ($posts_per_page < $countPosts){
        echo '<h6 id="page-number">' . $custom_query_args['paged'] . '</h6>';
        }
        next_posts_link( '<i class="fas fa-chevron-circle-right" id="next-button"></i>', $custom_query->max_num_pages );
        echo '</div></nav>';


        // Reset main query object
        $wp_query = NULL;
        $wp_query = $temp_query;

        ?>
    </div>

<?php get_footer(); ?>