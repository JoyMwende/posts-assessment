<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'posts-assessment' );

/** Database username */
define( 'DB_USER', 'admin2' );

/** Database password */
define( 'DB_PASSWORD', 'postadmin' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm,4M9oHi~}.RVGgn,m+b!3!niX#.yNHNnr|1f-3*3UyfCW9nLUkg]zcM!Bv0iq9I' );
define( 'SECURE_AUTH_KEY',  '6yaUG@J6<f~8B8`n)EzO4*m3G`.12]`VA3i(zjan`||qc/n<W%rh97Xx>q~msQz=' );
define( 'LOGGED_IN_KEY',    '.I&4^6VfGq<(;TjH%?Xd90*BzS{4Voj,vz~/ JB0bvZ(HkI~`ZM[cV2s6ik+s&ib' );
define( 'NONCE_KEY',        'x?A&O>#6dmurB@ [dp[s0VnqhT_tf*paww8p1XM|Sk0,Hmk{-(2.G1/*<q-2pCs9' );
define( 'AUTH_SALT',        ' cC]c|Zs(6+Y]H%5_PO1Z%n; {jC,uji}}|9V2D<KzH)FS41yW/2MtRn)]AI [?p' );
define( 'SECURE_AUTH_SALT', 'P|%  ]biB]ozbm3JcS(pJ<1#HI|EK+@W)_CG}*WbFO Ej:^M% 05GGb)M)Xq xf/' );
define( 'LOGGED_IN_SALT',   'l=&-XAsc8yKh65=%ehs9,e6mCxo{oLY`T-w<m7{[%h8 $0Bg7+:piJ6IF45`G?^e' );
define( 'NONCE_SALT',       'V1GN0&|;f^CYI/.YK`H+Ce$nh<xiLl~Ng2{@z?kxo6-_ tIBjYZo7`G2h#!%]]VT' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
