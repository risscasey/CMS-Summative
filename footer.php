<?php if(has_nav_menu( 'bottom_Nav' )): ?>

    <div class="container-fluid mt-5 p-2">
        <div id="footerImg" class="w-100 shadow-lg">
            <div id="footerOpacity" class="w-100 h-100">
                <div class="row pb-3">
                    <div class="col">
                        <nav class="navbar navbar-expand-md navbar-dark pt-4" role="navigation">
                            <div class="container-fluid">
                                <div class="w-100">
                                    <?php wp_nav_menu( array(
                                        'theme_location' => 'bottom_Nav',
                                        'container'      => 'div',
                                        'container_id'   => 'bottomNav',
                                        'menu_class'     => 'nav navbar-nav bottomNavLinks'
                                    )); ?>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div id="footerText" class="w-100">
                            <p class="text-center"><?php echo get_theme_mod('LCCMS_footerText'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
