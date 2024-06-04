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
define( 'DB_NAME', 'whiteriver' );

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
define( 'AUTH_KEY',         'm{kkF9#.y:d#`3E`54_G: ^f@1kXHde/jg5177`n3$,ry/UoIV}71qb<nF&%CiPg' );
define( 'SECURE_AUTH_KEY',  '@a%&wKznF#{(853(/niD+h9>HmchiNonhVCy|ySU a5UL8>N->Sy*5E)XP7.R$L*' );
define( 'LOGGED_IN_KEY',    'bI{U(q!2]C>k={*P~G@nD:4#(FpZ$rz&2.}}[bW4-| z7xVVzZ3=xHB,2@l}XfqD' );
define( 'NONCE_KEY',        '^(;p !j#NBc,Q/ inq=bb57feP8]*?z@Z2SN@JIbxczw(#.P&]T#1xgjl:E0[Uf_' );
define( 'AUTH_SALT',        '^#<R;U`Bm(;srqt+8%1<B-o!>Cr[{{^~xbZ(yoq_1dfumuCOg]P]>v$^@+][c k{' );
define( 'SECURE_AUTH_SALT', '#79N9zU8L8V8zQ~({%0XZqqREpu]NFH}y7k|S<J_Lv,<}!1*Q?=m5DI`CRO.!(.k' );
define( 'LOGGED_IN_SALT',   '.4XOgN4QEJ|KD-.kVL@icQ6IW=`h$VDMy$h`0q)Un0+r|9rm{qBLFRIV?`gz+ztP' );
define( 'NONCE_SALT',       '^#a[9zQ,-djCuPBHX}09-,{l3Rp5tg.-nUE2-r_X=esd&PApwF+L8kush{n?XQYK' );

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
