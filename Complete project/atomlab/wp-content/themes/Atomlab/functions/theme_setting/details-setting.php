<?php
$wp_customize->add_panel(
        "panel_header" , 
        [
            "title" => __("تنظیمات هدر") ,
            "description" => esc_html__("در این بخش میتوانید هدر را مدیریت کنید") ,
            "description_hidden" => true ,
        ]
    );
$wp_customize->add_section(
    'header_section' ,
    [
        "title" => __("بخش اطلاعات") ,
        "description" => esc_html__("در این بخش میتوانید هدر را مدیریت کنید") ,
        "description_hidden" => true ,
        'panel' => 'panel_header'
    ]
);

for($i = 1 ; $i < 4 ; $i++) {
    $wp_customize->add_setting(
        "headers[$i][icon]",
        array(
            'default' => "",
            'transport' => 'refresh' ,
            'sanitize_callback' => '' 
        )
    );
    $wp_customize->add_control(
        "headers[$i][icon]",
        array(
            "label" => __("آیکون ($i)"),
            "section" => "header_section" ,
            "type" => "text" ,
            "input_attrs" => array(
                'style' => '    border: 1px solid #d3d3d5;border-radius: 6px;height: 35px;',
                'placeholder' => __('آیکون را وارد کنید'),
            ) ,
        )
    );
    $wp_customize->add_setting(
        "headers[$i][text]",
        array(
            'default' => "",
            'transport' => 'refresh' ,
            'sanitize_callback' => '' 
        )
    );
    $wp_customize->add_control(
        "headers[$i][text]",
        array(
            "label" =>__("متن ($i)"),
            "section" => "header_section" ,
            "type" => "text" ,
            "input_attrs" => array(
                'style' => '    border: 1px solid #d3d3d5;border-radius: 6px;height: 35px;',
                'placeholder' => __('متن را وارد کنید'),
            ) ,
        )
    );

}
?>