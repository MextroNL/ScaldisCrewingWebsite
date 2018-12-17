<?php
/**
 * Template Name: Vacatures
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>
    <h1 class="pagetitle"><?php the_title(); ?></h1>
    <div class="container">

        <form name="search" class="search_input" method="post" action="<?php the_permalink();?>#pagetitle">
            <!--Searchbar-->
            <input type="search" onchange="document.filters.submit()" name="search" placeholder="Zoek naar vacatures" <?php if(isset($_REQUEST['search'])){echo 'value="' . $_REQUEST['search'] . '"';}?> id="search_posts">
            <button type="submit" name="submit" id="searchicon">
                <i class="fas fa-search"></i>
            </button>
        </form>
        <form name="filters" class="filter_form" method="get" action="<?php the_permalink();?>/#pagetitle">
        <!--Post per page-->
            <div class="amount_filter">
                <label class="wrap" for="posts_per_page" id="amountLabel">Vacatures per pagina</label>
                <select onchange="document.filters.submit()" name="posts_per_page" id="posts_per_page">
                    <option value="4" <?php selected(4,$_REQUEST['posts_per_page']);?>>4</option>
                    <option value="8" <?php selected(8,$_REQUEST['posts_per_page']);?>>8</option>
                    <option value="16" <?php selected(16,$_REQUEST['posts_per_page']);?>>16</option>
                    <option value="-1" <?php selected(-1,$_REQUEST['posts_per_page']);if( isset($_REQUEST['search'])) {echo 'selected="selected"';}?>>Alle</option>
                </select>
            </div>
        <!--Beroep Filter-->
            <div class="function_filter">
                <label class="wrap" for="beroep_filter" id="functionLabel">Functie</label>
                <select onchange="document.filters.submit()" name="beroep_filter" id="beroep_filter">
                    <option value="-1" <?php selected(-1,$_REQUEST['beroep_filter']);if( isset($_REQUEST['search'])) {echo 'selected="selected"';}?>>Alle</option>
                    <option value="scheepsjongen" <?php selected('scheepsjongen',$_REQUEST['beroep_filter']);?>>Scheepsjongen</option>
                    <option value="matroos" <?php selected('matroos',$_REQUEST['beroep_filter']);?>>Matroos</option>
                    <option value="kapitein" <?php selected('kapitein',$_REQUEST['beroep_filter']);?>>Kapitein</option>
                </select>
            </div>
        </form>





        <?php
        //Search

        $clean_code = preg_replace('/[^a-zA-Z0-9 ]/', '', $_REQUEST['search']);

        $nospace = rtrim($clean_code);

        $searchwords = preg_replace('/\s+/', '+', $nospace);


//        if(isset($_REQUEST['search']) && $a = 1){
//        echo 'Zoekresultaten voor: "' . $nospace . '"<br>';
//        }





        //Post Per Page Loop
        if( isset($_REQUEST['posts_per_page'] )) {
            $posts_per_page = $_REQUEST['posts_per_page'];
        }
        elseif( isset($_REQUEST['search'])){
            $posts_per_page = -1; // Search Results
        }
        else {
            $posts_per_page = 4; // default value
        }

        //Beroep Filter Loop
        if( isset($_REQUEST['beroep_filter'] )) {
            $beroep_filter = $_REQUEST['beroep_filter'];
        }
        elseif( isset($_REQUEST['search'])){
            $beroep_filter = -1; // Search Results
        }
        else {
            $beroep_filter = 4; // default value
        }


        ?>

<!--Loop-->

        <?php

        // Define custom query parameters
        $custom_query_args = array(
            's' => $searchwords,
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
            $totalPosts = $custom_query->found_posts; //Shows Total Posts
            if(!empty($_REQUEST['search']) && $totalPosts > 1){
                echo '<h2 id="results">Er zijn ' . $totalPosts . ' zoekresultaten gevonden voor: "' . $nospace . '".</h2>';
            }
            elseif(!empty($_REQUEST['search']) && $totalPosts == 1){
                echo '<h2 id="results">Er is ' . $totalPosts . ' zoekresultaat gevonden voor: "' . $nospace . '".</h2>';
            }

            while ( $custom_query->have_posts() ) :
            $custom_query->the_post();?>
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
            <?php
            endwhile;
            $totalPosts = $custom_query->found_posts; //Shows Total Posts
        elseif (!empty($_REQUEST['search']) && $totalPosts == 0):
            echo '<h2 id="results">Geen zoekresultaten gevonden voor: "' . $nospace . '"</h2>';
        else:
            echo '<h2 id="results">Er zijn op dit moment geen beschikbare vacatures.</h2><style>@media screen and (max-width: 800px){.container{padding-bottom:20vmax}}</style>';


        endif;
        // Reset postdata
        wp_reset_postdata();

        // Custom query loop pagination
        echo '<nav><div id="page-nav">';
        previous_posts_link( '<i class="fas fa-chevron-circle-left" id="prev-button"></i>' );
        if ($posts_per_page > 0 && $totalPosts > $posts_per_page){
            echo '<h6 id="page-number">' . $custom_query_args['paged'] . '</h6>';
        }
        next_posts_link( '<i class="fas fa-chevron-circle-right" id="next-button"></i>', $custom_query->max_num_pages );
        echo '</div></nav>';

        // Reset main query object
        $wp_query = NULL;
        $wp_query = $temp_query;






        //Query Vars
        //            $showedPosts = $custom_query->post_count; //Shows shown posts on a page
        //            $_GET['shown_post_nr'] = $showedPosts;
        //                echo $_GET['shown_post_nr'] . '<br>';
        //
        //            $pageNumber = $custom_query_args['paged'];
        //            $postNumber = $pageNumber * $showedPosts;
        //            echo 'Post Count' . $showedPosts . '<br>';
        //            echo 'Found Posts' . $countPosts . '<br>';
        //
        //            echo $postNumber . ' van de ' . $countPosts . ' vacatures getoond';

        //if found posts < post per page ^-^
        //pagenumber*showedposts

        ?>
    </div>


<?php get_footer(); ?>