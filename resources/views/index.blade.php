@push('js')
<script type="text/javascript">

    var tpj=jQuery;

    var revapi7;
    tpj(document).ready(function() {
        if(tpj("#rev_slider").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider");
        }else{
            revapi7 = tpj("#rev_slider").show().revolution({
                sliderType:"standard",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    onHoverStop:"on",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 50,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style:"gyges",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0
                        }
                    }
                    ,
                    bullets: {
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        style:"hephaistos",
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        direction:"horizontal",
                        h_align:"center",
                        v_align:"bottom",
                        h_offset:0,
                        v_offset:30,
                        space:5,
                        tmp:''
                    }
                },
                gridwidth:1170,
                gridheight:600,
                lazyType:"smart",
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
    });
</script>
@endpush

@extends('layouts.inner')

@section('content')
    <div class="content-container no-padding">
        <div class="container-full">
            <div class="main-content">

                <div class="container">
                    <div class="row row-fluid pt-6 pb-6">
                        <div class="text-center col-sm-3">
                            <div class="box-ft box-ft-5 black">
                                <img src="{{ asset('/img/phone/Xiaomi_radio.PNG') }}" alt="">
                                <a href="#">
                                    <span class="bof-tf-title-wrap">
                                        <span class="bof-tf-title-wrap-2">
                                            <span class="bof-tf-title"></span>
                                            <span class="bof-tf-sub-title"></span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box-ft box-ft-5">
                                <img src="/img/phone/xiaomi-mi-band.jpg" alt="">
                                <a href="#">
											<span class="bof-tf-title-wrap">
												<span class="bof-tf-title-wrap-2">
													<span class="bof-tf-title"></span>
													<span class="bof-tf-sub-title">

													</span>
												</span>
											</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="box-ft box-ft-5 mb-3">
                                <img src="/img/phone/UFS_main.jpg" alt="">
                                <a href="#">
											<span class="bof-tf-title-wrap">
												<span class="bof-tf-title-wrap-2">
													<span class="bof-tf-title"></span>
													<span class="bof-tf-sub-title"></span>
												</span>
											</span>
                                </a>
                            </div>
                            <div class="box-ft box-ft-5">
                                <img src="/img/phone/Lenovo_proec.jpg" alt="">
                                <a href="#">
											<span class="bof-tf-title-wrap">
												<span class="bof-tf-title-wrap-2">
													<span class="bof-tf-title"></span>
													<span class="bof-tf-sub-title"></span>
												</span>
											</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row row-fluid mb-10">
                        <div class="col-sm-12">
                            <div class="caroufredsel product-slider nav-position-center" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
                                <div class="product-slider-title">
                                    <h3 class="el-heading">НОВОЕ ПОСТУПЛЕНИЕ</h3>
                                </div>
                                <div class="caroufredsel-wrap">
                                    <div class="commerce columns-4">
                                        <ul class="products columns-4" data-columns="4">
                                            <li class="product product-no-border style-2">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <span class="onsale">Скидка</span>
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/phone/xiaomi_mi_power_20000.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/phone/xiaomi_mi_power_20000.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Xiaomi Mi Power Bank 20000 mAh</a>
                                                                    </h3>
                                                                    <div class="info-price">
																				<span class="price">
																					<del><span class="amount">$25.50</span></del> <ins><span class="amount">$22.00</span></ins>
																				</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product product-no-border style-2">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/phone/meizu_mx6.jpeg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/phone/meizu_mx6.jpeg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Meizu MX6</a>
                                                                    </h3>
                                                                    <div class="info-price">
																				<span class="price">
																					<span class="amount">$250.95</span>
																				</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product product-no-border style-2">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/phone/Xiaomi-Mi-Max.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/phone/Xiaomi-Mi-Max.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Xiaomi Mi Max</a>
                                                                    </h3>
                                                                    <div class="info-price">
																				<span class="price">
																					<span class="amount">$200.50</span>
																				</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product product-no-border style-2">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/phone/xiaomi_redmi_note_4.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/phone/xiaomi_redmi_note_4.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Wireless Microphone</a>
                                                                    </h3>
                                                                    <div class="info-price">
																				<span class="price">
																					<span class="amount">&pound;17.75</span>
																				</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product product-no-border style-2">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328alt.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Shure Microphone</a>
                                                                    </h3>
                                                                    <div class="info-price">
																				<span class="price">
																					<span class="amount">&pound;10.75</span>
																				</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product product-no-border style-2">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <span class="onsale">Скидка!</span>
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328alt.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Beats Studio</a>
                                                                    </h3>
                                                                    <div class="info-price">
																				<span class="price">
																					<del><span class="amount">£20.50</span></del>
																					<ins><span class="amount">£19.00</span></ins>
																				</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product product-no-border style-2">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328alt.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Urbeats</a>
                                                                    </h3>
                                                                    <div class="info-price">
																				<span class="price">
																					<span class="amount">£12.00</span>
																					–
																					<span class="amount">£20.00</span>
																				</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product product-no-border style-2">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328alt.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Magic Mouse</a>
                                                                    </h3>
                                                                    <div class="info-price">
																				<span class="price">
																					<span class="amount">&pound;32.00</span>
																				</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product product-no-border style-2">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328alt.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Hans Wegner Shell Chair</a>
                                                                    </h3>
                                                                    <div class="info-price">
																				<span class="price">
																					<span class="amount">&pound;10.75</span>
																				</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product product-no-border style-2">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328alt.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Jens Risom Lounge</a>
                                                                    </h3>
                                                                    <div class="info-price">
																				<span class="price">
																					<span class="amount">&pound;17.45</span>
																				</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product product-no-border style-2">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328alt.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Eero Saarinen Oval Dining</a>
                                                                    </h3>
                                                                    <div class="info-price">
																				<span class="price">
																					<span class="amount">&pound;15.05</span>
																				</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product product-no-border style-2">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328alt.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Warren Platner Dining</a>
                                                                    </h3>
                                                                    <div class="info-price">
																				<span class="price">
																					<span class="amount">&pound;10.95</span>
																				</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#" class="caroufredsel-prev"></a>
                                    <a href="#" class="caroufredsel-next"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-full">
                    <div class="row row-fluid custom-bg-2 mb-5">
                        <div class="container">
                            <div class="col-sm-7 pt-12">
                                <p class="white italic size-15 mb-0">Connects wirelessly</p>
                                <h2 class="custom_heading white mt-0">Immaculate sound</h2>
                                <p class="white">Lorem ipsum dolor sit amet, natum aeterno sanctus ei per, fastidii torquatos nam ex. Amet vitae prodesset ut qui, labores civibus appellantur pri ei, pro cu tation dissentias. An per quando ornatus platonem, suas prodesset vel ad. Quas laoreet cotidieque cum ut, vix et insolens explicari corrumpit. Simul commodo et has, te tempor recusabo mea, eam sumo fabulas definiebas eu. No scripta legendos liberavisse vis.</p>
                            </div>
                            <div class="col-sm-5 pb-3">
                                <div class="special-product">
                                    <div class="special-product-wrap">
                                        <div class="special-product-image">
                                            <a href="#">
                                                <img width="470" height="470" src="/img/thumb_470x470.jpg" alt="special_product"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row row-fluid mt-2">
                        <div class="col-sm-12">
                            <div data-layout="masonry" data-masonry-column="4" class="commerce products-masonry masonry">
                                <div class="masonry-filter">

                                    <div class="products-masonry-wrap">
                                        <ul class="products masonry-products row masonry-wrap">
                                            <li class="product masonry-item product-no-border style-2 col-md-3 col-sm-6 maecenas donec">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328alt.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Schultz Petal Dining</a>
                                                                    </h3>
                                                                    <div class="info-price">
																			<span class="price">
																				<span class="amount">&pound;17.45</span>
																			</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product masonry-item product-no-border style-2 col-md-3 col-sm-6 nulla maecenas">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328alt.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Jens Risom Lounge</a>
                                                                    </h3>
                                                                    <div class="info-price">
																			<span class="price">
																				<span class="amount">&pound;17.45</span>
																			</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product masonry-item product-no-border style-2 col-md-3 col-sm-6 nulla maecenas">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328alt.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Hans Wegner Shell Chair</a>
                                                                    </h3>
                                                                    <div class="info-price">
																			<span class="price">
																				<span class="amount">&pound;10.75</span>
																			</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product masonry-item product-no-border style-2 col-md-3 col-sm-6 maecenas donec">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328alt.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Jaime Hayon Ro Chair</a>
                                                                    </h3>
                                                                    <div class="info-price">
																			<span class="price">
																				<span class="amount">&pound;32.00</span>
																			</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product masonry-item product-no-border style-2 col-md-3 col-sm-6 maecenas donec">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328alt.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Saarinen Womb Chair</a>
                                                                    </h3>
                                                                    <div class="info-price">
																			<span class="price">
																				<span class="amount">&pound;123.00</span>
																			</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product masonry-item product-no-border style-2 col-md-3 col-sm-6 maecenas">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328alt.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">

                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Citterio Grand Repos</a>
                                                                    </h3>
                                                                    <div class="info-price">
																			<span class="price">
																				<span class="amount">£12.00</span>
																				–
																				<span class="amount">£20.00</span>
																			</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product masonry-item product-no-border style-2 col-md-3 col-sm-6 nulla maecenas donec">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <span class="onsale">Скидка!</span>
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328alt.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">


                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Arne Jacobsen Oxford Chair</a>
                                                                    </h3>
                                                                    <div class="info-price">
																			<span class="price">
																				<del><span class="amount">$20.50</span></del>
																				<ins><span class="amount">$19.00</span></ins>
																			</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                            <li class="product masonry-item product-no-border style-2 col-md-3 col-sm-6 nulla maecenas">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <span class="onsale">Скидка!</span>
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328.jpg" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="shop-detail-1.html"><img width="450" height="450" src="/img/products/product_328x328alt.jpg" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-meta clearfix">


                                                                </div>
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="shop-detail-1.html">Charles Pollock Executive</a>
                                                                    </h3>
                                                                    <div class="info-price">
																			<span class="price">
																				<del><span class="amount">$20.50</span></del>
																				<ins><span class="amount">$19.00</span></ins>
																			</span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <a href="#" class="add_to_cart_button">
                                                                                Add to cart
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row row-fluid mb-5">
                            <div class="col-sm-12">
                                <h3 class="heading-center-custom text-center">
                                    our of blog
                                </h3>
                                <div class="post-grid-wrap">
                                    <ul class="row grid col-3">
                                        <li class="col-sm-4 ">
                                            <article class="hentry">
                                                <div class="hentry-wrap">
                                                    <div class="entry-featured">
                                                        <a href="blog-detail.html" title="Blog-1">
                                                            <img width="600" height="450" src="/img/blog/blog_370x238.jpg" alt="Blog-1"/>
                                                        </a>
                                                    </div>
                                                    <div class="entry-info">
                                                        <div class="entry-header">
                                                            <h3 class="entry-title">
                                                                <a href="blog-detail.html">Monogrammed Speedy in Tow </a>
                                                            </h3>
                                                        </div>
                                                        <div class="entry-content">
                                                            <p>
                                                                The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously...
                                                            </p>
                                                        </div>
                                                        <div class="entry-meta">
																<span class="meta-date">
																	Date:
																	<time datetime="2015-08-11T06:27:49+00:00">
																		August 11, 2015
																	</time>
																</span>
                                                            <span class="meta-author">
																	By:
																	<a href="#">sitesao</a>
																</span>
                                                            <span class="meta-category">
																	Category:
																	<a href="#">Aliquam</a>, <a href="#">Nunc</a>
																</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </li>
                                        <li class="col-sm-4 ">
                                            <article class="hentry">
                                                <div class="hentry-wrap">
                                                    <div class="entry-featured">
                                                        <a href="blog-detail.html" title="Blog-1">
                                                            <img width="600" height="450" src="/img/blog/blog_370x238.jpg" alt="Blog-2"/>
                                                        </a>
                                                    </div>
                                                    <div class="entry-info">
                                                        <div class="entry-header">
                                                            <h3 class="entry-title">
                                                                <a href="blog-detail.html">Summer Classics in Positano </a>
                                                            </h3>
                                                        </div>
                                                        <div class="entry-content">
                                                            <p>
                                                                The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously...
                                                            </p>
                                                        </div>
                                                        <div class="entry-meta">
																<span class="meta-date">
																	Date:
																	<time datetime="2015-08-11T06:27:49+00:00">
																		August 11, 2015
																	</time>
																</span>
                                                            <span class="meta-author">
																	By:
																	<a href="#">sitesao</a>
																</span>
                                                            <span class="meta-category">
																	Category:
																	<a href="#">Nunc</a>
																</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </li>
                                        <li class="col-sm-4 ">
                                            <article class="hentry">
                                                <div class="hentry-wrap">
                                                    <div class="entry-featured">
                                                        <a href="blog-detail.html" title="Blog-1">
                                                            <img width="600" height="450" src="/img/blog/blog_370x238.jpg" alt="Blog-3"/>
                                                        </a>
                                                    </div>
                                                    <div class="entry-info">
                                                        <div class="entry-header">
                                                            <h3 class="entry-title">
                                                                <a href="blog-detail.html">That Most Modern </a>
                                                            </h3>
                                                        </div>
                                                        <div class="entry-content">
                                                            <p>
                                                                The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously...
                                                            </p>
                                                        </div>
                                                        <div class="entry-meta">
																<span class="meta-date">
																	Date:
																	<time datetime="2015-08-11T06:27:49+00:00">
																		August 11, 2015
																	</time>
																</span>
                                                            <span class="meta-author">
																	By:
																	<a href="#">sitesao</a>
																</span>
                                                            <span class="meta-category">
																	Category:
																	<a href="#">Nunc</a>, <a href="#">Aliquam</a>
																</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
