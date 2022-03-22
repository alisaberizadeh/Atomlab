<?php 
   $wp_customize->add_section(
    'header_base_section' ,
    [
        "title" => __("بخش مرکزی") ,
        "description" => esc_html__("در این بخش میتوانید هدر را مدیریت کنید") ,
        "description_hidden" => true ,
        'panel' => 'panel_header'
    ]
);
$wp_customize->add_setting(
    "top_wwarp_image" ,
    array(
        'default' => "",
        'transport' => 'refresh' ,
    )
);
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    "top_wwarp_image" ,
    array(
        'label' => __("تصویر "),
        'section' => 'header_base_section', 
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
    "text_big" ,
        array(
            'default' => "",
            'transport' => 'refresh' ,
        )
);
$wp_customize->get_setting( 'text_big' )->transport = 'postMessage';

$wp_customize->add_control(
    "text_big" ,
    array(
        "label" => _("عنوان") ,
        "description" => esc_html__("عنوان مناسب این بخش را وارد کنید") ,
        "section" => "header_base_section",
        "type" => "text" ,
        "input_attrs" => array(
            'style' => '    border: 1px solid #d3d3d5;border-radius: 6px;',
            'placeholder' => __('عنوان را وارد کنید'),
        ) 
    )
);

$wp_customize->add_setting(
    "text_small" ,
        array(
            'default' => "",
            'transport' => 'refresh' ,
        )
);
$wp_customize->add_control(
    "text_small" ,
    array(
        "label" =>_("توضیحات") ,
        "description" => esc_html__("متن مناسب این بخش را وارد کنید") ,
        "section" => "header_base_section",
        "type" => "textarea" ,
        "input_attrs" => array(
            'style' => '    border: 1px solid #d3d3d5;border-radius: 6px;',
            'placeholder' => __('متن را وارد کنید'),
        ) 
    )
);
?>