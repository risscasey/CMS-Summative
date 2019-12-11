
<?php if (get_theme_mod('LCCMS_navBGImgSetting')): ?>
    <div class="row pb-3">
        <div class="col">
            <div id="navImg" class="w-100">
                <div class="w-100 h-100" style="background:rgba(0,0,0,0.6)">
                    <nav class="navbar navbar-expand-md navbar-dark pb-3" role="navigation" style="padding-top:0!important;">
<?php else: ?>
    <div class="row pb-3">
        <div class="col">
            <nav id="defaultNavBg" class="navbar navbar-expand-md navbar-dark bg-dark py-2" role="navigation">
<?php endif; ?>

    <div class="container-fluid d-flex justify-content-between">
        <?php if (get_theme_mod('LCCMS_navLogoSetting')): ?>
            <div id="navBannerBG" class="py-2 px-1 mx-3 shadow" style="width:6%;">
                <img src="<?php echo get_theme_mod('LCCMS_navLogoSetting') ?>" class="w-50 py-2" alt="">
            </div>
        <?php else: ?>
            <a id="defaultNavTitle" class="navbar-brand mr-5" href="#"><?php echo get_bloginfo($show = 'name', $filter = 'raw'); ?></a>
        <?php endif; ?>

        <?php if (has_nav_menu( 'top_nav' )): ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top_navigation" aria-controls="top_navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'top_nav',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse pt-3',
                    'container_id'      => 'top_nav',
                    'menu_class'        => 'nav navbar-nav deafultNavLinks',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
            ?>
        <?php endif; ?>

        <?php if (get_theme_mod('LCCMS_navBtnSetting') === 'On'): ?>
            <button id="donateBtn" type="button" class="shadow btn shadow mr-3 mt-3" ><a href="<?php echo get_theme_mod('LCCMS_navBtnLinkSetting') ?>"><?php echo get_theme_mod('LCCMS_navBtnTextSetting') ?></a>
                </button>
        <?php endif; ?>
    </div>

<?php if (get_theme_mod('LCCMS_navBGImgSetting')): ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
            </nav>
        </div>
    </div>
<?php endif; ?>
