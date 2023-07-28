<div class="slide-header">
	<div class="fp-overflow" tabindex="-1">
		<?php if (!empty($bannerVideo)) { ?>
			<div class="slide-content">
				<div class="wrap-content d-flex justify-content-start">
					<div class="content-sl">
						<div class="mb-4">
							<a class="logo-header" href="trang-chu">
								<?= $func->getImage(['class' => '', 'sizes' => '308x99x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $logoft['photo'], 'alt' => $setting['name' . $lang]]) ?>
							</a>
						</div>
						<span class="text-split"><?= $bannerVideo["desc" . $lang] ?></span>
					</div>
				</div>
			</div>
		<?php } ?>
		<?php if (!empty($bannerVideo)) { ?>
			<div class="video-banner">
				<video width="100%" height="700px" loop="true" autoplay="true" playinline muted>
					<source src="<?= UPLOAD_PHOTO_L . $bannerVideo['photo'] ?>" type="video/mp4">
				</video>
			</div>
		<?php } ?>
	</div>
</div>

<?php if (!empty($about)) { ?>
	<div class="wrap-about">
		<div class="fp-overflow" tabindex="-1">
			<div class="wrap-content">
				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12 col-12">
						<div class="about-left">
							<div class="img-about-right">
								<a href="gioi-thieu">
									<span class="scale-img effect-1">
										<?= $func->getImage(['class' => 'w-100', 'sizes' => '608x450x2', 'upload' => UPLOAD_NEWS_L, 'image' => $about["photo"], 'alt' => $about["name" . $lang]]) ?>
									</span>
								</a>
							</div>
						</div>

					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-12">
						<div class="about-right">
							<div class="about-content">
								<div class="title-about">
									<span><?= $about["name" . $lang] ?></span>
								</div>
								<div>
									<?= $func->getImage(['class' => '', 'sizes' => '246x86x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?>
								</div>
								<div class="desc-about text-split">
									<?= $about["desc" . $lang] ?>
								</div>
								<div class="more-about">
									<a href="gioi-thieu">
										Xem thêm &nbsp;<i class="fa-sharp fa-solid fa-arrow-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php if (!empty($themanh)) { ?>
	<div class="wrap-themanh-sm">
		<div class="wrap-content">
			<div class="title-main2">
				<span>Thế mạnh của chúng tôi</span>
			</div>
			<div class="slide-themanh-sm">
				<?php foreach ($themanh as $v) { ?>
					<div class="themanh-sm">
						<div class="themanh-sm-img">
							<?= $func->getImage(['class' => 'w-100', 'sizes' => '280x280x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
						</div>
						<div class="themanh-sm-content">
							<div class="themanh-title">
								<span><?= $v["name" . $lang] ?></span>
							</div>
							<div class="themanh-sm-desc">
								<p class="text-split"><?= $v["desc" . $lang] ?></p>
							</div>
							<div class="themanh-more">
								<a href="<?= $v["slug" . $lang] ?>">Xem thêm</a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } ?>

<?php if (!empty($splistnb)) {
	$i = 1; ?>
	<div class="wrap-cate section fp-section" data-fb-styles="null">
		<div class="fp-overflow" tabindex="-1">
			<div class="wrap-content">
				<div class="title-main">
					<span>Các dòng sản phẩm</span>
				</div>
				<div class="div-cate">
					<div class="cate-item cate-first">
						<a href="<?= $splistnb[0]['slug' . $lang] ?>"><?= $func->getImage(['class' => 'w-100', 'sizes' => '390x576x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $splistnb[0]['photo'], 'alt' => $splistnb[0]['name' . $lang]]) ?></a>
						<div class="cate-name">
							<a href="<?= $splistnb[0]['slug' . $lang] ?>"><?= $splistnb[0]['name' . $lang] ?></a>
						</div>
					</div>
					<?php while ($i <= 3) { ?>
						<div class="cate-item">
							<a href="<?= $splistnb[$i]['slug' . $lang] ?>"><?= $func->getImage(['class' => 'w-100', 'sizes' => '390x280x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $splistnb[$i]['photo'], 'alt' => $splistnb[$i]['name' . $lang]]) ?></a>
							<div class="cate-name">
								<a href="<?= $splistnb[$i]['slug' . $lang] ?>"><?= $splistnb[$i]['name' . $lang] ?></a>
							</div>
						</div>
					<?php $i += 1;
					} ?>
					<div class="cate-item5">
						<div class="cate-name">
							<a href="san-pham">Tất cả sản phẩm</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>



<?php if (!empty($news)) { ?>
	<div class="wrap-news">
		<div class="fp-overflow" tabindex="-1">
			<div class="wrap-content">
				<div class="title-main">
					<span>Tin Tức & Hiểu Biết</span>
				</div>
				<div class="div-news">
					<div class="slide-news1">
						<?php foreach ($news as $key => $v) { ?>
							<div>
								<div class="item-news1 row">
									<div class="col-5 img-news effect-1">
										<?= $func->getImage(['class' => 'w-100', 'sizes' => '480x320x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
									</div>
									<div class="col-7 info-news">
										<div class="name-news">
											<a class="text-split" href="<?= $v['slug' . $lang] ?>"><?= $v['name' . $lang] ?></a>
										</div>

										<div class="desc-news">
											<span class="text-split"><?= $v['desc' . $lang] ?></span>
										</div>

										<div class="news-more">
											<a href="<?= $v['slug' . $lang] ?>">Xem thêm</a>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="slide-news2">
						<?php foreach ($news as $key => $v) { ?>
							<div>
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
						<?php } ?>
					</div>
				</div>
			</div>

		</div>
	</div>
<?php } ?>


<div class="footer-article footer_index">
	<div class="fp-overflow" tabindex="-1">
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