<?php get_header(); ?>
<?php PostViews(get_the_ID()) ?>

<section id="singlePage__breadcrum">

    <div class="container">
        <div class="section__breadcrumb">
            <?php the_breadcrumb(); ?>
        </div>
    </div>

</section>

<section id="singlePage__body">

    <div class="container">
        <div class="singlePage__body">
            <div class="singlePage__content row">
                <div class="singlePage__content-item col-9">
                    <h4 class="singlePage__content-heading">
                        <?php the_title(); ?>
                    </h4>
                    <div class="singlePage__content-desc">
                        <?php the_content() ?>
                    </div>
                </div>

                <?php get_template_part('templates/block/section', 'single'); ?>

            </div>

            <div class="singlePage__relate d-flex flex-column">
                <h4 class="singlePage__relate-heading">
                    Tin liên quan
                </h4>
                <div class="singlePage__relate-list row">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'paged' => $paged,
                        'post_type' => 'thuc-don',
                        'posts_per_page' => 4,
                        'order' => 'DESC',
                        // 'tax_query' => array(
                        //     array(
                        //         'taxonomy' => 'category',
                        //         'field'    => 'slug',
                        //         'terms'    => 'tin-nganh'
                        //     ),
                        // ),
                    );
                    $the_relate_menu = new WP_Query($args);
                    if ($the_relate_menu->have_posts()) :
                        while ($the_relate_menu->have_posts()) : $the_relate_menu->the_post();
                            $category = get_the_category();
                    ?>
                            <div class="singlePage__relate-item col">
                                <div class="singlePage__relate-image">
                                    <a href="<?php echo the_permalink() ?>" class="singlePage__relate-link">
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                    </a>
                                </div>
                                <div class="singlePage__relate-text">
                                    <a href="<?php echo the_permalink() ?>" class="singlePage__relate-link">
                                        <h4 class="singlePage__relate-title">
                                            <?php echo get_the_title() ?>
                                        </h4>
                                    </a>
                                    <div class="singlePage__relate-info">
                                        <div class="singlePage__relate-icons">
                                            <span><i class="far fa-calendar-alt"></i><?php echo get_the_date("d/m/Y") ?></span>
                                        </div>

                                        <div class="singlePage__relate-icons">
                                            <span><i class="far fa-eye"></i><?php echo GetView(get_the_ID()); ?></span>
                                        </div>
                                    </div>
                                    <p class="singlePage__relate-desc">
                                        <?php echo excerpt(17); ?>
                                    </p>
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