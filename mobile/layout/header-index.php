<div class="header-bottom">
    <div class="wrap-content">
        <div class="logo-header d-flex justify-content-center">
            <a class="effect-1 img-header" href="">
                <?= $func->getImage(['class' => '', 'sizes' => '246x86x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?>
            </a>
        </div>
        <div class="res-none banner_right">
            <?php include TEMPLATE . LAYOUT . "menu.php"; ?>
        </div>
    </div>
</div>