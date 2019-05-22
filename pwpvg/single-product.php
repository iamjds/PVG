<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} ?>

<?php

	function getIdFromMeta( $nid ) {
		global $wpdb;

		$post_id = $wpdb->get_var("SELECT post_id FROM ".$wpdb->prefix."postmeta WHERE meta_key = '_pv_nid' and meta_value ='".$nid."'");
		
		if($post_id !== null){
			return $post_id;
		} else {
			return null;
		}
	}

?>

<?php get_header(); ?>
<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' ); ?>
<main id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header><meta http-equiv="Content-Type" content="text/html; charset=euc-jp"></header>
		
		<div class="product-content">
			<div class="fourth-col">
				<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false ); echo esc_url( $src[0] ); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
				<?php endif; ?>
			</div>
			<div class="sixth-col">
				<?php if ( is_singular() ) {
				echo '<h1 class="entry-title">';
				} else {
				echo '<h2 class="entry-title">';
				} ?>
				<?php 
					$title = get_the_title(); 
					echo str_replace('®','<sup>®</sup>', $title);
				?>
				<?php if ( is_singular() ) {
				echo '</h1>';
				} else {
				echo '</h2>';
				} ?>
				
				<?php the_content(); ?>
			
				<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_desc', true );
					$post_meta_value = unserialize($post_meta_value);
						if (!empty($post_meta_value)) { ?>
							<?php printf( $post_meta_value ); ?>
							
						<?php } ?>
				
				<?php $post_meta_value = get_post_meta( $post->ID, '_pv_ch_garden_height_min', true );
					if (!empty($post_meta_value)) { ?>
						<div class="top-rule all-caps">
						<div class="half-col">Garden Height</div>
						<div class="half-col align-right">
						<?php printf( $post_meta_value ); ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_ch_garden_height_max', true );
					if (!empty($post_meta_value)) {
						printf( ' - '.$post_meta_value );
					} ?>
						</div></div>
					<?php } ?>
				
				<?php $post_meta_value = get_post_meta( $post->ID, '_pv_ch_spacing_min', true );
					if (!empty($post_meta_value)) { ?>
						<div class="top-rule all-caps">
						<div class="half-col">Spacing</div>
						<div class="half-col align-right">
						<?php printf( $post_meta_value ); ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_ch_spacing_max', true );
					if (!empty($post_meta_value)) {
						printf( ' - '.$post_meta_value );
					} ?>
						</div></div>
					<?php } ?>
				<?php $post_meta_value = get_post_meta( $post->ID, '_pv_ch_spread_min', true );
					if (!empty($post_meta_value)) { ?>
						<div class="top-rule all-caps">
						<div class="half-col">Spread</div>
						<div class="half-col align-right">
						<?php printf( $post_meta_value ); ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_ch_spread_max', true );
					if (!empty($post_meta_value)) {
						printf( ' - '.$post_meta_value );
					} ?>
						</div></div>
					<?php } ?>
					<?php $post_meta_value = get_post_meta( $post->ID, '_pv_ch_habit', true );
					//$post_meta_value = unserialize($post_meta_value);
						if (!empty($post_meta_value)) { ?>
							<div class="top-rule all-caps">
							<div class="half-col">Habit</div>
							<div class="half-col align-right">
							<?php printf( $post_meta_value ); ?>
							</div></div>
						<?php } ?>
				<?php $post_meta_value = get_post_meta( $post->ID, '_pv_ch_container_role', true );
						if (!empty($post_meta_value)) { ?>
							<div class="top-rule all-caps">
							<div class="half-col">Container Role</div>
							<div class="half-col align-right">
							<?php printf( $post_meta_value ); ?>
							</div></div>
						<?php } ?>	
				<?php $post_meta_value = get_post_meta( $post->ID, '_pv_ch_height_category', true );
						if (!empty($post_meta_value)) { ?>
							<div class="top-rule all-caps">
							<div class="half-col">Flower Size</div>
							<div class="half-col align-right">
							<?php printf( $post_meta_value ); ?>
							</div></div>
						<?php } ?>	
				<?php $post_meta_value = get_post_meta( $post->ID, '_pv_ch_flower_colors', true );
						if (!empty($post_meta_value)) {
							if (!is_array($post_meta_value)) {?>
							<div class="top-rule all-caps">
							<div class="half-col">Flower Colors</div>
							<div class="half-col align-right">
							<?php printf( $post_meta_value ); ?>
							</div></div>
						<?php } } ?>	
				
				<?php $post_meta_value = get_post_meta( $post->ID, '_pv_identity_pr_winners', true );
					  $post_meta_value1 = get_post_meta( $post->ID, '_pv_identity_pr_selections', true );
						if (!empty($post_meta_value) || !empty($post_meta_value1)) { ?>
							<div class="top-rule" style="padding: 0px; margin-top: 20px;">
								<?php if (!empty($post_meta_value)) { ?>
									<img src="http://77.104.161.185/~pwpvg002/wp-content/uploads/2019/05/flag-PW-2.png" alt="Proven Winners" width="80" height="111" style="float:left;"/>
								<?php } ?>
								<?php if (!empty($post_meta_value1)) { ?>
									<img src="http://77.104.161.185/~pwpvg002/wp-content/uploads/2019/05/flag-PS-2.png" alt="Proven Selections" width="80" height="111" style="float:left;"/>
								<?php } ?>
							</div>
							<div class="clear"></div>
						<?php } ?>	
					
					
					
			<?php 
				$post_meta_value = get_post_meta( $post->ID, '_pv_more_colors_nids', true );
				if (!empty($post_meta_value)) {
					printf( '<p><strong>NIDS </strong>');
					//$length = count($post_meta_value);
							
					foreach($post_meta_value as $value){ 
						$post_id = getIdFromMeta($value);

						if( $post_id !== null ){
							echo $value . "<br />\n";
								echo get_the_post_thumbnail_url($post_id); 
							echo "<br /><br />\n";
						}
					}
				} 
			?>
				
					<ul class="product-nav">
						<li id="overview-nav" class="active-nav"><a href="#">Overview</a></li>
						<li id="grow-nav"><a href="#">Growing Info</a></li>
						<li id="images-nav"><a href="#">Images</a></li>
						<li id="more-nav"><a href="#">More Colors</a></li>
					</ul>
					<div id="overview">
						
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_desc', true );
						if (!empty($post_meta_value)) { printf( '<p><strong>Features </strong><br>'.$post_meta_value.'</p>' ); } ?>
						
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_attracts', true );
						if (!empty($post_meta_value)) {
							printf( '<p><strong>Attracts </strong>');
							$length = count($post_meta_value);
							for ($i = 0; $i < $length; $i++) {
									if ($i == $length-1) { printf( $post_meta_value[$i]);} else {
						  			printf( $post_meta_value[$i].", "); }
								
							}
						} ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_resists', true );
						//$post_meta_value = unserialize($post_meta_value);
						if (!empty($post_meta_value)) {
							printf( '<p><strong>Resists </strong>');
							$length = count($post_meta_value);
							for ($i = 0; $i < $length; $i++) {
									if ($i == $length-1) { printf( $post_meta_value[$i]);} else {
						  			printf( $post_meta_value[$i].", "); }
							}
						} ?>
						
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_adaptable_houseplant', true );
						if ($post_meta_value==1) { printf( '<p>Adapatable as House Plant</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_award_winner', true );
						if ($post_meta_value==1) { printf( '<p>Award Winner</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_bog_plant', true );
						if ($post_meta_value==1) { printf( '<p>Bog Plant</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_continuous_rebloom', true );
						if ($post_meta_value==1) { printf( '<p>Continuous Re-Bloom</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_dead_heading_not_necessary', true );
						if ($post_meta_value==1) { printf( '<p>Dead-Heading Not Necessary</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_disease_resistent', true );
						if ($post_meta_value==1) { printf( '<p>Disease Resistant</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_drought_tolerant', true );
						if ($post_meta_value==1) { printf( '<p>Drought Tolerant</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_edible', true );
						if ($post_meta_value==1) { printf( '<p>Edible</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_erosion_control', true );
						if ($post_meta_value==1) { printf( '<p>Erosion Control</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_fragrant_flower', true );
						if ($post_meta_value==1) { printf( '<p>Fragrant Flower</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_fragrant_foliage', true );
						if ($post_meta_value==1) { printf( '<p>Fragrant Foliage</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_fun_facts', true );
						if (!empty($post_meta_value)) { printf( '<p><strong>Fun Facts </strong>'.$post_meta_value.'</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_grass', true );
						if ($post_meta_value==1) { printf( '<p>Grass</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_heat_tolerant', true );
						if ($post_meta_value==1) { printf( '<p>Heat Tolerant</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_long_blooming', true );
						if ($post_meta_value==1) { printf( '<p>Long Blooming</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_native_to_na', true );
						if ($post_meta_value==1) { printf( '<p>Native to North America</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_fall_interest', true );
						if ($post_meta_value==1) { printf( '<p>Fall Interest</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_winter_interest', true );
						if ($post_meta_value==1) { printf( '<p>Winter Interest</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_foliage_interest', true );
						if ($post_meta_value==1) { printf( '<p>Foliage Interest</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_salt_tolerant', true );
						if ($post_meta_value==1) { printf( '<p>Salt Tolerant</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_succulent', true );
						if ($post_meta_value==1) { printf( '<p>Succulent</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_vine', true );
						if ($post_meta_value==1) { printf( '<p>Vine</p>' ); } ?>	
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_water_plant', true );
						if ($post_meta_value==1) { printf( '<p>Water Plant</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_feature_small_miniature', true );
						if ($post_meta_value==1) { printf( '<p>Small / Miniature</p>' ); } ?>
						
					</div>
					<div id="grow">
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_needs_maintenance_notes', true );
						if (!empty($post_meta_value)) { printf( '<p><strong>Maintenance Notes </strong><br>'.$post_meta_value.'</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_needs_good_drainage', true );
						if ($post_meta_value>=1) { printf( '<p><strong>Needs Good Drainage </strong></p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_needs_temp_min', true );
						$post_meta_value1 = get_post_meta( $post->ID, '_pv_needs_temp_max', true );
						if (!empty($post_meta_value)) { printf( '<p><strong>Temperature </strong>'.$post_meta_value.' - '. $post_meta_value1 .'</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_needs_uses_notes', true );
						if (!empty($post_meta_value)) { printf( '<p><strong>Uses Notes </strong>'.$post_meta_value.'</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_needs_maintenance_cat', true );
						if (!empty($post_meta_value)) { printf( '<p><strong>Maintenance Category </strong>'.$post_meta_value.'</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_needs_water_cat', true );
						if (!empty($post_meta_value)) { printf( '<p><strong>Water Category </strong>'.$post_meta_value.'</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_needs_light_code', true );
						if (!empty($post_meta_value)) {
							printf( '<p><strong>Light Code </strong>');
							$length = count($post_meta_value);
							for ($i = 0; $i < $length; $i++) {
									if ($i == $length-1) { printf( $post_meta_value[$i]);} else {
						  			printf( $post_meta_value[$i].", "); }
							}
						} ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_needs_light_level', true );
						if (!empty($post_meta_value)) {
							printf( '<p><strong>Light Level </strong>');
							$length = count($post_meta_value);
							for ($i = 0; $i < $length; $i++) {
								if ($i == $length-1) { printf( $post_meta_value[$i]);} else {
						  		printf( $post_meta_value[$i].", "); }
							}
						} ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_needs_blooms_on', true );
						if (!empty($post_meta_value)) {
							printf( '<p><strong>Blooms On </strong>');
							$length = count($post_meta_value);
							for ($i = 0; $i < $length; $i++) {
								if ($i == $length-1) { printf( $post_meta_value[$i]);} else {
						  		printf( $post_meta_value[$i].", "); }
							}
						} ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_needs_bloom_time', true );
						if (!empty($post_meta_value)) {
							printf('<p><strong>Bloom Time </strong>'.implode(', ', $post_meta_value)); 							
						} ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_needs_heat_zones', true );
						if (!empty($post_meta_value)) {
							printf( '<p><strong>Heat Zones </strong>');
							$length = count($post_meta_value);
							for ($i = 0; $i < $length; $i++) {
								if ($i == $length-1) { printf( $post_meta_value[$i]);} else {
						  		printf( $post_meta_value[$i].", "); }
							}
						} ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_needs_uses', true );
						if (!empty($post_meta_value)) { printf( '<p><strong>Mums Flower Form </strong>'.implode(', ', $post_meta_value).'</p>' ); } ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_needs_soil_fert', true );
						if (!empty($post_meta_value)) {
							printf( '<p><strong>Soil Fertility </strong>');
							$length = count($post_meta_value);
							for ($i = 0; $i < $length; $i++) {
								if ($i == $length-1) { printf( $post_meta_value[$i]);} else {
						  		printf( $post_meta_value[$i].", "); }
							}
						} ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_needs_soil_ph_cat', true );
						if (!empty($post_meta_value)) {
							printf( '<p><strong>Soil PH Category </strong>');
							$length = count($post_meta_value);
							for ($i = 0; $i < $length; $i++) {
								if ($i == $length-1) { printf( $post_meta_value[$i]);} else {
						  		printf( $post_meta_value[$i].", "); }
							}
						} ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_vigor', true );
						if (!empty($post_meta_value)) {
							printf( '<p><strong>Mums Vigor </strong>');
							$length = count($post_meta_value);
							for ($i = 0; $i < $length; $i++) {
								if ($i == $length-1) { printf( $post_meta_value[$i]);} else {
						  		printf( $post_meta_value[$i].", "); }
							}
						} ?>
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_vigor', true );
						if (!empty($post_meta_value)) {
							printf( '<p><strong>Mums Blackcloth Response Weeks </strong>');
							$length = count($post_meta_value);
							for ($i = 0; $i < $length; $i++) {
								if ($i == $length-1) { printf( $post_meta_value[$i]);} else {
						  		printf( $post_meta_value[$i].", "); }
							}
						} ?>
					</div>
					<div id="images">
						<?php
							global $product;
							$attachment_ids = $product->get_gallery_image_ids();

							foreach( $attachment_ids as $attachment_id ) 
							{
							  $thumbnail_url = wp_get_attachment_image_src( $attachment_id, 'thumbnail' )[0];
								?><img src="<?php echo $thumbnail_url?>" width="31%" style="float: left;" />
								<?php //echo wp_get_attachment_image($attachment_id, 'thumbnail');
						 		}
							?>
					</div>
					<div id="more">
						<?php $post_meta_value = get_post_meta( $post->ID, '_pv_more_colors_nids', true );
						if (!empty($post_meta_value)) {
							printf( '<p><strong>NIDS </strong><br>'.implode(', ', $post_meta_value).'</p>' ); 									
						} ?>
					</div>
		  </div>
				</div>
			
		</div>
		
		<footer class="entry-footer">
		<span class="cat-links"><?php //esc_html_e( 'Categories: ', 'blankslate' ); ?><?php //the_category( ', ' ); ?></span>
		</footer> 
		
	</article>

<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<footer class="footer">
<?php //get_template_part( 'nav', 'below-single' ); ?>
</footer>
</main>

<?php get_footer(); ?>