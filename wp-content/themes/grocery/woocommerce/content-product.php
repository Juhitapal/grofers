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
<div class="col-md-3 w3ls_w3l_banner_left">
    <div class="hover14 column">
        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
            <div class="agile_top_brand_left_grid_pos">
                <?php  if ( $product->is_on_sale()) { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/offer.png" alt=" " class="img-responsive"/>
                <?php }?>
            </div>
            <div class="agile_top_brand_left_grid1">
                <figure>
                    <div class="snipcart-item block">
                        <div class="snipcart-thumb">
                            <a href="single.html"><?php echo $product->get_image(); ?></a>
                            <p><?php echo $product->get_name(); ?></p>

                            <?php if ( $product->is_on_sale()) { ?>
                                <h4><?php echo get_woocommerce_currency_symbol() . ' ' . $product->get_sale_price(); ?>
                                    <span><?php echo get_woocommerce_currency_symbol(); ?><?php echo $product->get_regular_price(); ?></span>
                                </h4>
                            <?php } else { ?>
                                <h4><?php echo get_woocommerce_currency_symbol() . ' ' . $product->get_regular_price(); ?></h4>
                            <?php } ?>
                        </div>
                        <div class="snipcart-details">
                            
                            <a href="<?php echo $product->add_to_cart_url() ?>" value="<?php echo esc_attr( $product->get_id() ); ?>" class="ajax_add_to_cart add_to_cart_button" data-product_id="<?php echo get_the_ID(); ?>" data-product_sku="<?php echo esc_attr($product->get_sku()); ?>" aria-label="Add “<?php the_title_attribute() ?>” to your cart"> Add to Cart </a>

                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</div>
