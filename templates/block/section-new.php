<div class="newsPage__body-item col-2">
    <div class="newsPage__body-sidebar">
        <h4 class="newsPage__body-sidebar__heading">TIN TỨC</h4>
        <!-- <li class="newsPage__body-sidebar__item onactive">
            <a href="#" class="newsPage__body-sidebar__link">> Tất cả tin</a>
        </li> -->

        <?php
        $terms = get_terms([
            'post_type'     => 'post',
            'taxonomy'      => 'category',
            'hide_empty'    => true,
            'orderby'       => 'DESC',
        ]);
        foreach ($terms as $term) {
        ?>
            <!-- <li class="newsPage__body-sidebar__item"> -->
            <a class="newsPage__body-sidebar__link" href="<?php echo get_home_url(); ?><?php echo  "/" . $term->taxonomy . "/" . $term->slug; ?>">> <?php echo $term->name ?></a>
            <!-- <li> -->
        <?php } ?>
        <!-- <li class="newsPage__body-sidebar__item">
                <a href="#" class="newsPage__body-sidebar__link">> Tin ngành</a>
            </li>
            <li class="newsPage__body-sidebar__item">
                <a href="#" class="newsPage__body-sidebar__link">> Tin doanh nghiệp</a>
            </li>
            <li class="newsPage__body-sidebar__item">
                <a href="#" class="newsPage__body-sidebar__link">> Tin tuyển dụng</a>
            </li> -->
    </div>

    <div class="newsPage__body-image">
        <a href="#" class="newsPage__body-imageLink"><img src="<?php echo get_template_directory_uri() ?>/assets/images/ads.png" alt=""></a>
    </div>
</div>