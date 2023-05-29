<div class="singlePage__content-item col-3">
    <div class="singlePage__content-sub">
        <h4 class="singlePage__content-sub__heading">Tin tức nổi bật</h4>

        <div class="singlePage__content-sub__news d-flex flex-column">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'paged' => $paged,
                'post_type' => 'post',
                'posts_per_page' => 5,
                'order' => 'DESC',
                // 'tax_query' => array(
                //     array(
                //         'taxonomy' => 'category',
                //         'field'    => 'slug',
                //         'terms'    => 'tat-ca-tin-tuc',
                //     ),
                // ),
            );
            $the_new_special = new WP_Query($args);

            if ($the_new_special->have_posts()) :
                while ($the_new_special->have_posts()) : $the_new_special->the_post();
                    $category = get_the_category();
            ?>
                    <a href="<?php the_permalink(); ?>" class="singlePage__content-sub__link">> <?php the_title(); ?></a>
            <?php
                endwhile;
            else :
                _e('Sorry, no posts matched your criteria.', 'textdomain');
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <div class="singlePage__content-images">
            <a href="#" class="singlePage__body-imageLink"><img src="<?php echo get_template_directory_uri() ?>/assets/images/ads.png" alt=""></a>
        </div>
    </div>
</div>