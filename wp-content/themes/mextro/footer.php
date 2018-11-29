<!--Theme Footer-->
<footer class="container-fluid bg-4 col-lg-12 footer-block">
    <div class="row footer-widget-wrapper">
        <?php
        if(is_active_sidebar('footer-widget-1')){
            dynamic_sidebar('footer-widget-1');
        }

        if(is_active_sidebar('footer-widget-2')){
            dynamic_sidebar('footer-widget-2');
        }

        if(is_active_sidebar('footer-widget-3')){
            dynamic_sidebar('footer-widget-3');
        }

        ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
