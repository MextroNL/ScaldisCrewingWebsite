<?php
/*
 * Template Name: Single Vacatures
 * Template Post Type: vacatures
 */
?>
<?php get_header(); ?>
    <div class="page-content">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- Posts loop -->
            <!-- Terug Knop -->
            <div class="single-title">
                <div class="go-back"><a href="<?php echo home_url() . '/vacatures';?>"><i class="fas fa-chevron-circle-left"></i><span class="terug"> Vacatures</span></a></div>
                <!-- Title -->
                <h1 id="pagetitle" class="singletitle"><?php the_title(); ?></h1>
                <!-- Subtitle -->
                <h2 class="single-subtitle"><?php echo get_the_date(); ?></h2>
            </div>
            <!-- Content -->
            <div class="single-content"><?php
                the_content();
                //echo wp_trim_words( get_the_content(), 240, '...' );

                ?></div>
        </div>


        <?php endwhile; ?>
        <?php endif; ?>
    </div>

<?php
$content = get_the_content();
if (strlen($content) < 240) {
    echo "<style>@media screen and (max-width: 800px){.page-content{padding-bottom:20vmax}}</style>";
}
?>
<?php get_footer(); ?>