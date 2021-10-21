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
define( 'DB_NAME', 'speedtestcms' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '*Su=jVn#LvXkq#W(+cmwK }8l%0f.W<)6&U7ZHa_N89(5K31EI(B8,irZAaY[oo3' );
define( 'SECURE_AUTH_KEY',  'u9Qc-d*M* SGruyi%;kI7=hE5{{y4Q21,;}1dOE!AOIx3pW6G]V)vw[o[vLvfp&H' );
define( 'LOGGED_IN_KEY',    '=78Xo=w*oJ7AYGwRi.m+6s-r_wR+]1}FOF|3x|b8ub9?N(2BnGn2fg:hH94$fJ[8' );
define( 'NONCE_KEY',        'OQXsLtd8$<_VL`>EfF_a$2?zCaXte1j[0!<.z9r+%1tG4uA962@dX94AYn5*):F8' );
define( 'AUTH_SALT',        'lxV%q!qrkyWv;Y-vmo@YCA-:o&Zhl4Qgd$R`y{(AIXAENh/oUa9AkaNV[K/f$0`Q' );
define( 'SECURE_AUTH_SALT', 'rALK4Kc3Z#Ob,-Mt)Zf-TmCP3Sp}UJx31g3C4y+A08yTj>aN:Uzw4`M8q#dbKQ q' );
define( 'LOGGED_IN_SALT',   '>]eL|udmL5QH+.$VfBKI,j3=d*&u%_=_Z U!=%7*W[j{Z2n/hcdX(QdU4(l70U{=' );
define( 'NONCE_SALT',       '+D6:5NP,TI](`>xrYZ3l3gtDLjekS~XK4O4~I1sQCLW)06|wE8i;N&4)xR_||#-_' );

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
