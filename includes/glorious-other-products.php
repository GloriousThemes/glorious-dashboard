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
				$is_motive = 'is-active';
                    $gheader = 'Our Glorious Products, that you will like';
                    $gdesc = 'Check out other products created by GloriousMotive';
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