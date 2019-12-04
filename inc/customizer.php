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





    $wp_customize->add_section( 'LCCMS_landingImgSection' , array(
       'title'      => __( 'Landing Image', 'LarissaCaseyCMS' ),
       'priority'   => 4,
    ));

    $wp_customize->add_setting( 'LCCMS_landingImgSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'landingImg', array(
        'label'      => __( 'Landing Image', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_landingImgSection',
        'settings'   => 'LCCMS_landingImgSetting',
    )));





    //--------------------------------------

    $wp_customize->add_section( 'LCCMS_landingTextSection' , array(
       'title'      => __( 'Landing Text', 'LarissaCaseyCMS' ),
       'priority'   => 5,
    ));

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
        'label'      => __( 'Landing Title', 'LarissaCaseyCMS' ),
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
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'landingBtnText', array(
        'label'      => __( 'Landing Button Text', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_landingBtnSection',
        'settings'   => 'LCCMS_LandingBtnTextSetting',
        'type'       => 'text'
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_LandingBtnTextColourSetting' , array(
        'transport' => 'refresh',
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
        'label'      => __( 'Landing Text Colour', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_landingBtnSection',
        'settings'   => 'LCCMS_LandingBtnBGColourSetting',
    )));

    //--------------------------------------

































    $wp_customize->add_section( 'LCCMS_Footer' , array(
       'title'      => __( 'Footer Section', 'LarissaCaseyCMS' ),
       'priority'   => 7,
    ));

    $wp_customize->add_setting( 'LCCMS_LandingBtnSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footerBg', array(
        'label'      => __( 'Landing Title', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_landingBtnSection',
        'settings'   => 'LCCMS_LandingBtnSetting',
        'type'       => 'radio',
        'choices'    => array(
             'On' => __( 'On' ),
             'Off'  => __( 'Off' )
         )
    )));

    //--------------------------------------

    $wp_customize->add_section( 'LCCMS_carouselSection' , array(
       'title'      => __( 'Carousel Section', 'LarissaCaseyCMS' ),
       'priority'   => 8,
    ));

    $wp_customize->add_setting( 'LCCMS_carouselSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'carousel', array(
        'label'      => __( 'Carousel on Home', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_carouselSection',
        'settings'   => 'LCCMS_carouselSetting',
        'type'       => 'radio',
        'choices'    => array(
             'On' => __( 'On' ),
             'Off'  => __( 'Off' )
         )
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_carouselBtnSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'carouselBtn', array(
        'label'      => __( 'Carousel Buttons', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_carouselSection',
        'settings'   => 'LCCMS_carouselBtnSetting',
        'type'       => 'radio',
        'choices'    => array(
             'On' => __( 'On' ),
             'Off'  => __( 'Off' )
         )
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_carouselCardTextSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'carouselCardText', array(
        'label'      => __( 'Carousel Content (Text on Cards', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_carouselSection',
        'settings'   => 'LCCMS_carouselBtnSetting',
        'type'       => 'radio',
        'choices'    => array(
             'On' => __( 'On' ),
             'Off'  => __( 'Off' )
         )
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_carouselBtnBGSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'carouselBtnBG', array(
        'label'      => __( 'Carousel Button Colour', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_carouselSection',
        'settings'   => 'LCCMS_carouselBtnBGSetting'
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_carouselBtnTextSetting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'carouselBtntext', array(
        'label'      => __( 'Carousel Button Text', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_carouselSection',
        'settings'   => 'LCCMS_carouselBtnTextSetting'
    )));

    //--------------------------------------


    $wp_customize->add_section( 'LCCMS_carouselImageSection' , array(
       'title'      => __( 'Carousel Image Section', 'LarissaCaseyCMS' ),
       'priority'   => 9,
    ));

    $wp_customize->add_setting( 'LCCMS_carouselImage1Setting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img1', array(
        'label'      => __( 'First Carousel Image', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_carouselImageSection',
        'settings'   => 'LCCMS_carouselImage1Setting',
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_carouselImage2Setting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img2', array(
        'label'      => __( 'Second Carousel Image', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_carouselImageSection',
        'settings'   => 'LCCMS_carouselImage2Setting',
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_carouselImage3Setting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img3', array(
        'label'      => __( 'Third Carousel Image', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_carouselImageSection',
        'settings'   => 'LCCMS_carouselImage3Setting',
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_carouselImage4Setting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img4', array(
        'label'      => __( 'Fourth Carousel Image', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_carouselImageSection',
        'settings'   => 'LCCMS_carouselImage4Setting',
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_carouselImage5Setting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img5', array(
        'label'      => __( 'Fith Carousel Image', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_carouselImageSection',
        'settings'   => 'LCCMS_carouselImage5Setting',
    )));

    //--------------------------------------

    $wp_customize->add_setting( 'LCCMS_carouselImage6Setting' , array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img6', array(
        'label'      => __( 'Sixth Carousel Image', 'LarissaCaseyCMS' ),
        'section'    => 'LCCMS_carouselImageSection',
        'settings'   => 'LCCMS_carouselImage6Setting',
    )));





















    // //--------------------------------------
    //
    //
    // $wp_customize->add_section( 'LCCMS_carouselImageSection' , array(
    //    'title'      => __( 'Carousel Image Section', 'LarissaCaseyCMS' ),
    //    'priority'   => 9,
    // ));
    //
    // $wp_customize->add_setting( 'LCCMS_carouselImage1Setting' , array(
    //     'transport' => 'refresh',
    // ));
    //
    // $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'img1', array(
    //     'label'      => __( 'First Carousel Image', 'LarissaCaseyCMS' ),
    //     'section'    => 'LCCMS_carouselImageSection',
    //     'settings'   => 'LCCMS_carouselImage1Setting',
    // )));
    //
    // //--------------------------------------
    //
    // $wp_customize->add_setting( 'LCCMS_carouselImage2Setting' , array(
    //     'transport' => 'refresh',
    // ));
    //
    // $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'img2', array(
    //     'label'      => __( 'Second Carousel Image', 'LarissaCaseyCMS' ),
    //     'section'    => 'LCCMS_carouselImageSection',
    //     'settings'   => 'LCCMS_carouselImage2Setting',
    // )));
    //
    // //--------------------------------------
    //
    // $wp_customize->add_setting( 'LCCMS_carouselImage3Setting' , array(
    //     'transport' => 'refresh',
    // ));
    //
    // $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'img3', array(
    //     'label'      => __( 'Third Carousel Image', 'LarissaCaseyCMS' ),
    //     'section'    => 'LCCMS_carouselImageSection',
    //     'settings'   => 'LCCMS_carouselImage3Setting',
    // )));
    //
    // //--------------------------------------
    //
    // $wp_customize->add_setting( 'LCCMS_carouselImage4Setting' , array(
    //     'transport' => 'refresh',
    // ));
    //
    // $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'img4', array(
    //     'label'      => __( 'Fourth Carousel Image', 'LarissaCaseyCMS' ),
    //     'section'    => 'LCCMS_carouselImageSection',
    //     'settings'   => 'LCCMS_carouselImage4Setting',
    // )));
    //
    // //--------------------------------------
    //
    // $wp_customize->add_setting( 'LCCMS_carouselImage5Setting' , array(
    //     'transport' => 'refresh',
    // ));
    //
    // $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'img5', array(
    //     'label'      => __( 'Fith Carousel Image', 'LarissaCaseyCMS' ),
    //     'section'    => 'LCCMS_carouselImageSection',
    //     'settings'   => 'LCCMS_carouselImage5Setting',
    // )));
    //
    // //--------------------------------------
    //
    // $wp_customize->add_setting( 'LCCMS_carouselImage6Setting' , array(
    //     'transport' => 'refresh',
    // ));
    //
    // $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'img6', array(
    //     'label'      => __( 'Sixth Carousel Image', 'LarissaCaseyCMS' ),
    //     'section'    => 'LCCMS_carouselImageSection',
    //     'settings'   => 'LCCMS_carouselImage6Setting',
    // )));



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
                color: <?php echo get_theme_mod('LCCMS_LandingBtnTextColourSetting', '#000000');?> !important;
            }

            #hederImage{
                background-image: url('<?php echo get_theme_mod('LCCMS_landingImgSetting'); ?>');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
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
