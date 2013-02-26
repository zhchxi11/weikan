<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', '%%DB_NAME%%' );
	define( 'DB_USER', '%%DB_USER%%' );
	define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
	define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         'Djd=qBt5#:akK5loSv3DXH,2y58-3v7Mty7$NGuls.fxU-l._M{:A%wM$l$MG#cE');
define('SECURE_AUTH_KEY',  'V([LOdX!fSW}[,u(g=_A0WP}k9^kOU(vxia^HyP[h??sylC|D@Pcuy[:xN[_p|ok');
define('LOGGED_IN_KEY',    ',b_7kv$aBGVU[tA|UG{6-|gkG5q3V:s{r~I|[?+MT(C)l2%^No.0Uosxg+?VZ-gi');
define('NONCE_KEY',        'XZ*vK6xX({f](:.T~OG+Kf?3a(tLRZkxSu1<z(#i[rY.Q~xz?(&U[:j[^G<?5-.b');
define('AUTH_SALT',        '+*s?/XsVB>!f785{TSH@k~[]R,L]1pE{L$3?y++Uj,xE5vInF;4/d].:K5kwSLcH');
define('SECURE_AUTH_SALT', ' _bBo5agt#?m?K}bIhYu?bQxpsBQIW&zY-Dy}+(u/VsDX&m#@`~Xq9HC_T?5TqOc');
define('LOGGED_IN_SALT',   'GFb[T`+FZp[k;b+ 7Fn6eH#QkV8uhix2(4CsPNMjSY-)a[<dF==@j5)t2zErD-z ');
define('NONCE_SALT',       '}[#S-PGAiN|*$y3K`C)8(o.7ZYca>mg*K1)do77KT)hT?aeE(4eti1T6MtV8s3:+');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'cms_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
