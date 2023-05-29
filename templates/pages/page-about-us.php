<?php get_header(); ?>

<body>
    <section id="newsPage__breadcrum">

        <div class="container">
            <div class="section__breadcrumb">
                <?php the_breadcrumb(); ?>
            </div>
        </div>

    </section>

    <section id="aboutPage__banner">
        <div class="aboutPage__banner-img">
            <?php
            $image = get_field('banner');
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="container aboutPage__banner-bottom">
            <h4 class="aboutPage__banner-heading">CHÀO MỪNG ĐẾN VỚI BITI MART</h4>
            <p class="aboutPage__banner-desc"><?php the_field('about_desc'); ?></p>
        </div>
    </section>

    <section id="aboutPage__policies">
        <div class="container">
            <div class="row aboutPage__policies-list">
                <div class="col aboutPage__policies-item">
                    <div class="aboutPage__policies-img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/1.png" alt="Shipping">
                    </div>
                    <h4 class="aboutPage__policies-heading">GIAO HÀNG TOÀN QUỐC</h4>
                    <p class="aboutPage__policies-desc">Mua tại chỗ hàng đến liền tay</p>
                </div>

                <div class="col aboutPage__policies-item">
                    <div class="aboutPage__policies-img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/1.png" alt="Shipping">
                    </div>
                    <h4 class="aboutPage__policies-heading">GIAO HÀNG TOÀN QUỐC</h4>
                    <p class="aboutPage__policies-desc">Mua tại chỗ hàng đến liền tay</p>
                </div>

                <div class="col aboutPage__policies-item">
                    <div class="aboutPage__policies-img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/1.png" alt="Shipping">
                    </div>
                    <h4 class="aboutPage__policies-heading">GIAO HÀNG TOÀN QUỐC</h4>
                    <p class="aboutPage__policies-desc">Mua tại chỗ hàng đến liền tay</p>
                </div>

                <div class="col aboutPage__policies-item">
                    <div class="aboutPage__policies-img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/1.png" alt="Shipping">
                    </div>
                    <h4 class="aboutPage__policies-heading">GIAO HÀNG TOÀN QUỐC</h4>
                    <p class="aboutPage__policies-desc">Mua tại chỗ hàng đến liền tay</p>
                </div>
            </div>
        </div>
    </section>

    <section id="aboutPage__categories">
        <div class="container">
            <div class="aboutPage__categories">
                <div class="aboutPage__categories-header">
                    <h4 class="aboutPage__categories-heading">Khám phá danh mục sản phẩm đa dạng</h4>
                </div>

                <div class="aboutPage__categories-bottom">
                    <div class="row aboutPage__categories-list">
                        <div class="col aboutPage__categories-item">
                            <div class="aboutPage__categories-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/Group.png" class="aboutPage__categories-img__group" alt="">
                            </div>
                            <span class="aboutPage__categories-title">Danh mục SP1</span>
                        </div>

                        <div class="col aboutPage__categories-item">
                            <div class="aboutPage__categories-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/Group.png" class="aboutPage__categories-img__group" alt="">
                            </div>
                            <span class="aboutPage__categories-title">Danh mục SP1</span>
                        </div>

                        <div class="col aboutPage__categories-item">
                            <div class="aboutPage__categories-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/Group.png" class="aboutPage__categories-img__group" alt="">
                            </div>
                            <span class="aboutPage__categories-title">Danh mục SP1</span>
                        </div>

                        <div class="col aboutPage__categories-item">
                            <div class="aboutPage__categories-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/Group.png" class="aboutPage__categories-img__group" alt="">
                            </div>
                            <span class="aboutPage__categories-title">Danh mục SP1</span>
                        </div>

                        <div class="col aboutPage__categories-item">
                            <div class="aboutPage__categories-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/Group.png" class="aboutPage__categories-img__group" alt="">
                            </div>
                            <span class="aboutPage__categories-title">Danh mục SP1</span>
                        </div>
                    </div>

                    <div class="row aboutPage__categories-list">
                        <div class="col aboutPage__categories-item">
                            <div class="aboutPage__categories-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/Group.png" class="aboutPage__categories-img__group" alt="">
                            </div>
                            <span class="aboutPage__categories-title">Danh mục SP1</span>
                        </div>

                        <div class="col aboutPage__categories-item">
                            <div class="aboutPage__categories-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/Group.png" class="aboutPage__categories-img__group" alt="">
                            </div>
                            <span class="aboutPage__categories-title">Danh mục SP1</span>
                        </div>

                        <div class="col aboutPage__categories-item">
                            <div class="aboutPage__categories-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/Group.png" class="aboutPage__categories-img__group" alt="">
                            </div>
                            <span class="aboutPage__categories-title">Danh mục SP1</span>
                        </div>

                        <div class="col aboutPage__categories-item">
                            <div class="aboutPage__categories-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/Group.png" class="aboutPage__categories-img__group" alt="">
                            </div>
                            <span class="aboutPage__categories-title">Danh mục SP1</span>
                        </div>

                        <div class="col aboutPage__categories-item">
                            <div class="aboutPage__categories-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/Group.png" class="aboutPage__categories-img__group" alt="">
                            </div>
                            <span class="aboutPage__categories-title">Danh mục SP1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="aboutPage__about">
        <div class="container">
            <div class="aboutPage__about">

                <div class="aboutPage__about-header">
                    <h4 class="aboutPage__about-heading">Hình ảnh về chúng tôi</h4>
                </div>

                <div class="container">
                    <div class="aboutPage__about-list row">
                        <div class="col aboutPage__about-item">
                            <div class="aboutPage__about-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/about_us.jpeg" alt="" class="aboutPage__about-img__us">
                            </div>
                        </div>

                        <div class="col aboutPage__about-item">
                            <div class="aboutPage__about-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/about_us.jpeg" alt="" class="aboutPage__about-img__us">
                            </div>
                        </div>

                        <div class="col aboutPage__about-item">
                            <div class="aboutPage__about-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/about_us.jpeg" alt="" class="aboutPage__about-img__us">
                            </div>
                        </div>

                        <div class="col aboutPage__about-item">
                            <div class="aboutPage__about-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/about_us.jpeg" alt="" class="aboutPage__about-img__us">
                            </div>
                        </div>

                        <div class="col aboutPage__about-item">
                            <div class="aboutPage__about-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/about_us.jpeg" alt="" class="aboutPage__about-img__us">
                            </div>
                        </div>
                    </div>

                    <div class="aboutPage__about-list row">
                        <div class="col aboutPage__about-item">
                            <div class="aboutPage__about-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/about_us.jpeg" alt="" class="aboutPage__about-img__us">
                            </div>
                        </div>

                        <div class="col aboutPage__about-item">
                            <div class="aboutPage__about-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/about_us.jpeg" alt="" class="aboutPage__about-img__us">
                            </div>
                        </div>

                        <div class="col aboutPage__about-item">
                            <div class="aboutPage__about-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/about_us.jpeg" alt="" class="aboutPage__about-img__us">
                            </div>
                        </div>

                        <div class="col aboutPage__about-item">
                            <div class="aboutPage__about-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/about_us.jpeg" alt="" class="aboutPage__about-img__us">
                            </div>
                        </div>

                        <div class="col aboutPage__about-item">
                            <div class="aboutPage__about-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/about_us.jpeg" alt="" class="aboutPage__about-img__us">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="aboutPage__feedback">
        <div class="container">
            <div class="aboutPage__feedback">
                <div class="container">
                    <div class="aboutPage__feedback-header">
                        <h4 class="aboutPage__feedback-heading">Phản hồi khách hàng</h4>
                    </div>

                    <div class="row aboutPage__feedback-bottom">
                        <div class="col-4 aboutPage__feedback-banner">
                            <div class="aboutPage__feedback-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/feedback.jpeg" alt="" class="aboutPage__feedback-img__feedback">
                            </div>
                        </div>
                        <div class="col-8 aboutPage__feedback-content">
                            <div class="row aboutPage__feedback-list">
                                <div class="col aboutPage__feedback-item">
                                    <div class="aboutPage__feedback-item-top">
                                        <div class="aboutPage__feedback-item__img">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/user.png" alt="" class="aboutPage__feedback-item-user">
                                        </div>
                                        <div class="aboutPage__feedback-item-right">
                                            <h4 class="aboutPage__feedback-item-title">NGUYỄN VĂN A</h4>
                                            <span>Khách hàng</span>
                                        </div>
                                    </div>
                                    <div class="aboutPage__feedback-item-bottom">
                                        <p class="aboutPage__feedback-item-desc">Sản phẩm chất lượng, giao hàng nhanh, sẽ quay lại ủng hộ shop trong thời gian tới</p>
                                    </div>
                                </div>

                                <div class="col aboutPage__feedback-item">
                                    <div class="aboutPage__feedback-item-top">
                                        <div class="aboutPage__feedback-item__img">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/user.png" alt="" class="aboutPage__feedback-item-user">
                                        </div>
                                        <div class="aboutPage__feedback-item-right">
                                            <h4 class="aboutPage__feedback-item-title">NGUYỄN VĂN A</h4>
                                            <span>Khách hàng</span>
                                        </div>
                                    </div>
                                    <div class="aboutPage__feedback-item-bottom">
                                        <p class="aboutPage__feedback-item-desc">Sản phẩm chất lượng, giao hàng nhanh, sẽ quay lại ủng hộ shop trong thời gian tới</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="aboutPage__newsletter">
        <div class="container">
            <div class="aboutPage__newsletter">
                <h4 class="aboutPage__newsletter-heading">Đăng ký nhận bản tin</h4>
                <p class="aboutPage__newsletter-desc">Đăng ký để nhận được những thông tin sản phẩm mới và khuyến mãi của chúng tôi</p>
                <div class="aboutPage__newsletter-form">
                    <input type="email" name="" id="" class="aboutPage__newsletter-input" placeholder="Email">
                    <button class="aboutPage__newsletter-button">Gửi</button>
                </div>
            </div>
        </div>
    </section>
</body>

<?php get_footer(); ?>