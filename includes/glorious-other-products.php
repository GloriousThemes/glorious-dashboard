<?php
/**
 * Glorious Other Products
 * 
 * Fetches Products using JSON from github and displays as boxes
 * 
 * Uses fetch-products.php
 */
?>
<div class="content-wrapper">
	<div class="containers">

		<main>

			<div class="lqd-dsd-wrap">

				<?php 
				$is_products = 'is-active';
                    $gheader = 'Glorious Products';
                    $gdesc = 'Check out other Glorious products created by GloriousMotive that will turn make your WordPress Glorious';
				include  GLORIOUSDASHHOME . 'includes/themes/common/header.php';?>
				
				<!-- Infos -->
				<div class="row">
                         <?php
                         require_once GLORIOUSDASHHOME . 'includes/fetch-products.php'; //fetch JSON
                         ?>
                    </div>

			</div>

		</main>

	</div>
</div>