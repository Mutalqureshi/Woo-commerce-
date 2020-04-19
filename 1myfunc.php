<?php

add_action( 'woocommerce_before_single_product', 'myfunc', 1 );
function myfunc() {
	echo '
	<div class="col small-12 large-12 mcg">
	  <div class="col-inner text-center">
		<p style="text-align: center;"><span style="font-size: 150%;"><strong><span style="color: #bf1e2e;">The masks contain no metal parts. This allows them to be hand-washed with soap and water and then microwaved for 60 seconds to dry and disinfect.</span></strong></span></p>
		<a href="https://cuttingcornersmasks.com/donation-via-credit-card/" target="_self" class="button success is-large"> <span>Make a Donation</span> </a> </div>
	</div>
	';
}