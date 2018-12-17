<!--Theme Footer-->
<footer class="container-fluid footer-block">
    <div class="footer-widget-wrapper">
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
    <div class="copyrightbottom">
        <a href=""><?php echo bloginfo('name') . " &copy; " . date("Y") . " - Made by Mextro";?></a>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
