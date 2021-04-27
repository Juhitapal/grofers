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
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header();

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' );

?>
<?php
wc_get_template_part('others/breadcrumbs');

?>
<?php
$woo_terms = get_terms(array(
    'taxonomy' => 'product_cat',
    'hide_empty' => false,
));

//echo "<pre>";
//print_r($woo_terms);
//exit();
?>
    <div class="banner">
        <div class="w3l_banner_nav_left">
            <?php wc_get_template_part('others/category', 'left-sidebar'); ?>
        </div>
        <div class="w3l_banner_nav_right">
            <?php wc_get_template_part('others/banner'); ?>
            <?php wc_get_template_part('others/banner', 'bottom'); ?>

            <div class="w3ls_w3l_banner_nav_right_grid">
                <h3>Popular Brands</h3>

                <?php
                foreach ($woo_terms as $wo_values):
                    ?>
                    <div class="w3ls_w3l_banner_nav_right_grid1">
                        <h6><?php echo $wo_values->name; ?></h6>
                        <?php
                        $product_args = array(
                            'post_type' => 'product',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_cat',
                                    'field' => 'term_id',
                                    'terms' => array($wo_values->term_id)
                                )
                            )
                        );

                        $product_result = new WP_Query($product_args);

                        while ($product_result->have_posts()) :$product_result->the_post();
                            ?>

                            <?php wc_get_template_part('content', 'product'); ?>
                        <?php
                        endwhile;
                        ?>
                        <div class="clearfix"></div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>


<?php //do_action( 'woocommerce_after_main_content' );?>


<?php get_footer(); ?>