<?php get_header(); ?>
    <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-lg-10">
            <!-- Posts loop -->
                <div class="col-lg-12">
                    <!-- Terug Knop -->
                <div class="single-title">
                    <div class="go-back"><a href="<?php echo home_url() . '/vacatures';?>"><i class="fa fa-arrow-left back-arrow"></i><span class="terug"> Vacatures</span></a></div>
                    <!-- Title -->
                    <h1 id="pagetitle" class="pagetitle"><?php the_title(); ?></h1>
                    <!-- Subtitle -->
                        <h2 class="post-subtitle"><?php echo get_the_date(); ?></h2>
                </div>
                    <!-- Content -->
                    <p class="post-content"><?php the_content();?></p>
                </div>

            </div>
    <?php endwhile; ?>
    <?php endif; ?>
        </div>

        </div>

<?php get_footer(); ?>