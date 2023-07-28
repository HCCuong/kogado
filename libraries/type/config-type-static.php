<?php
/* Giới thiệu */
$nametype = "gioi-thieu";
$config['static'][$nametype]['title_main'] = "Giới thiệu";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['images'] = true;
$config['static'][$nametype]['file'] = false;
$config['static'][$nametype]['name'] = true;
$config['static'][$nametype]['desc'] = true;
$config['static'][$nametype]['desc_cke'] = false;
$config['static'][$nametype]['content'] = true;
$config['static'][$nametype]['content_cke'] = true;
$config['static'][$nametype]['seo'] = true;
$config['static'][$nametype]['width'] = 578;
$config['static'][$nametype]['height'] = 452;
$config['static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
$config['static'][$nametype]['file_type'] = '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.xls|.xlsx|.jpg|.png|.gif';

$nametype = "the-manh";
$config['static'][$nametype]['title_main'] = "Thế mạnh của chúng tôi";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['images'] = true;
$config['static'][$nametype]['file'] = false;
$config['static'][$nametype]['name'] = true;
$config['static'][$nametype]['desc'] = true;
$config['static'][$nametype]['desc_cke'] = false;
$config['static'][$nametype]['content'] = true;
$config['static'][$nametype]['content_cke'] = true;
$config['static'][$nametype]['seo'] = true;
$config['static'][$nametype]['gallery'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh về thế mạnh",
        "title_sub_photo" => "Hình ảnh",
        "check_photo" => array("hienthi" => "Hiển thị"),
        "number_photo" => 3,
        "images_photo" => true,
        "avatar_photo" => true,
        "name_photo" => true,
        "width_photo" => 286 * 3,
        "height_photo" => 362 * 3,
        "thumb_photo" => '100x100x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
    )
);
$config['static'][$nametype]['width'] = 578;
$config['static'][$nametype]['height'] = 452;
$config['static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
$config['static'][$nametype]['file_type'] = '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.xls|.xlsx|.jpg|.png|.gif';

/* Giới thiệu sản phẩm */
$nametype = "hotline-ho-tro";
$config['static'][$nametype]['title_main'] = "Hotline hỗ trợ";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['images'] = false;
$config['static'][$nametype]['file'] = false;
$config['static'][$nametype]['name'] = false;
$config['static'][$nametype]['desc'] = true;
$config['static'][$nametype]['desc_cke'] = true;
$config['static'][$nametype]['content'] = false;
$config['static'][$nametype]['content_cke'] = false;
$config['static'][$nametype]['seo'] = false;
$config['static'][$nametype]['width'] = 300;
$config['static'][$nametype]['height'] = 200;
$config['static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
$config['static'][$nametype]['file_type'] = '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.xls|.xlsx|.jpg|.png|.gif';

/* Slogan */
$nametype = "slogan";
$config['static'][$nametype]['title_main'] = "Slogan";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['name'] = true;

/* Liên hệ */
$nametype = "lienhe";
$config['static'][$nametype]['title_main'] = "Liên hệ";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['content'] = true;
$config['static'][$nametype]['content_cke'] = true;

/* Footer */
$nametype = "footer";
$config['static'][$nametype]['title_main'] = "Footer";
$config['static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['static'][$nametype]['name'] = true;
$config['static'][$nametype]['content'] = true;
$config['static'][$nametype]['content_cke'] = true;
