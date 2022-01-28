<?php
 // ========================Adding color customizer=======================================================
 function devo_color_customizer( $wp_customize ) {
    $wp_customize->add_section( 'colors', array(
        'title' => __( 'Colors', 'devo' ),
        'priority' => 30,
    ) );
	
        
        // Text color
        $wp_customize->add_setting( 'devo_text_color', array(
            'default'   => '',
            'transport' => 'refresh',
          ) );
      
          $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'devo_text_color', array(
            
            'label'   => esc_html__( 'Text color', 'theme' ),
            'section' => 'colors',
            'settings'   => 'devo_text_color'
          ) ) );

          //Button color

            $wp_customize->add_setting( 'devo_button_color', array(
                'default'   => '#F5F5F5',
                'transport' => 'refresh',
            ) );

            $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'devo_button_color', array(
                'label'   => esc_html__( 'Button color', 'theme' ),
                'section' => 'colors',
                'settings'   => 'devo_button_color'
            ) ) );





        
        
        
      
        


}

  add_action( 'customize_register', 'devo_color_customizer' );


// Output the custom CSS

function devo_customize_color_css(){
    ?>
    <style type="text/css">
        .site-blog p{
            color: <?php echo get_theme_mod( 'devo_text_color' ); ?> !important;
        }

        .btn-primary, .site-blog .btn{
            background-color: <?php echo get_theme_mod( 'devo_button_color' ); ?> !important;
        }


    </style>


    <?php


add_action( 'wp_head', 'devo_customize_color_css' );
    }

?>