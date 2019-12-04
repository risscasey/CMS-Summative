<?php get_header(); ?>

<?php if (get_theme_mod('LCCMS_landingImgSetting')): ?>
    <div class="container-fluid p-2" style="height:100vh;">
        <div id="hederImage" class="w-100" style="height:98vh;">

            <?php get_template_part('templates/content', 'navTransparent'); ?>

            <div class="row">
                <div class="col-5">
                    <div class="text-light pl-5 pb-3" style="padding-top:30%;">
                        <h1 id="landingTitle"><?php echo get_theme_mod('LCCMS_LandingTitleSetting') ?></h1>
                        <h2 id="landingSubTitle"><?php echo get_theme_mod('LCCMS_LandingSubTitleSetting') ?></h2>
                        <p id="landingText" class="pt-3"><?php echo get_theme_mod('LCCMS_LandingTextSetting') ?></p>


                        <?php if (get_theme_mod('LCCMS_LandingBtnSetting') === 'On'): ?>
                            <button id="landingBtn" type="button" class="btn btn-light shadow mb-3"><?php echo get_theme_mod('LCCMS_LandingBtnTextSetting') ?></button>
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
                    <h1 id="landingTitle" class="text-dark"><?php echo get_theme_mod('LCCMS_LandingTitleSetting') ?></h1>
                    <h2 id="landingSubTitle" class="text-dark"><?php echo get_theme_mod('LCCMS_LandingSubTitleSetting') ?></h2>
                    <p id="landingText" class="pt-3 text-dark"><?php echo get_theme_mod('LCCMS_LandingTextSetting') ?></p>


                    <?php if (get_theme_mod('LCCMS_LandingBtnSetting') === 'On'): ?>
                        <button id="landingBtn" type="button" class="btn btn-light shadow mb-3"><?php echo get_theme_mod('LCCMS_LandingBtnTextSetting') ?></button>
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
