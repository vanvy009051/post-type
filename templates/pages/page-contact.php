<?php get_header(); ?>

<body>

    <!-- <section id="contactPage__breadcrum">
        <div class="container">
            <div class="contactPage__breadcrum">
                <a href="#" class="contactPage__breadcrum-link">Trang chủ</a>
                <i class="contactPage__breadcrum-icon fas fa-chevron-right"></i>
                <a href="#" class="contactPage__breadcrum-link">Liên hệ</a>
            </div>
        </div>
    </section> -->

    <section id="newsPage__breadcrum">

        <div class="container">
            <div class="section__breadcrumb">
                <?php the_breadcrumb(); ?>
            </div>
        </div>

    </section>

    <section id="contactPage__contact">
        <div class="container">
            <div class="contactPage__contact row">
                <div class="contactPage__contact-item col">
                    <div class="contactPage__contact-item__left">
                        <h4 class="contactPage__contact-title">Gửi thông tin cho chúng tôi</h4>
                        <p class="contactPage__contact-desc">Các bạn có thông tin cần liên hệ, hoặc cần hợp tác, các bạn có thể liên hệ qua Zalo, Facebook, Fanpage hoặc để lại thông tin liên hệ ở đây, chúng tôi sẽ liên hệ lại ngay</p>
                        <div class="contactPage__contact-info">
                            <i class="fas fa-map-marker-alt"></i>
                            <span class="contactPage__contact-info__title">Địa chỉ: 156 Mẹ Thứ, Hòa Xuân, Cẩm Lệ, Đà Nẵng</span>
                        </div>
                        <div class="contactPage__contact-info">
                            <i class="fas fa-phone-alt"></i>
                            <span class="contactPage__contact-info__title">Địa chỉ: 156 Mẹ Thứ, Hòa Xuân, Cẩm Lệ, Đà Nẵng</span>
                        </div>
                        <div class="contactPage__contact-info">
                            <i class="fas fa-envelope"></i>
                            <span class="contactPage__contact-info__title">Địa chỉ: 156 Mẹ Thứ, Hòa Xuân, Cẩm Lệ, Đà Nẵng</span>
                        </div>
                        <div class="contactPage__contact-line"></div>
                        <div class="contactPage__contact-socials">
                            <h4 class="contactPage__contact-socials__title">BITI Mart</h4>
                            <div class="contactPage__contact-socials__icons">
                                <a href="#" class="contactPage__contact-socials__icons-icon"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="contactPage__contact-socials__icons-icon"><i class="fab fa-facebook-messenger"></i></a>
                                <a href="#" class="contactPage__contact-socials__icons-icon"><i class="fab fa-tiktok"></i></a>
                                <a href="#" class="contactPage__contact-socials__icons-icon"><i class="fab fa-youtube"></i></a>
                                <a href="#" class="contactPage__contact-socials__icons-icon"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="contactPage__contact-socials__icons-icon"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contactPage__contact-item col">
                    <form action="" method="post" class="contactPage__contact-form" id="form-contact">
                        <div class="contactPage__contact-group">
                            <label for="fullname" class="contactPage__contact-label">Tên đầy đủ</label>
                            <input id="fullname" name="fullname" type="text" placeholder="VD: Sơn Đặng" class="contactPage__contact-control">
                            <i class="contactPage__contact-icons fas fa-check-circle"></i>
                            <i class="contactPage__contact-icons fas fa-exclamation-circle"></i>
                            <span class="contactPage__contact-message">Error Message</span>
                        </div>

                        <div class="contactPage__contact-group">
                            <label for="email" class="contactPage__contact-label">Email</label>
                            <input id="email" name="email" type="text" placeholder="VD: email@domain.com" class="contactPage__contact-control">
                            <i class="contactPage__contact-icons fas fa-check-circle"></i>
                            <i class="contactPage__contact-icons fas fa-exclamation-circle"></i>
                            <span class="contactPage__contact-message">Error Message</span>
                        </div>

                        <div class="contactPage__contact-group">
                            <label for="phone" class="contactPage__contact-label">Số điện thoại</label>
                            <input id="phone" name="phone" type="text" placeholder="VD: email@domain.com" class="contactPage__contact-control">
                            <i class="contactPage__contact-icons fas fa-check-circle"></i>
                            <i class="contactPage__contact-icons fas fa-exclamation-circle"></i>
                            <span class="contactPage__contact-message">Error Message</span>
                        </div>

                        <div class="contactPage__contact-group">
                            <label for="message" class="contactPage__contact-label">Nội dung</label>
                            <textarea name="message" id="message" cols="30" rows="5" class="contactPage__contact-textarea"></textarea>
                            <i class="contactPage__contact-icons fas fa-check-circle"></i>
                            <i class="contactPage__contact-icons fas fa-exclamation-circle"></i>
                            <span class="contactPage__contact-message">Error Message</span>
                        </div>

                        <div class="contactPage__contact-button">
                            <p class="contactPage__contact-button__desc">**Chúng tôi sẽ phản hồi cho bạn ngay sau khi nhận được mail</p>
                            <button class="contactPage__contact-button__submit">Gửi đi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="contactPage__maps">
        <div class="container">
            <div class="contactPage__maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.251863752306!2d108.21668121528836!3d16.000399145527854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421a146c136e49%3A0xe48b2808babc315e!2zMTU2IE3hurkgVGjhu6ksIEhvw6AgWHXDom4sIEPhuqltIEzhu4csIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1680675964761!5m2!1sen!2s" width="1424" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/contact.js"></script>

</body>

<?php get_footer(); ?>