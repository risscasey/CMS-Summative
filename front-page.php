<?php get_header(); ?>

<?php if (get_theme_mod('LCCMS_landingImgSetting', 'on') == 'on'): ?>
    <div class="container-fluid p-2" style="height:100vh;">
        <div id="hederImage" class="w-100" style="height:98vh;background-image:url(<?php echo get_header_image();?>);">

            <?php get_template_part('templates/content', 'navTransparent'); ?>

            <div class="row">
                <div class="col-5">
                    <div class="text-light pl-5 pb-3" style="padding-top:30%;">


                        <?php if(get_theme_mod('LCCMS_LandingTitleSetting')): ?>
                            <h1 id="landingTitle" class="<?php if(has_header_image()){echo 'text-light';} else {echo 'text-dark';}; ?>"><?php echo get_theme_mod('LCCMS_LandingTitleSetting', 'Catchy Title') ?></h1>
                        <?php else: ?>
                            <h1 id="landingTitle" class="text-dark">Catchy Title</h1>
                        <?php endif; ?>

                        <?php if(get_theme_mod('LCCMS_LandingSubTitleSetting')): ?>
                            <h2 id="landingSubTitle" class="<?php if(has_header_image()){echo 'text-light';} else {echo 'text-dark';}; ?>"><?php echo get_theme_mod('LCCMS_LandingSubTitleSetting', 'Catchy Sub Title') ?></h2>
                        <?php else: ?>
                            <h2 id="landingSubTitle" class="text-dark">A catchy subtitle to go with my cathy title</h2>
                        <?php endif; ?>

                        <?php if(get_theme_mod('LCCMS_LandingTextSetting')): ?>
                            <h2 id="landingText" class="<?php if(has_header_image()){echo 'text-light';} else {echo 'text-dark';}; ?> pt-3"><?php echo get_theme_mod('LCCMS_LandingSubTitleSetting', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.') ?></h2>
                        <?php else: ?>
                            <h2 id="landingText" class="text-dark pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
                        <?php endif; ?>


                        <?php if (get_theme_mod('LCCMS_LandingBtnSetting') === 'On'): ?>
                            <button id="landingBtn" type="button" class="btn btn-light shadow mb-3">
                                <a href="<?php echo get_theme_mod('LCCMS_LandingBtnLinkSetting') ?>"><?php echo get_theme_mod('LCCMS_LandingBtnTextSetting') ?></a>
                            </button>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="container-fluid p-2" style="height:100vh;">

        <div id="navImg" class="w-100">
            <?php get_template_part('templates/content', 'navDefault'); ?>
        </div>

        <div class="row">
            <div class="col-5">
                <div class="text-light pl-5 pb-3" style="padding-top:30%;">

                    <?php if(get_theme_mod('LCCMS_LandingTitleSetting')): ?>
                        <h1 id="landingTitle" class="<?php if(has_header_image()){echo 'text-light';} else {echo 'text-dark';}; ?>"><?php echo get_theme_mod('LCCMS_LandingTitleSetting', 'Catchy Title') ?></h1>
                    <?php else: ?>
                        <h1 id="landingTitle" class="<?php if(has_header_image()){echo 'text-light';} else {echo 'text-dark';}; ?>">Catchy Title</h1>
                    <?php endif; ?>

                    <?php if(get_theme_mod('LCCMS_LandingSubTitleSetting')): ?>
                        <h2 id="landingSubTitle" class="<?php if(has_header_image()){echo 'text-light';} else {echo 'text-dark';}; ?>"><?php echo get_theme_mod('LCCMS_LandingSubTitleSetting', 'Catchy Sub Title') ?></h2>
                    <?php else: ?>
                        <h2 id="landingSubTitle" class="<?php if(has_header_image()){echo 'text-light';} else {echo 'text-dark';}; ?>">A catchy subtitle to go with my cathy title</h2>
                    <?php endif; ?>

                    <?php if(get_theme_mod('LCCMS_LandingTextSetting')): ?>
                        <h2 id="landingText" class="<?php if(has_header_image()){echo 'text-light';} else {echo 'text-dark';}; ?> pt-3"><?php echo get_theme_mod('LCCMS_LandingTextSetting', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.') ?></h2>
                    <?php else: ?>
                        <h2 id="landingText" class="text-dark pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if (get_theme_mod('LCCMS_carouselSetting') === 'On'): ?>
    <?php get_template_part('templates/content', 'carousel'); ?>
<?php endif; ?>

<?php get_footer(); ?>
