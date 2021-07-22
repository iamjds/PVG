<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 * Shahriar Kabir - https://kabirdev.com
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>
	<section class="related products">
	<h1>
		test
		</h1>
		<h2><?php esc_html_e( 'Related products', 'woocommerce' ); ?></h2>

		<?php woocommerce_product_loop_start(); ?>

		<?php
		// Setup your custom query
		$args = array('post_type' => 'product','posts_per_page' => '4','orderby' => 'date', 'post__not_in' => array(get_the_ID()) );
		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php wc_get_template_part( 'content', 'product' ); ?>
		<?php endwhile; // end of the loop. ?>

		<?php woocommerce_product_loop_end(); ?>

	</section>
<?php endif;
wp_reset_postdata();
