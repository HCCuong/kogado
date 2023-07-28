<div class="footer-article">
    <div class="footer">
        <div class="wrap-content">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div>
                        <div class="logo-footer">
                            <a class="logo-header" href="trang-chu">
                                <?= $func->getImage(['class' => '', 'sizes' => '308x99x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $logoft['photo'], 'alt' => $setting['name' . $lang]]) ?>
                            </a>
                        </div>
                        <div class="footer-title">Trụ sở chính</div>
                        <div class="infor-ft">
                            <p><i class="fa-sharp fa-solid fa-location-dot"></i> <?= $optsetting['address'] ?></p>
                            <p><i class="fa-solid fa-phone"></i> Hotline: <?= $optsetting['phone'] ?></p>
                            <p><i class="fa-sharp fa-regular fa-envelope"></i> Email: <?= $optsetting['email'] ?></p>
                        </div>

                        <div class="footer-title">Đăng ký nhận tin</div>
                        <div class="footer_booking">
                            <form class="form-newsletter validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
                                <div class="col_booking">
                                    <div class="box-submit">
                                        <input type="email" class="form-control form-email t w-100 text-sm" id="email-newsletter" name="dataNewsletter[email]" placeholder="Email (*)" required />
                                        <button type="submit" class="btn btn-sm btn-submit" name="submit-newsletter">
                                            <i class="fa-regular fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="footer-copyright">
                            <p>Copyright @ 2023 Kogado . Designed by </p>
                        </div>
                    </div>
                </div>
                <div class="div-fanpage col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="fanpage">
                        <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 2); ?>
                    </div>
                </div>
                <div class="div-social-ft col-lg-2 col-md-6 col-sm-12 col-12">
                    <?php if (!empty($socialft)) { ?>
                        <div class="social-footer">
                            <?php foreach ($socialft as $key => $v) { ?>
                                <div>
                                    <a class="d-block" href="<?= $v["link"] ?>" title="<?= $v["name" . $lang] ?>">
                                        <?= $func->getImage(['class' => '', 'sizes' => '42x42x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v["photo"], 'alt' => $v["name" . $lang]]) ?>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
</div>


<?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>

<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>
<?php if ($deviceType == 'mobile') { ?>
    <div class="toolbar">
        <ul>
            <li>
                <a id="goidien" href="tel:<?= $func->parsePhone($optsetting['hotline']) ?>" title="title">
                    <?= $func->getImage(['size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'icon-t1.png', 'alt' => 'Phone']) ?><br>
                    <span>Gọi điện</span>
                </a>
            </li>
            <li>
                <a id="nhantin" href="sms:<?= $func->parsePhone($optsetting['hotline']) ?>" title="title">
                    <?= $func->getImage(['size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'icon-t2.png', 'alt' => 'Message']) ?><br>
                    <span>Nhắn tin</span>
                </a>
            </li>
            <li>
                <a id="chatzalo" href="https://zalo.me/<?= $func->parsePhone($optsetting['zalo']) ?>" title="title">
                    <?= $func->getImage(['size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'icon-t3.png', 'alt' => 'Zalo']) ?><br>
                    <span>Chat zalo</span>
                </a>
            </li>
            <li>
                <a id="chatfb" href="<?= $optsetting['fanpage'] ?>" title="title">
                    <?= $func->getImage(['size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'icon-t4.png', 'alt' => 'Facebook']) ?><br>
                    <span>Chat facebook</span>
                </a>
            </li>
        </ul>
    </div>
<?php } ?>