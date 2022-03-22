<?php 
$wp_customize->add_section(
    'header_colors_section' ,
    [
        "title" => __("رنگبندی") ,
        "description" => esc_html__("در این بخش میتوانید رنگ بندی هدر راانتخاب کنید") ,
        "description_hidden" => true ,
    ]
);

$wp_customize->add_setting(
    "body_bg" ,
        array(
            'default' => "",
            'transport' => 'refresh' ,
        )
);
$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
    $wp_customize, 
    'body_bg', 
    array(
        'label' => __( 'رنگ زمينه  ' ),
        "description" => esc_html__("در این بخش میتوانید رنگ زمينه را انتخاب کنید") ,
        'section'    => 'header_colors_section',
    ) ) 
);

$wp_customize->add_setting(
    "nav_menu_bg" ,
        array(
            'default' => "",
            'transport' => 'refresh' ,
        )
);
$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
    $wp_customize, 
    'nav_menu_bg', 
    array(
        'label' => __( 'رنگ زمينه منو' ),
        "description" => esc_html__("در این بخش میتوانید رنگ زمينه منو را انتخاب کنید") ,
        'section'    => 'header_colors_section',
    ) ) 
);

$wp_customize->add_setting(
    "menu_li_color" ,
        array(
            'default' => "",
            'transport' => 'refresh' ,
        )
);
$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
    $wp_customize, 
    'menu_li_color', 
    array(
        'label' => __( '  رنگ آيتم هاي منو' ),
        "description" => esc_html__("در این بخش میتوانید رنگ  گزينه هاي منو را انتخاب کنید") ,
        'section'    => 'header_colors_section',
    ) ) 
);
$wp_customize->add_setting(
    "footer_bg" ,
        array(
            'default' => "",
            'transport' => 'refresh' ,
        )
);
$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
    $wp_customize, 
    'footer_bg', 
    array(
        'label' => __( 'رنگ زمینه فوتر' ),
        "description" => esc_html__("در این بخش میتوانید رنگ فوتر را انتخاب کنید") ,
        'section'    => 'header_colors_section',
    ) ) 
);

$wp_customize->add_setting(
    "btn_bg" ,
        array(
            'default' => "",
            'transport' => 'refresh' ,
        )
);
$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
    $wp_customize, 
    'btn_bg', 
    array(
        'label' => __( 'رنگ دکمه ها' ),
        "description" => esc_html__("در این بخش میتوانید رنگ دکمه ها را انتخاب کنید") ,
        'section'    => 'header_colors_section',
    ) ) 
);
$wp_customize->add_setting(
    "base_color" ,
        array(
            'default' => "",
            'transport' => 'refresh' ,
        )
);

$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
    $wp_customize, 
    'base_color', 
    array(
        'label' => __( 'رنگ پایه' ),
        "description" => esc_html__("در این بخش میتوانید رنگ پایه را انتخاب کنید") ,
        'section'    => 'header_colors_section',
    ) ) 
);
?>