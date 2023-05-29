<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>
<div class="col-lg-3 col-md-4 col-6 py-2">
	<div class="woo-item">
		<div class="woo-img">
			<a href="<?php the_permalink(); ?>" class="woo-link">
				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" class="woo-img-top" alt="<?php the_title(); ?>">
			</a>
		</div>
		<div>
			<a href="<?php the_permalink(); ?>" class="woo-link">
				<h5 class="woo-title"><?php the_title(); ?></h5>
			</a>
			<div class="woo-body">
				<div class="woo-price">
					<span><?php echo $product->get_price_html(); ?></span>
					<!-- <div class="woo-discount">
							<span>150,000 đ</span>
							<p>-13%</p>
						</div> -->
				</div>
				<button type="submit" value="<?php echo get_the_ID(); ?>" name="add-to-cart">Add to cart</button>
			</div>
		</div>
	</div>
</div>