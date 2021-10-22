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
define( 'DB_NAME', 'cmsmodule' );

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
define( 'AUTH_KEY',         'bCCAQyiv.{9yA@>5f U,<%0~)pS4+! aLp5NRDNhj9uTv`v$UrSNHWP:<p,C{&_d' );
define( 'SECURE_AUTH_KEY',  '[$bs>M.|PBm;}u4?K~(kZ&KYVus)$3OXl>^rQP6?Q!k GzUT 0l,Y=0i>@>RG7HO' );
define( 'LOGGED_IN_KEY',    ':K  ;(sZy_O]4pk=WY]TWvS#;dFiDf<h)3Eyi6*GkYy Vqmu)X`>CU F#zDX,xS<' );
define( 'NONCE_KEY',        '[~fgzh*5fvS7/cq@UqVQn0&a5|7S`5fBsQ:b6]>}oVfmn5@wej(M$UgUCmISGQ9R' );
define( 'AUTH_SALT',        's_D@l.=:a:9LW6Q6g<keW~,;%,w{<DrB+}Agkk78Z<wjZjj]9:Y[(F!?2-ao(h)I' );
define( 'SECURE_AUTH_SALT', 'bq IwPhm0k!] +_0{O2aywy~2ykH[WGK.;$+XNy/I5]sQ!p-G_H1dukkm9g=fM&s' );
define( 'LOGGED_IN_SALT',   's0bc4$O_rh8}&wD`ue uLGsl?=wJ,GZ-]>#:1v|$Ty;K&|FZ><&=2@cF.uLX]?bt' );
define( 'NONCE_SALT',       'a!s!SDfp@TC^X]Y=h:6QV#mnNhL,LO~=#&Pp/3ptysT~ ]7-ErgT2&9jr]*];F5~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cv_';

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
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);