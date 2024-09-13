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
define( 'DB_NAME', 'xtm18wyq' );

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
define( 'AUTH_KEY',         '!l$]HvmYBKn$oBSsibUf!3Q~}INM)THW6#KZv8m]E8rr8#uyakBX+LAuk2[1AHe-' );
define( 'SECURE_AUTH_KEY',  'Y{_G|B?fBw};MzyM,6ri/8~V F^vi9PQ@o.SJL1Z,=v+v`]sZ]ms> RJtaW)Z:kI' );
define( 'LOGGED_IN_KEY',    'dVGswBtr@}|^EaWV6aEG1/}Y:CMqvT!d.l6a/btT?c_SQ8z67N7xyMWur}yEM|Om' );
define( 'NONCE_KEY',        'N@s6)DYs#s4,oc8p}kl6of:RV9YXolXqFz=rp$t`uXchM>]iX!Siy]1ShdHbOu#F' );
define( 'AUTH_SALT',        'l2N!;l#zM9-xFQ$k@wp,semOHRz{z%k;4G]/w4)}KW;s.c_f}Tef?2V}`0+:Z45?' );
define( 'SECURE_AUTH_SALT', 'tP,6lMX76Yg1ULw4LR~hA4#xVh?kT!7FY`CmYfxHgO#Y_>Oz{2SzNV~5>pM+,iX#' );
define( 'LOGGED_IN_SALT',   '_i.:BlN`l1S;=Y2tg-$2:78iu?PW2FEIF> jGp0Xo6^6|9V-tLlr5C],WohJU2sQ' );
define( 'NONCE_SALT',       '+KZ*%rJ(KvRY|R/7|GM|}.,rFQbz!Ixwx{|u6y()1:{/OgMoc>5m%zfL+.G3DD%A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xtm_';

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
