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
define( 'DB_NAME', 'vinylbuzz' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'r6k,A)UW~JA5E4q]%{U&,!JJk]#pY4OYTy2Tc@p!o1o^V06wD9/%Hnf[)gFtMJ#(' );
define( 'SECURE_AUTH_KEY',  '~NY/x6xB8p(mOR`1+1,_NfO|molu*O^!a<Y2%y!lK;)Uo=UpC/&_|,g`5lltzzkv' );
define( 'LOGGED_IN_KEY',    'PHi.S5DcNpU4Tm_n+W8-s8^^oC~ 0nR^1D!6$5_*o-b>g?ScFyrySwZQ@s(u|7;Z' );
define( 'NONCE_KEY',        '(7{Uh8(l;ND5*2hYJx_o`lEES7EH*TWN4B[C{8`~,;;sJaG$J3WC yfBmS2Vr%w5' );
define( 'AUTH_SALT',        '  F48b{]U-|YnXUPBtyG68fi/uqfXv63nwf}^IRGqy~z:Il?NeJPX^odEY^kY0tK' );
define( 'SECURE_AUTH_SALT', 'ob+Hxl~d5/kdQD9I#$q:NCIp-_*<]P(GAr%Pkb_&l0MSZ%m|mrqzF_:n=5wZUlSu' );
define( 'LOGGED_IN_SALT',   'vXEMG BPrLh2m0#_loKYe~]]t=<PjjS //}2$qk./gv6JQws6K6.{dcCgts_G%r(' );
define( 'NONCE_SALT',       '}1DL2UlW(<MWww*1uxx3cv_Lp?  =_k}j08cO=eBsi`N*B6Tnn`<8l&O_}5hc&1g' );

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
