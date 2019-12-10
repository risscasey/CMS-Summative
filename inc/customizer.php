<?php

function mytheme_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'LCCMS_homeNavSection' , array(
       'title'      => __( 'Home Navigation', 'LarissaCaseyCMS' ),
       'priority'   => 1,
    ));

    $wp_customize->add_setting( 'LCCMS_navLogoSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
        'label'      => __( 'Upload a logo for the Navigation', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_homeNavSection',
        'settings'   => 'LCCMS_navLogoSetting',
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_homeNavColourSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homeNavBg', array(
       'label'       => __( 'Banner colour', 'LarissaCaseyCMS' ),
       'description' => 'Select background colour for logo banner',
       'section'     => 'LCCMS_homeNavSection',
       'settings'    => 'LCCMS_homeNavColourSetting',
   )));

   //--------------------------------------

   $wp_customize->add_setting( 'LCCMS_homeNavTextSetting' , array(
       'transport' => 'refresh',
       'default' => '#ffffff'
   ));

   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homeNavText', array(
       'label'      => __( 'Navigation text colour', 'LarissaCaseyCMS' ),
       'section'    => 'LCCMS_homeNavSection',
       'settings'   => 'LCCMS_homeNavTextSetting',
   )));

    //--------------------------------------

    $wp_customize->add_section( 'LCCMS_pageNavSection' , array(
       'title'      => __( 'Page Navigation', 'LarissaCaseyCMS' ),
       'priority'   => 2,
    ));

    $wp_customize->add_setting( 'LCCMS_navBGImgSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'navBG', array(
        'label'      => __( 'Upload a background image for your Navigation', 'LarissaCaseyCustom' ),
        'description' => 'Please "Publish" when adding or removing image to see changes',
        'section'    => 'LCCMS_pageNavSection',
        'settings'   => 'LCCMS_navBGImgSetting',
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_pageNavColourSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'pageNavBg', array(
       'label'       => __( 'Or, Select a background colour for your Navigation.', 'LarissaCaseyCMS' ),
       'description' => 'Chnage the Background Colour of oyur top navigation',
       'section'     => 'LCCMS_pageNavSection',
       'settings'    => 'LCCMS_pageNavColourSetting',
   )));

   //--------------------------------------

   $wp_customize->add_setting( 'LCCMS_pageNavTextSetting' , array(
       'transport' => 'refresh',
   ));

   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navText', array(
       'label'      => __( 'Navigation text colour', 'LarissaCaseyCMS' ),
       'section'    => 'LCCMS_pageNavSection',
       'settings'   => 'LCCMS_pageNavTextSetting',
   )));

   //--------------------------------------

   $wp_customize->add_section( 'LCCMS_navBtnSection' , array(
      'title'      => __( 'Navigation Button', 'LarissaCaseyCMS' ),
      'priority'   => 3,
   ));

   $wp_customize->add_setting( 'LCCMS_navBtnSetting' , array(
       'transport' => 'refresh',
   ));

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'navBtn', array(
       'label'      => __( 'Navigation Button', 'LarissaCaseyCMS' ),
       'section'    => 'LCCMS_navBtnSection',
       'settings'   => 'LCCMS_navBtnSetting',
       'type'       => 'radio',
       'choices'    => array(
            'On' => __( 'On' ),
            'Off'  => __( 'Off' )
        )
   )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_navBtnTextSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'navBtnText', array(
        'label'      => __( 'Navigation Button Text', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_navBtnSection',
        'settings'   => 'LCCMS_navBtnTextSetting',
        'type'       => 'text'
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_navBtnBGColourSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navBtnBGColour', array(
        'label'      => __( 'Navigation Button Background Colour', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_navBtnSection',
        'settings'   => 'LCCMS_navBtnBGColourSetting',
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_navBtnTextColourSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navBtnTextColour', array(
        'label'      => __( 'Navigation Button Text Colour', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_navBtnSection',
        'settings'   => 'LCCMS_navBtnTextColourSetting',
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_navBtnLinkSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'navBtnLink', array(
        'label'      => __( 'Navigation Button Link', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_navBtnSection',
        'settings'   => 'LCCMS_navBtnLinkSetting',
        'type'       => 'text'
    )));

    //--------------------------------------

    $wp_customize->add_section( 'LCCMS_landingTextSection' , array(
       'title'      => __( 'Landing Text', 'LarissaCaseyCMS' ),
       'priority'   => 5,
    ));

    $wp_customize->add_setting( 'LCCMS_LandingTitleSetting' , array(
        'transport' => 'refresh',
    ));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_LandingTitleSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'landingTitle', array(
        'label'      => __( 'Landing Title', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_landingTextSection',
        'settings'   => 'LCCMS_LandingTitleSetting',
        'type'       => 'text'
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_LandingSubTitleSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'landingSubTitle', array(
        'label'      => __( 'Landing Sub-Title', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_landingTextSection',
        'settings'   => 'LCCMS_LandingSubTitleSetting',
        'type'       => 'text'
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_LandingTextSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'landingText', array(
        'label'      => __( 'Landing Text', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_landingTextSection',
        'settings'   => 'LCCMS_LandingTextSetting',
        'type'       => 'text'
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_landingTextColourSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navBtnTextColour', array(
        'label'      => __( 'Landing Text Colour', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_landingTextSection',
        'settings'   => 'LCCMS_landingTextColourSetting',
    )));

    //--------------------------------------

    $wp_customize->add_section( 'LCCMS_landingBtnSection' , array(
       'title'      => __( 'Landing Button', 'LarissaCaseyCMS' ),
       'priority'   => 6,
    ));

    $wp_customize->add_setting( 'LCCMS_LandingBtnSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'landingBtn', array(
        'label'      => __( 'Landing Button', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_landingBtnSection',
        'settings'   => 'LCCMS_LandingBtnSetting',
        'type'       => 'radio',
        'choices'    => array(
             'On' => __( 'On' ),
             'Off'  => __( 'Off' )
         )
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_LandingBtnTextSetting' , array(
        'transport' => 'refresh',
        'default' => '#222f3e'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'landingBtnText', array(
        'label'      => __( 'Landing Button Text', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_landingBtnSection',
        'settings'   => 'LCCMS_LandingBtnTextSetting',
        'type'       => 'text'
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_LandingBtnLinkSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'landingBtnLink', array(
        'label'      => __( 'Landing Button Link', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_landingBtnSection',
        'settings'   => 'LCCMS_LandingBtnLinkSetting',
        'type'       => 'text'
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_LandingBtnTextColourSetting' , array(
        'transport' => 'refresh',
        'default' => '#222f3e'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'landingBtnTextColour', array(
        'label'      => __( 'Landing Text Colour', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_landingBtnSection',
        'settings'   => 'LCCMS_LandingBtnTextColourSetting',
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_LandingBtnBGColourSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'landingBtnBGColour', array(
        'label'      => __( 'Landing Button Background Colour', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_landingBtnSection',
        'settings'   => 'LCCMS_LandingBtnBGColourSetting',
    )));

}
add_action( 'customize_register', 'mytheme_customize_register' );

function mytheme_customize_css()
{
    ?>
         <style type="text/css">

            #navBannerBG {
                background-color: <?php echo get_theme_mod('LCCMS_homeNavColourSetting', ''); ?>;
                border-radius: 0 0 7px 7px;
            }

            #navImg {
                 background-image: url('<?php echo get_theme_mod('LCCMS_navBGImgSetting'); ?>');
                 background-position: center;
                 background-repeat: no-repeat;
                 background-size: cover;
             }

            #donateBtn {
                background-color: <?php echo get_theme_mod('LCCMS_navBtnBGColourSetting', '#f8f9fa');?> !important;
            }

            .topNavLinks a {
                color: <?php echo get_theme_mod('LCCMS_homeNavTextSetting', '#ffffff');?> !important;
            }

            #donateBtn a{
                color: <?php echo get_theme_mod('LCCMS_navBtnTextColourSetting', '#000000');?> !important;
            }

            #defaultNavBg {
                 background-color: <?php echo get_theme_mod('LCCMS_pageNavColourSetting', '#ffffff');?> !important;
             }

            .deafultNavLinks a {
                color: <?php echo get_theme_mod('LCCMS_pageNavTextSetting', '#ffffff');?> !important;
            }

            #defaultNavTitle {
                color: <?php echo get_theme_mod('LCCMS_pageNavTextSetting', '#ffffff');?> !important;
            }

            #landingTitle {
                font-weight: bold;
                font-size: 2em;
                color: <?php echo get_theme_mod('LCCMS_landingTextColourSetting', '#ffffff');?> !important;
            }

            #landingSubTitle {
                font-style: italic;
                font-size: .8em;
                color: <?php echo get_theme_mod('LCCMS_landingTextColourSetting', '#ffffff');?> !important;
                opacity: .6;
            }

            #landingText {
                font-size: 1em;
                color: <?php echo get_theme_mod('LCCMS_landingTextColourSetting', '#ffffff');?> !important;
            }

            #landingBtn {
                background-color: <?php echo get_theme_mod('LCCMS_LandingBtnBGColourSetting', '#ffffff');?> !important;
                border: none;
            }

            #landingBtn a{
                color: <?php echo get_theme_mod('LCCMS_LandingBtnTextColourSetting', '#222f3e');?> !important;
            }

            .carouselBtn {
                background-color: <?php echo get_theme_mod('LCCMS_carouselBtnSetting', '#222f3e');?> !important;
                margin-top: 1em;
                border-radius: 0;
                font-size: .8em;
            }

         </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');
