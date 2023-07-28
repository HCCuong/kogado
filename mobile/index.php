<!DOCTYPE html>
<html lang="<?= $config['website']['lang-doc'] ?>">

<head>
    <?php include TEMPLATE . LAYOUT . "head.php"; ?>
    <?php include TEMPLATE . LAYOUT . "css.php"; ?>
</head>

<body>
    <div class="container_s">
        <?php if ($source == 'index' || $source == '') { ?>
            <?php include TEMPLATE . LAYOUT . "seo.php";
            include TEMPLATE . LAYOUT . "header-index.php";
            include TEMPLATE . LAYOUT . "mmenu.php";
            ?>
            <div class="wrap-main wrap-home w-clear">
                <?php include './templates/index/index_tpl.php'; ?>
            </div>
            <?php
            include TEMPLATE . LAYOUT . "modal.php";
            include TEMPLATE . LAYOUT . "js.php";
            ?>
        <?php } else { ?>
            <?php
            include TEMPLATE . LAYOUT . "seo.php";
            include TEMPLATE . LAYOUT . "header.php";
            include TEMPLATE . LAYOUT . "mmenu.php";
            include TEMPLATE . LAYOUT . "breadcrumb.php";
            ?>
            <div class="wrap-main w-clear">
                <?php include TEMPLATE . $template . "_tpl.php"; ?>
            </div>
            <?php
            include TEMPLATE . LAYOUT . "footer.php";
            include TEMPLATE . LAYOUT . "modal.php";
            include TEMPLATE . LAYOUT . "js.php"; ?>
        <?php } ?>
    </div>
</body>

</html>