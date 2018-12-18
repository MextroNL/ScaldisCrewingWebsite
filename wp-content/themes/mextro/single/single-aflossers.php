<?php
/*
 * Template Name: Single Aflossers
 * Template Post Type: aflossers
 */
?>
<?php get_header(); ?>
    <div class="page-content">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- Posts loop -->

                <!-- Terug Knop -->
                <div class="single-title">
                    <div class="go-back"><a href="<?php echo home_url() . '/aflossers';?>"><i class="fas fa-chevron-circle-left"></i><span class="terug"> Aflossers</span></a></div>
                    <!-- Title -->
                    <h1 id="pagetitle" class="singletitle"><?php the_title(); ?></h1>
                </div>

                <!-- Bio -->
                <div class="block1content">
                    <!-- Subtitle -->
                    <h2 class="profile-bio">Biografie</h2>

                    <!-- Custom Fields -->
                    <div class="custom-fields">
                        <p>Geboren: <?php the_field('geboortedatum'); ?></p>
                        <p>Geslacht: <?php the_field('geslacht'); ?></p>
                    </div>

                    <!-- Content -->
                    <div class="profile-content">
                        <?php the_content();?>
                    </div>
                    <!-- Profile Picture -->
                        <?php
                            if ( has_post_thumbnail() ) {
                        ?>
                                <div class="bio-image" id="img_click">
                                    <a href="<?php echo get_the_post_thumbnail_url(); ?>">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </a>
                                </div>
                                <script type="text/javascript"> $('.bio-image a').simpleLightbox(); </script>
                        <?php
                                }
                            else {
                        ?>
                                    <div class="bio-wrapper">
                                        <span class="bio-icon">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                        <?php } ?>
                </div>


<!-- Lightbox Test -->


            <!-- Looks like box style -->
            <style type="text/css">
                .contentInPopup { padding: 2em; max-width: 40em; }
            </style>

            <!-- Button -->
            <span id="click"><i class="fas fa-award"></i></span>

            <!-- Popup -->
            <div id="awardBox" style="display:none;">
                <div class="contentInPopup">

                    <h3 class="awardTitle">Certificaten</h3>
                    <h3 class="awardName"><?php the_title(); ?></h3>

                    <div class="awards">

                        <div class="awardBlock1">
                            <h4 class="">Vaarbewijzen</h4>
                            <?php the_field('vaarbewijzen'); ?>
                        </div>

                        <div class="awardBlock2">
                            <h4 class="">Patenten</h4>
                            <?php the_field('patenten'); ?>
                        </div>

                        <div class="awardBlock3">
                            <h4 class="">Zwemdiplomas</h4>
                            <?php the_field('zwemdiplomas'); ?>
                        </div>

                    </div>
                    <button type="button" title="Close" class="slbCloseBtn awardClose">×Xx</button>
                </div>
            </div>
            <!-- Where the magic happens -->
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#click').click(function() {
                        $.SimpleLightbox.open({
                            content : $('#awardBox').html(),
                            elementClass : 'slbContentEl'
                        });
                    });
                });

            </script>
<!-- Lightbox Test -->



        </div>


        <?php endwhile; ?>
        <?php endif; ?>
    </div>

<?php
$content = get_the_content();
if (strlen($content) < 240) {
    echo "<style>.block1content{padding-bottom:20vmax}</style>";
}
?>
<?php get_footer(); ?>