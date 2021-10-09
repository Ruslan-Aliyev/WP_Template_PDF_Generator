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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'ruslan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ruslan' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'ry?N`_:^[>NaH+&:TauoN[ftH5=:N!6T^qB=(tk+@X$[W9^as;KKo!Gw]3G)}o3Y' );
define( 'SECURE_AUTH_KEY',  '/#)A&_EMhPd4@`$6$A4EzgPGTvCp_%ur`p#i8GIy_^7YB0])t=m.aK+~_4{;K/Yv' );
define( 'LOGGED_IN_KEY',    '&upMpe!3g]e,Xdd-7kx1fc*zxKQE]i0l?$+_uIHKltG4oX_L/B0FC4L9 ubRrl-!' );
define( 'NONCE_KEY',        'p*Imyw.o2$(rI0nSunqmT<.:<T(.BbDil/7mj*44G }VI!T]iu=wUXNhiPF?j@9p' );
define( 'AUTH_SALT',        '_CULco%}L1_>doi>&E7CL.;GWIr]wdzX~<6@y#x>45ODZ-f,oH0sSFy5pGoy:O@w' );
define( 'SECURE_AUTH_SALT', 'UF)3ob!]9u]|cDYF&RC$./S`$w!6qmYn|dv1?LbSOA]E(-s@hCD[Kud|Ycam3u^f' );
define( 'LOGGED_IN_SALT',   '>qKq-z?,W:IG yyPS%DB~s-P[]M*>@>zQ=^-4oia!;5{eD$9*{TbbvX=PLt5_]@c' );
define( 'NONCE_SALT',       'y._|<vMU5$Y[>_!)XAo=~eKl6J,:&r$w6X/zU8K`UQ#.$K#Rs393*2djMLZvH6B_' );

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
