<?php
/**
 * Uninstall Headers Security Advanced & HSTS WP
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit;
}

delete_option( 'hsts_max_age' );
delete_option( 'hsts_include_subdomains' );
delete_option( 'hsts_preload' );
delete_option( 'hsts_csp' );
delete_option( 'hsts_pp' );
delete_option( 'hsts_x_frame_options_url_field' );
delete_option( 'hsts_x_frame_options' );

delete_option( 'hsts_csp_report_uri' );
delete_option( 'disable_hsts_header' );
delete_option( 'disable_csp_header' );
delete_option( 'disable_x_content_type_options_header' );
delete_option( 'disable_x_frame_options_header' );