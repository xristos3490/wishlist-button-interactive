/**
 * WordPress dependencies
 */
import { store, getContext } from '@wordpress/interactivity';

const { state } = store("woocommerce-iapi-product-wishlist-button", {
	state: {
		get isProductIncluded() {
			const ctx = getContext();
			return state.wishedProducts.includes(ctx.productId);
		},
	},
	actions: {
		toggleProduct() {
			const ctx = getContext();
			console.log( 'Adding product ID: ', ctx.productId );

			// Optimistically update the state.
			const index = state.wishedProducts.findIndex(
				(product) => product === ctx.productId,
			);
			if (index === -1) state.wishedProducts.push(ctx.productId);
			else state.wishedProducts.splice(index, 1);

			// Update persisted data.
			// This is a simple example, in a real-world scenario you would use a REST API.
		},
	},
});
