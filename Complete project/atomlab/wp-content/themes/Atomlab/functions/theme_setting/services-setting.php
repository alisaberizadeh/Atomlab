<?php 
$wp_customize->add_section(
    'services_section' ,
    [
        "title" => __("تنظیمات بخش خدمات") ,
        "description" => esc_html__("در این بخش میتوانید بخش خدمات را مدیریت کنید") ,
        "description_hidden" => true ,
    ]
);

for($i = 1 ; $i <=4  ; $i++){
    $wp_customize->add_setting(
        "servicess[$i][img]" ,
        array(
            'default' => "",
            'transport' => 'refresh' ,
        )
    );
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        "servicess[$i][img]" ,
        array(
            'label' => __("تصویر باکس $i"),
            'section' => 'services_section', 
            'button_labels' => array( 
                'select' => __('انتخاب تصویر'),
                'change' => __('تغییر تصویر'),
                'remove' => __('حذف'),
                'default' => __('پیش فرض'),
                'placeholder' => __('تصویری انتخاب نشده است'),
                'frame_title' => __('انتخاب تصویر'),
                'frame_button' => __('انتخاب تصویر'),
            )
        )
    ));
    $wp_customize->add_setting(
        "servicess[$i][title]" ,
        array(
            'default' => "",
            'transport' => 'refresh' ,
        )
    );

    $wp_customize->add_control(
        "servicess[$i][title]" ,
        array(
            "label" => __("عنوان باکس $i") ,
            "section" => "services_section" ,
            "type" => "text" ,
            "input_attrs" => array(
                'style' => '    border: 1px solid #d3d3d5;border-radius: 6px;height: 35px;',
                'placeholder' => __('عنوان را وارد کنید'),
            ) 
        )
    );

    $wp_customize->add_setting(
        "servicess[$i][desc]" ,
        array(
            'default' => "",
            'transport' => 'refresh' ,
        )
    );
    $wp_customize->add_control(
        "servicess[$i][desc]" ,
        array(
            "label" => __("توضیحات باکس $i") ,
            "section" => "services_section" ,
            "type" => "textarea" ,
            "input_attrs" => array(
                'style' => '    border: 1px solid #d3d3d5;border-radius: 6px;',
                'placeholder' => __('توضیحات را وارد کنید'),
            ) 
        )
    );
}
?>