<main>

	<div class="lqd-dsd-wrap">

		<nav class="lqd-dsd-menubard">

	<span class="lqd-dsd-logo">
		<img src="https://gloriousmotive.com/wp-content/themes/hub/liquid/assets/img/dashboard/hubbig.svg" alt="Hub">
		<span class="lqd-v">1.3</span>	</span>

	<ul class="lqd-dsd-menu">
		<li class="">
			<a href="">
				<span>GloriousMotive</span>
			</a>
		</li>
		<li class="is-active">
			<a href="/wp-admin/admin.php?page=<?php echo GLORIOUS_THEME_DASH; ?>">
				<span>Welcome</span>
			</a>
		</li>
		<li class="">
			<a href="/wp-admin/admin.php?page=wpayush">
				<span>Activation</span>
			</a>
		</li>
		<li class="">
			<a href="/wp-admin/themes.php?page=<?php echo GLORIOUS_THEME_DASH; ?>-install-plugins&plugin_status=install">
				<span>Install Plugins</span>
			</a>
		</li>
		<li class="">
			<a href="/wp-admin/themes.php?page=one-click-demo-import">
				<span>Import Demo</span>
			</a>
		</li>
		<li class="">
			<a href="/wp-admin/admin.php?page=gloriousdash-dashboard-products">
				<span>Other Products</span>
			</a>
		</li>
		<li>
		<a href="https://gloriousmotive.com/docs" target="_blank">
			<i class="lqd-icn-ess icon-md-help-circle"></i>
			<span>Documentations</span>
		</a>
		</li>
	</ul>

</nav>
	
		<header class="lqd-dsd-header">
			<div class="lqd-dsd-header-inner">
				<h2>Welcome to <?php echo GLORIOUS_THEME_NAME; ?>!</h2>
				<p>Total design freedom for everyone. Current Screen</p>
				<?php 
				$gloriousCurrentScreen = get_current_screen();
				echo $gloriousCurrentScreen->parent_base; ?>
			</div>
		</header>
		
		<div class="lqd-row">

			<div class="lqd-col lqd-col-6">
				<div class="lqd-dsd-box lqd-dsd-box-solid lqd-dsd-register-box">

	<div class="lqd-dsd-box-head">

		<div class="lqd-dsd-confirmation fail">
							<h4>Purchase code is invalid.</h4>
							<p>Please check your purchase code and re-enter. Looking for help? Visit <a href="https://docs.liquid-themes.com/" target="_blank">our help center</a> or <a href="https://liquidthemes.freshdesk.com/support/home" target="_blank">submit a ticket</a>.</p>
						</div><!-- /.lqd-dsd-confirmation fail -->
	</div>

			<form action="options.php" method="post" class="lqd-dsd-register-form">
			<input type="hidden" name="option_page" value="hub-license"><input type="hidden" name="action" value="update"><input type="hidden" id="_wpnonce" name="_wpnonce" value="de190873d3"><input type="hidden" name="_wp_http_referer" value="/wp-admin/admin.php?page=liquid">			<input id="hub_purchase_code" name="hub_purchase_code" type="text" value="**********" placeholder="Enter your purchase code">
			<input id="hub_register_email" name="hub_register_email" type="email" value="**********@mail.com" placeholder="Enter your email">
			<input type="submit" value="Register your copy">
		</form>
			
	<div class="lqd-dsd-box-foot">
		<a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-" target="_blank">Can’t find your purchase code?</a>
	</div>

</div>			</div>

			<div class="lqd-col lqd-col-6">

				<div class="lqd-dsd-box lqd-dsd-features-box">

	<h4>Unlock Premium Features</h4>

	<div class="lqd-iconbox">
		<span class="lqd-icon-container">
			<img src="https://gloriousmotive.com/wp-content/themes/hub/liquid/assets/img/dashboard/check.svg" alt="Check">
		</span>
		<div class="lqd-iconbox-contents">
			<h3>Enable Auto Updates</h3>
			<p>Smart Dashboard keeps your site up-to-date. Free for lifetime.</p>
		</div>
	</div>

	<div class="lqd-iconbox">
		<span class="lqd-icon-container">
			<img src="https://gloriousmotive.com/wp-content/themes/hub/liquid/assets/img/dashboard/check.svg" alt="Check">
		</span>
		<div class="lqd-iconbox-contents">
			<h3>Exclusive and Premium Plugins</h3>
			<p>Get access to premium and exclusive plugins for free.</p>
		</div>
	</div>

	<div class="lqd-iconbox">
		<span class="lqd-icon-container">
			<img src="https://gloriousmotive.com/wp-content/themes/hub/liquid/assets/img/dashboard/check.svg" alt="Check">
		</span>
		<div class="lqd-iconbox-contents">
			<h3>Premium Support</h3>
			<p>Get access to top-notch support.</p>
		</div>
	</div>

</div>

			</div>

		</div>

	</div>

</main>