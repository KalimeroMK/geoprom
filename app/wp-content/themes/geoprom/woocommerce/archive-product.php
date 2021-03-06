<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.4.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header('shop');
global $wp_query, $woocommerce_loop;
$moller_opt = get_option( 'moller_opt' );
$shoplayout = 'sidebar';
if(isset($moller_opt['shop_layout']) && $moller_opt['shop_layout']!=''){
	$shoplayout = $moller_opt['shop_layout'];
}
if(isset($_GET['layout']) && $_GET['layout']!=''){
	$shoplayout = $_GET['layout'];
}
$shopsidebar = 'left';
if(isset($moller_opt['sidebarshop_pos']) && $moller_opt['sidebarshop_pos']!=''){
	$shopsidebar = $moller_opt['sidebarshop_pos'];
}
if(isset($_GET['sidebar']) && $_GET['sidebar']!=''){
	$shopsidebar = $_GET['sidebar'];
}
if ( !is_active_sidebar( 'sidebar-shop' ) )  {
	$shoplayout = 'fullwidth';
}
$moller_shop_main_extra_class = NULl;
if($shopsidebar=='left') {
	$moller_shop_main_extra_class = 'order-lg-last';
}
$main_column_class = NULL;
switch($shoplayout) {
	case 'fullwidth':
		Moller_Features::moller_shop_class('shop-fullwidth');
		$shopcolclass = 12;
		$shopsidebar = 'none';
		$productcols = 4;
		break;
	default:
		Moller_Features::moller_shop_class('shop-sidebar');
		$shopcolclass = 9;
		$productcols = 3;
		$main_column_class = 'main-column';
}
$moller_viewmode = Moller_Features::moller_show_view_mode();
?>
<div class="main-container">
	<div class="title-breadcumbs">
		<div class="container">
			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
				<header class="entry-header shop-title">
					<h1 class="entry-title"><?php woocommerce_page_title(); ?></h1>
				</header>
			<?php endif; ?>
			<div class="breadcrumb-container">
				<div class="container">
					<?php
						/**
						 * Hook: woocommerce_before_main_content.
						 *
						 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
						 * @hooked woocommerce_breadcrumb - 20
						 * @hooked WC_Structured_Data::generate_website_data() - 30
						 */
						do_action( 'woocommerce_before_main_content' );
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="shop_content">
		<div class="container shop_content-inner">
			<div class="row">
				<div id="archive-product" class="page-content col-12 <?php echo 'col-lg-'.$shopcolclass; ?> <?php echo esc_attr($moller_viewmode);?> <?php echo ''.$main_column_class; ?> <?php echo esc_attr($moller_shop_main_extra_class);?>">
					<div class="archive-border">
						<!-- shop banner -->
						<?php if( is_shop()){ ?>
							<?php if(isset($moller_opt['shop_banner']['url']) && ($moller_opt['shop_banner']['url'])!=''){ ?>
								<div class="shop-banner">
									<img src="<?php echo esc_url($moller_opt['shop_banner']['url']); ?>" alt="<?php esc_attr_e('Shop banner','moller') ?>" />
								</div>
							<?php } ?>
						<?php } ?>
						<?php if (is_product_category()) {
							if(isset($moller_opt['show_category_image']) && $moller_opt['show_category_image'] == true)  {
								global $wp_query;
								$cat = $wp_query->get_queried_object();
								$thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
								$image = wp_get_attachment_url( $thumbnail_id );
								if ( $image ) {
									echo '<div class="shop-banner"><img src="' . esc_url($image) . '" alt=" ' . esc_attr( $cat->name ) . ' " /></div>';
								}
							} else { ?>
								<?php if(isset($moller_opt['shop_banner']['url']) && ($moller_opt['shop_banner']['url'])!=''){ ?>
									<div class="shop-banner">
										<img src="<?php echo esc_url($moller_opt['shop_banner']['url']); ?>" alt="<?php esc_attr_e('Shop banner','moller') ?>" />
									</div>
								<?php } ?>
							<?php } ?>
						<?php } ?>
						<!-- end shop banner -->
						<?php
						/**
						 * Hook: woocommerce_archive_description.
						 *
						 * @hooked woocommerce_taxonomy_archive_description - 10
						 * @hooked woocommerce_product_archive_description - 10
						 */
						do_action( 'woocommerce_archive_description' );
						?>
						<?php
							/**
							* remove message from 'woocommerce_before_shop_loop' and show here
							*/
							do_action( 'woocommerce_show_message' );
						?>
						<?php if ( have_posts() ) : ?>	
							<?php woocommerce_product_loop_start(); ?>
								<?php $woocommerce_loop['columns'] = $productcols; ?>
								<?php woocommerce_product_subcategories();
								//reset loop
								$woocommerce_loop['loop'] = 0; ?>
								<div class="shop-products-inner">
									<div class="row">
										<?php if ( woocommerce_products_will_display() ) { ?>
											<div class="toolbar col-sm-12">
												<div class="toolbar-inner">
													<div class="view-mode">
														<label><?php esc_html_e('View on', 'moller');?></label>
														<a href="#" class="grid <?php if($moller_viewmode=='grid-view'){ echo ' active';} ?>" title="<?php echo esc_attr__( 'Grid', 'moller' ); ?>"><?php esc_html_e('Grid', 'moller');?></a>
														<a href="#" class="list <?php if($moller_viewmode=='list-view'){ echo ' active';} ?>" title="<?php echo esc_attr__( 'List', 'moller' ); ?>"><?php esc_html_e('List', 'moller');?></a>
													</div>
													<?php
														/**
														 * Hook: woocommerce_before_shop_loop.
														 *
														 * @hooked wc_print_notices - 10
														 * @hooked woocommerce_result_count - 20
														 * @hooked woocommerce_catalog_ordering - 30
														 */
														do_action( 'woocommerce_before_shop_loop' );
													?>
													<div class="clearfix"></div>
												</div>
											</div>
										<?php } ?>
										<?php while ( have_posts() ) : the_post(); ?>
											<?php wc_get_template_part( 'content', 'product-archive' ); ?>
										<?php endwhile; // end of the loop. ?>
									</div>
								</div>
							<?php woocommerce_product_loop_end(); ?>
							<?php if ( woocommerce_products_will_display() ) { ?>
							<?php
								/**
								 * woocommerce_before_shop_loop hook
								 *
								 * @hooked woocommerce_result_count - 20
								 * @hooked woocommerce_catalog_ordering - 30
								 */
								do_action( 'woocommerce_after_shop_loop' );
							?>
							<div class="clearfix"></div>
							<?php } ?>
						<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
							<?php wc_get_template( 'loop/no-products-found.php' ); ?>
						<?php endif; ?>
					<?php
						/**
						 * woocommerce_after_main_content hook
						 *
						 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
						 */
						do_action( 'woocommerce_after_main_content' );
					?>
					</div>
				</div>
				<?php if($shoplayout!='fullwidth' && is_active_sidebar('sidebar-shop')): ?>
					<?php get_sidebar('shop'); ?>
				<?php endif; ?>
			</div>
		</div> 
	</div>
</div>
<!-- brand logo -->
<?php 
	if(isset($moller_opt['inner_brand']) && function_exists('moller_brands_shortcode') && shortcode_exists( 'ourbrands' ) ){
		if($moller_opt['inner_brand'] && isset($moller_opt['brand_logos'][0]) && $moller_opt['brand_logos'][0]['thumb']!=null) { ?>
			<div class="inner-brands">
				<div class="container">
					<?php echo do_shortcode('[ourbrands]'); ?>
				</div>
			</div>
		<?php }
	}
?>
<!-- end brand logo --> 
<?php get_footer( 'shop' ); ?>