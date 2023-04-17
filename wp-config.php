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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp1\htdocs\cochisweb\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'cochiswebBD' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']Bv%l_`}E+~EnsMzZxX[isS/!uzddN{i.f^{:?E|5JW~@Er/]e-U>vWR~MVIqGu@' );
define( 'SECURE_AUTH_KEY',  'pC4rb;f:fC`hgJL@S9f^()ttq}LVGfT);wHyR0CY2ScegOK3 S5BmR<n$%T2>?Bl' );
define( 'LOGGED_IN_KEY',    '1ISJ=unXu}_;{>fW#2iWp:O-D`IDieb07m.^QO..! UG~@e7MCkp:aDf_aTixXfB' );
define( 'NONCE_KEY',        '4HqMn_/s:CJr1d%(G}`Nd&+t(#XtT&.u}lGX ,Gd-b 0(Q@q@,S q`dw#%fd4VG*' );
define( 'AUTH_SALT',        '2cq9C:(2JR.aBTDsi[!# `[^&(RX~dtVi/Wp^=V34>SiyF]*HA&2a!zF]K;U:qE@' );
define( 'SECURE_AUTH_SALT', 'n!qKl]pbwJ-K6_C|I0QMfjfiAF~pUzoz@~ 3Pj<lgXg!F?YU!vI W|{wm7D4K1~>' );
define( 'LOGGED_IN_SALT',   'G9!(w;p[/}C{pWa1CfBZ;7uvr$mzO)WYm^eMEL>HeggZ{D=d7VD_NbUAee?WmF4z' );
define( 'NONCE_SALT',       '!9B~uZh8vi5qyf/)`_dFFozQ!v!oK,,jjedr1p!Xvxu=1kN>yV;I2iu=y`w!?~Wv' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
