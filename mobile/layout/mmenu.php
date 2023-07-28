<div class="logo-mmenu">
    <div class="row align-items-center justify-content-center">
        <div class="banner_left">
            <a class="logo-header" href="">
                <?= $func->getImage(['class' => '', 'sizes' => '80x80x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?>
            </a>
        </div>
    </div>
</div>

<div class="menu-res">
    <div class="menu-bar-res">
        <a id="hamburger" href="#menu" title="Menu"><span></span></a>
        <!-- <div class="search-res">
            <p class="icon-search transition"><i class="fa fa-search"></i></p>
            <div class="search-grid w-clear">
                <input type="text" name="keyword-res" id="keyword-res" placeholder="<?= nhaptukhoatimkiem ?>" onkeypress="doEnter(event,'keyword-res');" />
                <p onclick="onSearch('keyword-res');"><i class="fa fa-search"></i></p>
            </div>
        </div> -->
    </div>
    <nav id="menu">
        <ul>
            <li>
                <a class="<?php if ($com == '' || $com == 'index') echo 'active'; ?> transition" href="index" title="<?= trangchu ?>">
                    Trang chủ
                </a>
            </li>
            <li>
                <a class="<?php if ($com == '' || $com == 'the-manh') echo 'active'; ?> transition" href="the-manh" title="Thế mạnh">
                    Thế mạnh của chúng tôi
                </a>
            </li>
            <li>
                <a class="<?php if ($com == '' || $com == 'gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu" title="Giới thiệu">
                    Giới thiệu
                </a>
            </li>
            <li>
                <a class="<?php if ($com == 'san-pham') echo 'active'; ?> transition" href="san-pham" title="Sản phẩm">
                    Sản phẩm
                </a>
                <?php if (count($splist)) { ?>
                    <ul>
                        <?php foreach ($splist as $klist => $vlist) {
                            $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                            <li>
                                <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                <?php if (!empty($spcat)) { ?>
                                    <ul>
                                        <?php foreach ($spcat as $kcat => $vcat) {
                                            $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                                            <li>
                                                <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                                <?php if (!empty($spitem)) { ?>
                                                    <ul>
                                                        <?php foreach ($spitem as $kitem => $vitem) {
                                                            $spsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id'])); ?>
                                                            <li>
                                                                <a class="has-child transition" title="<?= $vitem['name' . $lang] ?>" href="<?= $vitem[$sluglang] ?>"><?= $vitem['name' . $lang] ?></a>
                                                                <?php if (!empty($spsub)) { ?>
                                                                    <ul>
                                                                        <?php foreach ($spsub as $ksub => $vsub) { ?>
                                                                            <li>
                                                                                <a class="transition" title="<?= $vsub['name' . $lang] ?>" href="<?= $vsub[$sluglang] ?>"><?= $vsub['name' . $lang] ?></a>
                                                                            </li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                <?php } ?>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                <?php } ?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>


            <li>
                <a class="<?php if ($com == 'dai-ly') echo 'active'; ?> transition" href="dai-ly" title="Đại lý">
                    Đại lý
                </a>
            </li>

            <li>
                <a class="<?php if ($com == 'tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="Tin tức">
                    Tin tức
                </a>
            </li>

            <li>
                <a class="<?php if ($com == 'kien-thuc') echo 'active'; ?> transition" href="kien-thuc" title="Kiến thức">
                    Kiến thức
                </a>
            </li>

            <li>
                <a class="<?php if ($com == 'lien-he') echo 'active'; ?> transition" href="lien-he" title="Liên hệ">
                    Liên hệ
                </a>
            </li>
            <!-- 
            <li>
                <div class="search-res">
                    <p class="icon-search transition">
                        <i class="fas fa-search"></i>
                    </p>
                    <div class="search-grid w-clear">
                        <input type="text" id="keyword" placeholder="<?= nhaptukhoatimkiem ?>" onkeypress="doEnter(event,'keyword');" />
                        <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
                    </div>
                </div>
            </li> -->
        </ul>
    </nav>
</div>