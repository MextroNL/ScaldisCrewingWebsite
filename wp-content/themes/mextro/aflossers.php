<?php
/**
 * Template Name: Aflossers
 *
 * @package WordPress
 */
?>



<?php get_header(); ?>
    <h1 class="pagetitle"><?php the_title(); ?></h1>
    <div class="container">
        <div class="block1">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <div class="block1content"><?php the_content();?></div>
            <?php endwhile;
            else:?>
                <p>Geen inhoud op deze pagina.</p>
            <?php endif; ?>
        </div>

        <div class="block2">
                <?php
                $category_id = 4;
                $postNmbr = 0;
                //Geen H2!
                echo '<div class="cat-description">' . category_description( $category_id ) . '</div>';?>
            <div class="tiles">
            <div class="profiles">

                <?php
                $catquery = new WP_Query( 'cat='. $category_id . '&posts_per_page=-1' );
                while($catquery->have_posts()) : $catquery->the_post();
                    ?>
                    <!--Post Content Start-->
                    <div class="profile-block" id="post-<?php the_ID(); ?>">
                            <!-- Thumbnail -->
                            <?php

                                //PostNmbr
                                $postNmbr++;
//                                echo $postNmbr;
                                //Thumbnail check
                                if ( has_post_thumbnail() ) {
                                    ?>
                                    <a href="<?php the_permalink(); ?>">
                                    <?php
                                    echo '<div class="profile-image">';
                                    the_post_thumbnail('thumbnail');
                                    echo '</div></a>';
                                }
                                else {
                                    ?>
                                    <a href="<?php the_permalink(); ?>"><div class="profile-image"><div class="profile-wrapper"><span class="profile-icon"><i class="fas fa-user"></i></span></div></div></a>
                                    <?php
                                }

                                ?>
                            <!-- Title -->
                            <a href="<?php the_permalink(); ?>"> <h3 class="profile-title"><?php the_title(); ?></h3></a>
                            <!-- Content -->
                        </div>

                    <!--Post Content End-->
                <?php endwhile; ?>
                <?php wp_reset_query(); // reset the query ?>
                </div>
            </div>
            </div>

        <!--Vacatures Block-->
        <div class="block3">
            <h2 class="cat-description">Aflosser worden</h2>





            <?php echo do_shortcode('[contact-form-7 id="104" title="Aflosser worden"]'); ?>
        </div>
        <!--Container End-->
    </div>

    <script>
        $(document).ready( function() {
            $("input[type='text'], input[type='email'], textarea").attr('spellcheck',false);
        });

    </script>



<?php get_footer(); ?>