<div class="title-main2"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
<div class="content-main row">
    <?php if (!empty($news)) {
        foreach ($news as $k => $v) { ?>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
                <div class="item-news2 row">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-6 img-news effect-1">
                        <?= $func->getImage(['class' => '', 'sizes' => '280x220x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-6 info-news">
                        <div class="name-news">
                            <a class="text-split" href="<?= $v['slug' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                        </div>
                        <div class="desc-news">
                            <span class="text-split"><?= $v['desc' . $lang] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
    } else { ?>
        <div class="col-12">
            <div class="alert alert-warning w-100" role="alert">
                <strong><?= khongtimthayketqua ?></strong>
            </div>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
    </div>
</div>