<?php
$gloriousframework_lic = new AyushMultiPurposeTheme();
?>
<main>

  <div class="lqd-dsd-wrap">

    <?php
    //include nav
    $is_license = 'is-active';
    include 'themes/common/header.php';?>
    <div class="lqd-row">

      <!-- Activated License Form -->
      <?php 
      if(empty($licenseKey)) {
        $gloriousframework_lic->Activated();
      } else { ?>

      <!-- Normal License Form -->
      <?php $gloriousframework_lic->LicenseForm(); } ?>

      <!-- License Benefits List --> 
      <div class="lqd-col lqd-col-6">
        <div class="lqd-dsd-box lqd-dsd-features-box">
          <h4>Unlock Premium Features</h4>

          <div class="lqd-iconbox">
            <span class="lqd-icon-container">
              <img src="https://gloriousmotive.com/wp-content/themes/hub/liquid/assets/img/dashboard/check.svg"
                alt="Check">
            </span>
            <div class="lqd-iconbox-contents">
              <h3>Enable Auto Updates</h3>
              <p>Smart Dashboard keeps your site up-to-date. Free for lifetime.</p>
            </div>
          </div>

          <div class="lqd-iconbox">
            <span class="lqd-icon-container">
              <img src="https://gloriousmotive.com/wp-content/themes/hub/liquid/assets/img/dashboard/check.svg"
                alt="Check">
            </span>
            <div class="lqd-iconbox-contents">
              <h3>Exclusive and Premium Plugins</h3>
              <p>Get access to premium and exclusive plugins for free.</p>
            </div>
          </div>

          <div class="lqd-iconbox">
            <span class="lqd-icon-container">
              <img src="https://gloriousmotive.com/wp-content/themes/hub/liquid/assets/img/dashboard/check.svg"
                alt="Check">
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