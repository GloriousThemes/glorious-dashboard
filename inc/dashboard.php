<?php
/*
*	Admin Page Welcome
*
* 	@author		Greatives Team
* 	@URI		https://greatives.eu
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}







$docs_link = 'https://support.gloriousdash.com/docs/gloriousdash';
$videos_link = 'https://support.gloriousdash.com/support';
$support_link = 'https://support.gloriousdash.com';
$demo_sites = 'https://demo.gloriousthemes.com/ayush'

?>

<div id="huro-app" class="app-wrapper">   
    <div id="user-profile" class="view-wrapper" style="padding-top:80px;min-height:700px !important;">
            <div class="page-content-wrapper">
                <div class="page-content is-relative">
                    <div class="page-content-inner">
                        <!--Profile Settings-->
                        <div class="profile-wrapper">
                            <div class="profile-header has-text-centered">
                                <h3 class="title is-4 is-narrow"><?php esc_html_e( wp_get_theme() , 'gloriousdash' ); ?></h3>
                                <p class="light-text">Thank you so much for this purchase. You are now ready to use another premium WordPress theme by GloriousDash. Be sure that we'd be happy to support you all the way through and make GloriousFramework Theme a lasting experience..</p>
                            </div>


                            <div class="profile-body">

                                <div class="settings-section">
                                    <a class="settings-box" href="/wp-admin/admin.php?page=<?php echo wp_get_theme(); ?>">
                                        <div class="icon-wrap">
                                            <i class="lni lni-cogs"></i>
                                        </div>
                                        <span>Customize</span>
                                        <h3>Site Settings</h3>
                                    </a>
                                    <a class="settings-box" href="/wp-admin/admin.php?page=<?php echo wp_get_theme(); ?>&tab=2">
                                        <div class="icon-wrap">
                                            <i class="lni lni-users"></i>
                                        </div>
                                        <span>Branding</span>
                                        <h3>Logo Settings</h3>
                                    </a>
                                    <a class="settings-box" href="themes.php?page=one-click-demo-import">
                                        <div class="icon-wrap">
                                            <i class="lni lni-inbox"></i>
                                        </div>
                                        <span>Demos</span>
                                        <h3>Import Demos</h3>
                                    </a>
                                    <a class="settings-box" href="<?php echo esc_url('themes.php?page=merlin'); ?>">
                                        <div class="icon-wrap">
                                            <i class="lni lni-control-panel"></i>
                                        </div>
                                        <span>Setup</span>
                                        <h3>Startup Wizard</h3>
                                    </a>
                                    <a class="settings-box" href="/themes.php?page=<?php echo wp_get_theme(); ?>-install-plugins">
                                        <div class="icon-wrap">
                                            <i class="lni lni-layers"></i>
                                        </div>
                                        <span>Install</span>
                                        <h3>Install Plugins</h3>
                                    </a>
                                    <a class="settings-box" href="<?php echo esc_url('admin.php?page=ayush'); ?>">
                                        <div class="icon-wrap">
                                            <i class="lni lni-ruler-pencil"></i>
                                        </div>
                                        <span>Activate</span>
                                        <h3>License Setting</h3>
                                    </a>
                                    <a class="settings-box" target="_blank" href="<?php echo esc_url( $demo_sites ); ?>">
                                        <div class="icon-wrap">
                                            <i class="lni lni-restaurant"></i>
                                        </div>
                                        <span>Visit</span>
                                        <h3>Demo Sites</h3>
                                    </a>
                                    <a class="settings-box" target="_blank" href="<?php echo esc_url( $docs_link ); ?>">
                                        <div class="icon-wrap">
                                            <i class="lni lni-bubble"></i>
                                        </div>
                                        <span>FAQs</span>
                                        <h3>Documentation</h3>
                                    </a>
                                    <a class="settings-box" target="_blank" href="<?php echo esc_url( $videos_link ); ?>">
                                        <div class="icon-wrap">
                                            <i class="lni lni-bulb"></i>
                                        </div>
                                        <span>Help</span>
                                        <h3>Video Tutorials</h3>
                                    </a>
                                    <a class="settings-box" target="_blank" href="<?php echo esc_url( $support_link ); ?>">
                                        <div class="icon-wrap">
                                            <i class="lni lni-support"></i>
                                        </div>
                                        <span>Open Ticket</span>
                                        <h3>Support System</h3>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php

//Omit closing PHP tag to avoid accidental whitespace output errors.
