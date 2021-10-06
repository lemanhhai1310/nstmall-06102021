<?php $data["title"] = "Trang chủ"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Banner-->
<div class="uk-section-xsmall home__banner">
    <div class="uk-container uk-padding-remove">
        <div class="home__margin20">
            <div>
                <div class="uk-grid-small uk-grid-30-m uk-grid-match" uk-grid>
                    <div class="uk-width-expand">
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow>

                            <ul class="uk-slideshow-items">
                                <li>
                                    <img src="images/slider_1.jpeg" alt="" uk-cover>
                                    <a href="#" class="uk-position-cover"></a>
                                </li>
                                <li>
                                    <img src="images/photo.jpg" alt="" uk-cover>
                                    <a href="" class="uk-position-cover"></a>
                                </li>
                                <li>
                                    <img src="images/dark.jpg" alt="" uk-cover>
                                    <a href="" class="uk-position-cover"></a>
                                </li>
                                <li>
                                    <img src="images/light.jpg" alt="" uk-cover>
                                    <a href="" class="uk-position-cover"></a>
                                </li>
                            </ul>

                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                        </div>
                    </div>
                    <div class="uk-width-2-5@m uk-visible@m">
                        <div class="uk-grid-small uk-grid-30-m uk-grid-match" uk-grid>
                            <div class="uk-width-1-2@m">
                                <div class="uk-cover-container uk-border-rounded">
                                    <img src="images/b1.jpeg" alt="" uk-cover>
                                    <canvas width="268" height="426"></canvas>
                                    <a href="#" class="uk-position-cover"></a>
                                </div>
                            </div>
                            <div class="uk-width-1-2@m">
                                <div class="uk-grid-small uk-grid-30-m uk-grid-match" uk-grid>
                                    <div class="uk-width-1-1">
                                        <div class="uk-cover-container uk-border-rounded">
                                            <img src="images/b2.jpeg" alt="" uk-cover>
                                            <canvas width="268" height="198"></canvas>
                                            <a href="#" class="uk-position-cover"></a>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="uk-cover-container uk-border-rounded">
                                            <img src="images/b3.jpeg" alt="" uk-cover>
                                            <canvas width="268" height="198"></canvas>
                                            <a href="#" class="uk-position-cover"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-grid-collapse uk-grid-match uk-flex-nowrap uk-overflow-auto uk-child-width-auto uk-child-width-expand@m" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/imgcs_1.png',
                            'txt' => 'Miễn phí giao hàng <br/> Bán kính 20km',
                        ),
                        array(
                            'src' => 'images/imgcs_2.png',
                            'txt' => 'Thanh toán an toàn, <br/> 100% được đảm bảo',
                        ),
                        array(
                            'src' => 'images/imgcs_3.png',
                            'txt' => 'Giới thiệu khách hàng <br/> nhận quà liền tay',
                        ),
                        array(
                            'src' => 'images/imgcs_4.png',
                            'txt' => 'Hỗ trợ 24/7 <br/> Nhân viên nhiệt tình',
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                    <div class="">
                        <div class="home__banner__box1__item uk-padding-small">
                            <div class="uk-flex-middle uk-grid-10" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="home__banner__box1__img">
                                        <img class="uk-responsive-height uk-responsive-width" src="<?= $v['src'] ?>" alt="">
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="home__banner__box1__txt"><?= $v['txt'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="uk-visible@m">
                <div class="uk-grid-small uk-grid-30-m uk-grid-match" uk-grid>
                    <div class="uk-width-1-4@m">
                        <div class="uk-cover-container uk-border-rounded">
                            <img src="images/bl1.jpeg" alt="" uk-cover>
                            <canvas width="327" height="185"></canvas>
                            <a href="#" class="uk-position-cover"></a>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="uk-cover-container uk-border-rounded">
                            <img src="images/bl2.jpeg" alt="" uk-cover>
                            <canvas width="685" height="185"></canvas>
                            <a href="#" class="uk-position-cover"></a>
                        </div>
                    </div>
                    <div class="uk-width-1-4@m">
                        <div class="uk-cover-container uk-border-rounded">
                            <img src="images/bl3.jpeg" alt="" uk-cover>
                            <canvas width="327" height="185"></canvas>
                            <a href="#" class="uk-position-cover"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Banner-->

<!--Content-->
<?php
$dataproduct = array(
    array(
        'src' => 'images/product/img1.webp',
        'title' => 'Android Tivi Sony 49 inch 4K',
        'price' => '8,000,000₫',
        'price-old' => '9,000,000₫',
        'sale' => true,
        'desc' => 'Android Tivi 4K Sony 43 inch KD-43X8000E sẽ không làm bạn thất vọng với vẻ ngoài tinh tế trong từ...'
    ),
    array(
        'src' => 'images/product/img2.webp',
        'title' => 'Apple iMac 2017 MNE92 27',
        'price' => '46,000,000₫',
        'price-old' => '',
        'sale' => false,
        'desc' => 'Android Tivi 4K Sony 43 inch KD-43X8000E sẽ không làm bạn thất vọng với vẻ ngoài tinh tế trong từ...'
    ),
    array(
        'src' => 'images/product/img3.webp',
        'title' => 'Android Tivi Sony 49 inch 4K',
        'price' => '8,000,000₫',
        'price-old' => '9,000,000₫',
        'sale' => true,
        'desc' => 'Android Tivi 4K Sony 43 inch KD-43X8000E sẽ không làm bạn thất vọng với vẻ ngoài tinh tế trong từ...'
    ),
    array(
        'src' => 'images/product/img1.webp',
        'title' => 'Android Tivi Sony 49 inch 4K',
        'price' => '8,000,000₫',
        'price-old' => '9,000,000₫',
        'sale' => true,
        'desc' => 'Android Tivi 4K Sony 43 inch KD-43X8000E sẽ không làm bạn thất vọng với vẻ ngoài tinh tế trong từ...'
    ),
    array(
        'src' => 'images/product/img1.webp',
        'title' => 'Android Tivi Sony 49 inch 4K',
        'price' => '8,000,000₫',
        'price-old' => '9,000,000₫',
        'sale' => true,
        'desc' => 'Android Tivi 4K Sony 43 inch KD-43X8000E sẽ không làm bạn thất vọng với vẻ ngoài tinh tế trong từ...'
    ),
    array(
        'src' => 'images/product/img1.webp',
        'title' => 'Android Tivi Sony 49 inch 4K',
        'price' => '8,000,000₫',
        'price-old' => '9,000,000₫',
        'sale' => true,
        'desc' => 'Android Tivi 4K Sony 43 inch KD-43X8000E sẽ không làm bạn thất vọng với vẻ ngoài tinh tế trong từ...'
    ),
    array(
        'src' => 'images/product/img1.webp',
        'title' => 'Android Tivi Sony 49 inch 4K',
        'price' => '8,000,000₫',
        'price-old' => '9,000,000₫',
        'sale' => false,
        'desc' => 'Android Tivi 4K Sony 43 inch KD-43X8000E sẽ không làm bạn thất vọng với vẻ ngoài tinh tế trong từ...'
    ),
    array(
        'src' => 'images/product/img1.webp',
        'title' => 'Android Tivi Sony 49 inch 4K',
        'price' => '8,000,000₫',
        'price-old' => '9,000,000₫',
        'sale' => false,
        'desc' => 'Android Tivi 4K Sony 43 inch KD-43X8000E sẽ không làm bạn thất vọng với vẻ ngoài tinh tế trong từ...'
    ),
    array(
        'src' => 'images/product/img1.webp',
        'title' => 'Android Tivi Sony 49 inch 4K',
        'price' => '8,000,000₫',
        'price-old' => '9,000,000₫',
        'sale' => true,
        'desc' => 'Android Tivi 4K Sony 43 inch KD-43X8000E sẽ không làm bạn thất vọng với vẻ ngoài tinh tế trong từ...'
    ),
    array(
        'src' => 'images/product/img1.webp',
        'title' => 'Android Tivi Sony 49 inch 4K',
        'price' => '8,000,000₫',
        'price-old' => '9,000,000₫',
        'sale' => true,
        'desc' => 'Android Tivi 4K Sony 43 inch KD-43X8000E sẽ không làm bạn thất vọng với vẻ ngoài tinh tế trong từ...'
    ),
);
?>
<div class="uk-section-xsmall home__content">
    <!--Danh muc-->
    <div class="home__content__margin30">
        <div class="home__content__margin20s">
            <div>
                <div class="uk-container uk-padding-remove">
                    <div class="uk-background-default home__content__catalog__card">
                        <div uk-slider="finite: true">

                            <div class="uk-position-relative">

                                <div class="uk-slider-container">
                                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l uk-grid-match uk-grid-collapse" uk-grid>
                                <?php
                                $data = array(
                                    array(
                                        'src' => 'https://file.hstatic.net/200000283825/collection/dientu_529a2b0eab674922bd71ca99d0576272_thumb.jpg',
                                        'txt' => 'Điện tử',
                                    ),
                                    array(
                                        'src' => 'https://file.hstatic.net/200000283825/collection/dienlanh_9e9a32ea08ea4cebb444de817499f34d_thumb.jpg',
                                        'txt' => 'Điện lạnh',
                                    ),
                                    array(
                                        'src' => 'https://file.hstatic.net/200000283825/collection/router_2180ce98a8ed423c9779b5eb048d927a_thumb.jpg',
                                        'txt' => 'Thiết bị ngoại vi',
                                    ),
                                    array(
                                        'src' => 'https://file.hstatic.net/200000283825/collection/pkdienmay_cd0136a7da9e4f4ca11df1c71e56a9f5_thumb.jpg',
                                        'txt' => 'Phụ kiện điện máy',
                                    ),
                                    array(
                                        'src' => 'https://file.hstatic.net/200000283825/collection/pkso_9ce19462c6cf401788bfe6bc24d2a828_thumb.jpg',
                                        'txt' => 'Phụ kiện số',
                                    ),
                                    array(
                                        'src' => 'https://file.hstatic.net/200000283825/collection/kythuatso_2b804809f83d4dbca6bfa147c39817b9_thumb.jpg',
                                        'txt' => 'Kĩ thuật số',
                                    ),
                                    array(
                                        'src' => 'https://file.hstatic.net/200000283825/collection/diong_c65b47c87d1146bdb164fbe1cc7de5eb_thumb.jpg',
                                        'txt' => 'Điện thoại & Tablet',
                                    ),
                                    array(
                                        'src' => 'https://file.hstatic.net/200000283825/collection/tinhoc_d52cfa6aaafa4cbab44a4dfb7aeb81ca_thumb.jpg',
                                        'txt' => 'Thiết bị tin học',
                                    ),
                                    array(
                                        'src' => 'https://file.hstatic.net/200000283825/collection/amthanh_584000807bc94aa1a15a23dcb719675a_thumb.jpg',
                                        'txt' => 'Âm thanh',
                                    ),
                                    array(
                                        'src' => 'https://file.hstatic.net/200000283825/collection/giadung_804108648dcf44baba660bef8a8dedbf_thumb.jpg',
                                        'txt' => 'Đồ gia dụng',
                                    ),
                                    array(
                                        'src' => 'https://theme.hstatic.net/200000283825/1000676391/14/logo.png?v=27',
                                        'txt' => 'Thiết bị nhà bếp',
                                    ),
                                    array(
                                        'src' => 'https://file.hstatic.net/200000283825/collection/pkkhac_b5a1381e858940d5b58594cae0c3852f_thumb.jpg',
                                        'txt' => 'Phụ kiện khác',
                                    ),
                                );
                                foreach ($data as $k=>$v): ?>
                                <?php if ($k%2==0): ?>
                                <li>
                                    <div class="uk-grid-collapse uk-grid-match uk-child-width-1-1 uk-flex-column" uk-grid>
                                        <div class="uk-flex-1">
                                            <div class="home__content__catalog__item uk-padding-small" uk-toggle="cls: uk-box-shadow-hover-small; mode: media; media: @m">
                                                <div class="uk-flex-middle uk-grid-small" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <div class="home__content__catalog__item__img">
                                                            <img class="uk-responsive-width" src="<?= $v['src'] ?>" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <h5 class="uk-h5 home__content__catalog__item__title"><a href=""><?= $v['txt'] ?></a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php else: ?>
                                        <div class="uk-flex-1">
                                            <div class="home__content__catalog__item uk-padding-small" uk-toggle="cls: uk-box-shadow-hover-small; mode: media; media: @m">
                                                <div class="uk-flex-middle uk-grid-small" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <div class="home__content__catalog__item__img">
                                                            <img class="uk-responsive-width" src="<?= $v['src'] ?>" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <h5 class="uk-h5 home__content__catalog__item__title"><a href=""><?= $v['txt'] ?></a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                                </div>
                                <div class="uk-hidden@s mobile">
                                    <a class="uk-position-center-left uk-position-small home__content__slidenav home__content__slidenav--left" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small home__content__slidenav home__content__slidenav--right" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                </div>

                                <div class="uk-visible@s pc">
                                    <a class="uk-position-center-left-out uk-position-small uk-hidden-hover home__content__slidenav home__content__slidenav--left" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right-out uk-position-small uk-hidden-hover home__content__slidenav home__content__slidenav--right" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Danh muc-->

    <!--Top Giảm Giá Trong Tháng-->
    <div class="home__content__margin30">
        <div class="home__content__margin20s">
            <div>
                <div class="uk-container">
                    <h3 class="uk-h3 home__content__title">Top Giảm Giá Trong Tháng</h3>
                </div>
            </div>
            <div>
                <div class="uk-container uk-padding-remove">
                    <div class="uk-background-default">
                        <div class="uk-child-width-1-3@m uk-grid-collapse uk-grid-match" uk-grid>
                            <?php foreach ($dataproduct as $k=>$v): ?>
                                <?php if ($k<=5): ?>
                                <div>
                                    <div class="uk-card uk-card-body uk-padding-small home__content__product__item uk-transition-toggle" uk-toggle="cls: uk-box-shadow-hover-small; mode: media; media: @m">
                                        <div class="uk-grid-small uk-grid-20-m" uk-grid>
                                            <div class="uk-width-1-2">
                                                <div class="uk-cover-container">
                                                    <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                                    <canvas width="500" height="500"></canvas>
                                                    <?php if ($v['sale']): ?>
                                                        <span class="uk-badge uk-position-top-right uk-position-z-index home__content__product__badge">-<?= rand(3,49) ?>%</span>
                                                    <?php endif; ?>
                                                    <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default"></div>
                                                    <div class="uk-position-bottom-center uk-position-small">
                                                        <div class="uk-transition-slide-bottom-small">
                                                            <div class="uk-child-width-auto uk-grid-5 uk-flex-center" uk-grid>
                                                                <div>
                                                                    <a href="" class="uk-button-default uk-button uk-button-small home__content__product__icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                                                                </div>
                                                                <div>
                                                                    <a href="" class="uk-button-default uk-button uk-button-small home__content__product__icon"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <div class="home__content__product__margin15">
                                                    <h4 class="uk-h4 home__content__product__title line-clamp-1"><a href=""><?= $v['title'] ?></a></h4>
                                                    <div>
                                                        <div class="uk-child-width-auto uk-grid-10 uk-flex-bottom" uk-grid>
                                                            <div><span class="home__content__product__price"><?= $v['price'] ?></span></div>
                                                            <?php if ($v['price-old'] != ''): ?>
                                                                <div><del class="home__content__product__priceold"><?= $v['price-old'] ?></del></div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <p class="home__content__product__desc"><?= $v['desc'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Top Giảm Giá Trong Tháng-->

    <!--Sản Phẩm Bán Chạy-->
    <div class="home__content__margin30">
        <div class="home__content__margin20s">
            <div>
                <div class="uk-container">
                    <h3 class="uk-h3 home__content__title">Sản Phẩm Bán Chạy</h3>
                </div>
            </div>
            <div>
                <div class="uk-container uk-padding-remove">
                    <div class="uk-background-default">
                        <div uk-slider="finite: true">

                            <div class="uk-position-relative">

                                <div class="uk-slider-container">

                                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-6@l uk-grid-match uk-grid-collapse" uk-grid>
                                        <?php foreach ($dataproduct as $k=>$v): ?>
                                            <li>
                                                <div class="uk-card uk-card-body uk-padding-small home__content__product__item uk-transition-toggle">
                                                    <div class="uk-cover-container">
                                                        <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                                        <canvas width="500" height="500"></canvas>
                                                        <?php if ($v['sale']): ?>
                                                            <span class="uk-badge uk-position-top-right uk-position-z-index home__content__product__badge">-<?= rand(3,49) ?>%</span>
                                                        <?php endif; ?>
                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default"></div>
                                                        <div class="uk-position-bottom-center uk-position-small">
                                                            <div class="uk-transition-slide-bottom-small">
                                                                <div class="uk-child-width-auto uk-grid-5 uk-flex-center" uk-grid>
                                                                    <div>
                                                                        <a href="" class="uk-button-default uk-button uk-button-small home__content__product__icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="" class="uk-button-default uk-button uk-button-small home__content__product__icon"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h4 class="uk-h4 home__content__product__title"><a href=""><?= $v['title'] ?></a></h4>
                                                        <div class="uk-child-width-auto uk-grid-10 uk-flex-center uk-flex-middle" uk-grid>
                                                            <div><span class="home__content__product__price"><?= $v['price'] ?></span></div>
                                                            <?php if ($v['price-old'] != ''): ?>
                                                                <div><del class="home__content__product__priceold"><?= $v['price-old'] ?></del></div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="uk-hidden@s mobile">
                                    <a class="uk-position-center-left uk-position-small home__content__slidenav home__content__slidenav--left" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small home__content__slidenav home__content__slidenav--right" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                </div>

                                <div class="uk-visible@s pc">
                                    <a class="uk-position-center-left-out uk-position-small uk-hidden-hover home__content__slidenav home__content__slidenav--left" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right-out uk-position-small uk-hidden-hover home__content__slidenav home__content__slidenav--right" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Sản Phẩm Bán Chạy-->

    <!--Điện Gia Dụng-->
    <div class="home__content__margin30">
        <div class="home__content__margin20s">
            <div>
                <div class="uk-container">
                    <h3 class="uk-h3 home__content__title">Điện Gia Dụng</h3>
                </div>
            </div>
            <div>
                <div class="uk-container uk-padding-remove">
                    <div class="uk-background-default">
                        <div class="uk-grid-collapse uk-grid-match" uk-grid>
                            <div class="uk-width-1-5@m uk-visible@m">
                                <div class="uk-card uk-card-body uk-padding-small home__content__card">
                                    <ul class="uk-nav uk-nav-default uk-margin-remove home__content__nav">
                                        <li><a href="#">Điện tử</a></li>
                                        <li><a href="#">Điện lạnh</a></li>
                                        <li><a href="#">Thiết bị ngoại vi</a></li>
                                        <li><a href="#">Phụ kiện điện máy</a></li>
                                        <li><a href="#">Phụ kiện số</a></li>
                                        <li><a href="#">Kĩ thuật số</a></li>
                                        <li><a href="#">Điện thoại & Tablet</a></li>
                                        <li><a href="#">Thiết bị tin học</a></li>
                                        <li><a href="#">Âm thanh</a></li>
                                        <li><a href="#">Đồ gia dụng</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="uk-child-width-1-2 uk-child-width-1-5@m uk-grid-collapse uk-grid-match" uk-grid>
                                    <?php foreach ($dataproduct as $k=>$v): ?>
                                    <div>
                                        <div class="uk-card uk-card-body uk-padding-small home__content__product__item uk-transition-toggle" uk-toggle="cls: uk-box-shadow-hover-small; mode: media; media: @m">
                                            <div class="uk-cover-container">
                                                <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                                <canvas width="500" height="500"></canvas>
                                                <?php if ($v['sale']): ?>
                                                    <span class="uk-badge uk-position-top-right uk-position-z-index home__content__product__badge">-<?= rand(3,49) ?>%</span>
                                                <?php endif; ?>
                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default"></div>
                                                <div class="uk-position-bottom-center uk-position-small">
                                                    <div class="uk-transition-slide-bottom-small">
                                                        <div class="uk-child-width-auto uk-grid-5 uk-flex-center" uk-grid>
                                                            <div>
                                                                <a href="" class="uk-button-default uk-button uk-button-small home__content__product__icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                                                            </div>
                                                            <div>
                                                                <a href="" class="uk-button-default uk-button uk-button-small home__content__product__icon"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="uk-h4 home__content__product__title"><a href=""><?= $v['title'] ?></a></h4>
                                                <div class="uk-child-width-auto uk-grid-10 uk-flex-center uk-flex-middle" uk-grid>
                                                    <div><span class="home__content__product__price"><?= $v['price'] ?></span></div>
                                                    <?php if ($v['price-old'] != ''): ?>
                                                    <div><del class="home__content__product__priceold"><?= $v['price-old'] ?></del></div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Điện Gia Dụng-->

    <!--Tin Tức Mới Nhất-->
    <div class="home__content__margin30">
        <div class="home__content__margin20s">
            <div>
                <div class="uk-container">
                    <h3 class="uk-h3 home__content__title">Tin Tức Mới Nhất</h3>
                </div>
            </div>
            <div>
                <div class="uk-container uk-padding-remove">
                    <div class="uk-background-default uk-padding-small home__content__news__card">
                        <div uk-slider="finite: true">

                            <div class="uk-position-relative">

                                <div class="uk-slider-container">

                                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l uk-grid-small uk-grid-30-m" uk-grid>
                                        <?php
                                        $data = array(
                                            array(
                                                'src' => 'https://file.hstatic.net/200000283825/article/6_ac411cd299fa445585780a516bc94088_large.jpg',
                                                'title' => 'Máy lạnh Inverter là gì? Có nên mua không?',
                                            ),
                                            array(
                                                'src' => 'https://file.hstatic.net/200000283825/article/4_5996b79e994542f3a4dc5dbafbc5f241_large.jpg',
                                                'title' => '6 lý do bạn nên mua máy lạnh thường thay vì máy lạnh Inverter',
                                            ),
                                            array(
                                                'src' => 'https://file.hstatic.net/200000283825/article/3_5f73bea9c89c44508d57338168b72cad_large.jpg',
                                                'title' => 'Nên mua máy giặt hãng nào chất lượng, giá tốt?',
                                            ),
                                            array(
                                                'src' => 'https://file.hstatic.net/200000283825/article/2_aa3a4dcc0c5c49839f3990c1ef6f725d_large.jpg',
                                                'title' => 'Top 5 tủ lạnh Inverter bán chạy đáng tham khảo',
                                            ),
                                            array(
                                                'src' => 'https://file.hstatic.net/200000283825/article/1_45dfbfeb6afc4f96b349253358de7e96_large.jpg',
                                                'title' => 'So sánh quạt phun sương và quạt điều hòa',
                                            ),
                                            array(
                                                'src' => 'https://theme.hstatic.net/200000283825/1000676391/14/800x600.png?v=27',
                                                'title' => 'Bài viết mẫu',
                                            ),
                                        );
                                        foreach ($data as $k=>$v): ?>
                                        <li>
                                            <div class="uk-cover-container">
                                                <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                                <canvas width="500" height="374"></canvas>
                                            </div>
                                            <h4 class="uk-h4 home__content__news__title uk-text-center uk-margin-small"><a href=""><?= $v['title'] ?></a></h4>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <div class="uk-hidden@s mobile">
                                    <a class="uk-position-center-left uk-position-small home__content__slidenav home__content__slidenav--left" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small home__content__slidenav home__content__slidenav--right" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                </div>

                                <div class="uk-visible@s pc">
                                    <a class="uk-position-center-left-out uk-position-small uk-hidden-hover home__content__slidenav home__content__slidenav--left" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right-out uk-position-small uk-hidden-hover home__content__slidenav home__content__slidenav--right" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Tin Tức Mới Nhất-->
</div>
<!--/Content-->
<?php require "template-parts/layouts/footer.php"; ?>