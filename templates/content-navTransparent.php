<div class="row pb-3">
    <div class="col">

        <?php if (get_theme_mod('LCCMS_navLogoSetting')): ?>
            <nav class="navbar navbar-expand-md" role="navigation" style="padding:0 !important;">
        <?php else: ?>
            <nav class="navbar navbar-expand-md navbar-dark pt-4" role="navigation">
                <div class="container-fluid">
        <?php endif; ?>




        <div class="container-fluid d-flex justify-content-around">
            <?php if (get_theme_mod('LCCMS_navLogoSetting')): ?>
                <div id="navBannerBG" class="py-4 px-1 mx-3 shadow" style="width:6%;" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_theme_mod('LCCMS_navLogoSetting') ?>" class="w-75" alt="">
                </div>
            <?php else: ?>
                <a id="defaultNavTitle" class="navbar-brand mr-5" href="<?php echo home_url(); ?>"><?php echo get_bloginfo($show = 'name', $filter = 'raw'); ?></a>
            <?php endif; ?>

            <div class="row w-100">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggled_nav" aria-controls="toggled_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="toggled_nav">
                    <?php if (has_nav_menu( 'top_nav' )): ?>
                        <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'top_nav',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'toggled_nav',
                            'menu_class'        => 'navbar-nav mr-auto mt-2 mt-lg-0',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?>
                    <?php endif; ?>
                </div>
            </div>

            <?php if (get_theme_mod('LCCMS_navBtnSetting') === 'On'): ?>
                <button id="donateBtn" type="button" class="shadow btn shadow mr-3" ><a href="<?php echo get_theme_mod('LCCMS_navBtnLinkSetting') ?>"><?php echo get_theme_mod('LCCMS_navBtnTextSetting') ?></a>
                    </button>
            <?php endif; ?>
        </div>

        <?php if (get_theme_mod('LCCMS_navLogoSetting')): ?>
            </nav>
        <?php else: ?>
            </nav>
        <?php endif; ?>

    </div>
</div>
