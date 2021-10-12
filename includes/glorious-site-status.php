<?php
/*
*	Admin Page Status
*
* 	@author		Greatives Team
* 	@URI		https://greatives.eu
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function gloriousframework_glorious_check_php_val( $size, $min_size, $error_text = '' ) {
	if ( wp_convert_hr_to_bytes( $size ) < wp_convert_hr_to_bytes( $min_size ) ) {
		return gloriousframework_glorious_get_status_error_val ( $size, true, $error_text );
	} else {
		return gloriousframework_glorious_get_status_error_val ( $size, false );
	}
}
function gloriousframework_glorious_php_info_link( $size, $min_size ) {
	$link = '';
	if ( wp_convert_hr_to_bytes( $size ) < wp_convert_hr_to_bytes( $min_size ) ) {
		$link = '<a class="glorious-small-btn" href="//bloggersprout.com/recommended-server-settings-memory-issues" title="' . esc_attr__( 'Visit Documentation', 'gloriousframework' ) . '" target="_blank" rel="noopener noreferrer">' . esc_html__( 'How to Fix', 'gloriousframework' ) . '</a>';
	}
	return $link;
}

function gloriousframework_glorious_get_php_version_val() {
	if ( version_compare( phpversion(), '5.6', '<' ) ) {
		return gloriousframework_glorious_get_status_error_val ( phpversion(), true, esc_html__( '(recommended PHP 5.6 or higher)', 'gloriousframework' ) );
	} else {
		return gloriousframework_glorious_get_status_error_val ( phpversion(), false );
	}
}

function gloriousframework_glorious_get_status_error_val( $val, $error, $error_text = '' ) {
	if ( $error ) {
		$ret = '<mark class="error">' . $val . ' ' . $error_text . '</mark>';
	} else {
		$ret = '<mark class="yes">' . $val . '</mark>';
	}
	return $ret;
}

function gloriousframework_glorious_status_bool_to_text( $val ) {

	if ( !$val ) {
		 $ret = '-';
	} else {
		 $ret = '<mark class="yes"><i class="dashicons dashicons-yes"></i></mark>';
	}
	return $ret;
}

function gloriousframework_glorious_status_get_theme_data() {

	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$parent_theme = wp_get_theme( $theme->template );

		$theme_info = '';
		$theme_value = $parent_theme->name . '(' . $parent_theme->version . ')';
		$theme_value2 = $parent_theme->name . ' <span> v' . $parent_theme->version . '<span>';
		$child_theme_info = '';
		$child_theme_value = $theme->name . ' v' . $theme->version;
		$child_theme_value2 = $theme->name . ' <span>' . $parent_theme->version . '<span>';
	} else {
		$theme_info = '';
		$theme_value = $theme->name . ' v' . $theme->version;
		$theme_value2 = $theme->name . ' <span> v' . $theme->version . '<span>';
		$child_theme_info = '';
		$child_theme_value = '-';
		$child_theme_value2 = esc_html__( 'No Child Theme', 'gloriousframework' );
	}

	$data = array(
		array(
			'id' => 'theme',
			'title' => esc_html__( 'Theme', 'gloriousframework' ),
			'info' => $theme_info,
			'value' => $theme_value,
			'value2' => $theme_value2,
		),
		array(
			'id' => 'child_theme',
			'title' => esc_html__( 'Child Theme', 'gloriousframework' ),
			'info' => $child_theme_info,
			'value' => $child_theme_value,
			'value2' => $child_theme_value2,
		),
	);
	return $data;
}

function gloriousframework_glorious_status_get_environment_data() {

	$data = array(
		array(
			'id'   => 'home_url',
			'title' => esc_html__( 'Home URL', 'gloriousframework' ),
			'info' => '',
			'value'  => home_url(),
		),
		array(
			'id'   => 'site_url',
			'title' => esc_html__( 'Site URL', 'gloriousframework' ),
			'info' => '',
			'value'  => get_option( 'siteurl' ),
		),
		array(
			'id'   => 'wp_version',
			'title' => esc_html__( 'WP Version', 'gloriousframework' ),
			'info' => '',
			'value'  => get_bloginfo( 'version' ),
		),
		array(
			'id'   => 'wp_memory_limit',
			'title' => esc_html__( 'WP Memory Limit', 'gloriousframework' ),
			'info' => gloriousframework_glorious_php_info_link( WP_MEMORY_LIMIT, '96M' ),
			'value'  => gloriousframework_glorious_check_php_val( WP_MEMORY_LIMIT, '96M', esc_html__( '( recommended: 96M )', 'gloriousframework' ) ),
		),
		array(
			'id'   => 'wp_max_memory_limit',
			'title' => esc_html__( 'WP Max Memory Limit', 'gloriousframework' ),
			'info' => gloriousframework_glorious_php_info_link( WP_MAX_MEMORY_LIMIT, '256M' ),
			'value'  => gloriousframework_glorious_check_php_val( WP_MAX_MEMORY_LIMIT, '256M', esc_html__( '( recommended: 256M )', 'gloriousframework' ) ),
		),
		array(
			'id'   => 'wp_multisite',
			'title' => esc_html__( 'WP Multisite', 'gloriousframework' ),
			'info' => '',
			'value'  => gloriousframework_glorious_status_bool_to_text( is_multisite() ),
		),
		array(
			'id'   => 'wp_debug',
			'title' => esc_html__( 'WP Debug Mode', 'gloriousframework' ),
			'info' => '',
			'value'  => gloriousframework_glorious_status_bool_to_text( defined( 'WP_DEBUG' ) && WP_DEBUG ),
		),
		array(
			'id'   => 'wp_language',
			'title' => esc_html__( 'Language', 'gloriousframework' ),
			'info' => '',
			'value'  => get_locale(),
		),
	);

	return $data;

}

function gloriousframework_glorious_status_get_server_data() {

	$gd_val = '-';
	if ( extension_loaded( 'gd' ) && function_exists( 'gd_info' ) ) {
		$gd_val = '<mark class="yes"><i class="dashicons dashicons-yes"></i></mark>';
		$gd_info = gd_info();
		if ( isset( $gd_info['GD Version'] ) ) {
			$gd_val = $gd_info['GD Version'];
		}
	}
	
	$imagick_enabled = true;
	if ( ! extension_loaded( 'imagick' ) || ! class_exists( 'Imagick', false ) || ! class_exists( 'ImagickPixel', false ) ) {
		$imagick_enabled = false;
	}

	$data = array(
		array(
			'id'   => 'php_version',
			'title' => esc_html__( 'PHP version', 'gloriousframework' ),
			'info' => '',
			'value'  => gloriousframework_glorious_get_php_version_val(),
		),
		array(
			'id'   => 'memory_limit',
			'title' => esc_html__( 'PHP Memory Limit', 'gloriousframework' ) . ' (memory_limit)',
			'info' => gloriousframework_glorious_php_info_link( ini_get( 'memory_limit' ), '256M'),
			'value'  => gloriousframework_glorious_check_php_val( ini_get( 'memory_limit' ), '256M', esc_html__( '( min: 256M )', 'gloriousframework' ) ),
		),
		array(
			'id'   => 'post_max_size',
			'title' => esc_html__( 'PHP Max. Post Size', 'gloriousframework' ) . ' (post_max_size)',
			'info' => gloriousframework_glorious_php_info_link( ini_get( 'post_max_size' ), '128M' ),
			'value'  => gloriousframework_glorious_check_php_val( ini_get( 'post_max_size' ), '128M', esc_html__( '( min: 128M )', 'gloriousframework' ) ),
		),
		array(
			'id'   => 'upload_max_filesize',
			'title' => esc_html__( 'PHP Upload Max. Filesize', 'gloriousframework' ) . ' (upload_max_filesize)',
			'info' => gloriousframework_glorious_php_info_link( ini_get( 'upload_max_filesize' ), '32M' ),
			'value'  => gloriousframework_glorious_check_php_val( ini_get( 'upload_max_filesize' ), '32M', esc_html__( '( recommended:32M )', 'gloriousframework' ) ),
		),
		array(
			'id'   => 'max_execution_time',
			'title' => esc_html__( 'PHP max_execution_time', 'gloriousframework' ) . ' (max_execution_time)',
			'info' => gloriousframework_glorious_php_info_link( ini_get( 'max_execution_time' ), '300' ),
			'value'  => gloriousframework_glorious_check_php_val( ini_get( 'max_execution_time' ), '300', esc_html__( '( min: 300 )', 'gloriousframework' ) ),
		),
		array(
			'id'   => 'max_input_vars',
			'title' => esc_html__( 'PHP Max. Input Variables', 'gloriousframework' ) . ' (max_input_vars)',
			'info' => gloriousframework_glorious_php_info_link( ini_get( 'max_input_vars' ), '3000' ),
			'value'  => gloriousframework_glorious_check_php_val( ini_get( 'max_input_vars' ), '3000', esc_html__( '( min: 3000 )', 'gloriousframework' ) ),
		),
		array(
			'id'   => 'domdocument_enabled',
			'title' => esc_html__( 'DOMDocument', 'gloriousframework' ),
			'info' => '',
			'value'  => gloriousframework_glorious_status_bool_to_text( class_exists( 'DOMDocument' ) ),
		),
		array(
			'id'   => 'gzip_enabled',
			'title' => esc_html__( 'GZip', 'gloriousframework' ),
			'info' => '',
			'value'  => gloriousframework_glorious_status_bool_to_text( is_callable( 'gzopen' ) ),
		),
		array(
			'id'   => 'curl_enabled',
			'title' => esc_html__( 'cURL', 'gloriousframework' ),
			'info' => '',
			'value'  => gloriousframework_glorious_status_bool_to_text( function_exists( 'curl_init' ) ),
		),
		array(
			'id'   => 'gd_library',
			'title' => esc_html__( 'GD Library', 'gloriousframework' ),
			'info' => '',
			'value'  => $gd_val,
		),
		array(
			'id'   => 'imagick_library',
			'title' => esc_html__( 'ImageMagick', 'gloriousframework' ),
			'info' => '',
			'value'  => gloriousframework_glorious_status_bool_to_text( $imagick_enabled ),
		),
	);

	return $data;

}


function gloriousframework_glorious_status_get_plugins_data() {
	$active_plugins = (array) get_option( 'active_plugins', array() );
	if ( is_multisite() ) {
		$active_plugins = array_merge( $active_plugins, array_keys( get_site_option( 'active_sitewide_plugins', array() ) ) );
	}
	$data = array();


	foreach ( $active_plugins as $plugin ) {

		$plugin_data    = @get_plugin_data( WP_PLUGIN_DIR . '/' . $plugin );

		if ( ! empty( $plugin_data['Name'] ) ) {
			if ( ! empty( $plugin_data['PluginURI'] ) ) {
				$plugin_name = '<a href="' . esc_url( $plugin_data['PluginURI'] ) . '" title="' . esc_attr__( 'Visit plugin homepage', 'gloriousframework' ) . '">' . esc_html( $plugin_data['Name'] ) . '</a>';
			} else {
				$plugin_name = esc_html( $plugin_data['Name'] );
			}

			$data[] = array(
				'title' => $plugin_name,
				'info' => '<a class="glorious-small-btn" href="' . esc_url( $plugin_data['AuthorURI'] ) . '" target="_blank" rel="noopener noreferrer">' . esc_attr__( 'More', 'gloriousframework' ) . '</a>',
				'value' => 'v' . esc_html( $plugin_data['Version'] ) . ' &ndash; ' . esc_attr__( 'by', 'gloriousframework' ) . ' ' . esc_html( $plugin_data['AuthorName'] ),
			);
		}
	}

	return $data;

}
	$status_theme_data = gloriousframework_glorious_status_get_theme_data();
?>
	<div id="glorious-admin-pannel-wrapper" class="glorious-status-wrap">
		<div id="glorious-admin-nav-wrapper">
			<?php //gloriousframework_glorious_print_admin_links('status'); ?>
		</div>
		<div class="glorious-admin-title">
			<h2 class="glorious-title"><?php esc_html_e( "Status", 'gloriousframework' ); ?></h2>
			<p class="glorious-description"><?php esc_html_e( "Check below the status of your installation. If you meet any issues, click the button to produce a report of your environment. Then, copy and paste this information in your ticket. Our agents will be glad to help you.", 'gloriousframework' ); ?></p>
		</div>
		<div class="glorious-theme-status">
			<a href="#" class="glorious-btn button-primary glorious-debug-report"><?php esc_html_e( 'Get system report', 'gloriousframework' ); ?></a>
			<?php
				if ( !empty( $status_theme_data ) ) {
					foreach ( $status_theme_data as $theme_data => $data ) {
			?>
						<div class="glorious-status-item"><?php echo wp_kses_post( $data['value2'] ); ?></div>
			<?php
					}
				}
			?>
		</div>
		<div id="glorious-debug-report">
			<textarea id="glorious-debug-textarea" readonly="readonly"></textarea>
			<p class="submit">
				<button id="glorious-copy-for-support" class="button-primary" href="#" data-tip="<?php esc_attr_e( 'Copied!', 'gloriousframework' ); ?>">
					<?php esc_html_e( 'Copy for support', 'gloriousframework' ); ?>
				</button>
			</p>
			<p class="copy-error hidden">
				<?php esc_html_e( 'Copying to clipboard failed. Please press Ctrl/Cmd+C to copy.', 'gloriousframework' ); ?>
			</p>
		</div>

<?php
		if ( !empty( $status_theme_data ) ) {
?>
		<table class="glorious-table glorious-status-table glorious-hidden-table" cellspacing="0">
			<thead>
				<tr>
					<th class="glorious-status-title-wrapper" colspan="3"><h2 class="glorious-table-title"><?php esc_html_e( 'Theme', 'gloriousframework' ); ?></h2></th>
				</tr>
			</thead>
			<tbody>
<?php
			foreach ( $status_theme_data as $theme_data => $data ) {
?>
				<tr>
					<td class="glorious-label-wrapper"><h4 class="glorious-table-label"><?php echo wp_kses_post( $data['title']  ); ?></h4></td>
					<td><?php echo wp_kses_post( $data['value'] ); ?></td>
					<td class="glorious-info-link"><?php echo wp_kses_post( $data['info'] ); ?></td>
				</tr>
<?php
			}
?>
			</tbody>
		</table>
<?php
		}

		$status_environment_data = gloriousframework_glorious_status_get_environment_data();
		if ( !empty( $status_environment_data ) ) {
?>
		<table class="glorious-table glorious-status-table" cellspacing="0">
			<thead>
				<tr>
					<th class="glorious-status-title-wrapper" colspan="3"><h2 class="glorious-table-title"><?php esc_html_e( 'WordPress Environment', 'gloriousframework' ); ?></h2></th>
				</tr>
			</thead>
			<tbody>
<?php
			foreach ( $status_environment_data as $theme_data => $data ) {
?>
				<tr>
					<td class="glorious-label-wrapper"><h4 class="glorious-table-label"><?php echo wp_kses_post( $data['title']  ); ?></h4></td>
					<td><?php echo wp_kses_post( $data['value'] ); ?></td>
					<td class="glorious-info-link"><?php echo wp_kses_post( $data['info'] ); ?></td>
				</tr>
<?php
			}
?>
			</tbody>
		</table>
<?php
		}

		$status_server_data = gloriousframework_glorious_status_get_server_data();
		if ( !empty( $status_server_data ) ) {
?>
		<table class="glorious-table glorious-status-table" cellspacing="0">
			<thead>
				<tr>
					<th class="glorious-status-title-wrapper" colspan="3"><h2 class="glorious-table-title"><?php esc_html_e( 'Server Environment', 'gloriousframework' ); ?></h2></th>
				</tr>
			</thead>
			<tbody>
<?php
			foreach ( $status_server_data as $theme_data => $data ) {
?>
				<tr>
					<td class="glorious-label-wrapper"><h4 class="glorious-table-label"><?php echo wp_kses_post( $data['title']  ); ?></h4></td>
					<td><?php echo wp_kses_post( $data['value'] ); ?></td>
					<td class="glorious-info-link"><?php echo wp_kses_post( $data['info'] ); ?></td>
				</tr>
<?php
			}
?>
			</tbody>
		</table>
<?php
		}
		$status_plugins_data = gloriousframework_glorious_status_get_plugins_data();
		if ( !empty( $status_plugins_data ) ) {
			$status_plugins_count = count( $status_plugins_data );
?>
		<table class="glorious-table glorious-status-table" cellspacing="0">
			<thead>
				<tr>
					<th class="glorious-status-title-wrapper" colspan="3"><h2 class="glorious-table-title"><?php esc_html_e( 'Active Plugins', 'gloriousframework' ); ?> (<?php echo esc_html( $status_plugins_count ); ?>)</h2></th>
				</tr>
			</thead>
			<tbody>
<?php
			foreach ( $status_plugins_data as $theme_data => $data ) {
?>
				<tr>
					<td class="glorious-label-wrapper"><h4 class="glorious-table-label"><?php echo wp_kses_post( $data['title']  ); ?></h4></td>
					<td><?php echo wp_kses_post( $data['value'] ); ?></td>
					<td class="glorious-info-link"><?php echo wp_kses_post( $data['info'] ); ?></td>
				</tr>
<?php
			}
?>
			</tbody>
		</table>
<?php
		}
?>
	</div>
<?php

//Omit closing PHP tag to avoid accidental whitespace output errors.

