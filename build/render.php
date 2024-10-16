<?php
/**
 * Server rendering for the wishlist button block.
 */
$product            = wc_get_product();
$wrapper_attributes = get_block_wrapper_attributes();
$heart_icon         = file_get_contents( WBI_PLUGIN_ABS_PATH . '/assets/empty-heart.svg' );
$context            = array( 'productId' => $product->get_id() );

wp_interactivity_state(
	'woocommerce-iapi-product-wishlist-button',
	array(
		'wishedProducts'    => array(), // In a real-world scenario, this would be fetched from the server.
		'isProductIncluded' => false, // Same based on the product ID.
	),
);
?>

<div
  data-wp-interactive="woocommerce-iapi-product-wishlist-button"
  <?php echo $wrapper_attributes; ?>
  <?php echo wp_interactivity_data_wp_context( $context ); ?>
>
	<button
	  class="wishlist-button"
	  data-wp-on--click="actions.toggleProduct"
	  data-wp-class--is-product-wishlisted="state.isProductIncluded"
	  >
		<?php echo $heart_icon; ?>
	</button>
</div>	
