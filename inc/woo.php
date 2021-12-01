<?php
    // WooCommerce Modification
    add_filter('wp_calculate_image_sizes', '__return_empty_array');
    add_filter('wp_calculate_image_srcset', '__return_empty_array');

    remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
    remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
    remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
    remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
    remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

    function plantex_before_shop_loop_item() {
        echo '<article class="product__card"><div class="product__circle"></div>';
    }
    add_action( 'woocommerce_before_shop_loop_item', 'plantex_before_shop_loop_item');

    function loop_product_custom_thumbnail() {
        echo the_post_thumbnail('thumbnail', array('class' => 'product__img'));
    }
    remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
    add_action( 'woocommerce_before_shop_loop_item_title', 'loop_product_custom_thumbnail', 10 );

    function plantex_before_shop_loop_item_title() {
        echo '<h3 class="product__title">';
    }
    add_action( 'woocommerce_before_shop_loop_item_title', 'plantex_before_shop_loop_item_title', 10 );
    add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );

    add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
    add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

    function plantex_after_shop_loop_item() {
        echo '</article>';
    }
    add_action('woocommerce_after_shop_loop_item', 'plantex_after_shop_loop_item');


    if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {

        /**
         * Get the product thumbnail, or the placeholder if not set.
         *
         * @param string $size (default: 'woocommerce_thumbnail').
         * @param int    $deprecated1 Deprecated since WooCommerce 2.0 (default: 0).
         * @param int    $deprecated2 Deprecated since WooCommerce 2.0 (default: 0).
         * @return string
         */
        function woocommerce_get_product_thumbnail( $size = 'woocommerce_single', $deprecated1 = 0, $deprecated2 = 0 ) {
            global $product;
    
            $image_size = apply_filters( 'single_product_archive_thumbnail_size', $size );
    
            return $product ? $product->get_image( $image_size ) : '';
        }
    }