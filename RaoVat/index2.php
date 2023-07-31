
<?php
ob_start();
session_start();
include("includes/include_head.php");

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}

// Lấy username từ session và hiển thị nó ở trang chính
$username = $_SESSION['username'];
?>
<style>
      html {
        background-image: url(img/background.jpg);
    }
</style>
<body class="home page-template page-template-page-blank page-template-page-blank-php page page-id-2 theme-flatsome woocommerce-no-js boxed lightbox">

  <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
  <div id="wrapper">
    <header id="header" class="header ">
      <div class="header-wrapper">
        <div id="masthead" class="header-main hide-for-sticky">
          <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

            <!-- Logo -->
            <div id="logo" class="flex-col logo">

              <!-- Header logo -->
              <a href="index.html" rel="home">
                <img width="565" height="100" src="img/logo.png" class="header_logo header-logo" /><img width="565" height="100" src="img/logo.png" class="header-logo-dark" /></a>
            </div>

            <!-- Mobile Left Elements -->
            <div class="flex-col show-for-medium flex-left">
              <ul class="mobile-nav nav nav-left ">
                <li class="nav-icon has-icon">
                  <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">

                    <i class="icon-menu"></i>
                  </a>
                </li>
              </ul>
            </div>
            <!-- Left Elements -->
            <div class="flex-col hide-for-medium flex-left
            flex-grow">
              <ul class="header-nav header-nav-main nav nav-left  nav-size-large nav-spacing-xlarge">
              </ul>
            </div>
            <!-- Right Elements -->
            <div class="flex-col hide-for-medium flex-right">
              <ul class="header-nav header-nav-main nav nav-right  nav-size-large nav-spacing-xlarge">
                <li id="menu-item-976" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-976 menu-item-design-default"><a href="http://chotot.giaodienwebmau.com/cua-hang/" class="nav-top-link">Rao Vặt</a></li>
                <li id="menu-item-981" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-981 menu-item-design-default"><a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/xe-co/" class="nav-top-link">Nhà rao vặt</a></li>
                <li id="menu-item-982" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-982 menu-item-design-default"><a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/do-dien-tu/" class="nav-top-link">Xe rao vặt</a></li>
                <li id="menu-item-983" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-983 menu-item-design-default"><a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/me-va-be/" class="nav-top-link">Việc làm rao vặt</a></li>
              </ul>
            </div>
            <!-- Mobile Right Elements -->
            <div class="flex-col show-for-medium flex-right">
              <ul class="mobile-nav nav nav-right ">
                <li class="cart-item has-icon">

                </li>
              </ul>
            </div>
          </div>
        </div>
        <div id="wide-nav" class="header-bottom wide-nav hide-for-sticky hide-for-medium">
          <div class="flex-row container">
            <div class="flex-col hide-for-medium flex-left">
              <ul class="nav header-nav header-bottom-nav nav-left  nav-uppercase">
                <li class="header-search-form search-form html relative has-icon">
                  <div class="header-search-form-wrapper">
                    <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                      <form role="search" method="get" class="searchform" action="index2.php">
                        <div class="flex-row relative">
                          <div class="flex-col flex-grow">
                            <label class="screen-reader-text" for="woocommerce-product-search-field-0">Tìm kiếm:</label>
                            <input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="Nhập mẫu xe bạn đang cần tìm...." value="" name="s" />
                            <input type="hidden" name="post_type" value="product" />
                          </div>
                          <div class="flex-col">
                            <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                              <i class="icon-search"></i> </button>
                          </div>
                        </div>
                        <div class="live-search-results text-left z-top"></div>
                      </form>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="flex-col hide-for-medium flex-right flex-grow">
              <ul class="nav header-nav header-bottom-nav nav-right  nav-uppercase">
                <li class="account-item has-icon" >
                  <a href="dangtin.php" class="nav-top-link nav-top-not-logged-in ">
                    <span>Đăng Tin</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="header-bg-container fill">
          <div class="header-bg-image fill"></div>
          <div class="header-bg-color fill"></div>
        </div>
      </div><!-- header-wrapper-->
    </header>
    <main id="main" class="">
      <div id="content" role="main" class="content-area">
        <section class="section section-slide" id="section_1926587257">
          <div class="section-content relative">
            <div class="slider-wrapper relative" id="slider-1518540961">
              <div class="slider slider-nav-dots-simple slider-nav-simple slider-nav-normal slider-nav-light slider-style-normal" data-flickity-options='{
            "cellAlign": "center",
            "imagesLoaded": true,
            "lazyLoad": 1,
            "freeScroll": false,
            "wrapAround": true,
            "autoPlay": 6000,
            "pauseAutoPlayOnHover" : true,
            "prevNextButtons": true,
            "contain" : true,
            "adaptiveHeight" : true,
            "dragThreshold" : 10,
            "percentPosition": true,
            "pageDots": false,
            "rightToLeft": false,
            "draggable": true,
            "selectedAttraction": 0.1,
            "parallax" : 0,
            "friction": 0.6        }'>
                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2054437825">
                  <div data-animate="flipInY">
                    <div class="img-inner dark">
                      <img width="940" height="235" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20940%20235%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/8f217cb7c403bd658c049e27c9c63569-2765649514302639582.png" class="lazy-load attachment-original size-original" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/8f217cb7c403bd658c049e27c9c63569-2765649514302639582.png 940w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/8f217cb7c403bd658c049e27c9c63569-2765649514302639582-600x150.png 600w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/8f217cb7c403bd658c049e27c9c63569-2765649514302639582-300x75.png 300w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/8f217cb7c403bd658c049e27c9c63569-2765649514302639582-768x192.png 768w" sizes="(max-width: 940px) 100vw, 940px" />
                    </div>
                  </div>
                  <style>
                    #image_2054437825 {
                      width: 100%;
                    }
                  </style>
                </div>

                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_850458644">
                  <div data-animate="flipInX">
                    <div class="img-inner dark">
                      <img width="940" height="235" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20940%20235%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/10620ff10db646f76044aca5c124f57a-2767979104409767318.png" class="lazy-load attachment-original size-original" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/10620ff10db646f76044aca5c124f57a-2767979104409767318.png 940w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/10620ff10db646f76044aca5c124f57a-2767979104409767318-300x75.png 300w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/10620ff10db646f76044aca5c124f57a-2767979104409767318-768x192.png 768w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/10620ff10db646f76044aca5c124f57a-2767979104409767318-600x150.png 600w" sizes="(max-width: 940px) 100vw, 940px" />
                    </div>
                  </div>
                  <style>
                    #image_850458644 {
                      width: 100%;
                    }
                  </style>
                </div>

              </div>
              <div id="gap-811338971" class="gap-element clearfix" style="display:block; height:auto;">

                <style>
                  #gap-811338971 {
                    padding-top: 16px;
                  }
                </style>
              </div>
              <div class="row row-small row-icon" id="row-860919624">
                <div id="col-49374944" class="col medium-2 small-3 large-2">
                  <div class="col-inner">
                    <div class="icon-box featured-box icon-box-center text-center">
                      <div class="icon-box-img" style="width: 35px">
                        <div class="icon">
                          <div class="icon-inner">
                            <img width="256" height="256" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20256%20256%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image.webp" class="lazy-load attachment-medium size-medium" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image.webp 256w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-150x150.webp 150w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-100x100.webp 100w" sizes="(max-width: 256px) 100vw, 256px" />
                          </div>
                        </div>
                      </div>
                      <div class="icon-box-text last-reset">
                        <p>Giảm giá</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="col-378292397" class="col medium-2 small-3 large-2">
                  <div class="col-inner">
                    <div class="icon-box featured-box icon-box-center text-center">
                      <div class="icon-box-img" style="width: 35px">
                        <div class="icon">
                          <div class="icon-inner">
                            <img width="256" height="256" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20256%20256%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-2.webp" class="lazy-load attachment-medium size-medium" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-2.webp 256w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-2-150x150.webp 150w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-2-100x100.webp 100w" sizes="(max-width: 256px) 100vw, 256px" />
                          </div>
                        </div>
                      </div>
                      <div class="icon-box-text last-reset">
                        <p>Khuyến mãi</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="col-1596078106" class="col medium-2 small-3 large-2">
                  <div class="col-inner">
                    <div class="icon-box featured-box icon-box-center text-center">
                      <div class="icon-box-img" style="width: 35px">
                        <div class="icon">
                          <div class="icon-inner">
                            <img width="64" height="64" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%2064%2064%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-15.webp" class="lazy-load attachment-medium size-medium" alt="" decoding="async" loading="lazy" />
                          </div>
                        </div>
                      </div>
                      <div class="icon-box-text last-reset">
                        <p>Xe cũ</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="col-45821087" class="col medium-2 small-3 large-2">
                  <div class="col-inner">
                    <div class="icon-box featured-box icon-box-center text-center">
                      <div class="icon-box-img" style="width: 35px">
                        <div class="icon">
                          <div class="icon-inner">
                            <img width="105" height="105" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20105%20105%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-5.webp" class="lazy-load attachment-medium size-medium" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-5.webp 105w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-5-100x100.webp 100w" sizes="(max-width: 105px) 100vw, 105px" />
                          </div>
                        </div>
                      </div>
                      <div class="icon-box-text last-reset">
                        <p>Ưu đãi</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="col-1192633926" class="col medium-2 small-3 large-2">
                  <div class="col-inner">
                    <div class="icon-box featured-box icon-box-center text-center">
                      <div class="icon-box-img" style="width: 35px">
                        <div class="icon">
                          <div class="icon-inner">
                            <img width="96" height="96" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%2096%2096%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-6.webp" class="lazy-load attachment-medium size-medium" alt="" decoding="async" loading="lazy" />
                          </div>
                        </div>
                      </div>
                      <div class="icon-box-text last-reset">
                        <p>Yêu thích</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="col-22472672" class="col medium-2 small-3 large-2">
                  <div class="col-inner">
                    <div class="icon-box featured-box icon-box-center text-center">
                      <div class="icon-box-img" style="width: 35px">
                        <div class="icon">
                          <div class="icon-inner">
                            <img width="96" height="96" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%2096%2096%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-8.webp" class="lazy-load attachment-medium size-medium" alt="" decoding="async" loading="lazy" />
                          </div>
                        </div>
                      </div>
                      <div class="icon-box-text last-reset">
                        <p>Tin đã lưu</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="col-1182349905" class="col medium-2 small-3 large-2">
                  <div class="col-inner">
                    <div class="icon-box featured-box icon-box-center text-center">
                      <div class="icon-box-img" style="width: 35px">
                        <div class="icon">
                          <div class="icon-inner">
                            <img width="256" height="252" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20256%20252%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-7.webp" class="lazy-load attachment-medium size-medium" alt="" decoding="async" loading="lazy" />
                          </div>
                        </div>
                      </div>
                      <div class="icon-box-text last-reset">
                        <p>Tuyển dụng</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="col-1704170658" class="col medium-2 small-3 large-2">
                  <div class="col-inner">
                    <div class="icon-box featured-box icon-box-center text-center">
                      <div class="icon-box-img" style="width: 35px">
                        <div class="icon">
                          <div class="icon-inner">
                            <img width="105" height="105" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20105%20105%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-4.webp" class="lazy-load attachment-medium size-medium" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-4.webp 105w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-4-100x100.webp 100w" sizes="(max-width: 105px) 100vw, 105px" />
                          </div>
                        </div>
                      </div>
                      <div class="icon-box-text last-reset">
                        <p>Tin tức</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="col-601714869" class="col medium-2 small-3 large-2">
                  <div class="col-inner">
                    <div class="icon-box featured-box icon-box-center text-center">
                      <div class="icon-box-img" style="width: 35px">
                        <div class="icon">
                          <div class="icon-inner">
                            <img width="72" height="73" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%2072%2073%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-16.webp" class="lazy-load attachment-medium size-medium" alt="" decoding="async" loading="lazy" />
                          </div>
                        </div>
                      </div>
                      <div class="icon-box-text last-reset">

                        <p>Liên hệ</p>
                      </div>
                    </div>


                  </div>
                </div>


              </div>
            </div>


            <style>
              #section_1926587257 {
                padding-top: 15px;
                padding-bottom: 15px;
              }

              #section_1926587257 .ux-shape-divider--top svg {
                height: 150px;
                --divider-top-width: 100%;
              }

              #section_1926587257 .ux-shape-divider--bottom svg {
                height: 150px;
                --divider-width: 100%;
              }
            </style>
        </section>
        <section class="section section-danh-muc" id="section_1675815846">
          <div class="section-content relative">

            <div class="row" id="row-297231317">

              <div id="col-895443468" class="col div-no-padding small-12 large-12">
                <div class="col-inner">


                  <h3 style="text-align: left;">Khám phá danh mục</h3>


                  <div class="row large-columns-7 medium-columns-3 small-columns-3 row-small">
                    <div class="product-category col">
                      <div class="col-inner">
                        <a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/xe-co/">
                          <div class="box box-category has-hover box-normal ">
                            <div class="box-image">
                              <div class="">
                                <img class="lazy-load" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-1-1.webp" alt="Xe cộ" width="300" height="300" />
                              </div>
                            </div>
                            <div class="box-text text-center">
                              <div class="box-text-inner">
                                <h5 class="uppercase header-title">
                                  Xe cộ </h5>

                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="product-category col">
                      <div class="col-inner">
                        <a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/bat-dong-san/">
                          <div class="box box-category has-hover box-normal ">
                            <div class="box-image">
                              <div class="">
                                <img class="lazy-load" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-17.webp" alt="Bất động sản" width="300" height="300" />
                              </div>
                            </div>
                            <div class="box-text text-center">
                              <div class="box-text-inner">
                                <h5 class="uppercase header-title">
                                  Bất động sản </h5>

                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="product-category col">
                      <div class="col-inner">
                        <a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/dich-vu-du-lich/">
                          <div class="box box-category has-hover box-normal ">
                            <div class="box-image">
                              <div class="">
                                <img class="lazy-load" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-10-1.webp" alt="Dịch vụ, du lịch" width="300" height="300" />
                              </div>
                            </div>
                            <div class="box-text text-center">
                              <div class="box-text-inner">
                                <h5 class="uppercase header-title">
                                  Dịch vụ, du lịch </h5>

                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="product-category col">
                      <div class="col-inner">
                        <a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/do-an-thuc-pham/">
                          <div class="box box-category has-hover box-normal ">
                            <div class="box-image">
                              <div class="">
                                <img class="lazy-load" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-24.webp" alt="Đồ ăn, thực phẩm" width="300" height="300" />
                              </div>
                            </div>
                            <div class="box-text text-center">
                              <div class="box-text-inner">
                                <h5 class="uppercase header-title">
                                  Đồ ăn, thực phẩm </h5>

                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="product-category col">
                      <div class="col-inner">
                        <a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/do-dung-van-phong/">
                          <div class="box box-category has-hover box-normal ">
                            <div class="box-image">
                              <div class="">
                                <img class="lazy-load" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-27.webp" alt="Đồ dùng văn phòng" width="300" height="300" />
                              </div>
                            </div>
                            <div class="box-text text-center">
                              <div class="box-text-inner">
                                <h5 class="uppercase header-title">
                                  Đồ dùng văn phòng </h5>

                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="product-category col">
                      <div class="col-inner">
                        <a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/do-dien-tu/">
                          <div class="box box-category has-hover box-normal ">
                            <div class="box-image">
                              <div class="">
                                <img class="lazy-load" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-18.webp" alt="Đồ điện tử" width="300" height="300" />
                              </div>
                            </div>
                            <div class="box-text text-center">
                              <div class="box-text-inner">
                                <h5 class="uppercase header-title">
                                  Đồ điện tử </h5>

                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="product-category col">
                      <div class="col-inner">
                        <a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/do-gia-dung/">
                          <div class="box box-category has-hover box-normal ">
                            <div class="box-image">
                              <div class="">
                                <img class="lazy-load" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-19.webp" alt="Đồ gia dụng" width="300" height="300" />
                              </div>
                            </div>
                            <div class="box-text text-center">
                              <div class="box-text-inner">
                                <h5 class="uppercase header-title">
                                  Đồ gia dụng </h5>

                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="product-category col">
                      <div class="col-inner">
                        <a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/giai-tri-the-thao/">
                          <div class="box box-category has-hover box-normal ">
                            <div class="box-image">
                              <div class="">
                                <img class="lazy-load" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-20.webp" alt="Giải trí, thể thao" width="300" height="300" />
                              </div>
                            </div>
                            <div class="box-text text-center">
                              <div class="box-text-inner">
                                <h5 class="uppercase header-title">
                                  Giải trí, thể thao </h5>

                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="product-category col">
                      <div class="col-inner">
                        <a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/me-va-be/">
                          <div class="box box-category has-hover box-normal ">
                            <div class="box-image">
                              <div class="">
                                <img class="lazy-load" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-21.webp" alt="Mẹ và bé" width="300" height="300" />
                              </div>
                            </div>
                            <div class="box-text text-center">
                              <div class="box-text-inner">
                                <h5 class="uppercase header-title">
                                  Mẹ và bé </h5>

                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="product-category col">
                      <div class="col-inner">
                        <a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/qua-tang/">
                          <div class="box box-category has-hover box-normal ">
                            <div class="box-image">
                              <div class="">
                                <img class="lazy-load" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-28.webp" alt="Quà tặng" width="300" height="300" />
                              </div>
                            </div>
                            <div class="box-text text-center">
                              <div class="box-text-inner">
                                <h5 class="uppercase header-title">
                                  Quà tặng </h5>

                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="product-category col">
                      <div class="col-inner">
                        <a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/thoi-trang/">
                          <div class="box box-category has-hover box-normal ">
                            <div class="box-image">
                              <div class="">
                                <img class="lazy-load" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-26.webp" alt="Thời trang" width="300" height="300" />
                              </div>
                            </div>
                            <div class="box-text text-center">
                              <div class="box-text-inner">
                                <h5 class="uppercase header-title">
                                  Thời trang </h5>

                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="product-category col">
                      <div class="col-inner">
                        <a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/thu-cung/">
                          <div class="box box-category has-hover box-normal ">
                            <div class="box-image">
                              <div class="">
                                <img class="lazy-load" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-23.webp" alt="Thú cưng" width="300" height="300" />
                              </div>
                            </div>
                            <div class="box-text text-center">
                              <div class="box-text-inner">
                                <h5 class="uppercase header-title">
                                  Thú cưng </h5>

                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="product-category col">
                      <div class="col-inner">
                        <a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/tu-lanh-may-giat/">
                          <div class="box box-category has-hover box-normal ">
                            <div class="box-image">
                              <div class="">
                                <img class="lazy-load" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-13-1.webp" alt="Tủ lạnh, máy giặt" width="300" height="300" />
                              </div>
                            </div>
                            <div class="box-text text-center">
                              <div class="box-text-inner">
                                <h5 class="uppercase header-title">
                                  Tủ lạnh, máy giặt </h5>

                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="product-category col">
                      <div class="col-inner">
                        <a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/viec-lam/">
                          <div class="box box-category has-hover box-normal ">
                            <div class="box-image">
                              <div class="">
                                <img class="lazy-load" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/image-29.webp" alt="Việc làm" width="300" height="300" />
                              </div>
                            </div>
                            <div class="box-text text-center">
                              <div class="box-text-inner">
                                <h5 class="uppercase header-title">
                                  Việc làm </h5>

                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>


          <style>
            #section_1675815846 {
              padding-top: 20px;
              padding-bottom: 20px;
              background-color: rgb(255, 255, 255);
            }

            #section_1675815846 .ux-shape-divider--top svg {
              height: 150px;
              --divider-top-width: 100%;
            }

            #section_1675815846 .ux-shape-divider--bottom svg {
              height: 150px;
              --divider-width: 100%;
            }
          </style>
        </section>
        <section class="section section-sp" id="section_198363466">
          <div class="section-content relative">

            <div class="row row-sp" id="row-488404923">

              <div id="col-1033553955" class="col small-12 large-12">
                <div class="col-inner text-center">


                  <h3 style="text-align: left;">Sản phẩm bán chạy</h3>


                  <div class="row large-columns-5 medium-columns-3 small-columns-2 row-small">

                    <div class="col">
                      <div class="col-inner">

                        <div class="badge-container absolute left top z-1">
                          <div class="callout badge badge-circle">
                            <div class="badge-inner secondary on-sale"><span class="onsale">-5%</span></div>
                          </div>
                        </div>
                        <div class="product-small box has-hover box-normal box-text-bottom">
                          <div class="box-image">
                            <div class="">
                              <a href="http://chotot.giaodienwebmau.com/san-pham/thuc-pham-dinh-duong-y-hoc-ensure-gold-vigor/" aria-label="Thực phẩm dinh dưỡng y học Ensure Gold Vigor">
                                <img width="300" height="300" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/sua-rua-mat-tao-bot-senka-perfect-collagen-120g-600x600-1-300x300.jpg" class="lazy-load show-on-hover absolute fill hide-for-small back-image" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/sua-rua-mat-tao-bot-senka-perfect-collagen-120g-600x600-1-300x300.jpg 300w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/sua-rua-mat-tao-bot-senka-perfect-collagen-120g-600x600-1-150x150.jpg 150w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/sua-rua-mat-tao-bot-senka-perfect-collagen-120g-600x600-1-100x100.jpg 100w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/sua-rua-mat-tao-bot-senka-perfect-collagen-120g-600x600-1.jpg 600w" sizes="(max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/ensure-gold-vigor-237ml-loc-6-chai-300x300.jpg" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/ensure-gold-vigor-237ml-loc-6-chai-300x300.jpg 300w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/ensure-gold-vigor-237ml-loc-6-chai-150x150.jpg 150w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/ensure-gold-vigor-237ml-loc-6-chai-100x100.jpg 100w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/ensure-gold-vigor-237ml-loc-6-chai.jpg 600w" sizes="(max-width: 300px) 100vw, 300px" /> </a>
                            </div>
                            <div class="image-tools top right show-on-hover">
                            </div>
                            <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            </div>
                          </div>

                          <div class="box-text text-left">
                            <div class="title-wrapper">
                              <p class="name product-title woocommerce-loop-product__title"><a href="http://chotot.giaodienwebmau.com/san-pham/thuc-pham-dinh-duong-y-hoc-ensure-gold-vigor/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Thực phẩm dinh dưỡng y học Ensure Gold Vigor</a></p>
                            </div>
                            <div class="price-wrapper">
                              <span class="price"><del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi>262.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi>248.900&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="col-inner">

                        <div class="badge-container absolute left top z-1">
                        </div>
                        <div class="product-small box has-hover box-normal box-text-bottom">
                          <div class="box-image">
                            <div class="">
                              <a href="http://chotot.giaodienwebmau.com/san-pham/xe-day-4-banh-nomi-gold-rush-safety1st/" aria-label="Xe đẩy 4 bánh Nomi Gold Rush SAFETY1ST">
                                <img width="300" height="300" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/xe-day-4-banh-nomi-gold-rush-safety1st-h2188eu-gr-300x300.jpg" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/xe-day-4-banh-nomi-gold-rush-safety1st-h2188eu-gr-300x300.jpg 300w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/xe-day-4-banh-nomi-gold-rush-safety1st-h2188eu-gr-150x150.jpg 150w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/xe-day-4-banh-nomi-gold-rush-safety1st-h2188eu-gr-768x768.jpg 768w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/xe-day-4-banh-nomi-gold-rush-safety1st-h2188eu-gr-600x600.jpg 600w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/xe-day-4-banh-nomi-gold-rush-safety1st-h2188eu-gr-100x100.jpg 100w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/xe-day-4-banh-nomi-gold-rush-safety1st-h2188eu-gr.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px" /> </a>
                            </div>
                            <div class="image-tools top right show-on-hover">
                            </div>
                            <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            </div>
                          </div>

                          <div class="box-text text-left">
                            <div class="title-wrapper">
                              <p class="name product-title woocommerce-loop-product__title"><a href="http://chotot.giaodienwebmau.com/san-pham/xe-day-4-banh-nomi-gold-rush-safety1st/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Xe đẩy 4 bánh Nomi Gold Rush SAFETY1ST</a></p>
                            </div>
                            <div class="price-wrapper">
                              <span class="price"><span class="woocommerce-Price-amount amount"><bdi>3.639.300&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="col-inner">

                        <div class="badge-container absolute left top z-1">
                        </div>
                        <div class="product-small box has-hover box-normal box-text-bottom">
                          <div class="box-image">
                            <div class="">
                              <a href="http://chotot.giaodienwebmau.com/san-pham/freeship-combo-3-lon-nan-supreme-3-2hmo-800g-tang-1-lon/" aria-label="FREESHIP Combo 3 lon NAN Supreme 3 (2HMO) 800g tặng 1 lon">
                                <img width="300" height="300" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/nan-supreme-3-2hmo-800g-600x600-1-300x300.jpg" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/nan-supreme-3-2hmo-800g-600x600-1-300x300.jpg 300w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/nan-supreme-3-2hmo-800g-600x600-1-150x150.jpg 150w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/nan-supreme-3-2hmo-800g-600x600-1-100x100.jpg 100w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/nan-supreme-3-2hmo-800g-600x600-1.jpg 600w" sizes="(max-width: 300px) 100vw, 300px" /> </a>
                            </div>
                            <div class="image-tools top right show-on-hover">
                            </div>
                            <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            </div>
                          </div>

                          <div class="box-text text-left">
                            <div class="title-wrapper">
                              <p class="name product-title woocommerce-loop-product__title"><a href="http://chotot.giaodienwebmau.com/san-pham/freeship-combo-3-lon-nan-supreme-3-2hmo-800g-tang-1-lon/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">FREESHIP Combo 3 lon NAN Supreme 3 (2HMO) 800g tặng 1 lon</a></p>
                            </div>
                            <div class="price-wrapper">
                              <span class="price"><span class="woocommerce-Price-amount amount"><bdi>2.500.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="col-inner">

                        <div class="badge-container absolute left top z-1">
                          <div class="callout badge badge-circle">
                            <div class="badge-inner secondary on-sale"><span class="onsale">-30%</span></div>
                          </div>
                        </div>
                        <div class="product-small box has-hover box-normal box-text-bottom">
                          <div class="box-image">
                            <div class="">
                              <a href="http://chotot.giaodienwebmau.com/san-pham/combo-sua-rua-mat-tao-bot-senka-perfect-collagen-120g/" aria-label="Combo Sữa rửa mặt Tạo Bọt Senka Perfect Collagen 120g">
                                <img width="300" height="300" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/sua-rua-mat-tao-bot-senka-perfect-collagen-120g-600x600-1-300x300.jpg" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/sua-rua-mat-tao-bot-senka-perfect-collagen-120g-600x600-1-300x300.jpg 300w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/sua-rua-mat-tao-bot-senka-perfect-collagen-120g-600x600-1-150x150.jpg 150w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/sua-rua-mat-tao-bot-senka-perfect-collagen-120g-600x600-1-100x100.jpg 100w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/sua-rua-mat-tao-bot-senka-perfect-collagen-120g-600x600-1.jpg 600w" sizes="(max-width: 300px) 100vw, 300px" /> </a>
                            </div>
                            <div class="image-tools top right show-on-hover">
                            </div>
                            <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            </div>
                          </div>

                          <div class="box-text text-left">
                            <div class="title-wrapper">
                              <p class="name product-title woocommerce-loop-product__title"><a href="http://chotot.giaodienwebmau.com/san-pham/combo-sua-rua-mat-tao-bot-senka-perfect-collagen-120g/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Combo Sữa rửa mặt Tạo Bọt Senka Perfect Collagen 120g</a></p>
                            </div>
                            <div class="price-wrapper">
                              <span class="price"><del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi>218.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi>152.600&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="col-inner">

                        <div class="badge-container absolute left top z-1">
                        </div>
                        <div class="product-small box has-hover box-normal box-text-bottom">
                          <div class="box-image">
                            <div class="">
                              <a href="http://chotot.giaodienwebmau.com/san-pham/combo-2-lon-wakodo-gungun-3-tu-3-tuoi-830g/" aria-label="Combo 2 lon WAKODO GUNGUN 3, Từ 3 tuổi, 830g">
                                <img width="300" height="300" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/wakodo-gungun-3-tu-3-tuoi-830g-300x300.jpg" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/wakodo-gungun-3-tu-3-tuoi-830g-300x300.jpg 300w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/wakodo-gungun-3-tu-3-tuoi-830g-150x150.jpg 150w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/wakodo-gungun-3-tu-3-tuoi-830g-100x100.jpg 100w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/wakodo-gungun-3-tu-3-tuoi-830g.jpg 600w" sizes="(max-width: 300px) 100vw, 300px" /> </a>
                            </div>
                            <div class="image-tools top right show-on-hover">
                            </div>
                            <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            </div>
                          </div>

                          <div class="box-text text-left">
                            <div class="title-wrapper">
                              <p class="name product-title woocommerce-loop-product__title"><a href="http://chotot.giaodienwebmau.com/san-pham/combo-2-lon-wakodo-gungun-3-tu-3-tuoi-830g/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Combo 2 lon WAKODO GUNGUN 3, Từ 3 tuổi, 830g</a></p>
                            </div>
                            <div class="price-wrapper">
                              <span class="price"><span class="woocommerce-Price-amount amount"><bdi>2.600.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="col-inner">

                        <div class="badge-container absolute left top z-1">
                        </div>
                        <div class="product-small box has-hover box-normal box-text-bottom">
                          <div class="box-image">
                            <div class="">
                              <a href="http://chotot.giaodienwebmau.com/san-pham/similac-iq-4-hmo-huong-vani-900g-moi/" aria-label="Similac IQ 4 (HMO) hương vani 900g - Mới">
                                <img width="300" height="300" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/similac-iq-4-hmo-huong-vani-900g-300x300.jpg" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/similac-iq-4-hmo-huong-vani-900g-300x300.jpg 300w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/similac-iq-4-hmo-huong-vani-900g-150x150.jpg 150w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/similac-iq-4-hmo-huong-vani-900g-100x100.jpg 100w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/similac-iq-4-hmo-huong-vani-900g.jpg 600w" sizes="(max-width: 300px) 100vw, 300px" /> </a>
                            </div>
                            <div class="image-tools top right show-on-hover">
                            </div>
                            <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            </div>
                          </div>

                          <div class="box-text text-left">
                            <div class="title-wrapper">
                              <p class="name product-title woocommerce-loop-product__title"><a href="http://chotot.giaodienwebmau.com/san-pham/similac-iq-4-hmo-huong-vani-900g-moi/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Similac IQ 4 (HMO) hương vani 900g &#8211; Mới</a></p>
                            </div>
                            <div class="price-wrapper">
                              <span class="price"><span class="woocommerce-Price-amount amount"><bdi>445.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="col-inner">

                        <div class="badge-container absolute left top z-1">
                        </div>
                        <div class="product-small box has-hover box-normal box-text-bottom">
                          <div class="box-image">
                            <div class="">
                              <a href="http://chotot.giaodienwebmau.com/san-pham/nestle-nan-organic-3-2-6-tuoi-900g/" aria-label="Nestle NAN Organic 3, 2 - 6 tuổi, 900g">
                                <img width="300" height="300" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/nestle-nan-organic-3-2-6-tuoi-900g-300x300.jpg" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/nestle-nan-organic-3-2-6-tuoi-900g-300x300.jpg 300w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/nestle-nan-organic-3-2-6-tuoi-900g-150x150.jpg 150w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/nestle-nan-organic-3-2-6-tuoi-900g-768x768.jpg 768w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/nestle-nan-organic-3-2-6-tuoi-900g-600x600.jpg 600w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/nestle-nan-organic-3-2-6-tuoi-900g-100x100.jpg 100w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/nestle-nan-organic-3-2-6-tuoi-900g.jpg 1000w" sizes="(max-width: 300px) 100vw, 300px" /> </a>
                            </div>
                            <div class="image-tools top right show-on-hover">
                            </div>
                            <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            </div>
                          </div>

                          <div class="box-text text-left">
                            <div class="title-wrapper">
                              <p class="name product-title woocommerce-loop-product__title"><a href="http://chotot.giaodienwebmau.com/san-pham/nestle-nan-organic-3-2-6-tuoi-900g/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Nestle NAN Organic 3, 2 &#8211; 6 tuổi, 900g</a></p>
                            </div>
                            <div class="price-wrapper">
                              <span class="price"><span class="woocommerce-Price-amount amount"><bdi>590.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="col-inner">

                        <div class="badge-container absolute left top z-1">
                        </div>
                        <div class="product-small box has-hover box-normal box-text-bottom">
                          <div class="box-image">
                            <div class="">
                              <a href="http://chotot.giaodienwebmau.com/san-pham/may-pha-cafe-delonghi/" aria-label="Máy pha cafe DELONGHI">
                                <img width="300" height="300" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/Group-7891-600x600-1-300x300.jpg" class="lazy-load show-on-hover absolute fill hide-for-small back-image" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/Group-7891-600x600-1-300x300.jpg 300w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/Group-7891-600x600-1-150x150.jpg 150w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/Group-7891-600x600-1-100x100.jpg 100w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/Group-7891-600x600-1.jpg 600w" sizes="(max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/Group-7883-600x600-1-300x300.png" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/Group-7883-600x600-1-300x300.png 300w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/Group-7883-600x600-1-150x150.png 150w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/Group-7883-600x600-1-100x100.png 100w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/Group-7883-600x600-1.png 600w" sizes="(max-width: 300px) 100vw, 300px" /> </a>
                            </div>
                            <div class="image-tools top right show-on-hover">
                            </div>
                            <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            </div>
                          </div>

                          <div class="box-text text-left">
                            <div class="title-wrapper">
                              <p class="name product-title woocommerce-loop-product__title"><a href="http://chotot.giaodienwebmau.com/san-pham/may-pha-cafe-delonghi/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Máy pha cafe DELONGHI</a></p>
                            </div>
                            <div class="price-wrapper">
                              <span class="price"><span class="woocommerce-Price-amount amount"><bdi>20.000.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="col-inner">

                        <div class="badge-container absolute left top z-1">
                          <div class="callout badge badge-circle">
                            <div class="badge-inner secondary on-sale"><span class="onsale">-8%</span></div>
                          </div>
                        </div>
                        <div class="product-small box has-hover box-normal box-text-bottom">
                          <div class="box-image">
                            <div class="">
                              <a href="http://chotot.giaodienwebmau.com/san-pham/thung-thuc-pham-bo-sungenfagrow-a-360-brain/" aria-label="Thùng thực phẩm bổ sungEnfagrow A 360 Brain">
                                <img width="300" height="300" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/thuc-pham-bo-sung-enfagrow-a-360-brain-dha-huong-vani-loc-3-hop-moi-300x300.jpg" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/thuc-pham-bo-sung-enfagrow-a-360-brain-dha-huong-vani-loc-3-hop-moi-300x300.jpg 300w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/thuc-pham-bo-sung-enfagrow-a-360-brain-dha-huong-vani-loc-3-hop-moi-150x150.jpg 150w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/thuc-pham-bo-sung-enfagrow-a-360-brain-dha-huong-vani-loc-3-hop-moi-100x100.jpg 100w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/thuc-pham-bo-sung-enfagrow-a-360-brain-dha-huong-vani-loc-3-hop-moi.jpg 600w" sizes="(max-width: 300px) 100vw, 300px" /> </a>
                            </div>
                            <div class="image-tools top right show-on-hover">
                            </div>
                            <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            </div>
                          </div>

                          <div class="box-text text-left">
                            <div class="title-wrapper">
                              <p class="name product-title woocommerce-loop-product__title"><a href="http://chotot.giaodienwebmau.com/san-pham/thung-thuc-pham-bo-sungenfagrow-a-360-brain/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Thùng thực phẩm bổ sungEnfagrow A 360 Brain</a></p>
                            </div>
                            <div class="price-wrapper">
                              <span class="price"><del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi>432.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi>399.000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="col-inner">

                        <div class="badge-container absolute left top z-1">
                        </div>
                        <div class="product-small box has-hover box-normal box-text-bottom">
                          <div class="box-image">
                            <div class="">
                              <a href="http://chotot.giaodienwebmau.com/san-pham/abbott-grow-4-huong-vani-900g/" aria-label="Abbott Grow 4 Hương Vani 900g">
                                <img width="300" height="300" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20300%20300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/abbott-grow-4-huong-vani-900g-300x300.jpg" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/abbott-grow-4-huong-vani-900g-300x300.jpg 300w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/abbott-grow-4-huong-vani-900g-150x150.jpg 150w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/abbott-grow-4-huong-vani-900g-100x100.jpg 100w, http://chotot.giaodienwebmau.com/wp-content/uploads/2022/04/abbott-grow-4-huong-vani-900g.jpg 600w" sizes="(max-width: 300px) 100vw, 300px" /> </a>
                            </div>
                            <div class="image-tools top right show-on-hover">
                            </div>
                            <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            </div>
                          </div>

                          <div class="box-text text-left">
                            <div class="title-wrapper">
                              <p class="name product-title woocommerce-loop-product__title"><a href="http://chotot.giaodienwebmau.com/san-pham/abbott-grow-4-huong-vani-900g/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Abbott Grow 4 Hương Vani 900g</a></p>
                            </div>
                            <div class="price-wrapper">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>


          <style>
            #section_198363466 {
              padding-top: 30px;
              padding-bottom: 30px;
              background-color: rgb(255, 255, 255);
            }

            #section_198363466 .ux-shape-divider--top svg {
              height: 150px;
              --divider-top-width: 100%;
            }

            #section_198363466 .ux-shape-divider--bottom svg {
              height: 150px;
              --divider-width: 100%;
            }
          </style>
        </section>
        <section class="section dat-ban thiet-ke-nha-dep" id="section_1869510674">
          <style>
            #section_1869510674 {
              padding-top: 30px;
              padding-bottom: 30px;
              background-color: rgb(255, 255, 255);
            }

            #section_1869510674 .ux-shape-divider--top svg {
              height: 150px;
              --divider-top-width: 100%;
            }

            #section_1869510674 .ux-shape-divider--bottom svg {
              height: 150px;
              --divider-width: 100%;
            }
          </style>
        </section>
      </div>
    </main><!-- #main -->
  </div><!-- #wrapper -->
  <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
    <div class="sidebar-menu no-scrollbar ">
      <ul class="nav nav-sidebar nav-vertical nav-uppercase" data-tab="1">
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-979"><a href="http://chotot.giaodienwebmau.com/" aria-current="page">Trang chủ</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-976"><a href="http://chotot.giaodienwebmau.com/cua-hang/">Cửa hàng</a></li>
        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-981"><a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/xe-co/">Xe cộ</a></li>
        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-982"><a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/do-dien-tu/">Đồ điện tử</a></li>
        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-983"><a href="http://chotot.giaodienwebmau.com/danh-muc-san-pham/me-va-be/">Mẹ và bé</a></li>
        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-977"><a href="http://chotot.giaodienwebmau.com/dich-vu/">Dịch vụ</a></li>
        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-978"><a href="http://chotot.giaodienwebmau.com/tin-tuc/">Tin tức</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-980"><a href="http://chotot.giaodienwebmau.com/lien-he/">Liên hệ</a></li>
      </ul>
    </div>
  </div>
  <style>
    .div-mo-ta {
      overflow: hidden;
      position: relative;
      padding-bottom: 25px;
    }

    .single-product .tab-panels div#tab-description.panel:not(.active) {
      height: 0 !important;
    }

    .devvn_readmore_flatsome {
      text-align: center;
      cursor: pointer;
      position: absolute;
      z-index: 10;
      bottom: 0;
      width: 100%;
      background: #fff;
    }

    .devvn_readmore_flatsome:before {
      height: 55px;
      margin-top: -45px;
      content: "";
      background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
      background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
      background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff00', endColorstr='#ffffff', GradientType=0);
      display: block;
    }

    .devvn_readmore_flatsome a {
      color: #00AA13;
      display: block;
    }

    .devvn_readmore_flatsome a:after {
      content: '';
      width: 0;
      right: 0;
      border-top: 6px solid #00AA13;
      border-left: 6px solid transparent;
      border-right: 6px solid transparent;
      display: inline-block;
      vertical-align: middle;
      margin: -2px 0 0 5px;
    }

    .devvn_readmore_flatsome_less a:after {
      border-top: 0;
      border-left: 6px solid transparent;
      border-right: 6px solid transparent;
      border-bottom: 6px solid #00AA13;
    }

    .devvn_readmore_flatsome_less:before {
      display: none;
    }
  </style>
  <script>
    (function($) {
      $(document).ready(function() {
        $(window).on('load', function() {
          if ($('.div-mo-ta').length > 0) {
            var wrap = $('.div-mo-ta');
            var current_height = wrap.height();
            var your_height = 300;
            if (current_height > your_height) {
              wrap.css('height', your_height + 'px');
              wrap.append(function() {
                return '<div class="devvn_readmore_flatsome devvn_readmore_flatsome_more"><a title="Xem thêm" href="javascript:void(0);">Xem thêm</a></div>';
              });
              wrap.append(function() {
                return '<div class="devvn_readmore_flatsome devvn_readmore_flatsome_less" style="display: none;"><a title="Xem thêm" href="javascript:void(0);">Thu gọn</a></div>';
              });
              $('body').on('click', '.devvn_readmore_flatsome_more', function() {
                wrap.removeAttr('style');
                $('body .devvn_readmore_flatsome_more').hide();
                $('body .devvn_readmore_flatsome_less').show();
              });
              $('body').on('click', '.devvn_readmore_flatsome_less', function() {
                wrap.css('height', your_height + 'px');
                $('body .devvn_readmore_flatsome_less').hide();
                $('body .devvn_readmore_flatsome_more').show();
              });
            }
          }
        });
      });
    })(jQuery);
  </script>
  <style>
    .phone-mobile {
      display: none;
    }

    .giuseart-nav {
      position: fixed;
      left: 13px;
      background: #fff;
      border-radius: 5px;
      width: auto;
      z-index: 150;
      bottom: 50px;
      padding: 10px 0;
      border: 1px solid #f2f2f2;
    }

    .giuseart-nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .giuseart-nav ul li {
      list-style: none !important;
    }

    .giuseart-nav ul>li a {
      border: none;
      padding: 3px;
      display: block;
      border-radius: 5px;
      text-align: center;
      font-size: 10px;
      line-height: 15px;
      color: #515151;
      font-weight: 700;
      max-width: 72.19px;
      max-height: 54px;
      text-decoration: none;
    }

    .giuseart-nav ul>li .chat_animation {
      display: none
    }

    .giuseart-nav ul>li a i.ticon-heart {
      background: url(http://fashion3.ninhbinhweb.biz/wp-content/uploads/2020/03/icon-map.png) no-repeat;
      background-size: contain;
      width: 36px;
      height: 36px;
      display: block;
    }

    .giuseart-nav ul>li a i.ticon-zalo-circle2 {
      background: url(http://fashion3.ninhbinhweb.biz/wp-content/uploads/2020/03/icon-zalo-circle2.png.pagespeed.ce_.iUc59tfITH.png) no-repeat;
      background-size: contain;
      width: 36px;
      height: 36px;
      display: block;
    }

    .giuseart-nav li .button {
      background: transparent;
    }

    .giuseart-nav ul>li a i.ticon-angle-up {
      background: url(http://fashion3.ninhbinhweb.biz/wp-content/uploads/2020/03/icon-angle-up.png.pagespeed.ce_.NGU5VowWiC.png) no-repeat;
      background-size: contain;
      width: 36px;
      height: 36px;
      display: block;
    }

    .giuseart-nav ul>li a i {
      width: 33px;
      height: 33px;
      display: block;
      margin: auto;
    }

    .giuseart-nav ul li .button .btn_phone_txt {
      position: relative;
      top: 35px;
      font-size: 10px;
      font-weight: bold;
      text-transform: none;
    }

    .giuseart-nav ul li .button .phone_animation i {
      display: inline-block;
      width: 27px;
      font-size: 26px;
      margin-top: 12px;
    }

    .giuseart-nav ul>li a.chat_animation svg {
      margin: -13px 0 -20px;
    }

    .giuseart-nav ul>li a i.ticon-messenger {
      background: url(http://fashion3.ninhbinhweb.biz/wp-content/uploads/2020/03/icon-messenger.png.pagespeed.ce_.sSebhnGGgP.png) no-repeat;
      background-size: contain;
      width: 36px;
      height: 36px;
      display: block;
    }

    .giuseart-nav ul li .button .phone_animation i {
      display: inline-block;
      width: 27px;
      font-size: 26px;
      margin-top: 12px;
    }

    .giuseart-nav ul>li a i.ticon-chat-sms {
      background: url(http://fashion3.ninhbinhweb.biz/wp-content/uploads/2020/03/icon-sms-1.jpg) no-repeat;
      background-size: contain;
      width: 38px;
      height: 36px;
      display: block;
    }

    .giuseart-nav ul>li a i.icon-phone-w {
      background: url(https://namhaauto.vn/wp-content/uploads/2021/04/icon-phone-w.png) no-repeat;
      background-size: contain;
    }

    .giuseart-nav ul li .button .btn_phone_txt {
      position: relative;
    }

    @media only screen and (max-width: 600px) {
      .giuseart-nav li .chat_animation {
        display: block !Important
      }

      .giuseart-nav li .button .phone_animation {
        box-shadow: none;
        position: absolute;
        top: -16px;
        left: 50%;
        transform: translate(-50%, 0);
        width: 50px;
        height: 50px;
        border-radius: 100%;
        background: #6cb917;
        line-height: 15px;
        border: 2px solid white;
      }

      .giuseart-nav ul>li a {
        padding: 0;
        margin: 0 auto
      }

      .giuseart-nav {
        background: white;
        width: 100%;
        border-radius: 0;
        color: #fff;
        height: 60px;
        line-height: 50px;
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: 999;
        padding: 5px;
        margin: 0;
        box-shadow: 0 4px 10px 0 #000;
      }

      .giuseart-nav li {
        float: left;
        width: 20%;
        list-style: none;
        height: 50px;
      }

      .phone-mobile {
        display: block !important
      }
    }
  </style>
  <div class="giuseart-nav">
    <ul>
      <li><a href="https://www.google.com/maps/place/GiuseArt+-+Thi%E1%BA%BFt+k%E1%BA%BF+%C4%91%E1%BB%93+h%E1%BB%8Da+v%C3%A0+website+chuy%C3%AAn+nghi%E1%BB%87p/@20.3534004,105.894187,17z/data=!3m1!4b1!4m5!3m4!1s0x3135acc6066cb537:0x4fc1c256d7cdb4d!8m2!3d20.3533954!4d105.8963757" rel="nofollow" target="_blank"><i class="ticon-heart"></i>Tìm đường</a></li>
      <li><a href="https://zalo.me/0972939830" rel="nofollow" target="_blank"><i class="ticon-zalo-circle2"></i>Chat Zalo</a></li>
      <li class="phone-mobile">
        <a href="tel:0972939830" rel="nofollow" class="button">
          <span class="phone_animation animation-shadow">
            <i class="icon-phone-w" aria-hidden="true"></i>
          </span>
          <span class="btn_phone_txt">Gọi điện</span>
        </a>
      </li>
      <li><a href="https://www.messenger.com/t/joseph.thien.75" rel="nofollow" target="_blank"><i class="ticon-messenger"></i>Messenger</a></li>
      <li><a href="sms:0972939830" class="chat_animation">
          <i class="ticon-chat-sms" aria-hidden="true" title="Nhắn tin sms"></i>
          Nhắn tin SMS</a>
      </li>
      <li class="to-top-pc">
        <a href="#" rel="nofollow">
          <i class="ticon-angle-up" aria-hidden="true" title="Quay lên trên"></i>
        </a>
      </li>
    </ul>
  </div>

  <?php
  include("includes/include_footer.php");
  ?>