<?php get_header(); ?>

<section id="newsPage__breadcrum">

    <div class="container">
        <div class="section__breadcrumb">
            <?php the_breadcrumb(); ?>
        </div>
    </div>

</section>

<section id="newsPage__body">

    <div class="container">
        <div class="newsPage__body row">
            <?php get_template_part('templates/block/section', 'new'); ?>

            <div class="newsPage__body-item col-10">
                <div class="newsPage__body-content row row-cols-4 gx-4 gy-4">
                    <?php
                    $obj = get_queried_object();
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'paged' => $paged,
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'order' => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => $obj->slug,
                            ),
                        ),
                    );

                    $the_all_news = new WP_Query($args);
                    if ($the_all_news->have_posts()) :
                        while ($the_all_news->have_posts()) : $the_all_news->the_post();
                            $category = get_the_category();
                    ?>
                            <div class="col">
                                <div class="newsPage__body-content__item ">
                                    <div class="newsPage__body-content__image">
                                        <a href="<?php echo the_permalink() ?>" class="newsPage__body-content__link">
                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                        </a>
                                    </div>
                                    <div class="newsPage__body-content__text">
                                        <a href="<?php echo the_permalink() ?>" class="newsPage__body-content__link">
                                            <h4 class="newsPage__body-content__title">
                                                <?php echo get_the_title() ?>
                                            </h4>
                                        </a>
                                        <div class="newsPage__body-content__info">
                                            <div class="newsPage__body-content__icons">
                                                <span><i class="far fa-calendar-alt"></i><?php echo get_the_date("d/m/Y") ?></span>
                                            </div>

                                            <div class="newsPage__body-content__icons">
                                                <span><i class="far fa-eye"></i><?php echo GetView(get_the_ID()); ?></span>
                                            </div>
                                        </div>
                                        <p class="newsPage__body-content__desc">
                                            <?php echo excerpt(20); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    else :
                        _e('Sorry, no posts matched your criteria.', 'textdomain');
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>

        </div>
    </div>

</section>

<?php get_footer(); ?>