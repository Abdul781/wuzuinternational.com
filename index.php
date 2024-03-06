<?php
$title = "WUZU International: Top-Quality Embroidery Machines ";
$description = "Discover WUZU International, your one-stop shop for top-notch embroidery machines in India. Explore our comprehensive range of computerized machines, including BECS series models, and find the perfect fit for your needs.";
$keywords = "embroidery machine India, WUZU International, BECS embroidery machine, computerized embroidery machine, buy embroidery machine India";
include("include/header.php")
?>

<main>
  <section class="swiper-container js-swiper-slider slideshow full-width_padding" data-settings='{
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": 1,
        "effect": "fade",
        "loop": true,
        "pagination": {
          "el": ".slideshow-pagination",
          "type": "bullets",
          "clickable": true
        }
      }'>
    <div class="swiper-wrapper">
      <div class="swiper-slide" >
        <div class="overflow-hidden position-relative h-100">
          <div class="slideshow-bg" style="background-color: #f5e6e0;">
            <img loading="lazy" src="<?= $imagecdn ?>images/products/slider.jpg" width="1761" height="778" alt="Pattern" class="slideshow-bg__img object-fit-cover">
          </div>
          <!-- <p class="slideshow_markup font-special text-uppercase position-absolute end-0 bottom-0">Summer</p> -->
          <div class="slideshow-character position-absolute bottom-0 pos_right-center">
            <!-- <img loading="lazy" src="<?= $imagecdn ?>images/products/pro5.jpg" width="400" height="733" alt="Woman Fashion 1" class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 h-auto w-auto"> -->
            </div>
          </div>
          <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
            <h3 class="text-white fw-bold">Trust is Our Business</h3>
            <h2 class="text-uppercase text-white h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">WUZU International: Embroidery Machines for the</h2>
            <h2 class="text-uppercase h1 text-white fw-bold animate animate_fade animate_btt animate_delay-5">Discerning Artisan</h2>
          </div>
        </div>
      </div><!-- /.slideshow-item -->

      <div class="swiper-slide full-width_border border-1" style="border-color: #f5e6e0;">
        <div class="overflow-hidden position-relative h-100">
          <div class="slideshow-bg" style="background-color: #f5e6e0;">
            <img loading="lazy" src="<?= $imagecdn ?>images/slideshow-pattern.png" width="1761" height="778" alt="Pattern" class="slideshow-bg__img object-fit-cover">
          </div>
          <div class="slideshow-character position-absolute bottom-0 pos_right-center">
            <img loading="lazy" src="<?= $imagecdn ?>images/slideshow-character2.png" width="400" height="690" alt="Woman Fashion 2" class="slideshow-character__img animate animate_fade animate_rtl animate_delay-10 h-auto w-auto">
          </div>
          <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
            <h6 class="text_dash text-uppercase color_default1 fs-base fw-medium animate animate_fade animate_btt animate_delay-3">
              Summer 2024</h6>
            <h2 class="text-uppercase h1 fw-bold animate animate_fade animate_btt animate_delay-3">Explore millions of offerings tailored to your business needs
            </h2>
            <a href="#" class="btn-link btn-link_lg default-underline text-uppercase fw-medium animate animate_fade animate_btt animate_delay-3">Discover
              More</a>
          </div>
        </div>
      </div><!-- /.slideshow-item -->
    </div><!-- /.slideshow-wrapper js-swiper-slider -->

    <div class="container">
      <div class="slideshow-pagination d-flex align-items-center position-absolute bottom-0 mb-5"></div>
      <!-- /.products-pagination -->
    </div><!-- /.container -->

  </section><!-- /.slideshow -->

  <div class="mb-3 pb-3 mb-md-4 pb-md-4 mb-xl-5 pb-xl-5"></div>
  <div class="pb-1"></div>

  <!-- Shop by collection -->
  <section class="collections-grid collections-grid_masonry" id="section-collections-grid_masonry">
    <div class="container h-md-100">
      <div class="row h-md-100">
        <div class="col-lg-6 h-md-100">
          <div class="collection-grid__item position-relative h-md-100">
            <div class="background-img" style="background-image: url('<?= $imagecdn ?>images/products/product_1-1.jpg');"></div>
            <!-- <div class="content_abs content_bottom content_left content_bottom-md content_left-md">
              <p class="text-uppercase mb-1">Hot List</p>
              <h3 class="text-uppercase"><strong>Women</strong> Collection</h3>
              <a href="#" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
            </div> -->
          </div>
        </div><!-- /.col-md-6 -->

        <div class="col-lg-6 d-flex flex-column">
          <div class="collection-grid__item position-relative flex-grow-1 mb-lg-4">
            <div class="background-img" style="background-image: url('<?= $imagecdn ?>images/products/p5.jpg');"></div>
            <!-- <div class="content_abs content_bottom content_left content_bottom-md content_left-md">
              <p class="text-uppercase mb-1">Hot List</p>
              <h3 class="text-uppercase"><strong>Men</strong> Collection</h3>
              <a href="#" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
            </div> -->
          </div>
          <div class="position-relative flex-grow-1 mt-lg-1">
            <div class="row h-md-100">
              <div class="col-md-6 h-md-100">
                <div class="collection-grid__item h-md-100 position-relative">
                  <div class="background-img" style="background-image: url('<?= $imagecdn ?>images/products/p6.jpg');"></div>
                  <!-- <div class="content_abs content_bottom content_left content_bottom-md content_left-md">
                    <p class="text-uppercase mb-1">Hot List</p>
                    <h3 class="text-uppercase"><strong>Kids</strong> Collection</h3>
                    <a href="#" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
                  </div> -->
                </div>
              </div>
              <div class="col-md-6 h-md-100">
                <div class="collection-grid__item h-md-100 position-relative">
                  <div class="background-img" style="background-image: url('<?= $imagecdn ?>images/products/p7.jpg');"></div>
                  <!-- <div class="content_abs content_bottom content_left content_bottom-md content_left-md">
                    <p class="text-uppercase mb-1">Hot List</p>
                    <h3 class="text-uppercase"><strong>Kids</strong> Collection</h3>
                    <a href="#" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.col-md-6 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.collections-grid collections-grid_masonry -->

  <div class="mb-4 pb-4 mb-xl-5 pb-xl-5"></div>

  <section class="products-grid container">
    <h2 class="section-title text-uppercase text-center mb-1 mb-md-3 pb-xl-2 mb-xl-4">Our
      <strong class="color_default1">Products</strong>
    </h2>

    <div class="tab-content pt-2" id="collections-tab-content">
      <div class="tab-pane fade show active" id="collections-tab-1" role="tabpanel" aria-labelledby="collections-tab-1-trigger">
        <div class="row">
          <div class="col-6 col-md-4">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
              <div class="pc__img-wrapper">
                <a href="#">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/pro1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/pro2.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                </a>
                <button class="pc__atc view_btn btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"  title="View Now">View Now</button>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category">Version：2019-02</p>
                <div class="d-flex product-card__price justify-content-between">
                  <h5 class="pc__title fw-bold"><a href="#" title="Computerized Embroidery Machine">Computerized Embroidery Machine</a></h5>
                  <span class="money price fw-bold">BECS-285A</span>
                </div>
                <div class="product-card__price d-flex flex-column">
                  <h6 class="pc__title">Features</h5>
                    <ul>
                      <li>Advanced Computerized Technology</li>
                      <li>High-Speed Performance</li>
                      <li>Precision Embroidery</li>
                    </ul>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_heart"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
              <div class="pc__img-wrapper">
                <a href="#">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/pro2.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/pro3.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                </a>
                <button class="pc__atc view_btn btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium"  title="View Now">View Now</button>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category">Version：2019-02</p>
                <div class="d-flex product-card__price justify-content-between">
                  <h5 class="pc__title fw-bold"><a href="#" title="Computerized Embroidery Machine">Computerized Embroidery Machine</a></h5>
                  <span class="money price fw-bold">BECS-528</span>
                </div>
                <div class="product-card__price d-flex flex-column">
                  <h6 class="pc__title">Features</h5>
                    <ul>
                      <li>User-Friendly Interface</li>
                      <li>Versatile Stitch Options</li>
                      <li>Enhanced Embroidery Designs</li>
                    </ul>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_heart"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
              <div class="pc__img-wrapper">
                <a href="#">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/pro3.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/pro4.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                </a>
                <button class="pc__atc view_btn btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium"  title="View Now">View Now</button>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category">Version：2020-04</p>
                <div class="d-flex product-card__price justify-content-between">
                  <h5 class="pc__title fw-bold"><a href="#" title="Computerized Embroidery Machine Controller">Computerized Embroidery Machine Controller</a></h5>
                  <span class="money price fw-bold">BECS-A15</span>
                </div>
                <div class="product-card__price d-flex flex-column">
                  <h6 class="pc__title">Features</h5>
                    <ul>
                      <li>Intuitive Control System</li>
                      <li>Automated Thread Management</li>
                      <li>Seamless Operation</li>
                    </ul>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_heart"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
              <div class="pc__img-wrapper">
                <a href="#">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/pro4.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/pro5.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                </a>
                <button class="pc__atc view_btn btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium"  title="View Now">View Now</button>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category">Version：2019-04</p>
                <div class="d-flex product-card__price justify-content-between">
                  <h5 class="pc__title fw-bold"><a href="#" title="Computerized Embroidery Machine">Computerized Embroidery Machine</a></h5>
                  <span class="money price fw-bold">BECS-A18/A58</span>
                </div>
                <div class="product-card__price d-flex flex-column">
                  <h6 class="pc__title">Features</h5>
                    <ul>
                      <li>Multi-Language Support</li>
                      <li>Large Embroidery Area</li>
                      <li>Quick Change Hoops</li>
                    </ul>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_heart"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
              <div class="pc__img-wrapper">
                <a href="#">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/pro5.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/pro6.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                </a>
                <button class="pc__atc view_btn btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium"  title="View Now">View Now</button>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category">Version：2021-01</p>
                <div class="d-flex product-card__price justify-content-between">
                  <h5 class="pc__title fw-bold"><a href="#" title="Computerized Embroidery Machine">Computerized Embroidery Machine</a></h5>
                  <span class="money price fw-bold">BECS-A68</span>
                </div>
                <div class="product-card__price d-flex flex-column">
                  <h6 class="pc__title">Features</h5>
                    <ul>
                      <li>Innovative Design Features</li>
                      <li>Customizable Embroidery Patterns</li>
                      <li>Built-in Design Library</li>
                    </ul>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_heart"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
              <div class="pc__img-wrapper">
                <a href="#">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/pro6.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/pro7.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                </a>
                <button class="pc__atc view_btn btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium"  title="View Now">View Now</button>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category">Version：2019-02</p>
                <div class="d-flex product-card__price justify-content-between">
                  <h5 class="pc__title fw-bold"><a href="#" title="Computerized Embroidery Machine">Computerized Embroidery Machine</a></h5>
                  <span class="money price fw-bold">BECS-A98</span>
                </div>
                <div class="product-card__price d-flex flex-column">
                  <h6 class="pc__title">Features</h5>
                    <ul>
                      <li>High-Resolution Display</li>
                      <li>Smart Thread Sensors</li>
                      <li>Time-Saving Embroidery</li>
                    </ul>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_heart"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
              <div class="pc__img-wrapper">
                <a href="#">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/pro7.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/pro8.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                </a>
                <button class="pc__atc view_btn btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium"  title="View Now">View Now</button>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category">Version: 2019-02</p>
                <div class="d-flex product-card__price justify-content-between">
                  <h5 class="pc__title fw-bold"><a href="#" title="Computerized Control System for Embroidery Machine">Computerized Control System for Embroidery Machine</a></h5>
                  <span class="money price fw-bold">BECS-D19</span>
                </div>
                <div class="product-card__price d-flex flex-column">
                  <h6 class="pc__title">Features</h5>
                    <ul>
                      <li>Comprehensive Control System</li>
                      <li>Compatibility with Various Fabrics</li>
                      <li>Consistent Stitch Quality</li>
                    </ul>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_heart"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
              <div class="pc__img-wrapper">
                <a href="#">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/pro8.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/pro9.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                </a>
                <button class="pc__atc view_btn btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium"  title="View Now">View Now</button>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category">Version：2019-02</p>
                <div class="d-flex product-card__price justify-content-between">
                  <h5 class="pc__title fw-bold"><a href="#" title="Computerized Control System for Embroidery Machine">Computerized Control System for Embroidery Machine</a></h5>
                  <span class="money price fw-bold">BECS-D56</span>
                </div>
                <div class="product-card__price d-flex flex-column">
                  <h6 class="pc__title">Features</h5>
                    <ul>
                      <li>Modular Design for Flexibility</li>
                      <li>Reliable Thread Tension Control</li>
                      <li>Efficient Production Workflow</li>
                    </ul>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_heart"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="product-card mb-3 mb-md-4 mb-xxl-5">
              <div class="pc__img-wrapper">
                <a href="#">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/pro9.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                  <img loading="lazy" src="<?= $imagecdn ?>images/products/p6.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                </a>
                <button class="pc__atc view_btn btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium"  title="View Now">View Now</button>
              </div>

              <div class="pc__info position-relative">
                <p class="pc__category">Version：2022-01</p>
                <div class="d-flex product-card__price justify-content-between">
                  <h5 class="pc__title fw-bold"><a href="#" title="Computerized Embroidery Machine">Computerized Embroidery Machine</a></h5>
                  <span class="money price fw-bold">BECS-MATE-A8</span>
                </div>
                <div class="product-card__price d-flex flex-column">
                  <h6 class="pc__title">Features</h5>
                    <ul>
                      <li>State-of-the-Art Connectivity</li>
                      <li>Real-Time Monitoring</li>
                      <li>Enhanced Design Editing Tools</li>
                    </ul>
                </div>

                <button class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                  <svg width="16" height="16" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_heart"></use>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
        <div class="text-center mt-2">
          <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="#">Discover
            More</a>
        </div>
      </div>
    </div><!-- /.tab-content pt-2 -->
  </section><!-- /.products-grid -->


  <div class="mb-3 mb-xl-5 pb-1 pb-xl-5"></div>


  <section class="deal-timer position-relative d-flex align-items-end overflow-hidden" style="background-color: #ebebeb;">
    <div class="background-img" style="background-image: url('<?= $imagecdn ?>images/products/stream.jpg');"></div>

    <div class="deal-timer-wrapper container position-relative">
      <div class="deal-timer__content pb-2 mb-3 pb-xl-5 mb-xl-3 mb-xxl-5">
        <h3 class="h1 text-uppercase"><strong>Streamline</strong> ordering from search to fulfillment, all in one place</h3>
      </div>
    </div><!-- /.deal-timer-wrapper -->
  </section><!-- /.deal-timer -->


  <div class="mb-3 mb-xl-5 pb-1 pb-xl-5"></div>


  <section class="grid-banner container mb-3">
    <div class="row">
      <div class="col-md-6">
        <div class="grid-banner__item grid-banner__item_rect position-relative mb-3">
          <div class="background-img" style="background-image: url('<?= $imagecdn ?>images/products/pro8.jpg');"></div>
          <!-- <div class="content_abs content_bottom content_left content_bottom-lg content_left-lg">
            <h6 class="text-uppercase text-white fw-medium mb-3">Starting At $19</h6>
            <h3 class="text-white mb-3">Women's T-Shirts</h3>
            <a href="#" class="btn-link default-underline text-uppercase text-white fw-medium">Shop Now</a>
          </div> -->
        </div>
      </div><!-- /.col-md-6 -->

      <div class="col-md-6">
        <div class="grid-banner__item grid-banner__item_rect position-relative mb-3">
          <div class="background-img" style="background-image: url('<?= $imagecdn ?>images/products/p5.jpg');"></div>
          <!-- <div class="content_abs content_bottom content_left content_bottom-lg content_left-lg">
            <h6 class="text-uppercase fw-medium mb-3">Starting At $39</h6>
            <h3 class="mb-3">Men's Sportswear</h3>
            <a href="#" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
          </div> -->
        </div>
      </div><!-- /.col-md-6 -->
    </div><!-- /.row -->
  </section><!-- /.grid-banner container -->


  <div class="mb-5 pb-1 pb-xl-4"></div>


  <section class="products-carousel container">
    <h2 class="section-title text-uppercase text-center mb-4 pb-xl-2 mb-xl-4">Products <strong class="color_default1">List</strong></h2>

    <div id="product_carousel" class="position-relative">
      <div class="swiper-container js-swiper-slider" data-settings='{
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 4,
            "slidesPerGroup": 4,
            "effect": "none",
            "loop": true,
            "pagination": {
              "el": "#product_carousel .products-pagination",
              "type": "bullets",
              "clickable": true
            },
            "navigation": {
              "nextEl": "#product_carousel .products-carousel__next",
              "prevEl": "#product_carousel .products-carousel__prev"
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "slidesPerGroup": 2,
                "spaceBetween": 14
              },
              "768": {
                "slidesPerView": 3,
                "slidesPerGroup": 3,
                "spaceBetween": 24
              },
              "992": {
                "slidesPerView": 4,
                "slidesPerGroup": 1,
                "spaceBetween": 30
              }
            }
          }'>
        <div class="swiper-wrapper">
          <div class="swiper-slide product-card">
            <div class="pc__img-wrapper">
              <a href="#">
                <img loading="lazy" src="<?= $imagecdn ?>images/products/l1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
              </a>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"  title="Add To Cart">Add To Cart</button>
            </div>

          </div>
          <div class="swiper-slide product-card">
            <div class="pc__img-wrapper">
              <a href="#">
                <img loading="lazy" src="<?= $imagecdn ?>images/products/l2.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
              </a>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"  title="Add To Cart">Add To Cart</button>
            </div>

          </div>
          <div class="swiper-slide product-card">
            <div class="pc__img-wrapper">
              <a href="#">
                <img loading="lazy" src="<?= $imagecdn ?>images/products/l3.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
              </a>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"  title="Add To Cart">Add To Cart</button>
            </div>

          </div>
          <div class="swiper-slide product-card">
            <div class="pc__img-wrapper">
              <a href="#">
                <img loading="lazy" src="<?= $imagecdn ?>images/products/l4.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
              </a>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"  title="Add To Cart">Add To Cart</button>
            </div>

          </div>
          <div class="swiper-slide product-card">
            <div class="pc__img-wrapper">
              <a href="#">
                <img loading="lazy" src="<?= $imagecdn ?>images/products/l5.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
              </a>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"  title="Add To Cart">Add To Cart</button>
            </div>

          </div>
          <div class="swiper-slide product-card">
            <div class="pc__img-wrapper">
              <a href="#">
                <img loading="lazy" src="<?= $imagecdn ?>images/products/l6.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
              </a>
              <button class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"  title="Add To Cart">Add To Cart</button>
            </div>

          </div>

        </div><!-- /.swiper-wrapper -->
      </div><!-- /.swiper-container js-swiper-slider -->

      <div class="products-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
        <svg width="25" height="25" viewbox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
          <use href="#icon_prev_md"></use>
        </svg>
      </div><!-- /.products-carousel__prev -->
      <div class="products-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
        <svg width="25" height="25" viewbox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
          <use href="#icon_next_md"></use>
        </svg>
      </div><!-- /.products-carousel__next -->

      <div class="products-pagination mt-4 mb-5 d-flex align-items-center justify-content-center"></div>
      <!-- /.products-pagination -->
    </div><!-- /.position-relative -->

  </section>

  <section class="instagram container">
    <h2 class="section-title text-uppercase text-center mb-4 pb-xl-2 mb-xl-4">Gallery</h2>

    <div class="row row-cols-3 row-cols-md-4 row-cols-xl-6">
      <div class="instagram__tile">
        <a href="https://instagram.com" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
          <img loading="lazy" class="instagram__img" src="<?= $imagecdn ?>images/products/pro1.jpg" width="230" height="230" alt="Insta image 1">
        </a>
      </div>
      <div class="instagram__tile">
        <a href="https://instagram.com" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
          <img loading="lazy" class="instagram__img" src="<?= $imagecdn ?>images/products/pro2.jpg" width="230" height="230" alt="Insta image 2">
        </a>
      </div>
      <div class="instagram__tile">
        <a href="https://instagram.com" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
          <img loading="lazy" class="instagram__img" src="<?= $imagecdn ?>images/products/pro3.jpg" width="230" height="230" alt="Insta image 3">
        </a>
      </div>
      <div class="instagram__tile">
        <a href="https://instagram.com" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
          <img loading="lazy" class="instagram__img" src="<?= $imagecdn ?>images/products/pro4.jpg" width="230" height="230" alt="Insta image 4">
        </a>
      </div>
      <div class="instagram__tile">
        <a href="https://instagram.com" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
          <img loading="lazy" class="instagram__img" src="<?= $imagecdn ?>images/products/pro5.jpg" width="230" height="230" alt="Insta image 5">
        </a>
      </div>
      <div class="instagram__tile">
        <a href="https://instagram.com" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
          <img loading="lazy" class="instagram__img" src="<?= $imagecdn ?>images/products/pro6.jpg" width="230" height="230" alt="Insta image 6">
        </a>
      </div>
      <div class="instagram__tile">
        <a href="https://instagram.com" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
          <img loading="lazy" class="instagram__img" src="<?= $imagecdn ?>images/products/pro7.jpg" width="230" height="230" alt="Insta image 7">
        </a>
      </div>
      <div class="instagram__tile">
        <a href="https://instagram.com" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
          <img loading="lazy" class="instagram__img" src="<?= $imagecdn ?>images/products/pro8.jpg" width="230" height="230" alt="Insta image 8">
        </a>
      </div>
      <div class="instagram__tile">
        <a href="https://instagram.com" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
          <img loading="lazy" class="instagram__img" src="<?= $imagecdn ?>images/products/pro9.jpg" width="230" height="230" alt="Insta image 9">
        </a>
      </div>
      <div class="instagram__tile">
        <a href="https://instagram.com" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
          <img loading="lazy" class="instagram__img" src="<?= $imagecdn ?>images/products/l1.jpg" width="230" height="230" alt="Insta image 10">
        </a>
      </div>
      <div class="instagram__tile">
        <a href="https://instagram.com" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
          <img loading="lazy" class="instagram__img" src="<?= $imagecdn ?>images/products/l2.jpg" width="230" height="230" alt="Insta image 11">
        </a>
      </div>
      <div class="instagram__tile">
        <a href="https://instagram.com" target="_blank" class="position-relative overflow-hidden d-block effect overlay-plus">
          <img loading="lazy" class="instagram__img" src="<?= $imagecdn ?>images/products/l3.jpg" width="230" height="230" alt="Insta image 12">
        </a>
      </div>
    </div>
  </section><!-- /.instagram container -->


  <div class="mb-4 pb-4 pb-xl-5 mb-xl-5"></div>

</main>



<?php
include("include/footer.php")
?>