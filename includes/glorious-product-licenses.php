<?php
$gloriousframework_lic = new AyushMultiPurposeTheme();
?>
<main>

  <div class="lqd-dsd-wrap">

    <nav class="lqd-dsd-menubard">

      <span class="lqd-dsd-logo">
        <img src="https://gloriousmotive.com/wp-content/themes/hub/liquid/assets/img/dashboard/hubbig.svg" alt="Hub">
        <span class="lqd-v">1.3</span> </span>

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
          <a href="https://gloriousmotive.com/wp-admin/admin.php?page=liquid-plugins">
            <span>Install Plugins</span>
          </a>
        </li>
        <li class="">
          <a href="https://gloriousmotive.com/wp-admin/admin.php?page=liquid-import-demos">
            <span>Import Demo</span>
          </a>
        </li>
        <li class="">
          <a href="https://gloriousmotive.com/wp-admin/admin.php?page=liquid-import-demos">
            <span>Other Products</span>
          </a>
        </li>
        <li>
          <a href="https://docs.liquid-themes.com/collection/174-hub-wordpress-theme" target="_blank">
            <i class="lqd-icn-ess icon-md-help-circle"></i>
            <span>Support</span>
          </a>
        </li>
        <li>
          <a href="https://docs.liquid-themes.com/collection/174-hub-wordpress-theme" target="_blank">
            <i class="lqd-icn-ess icon-md-help-circle"></i>
            <span>Documentations</span>
          </a>
        </li>
      </ul>

    </nav>

    <header class="lqd-dsd-header">
      <div class="lqd-dsd-header-inner">
        <h2>Welcome to <?php echo GLORIOUS_THEME_NAME; ?>!</h2>
        <p>Total design freedom for everyone.</p>
      </div>
    </header>

    <div class="lqd-row">

      <!-- Activated License Form -->
      <?php $gloriousframework_lic->Activated(); ?>

      <!-- Normal License Form -->
      <?php $gloriousframework_lic->LicenseForm(); ?>

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