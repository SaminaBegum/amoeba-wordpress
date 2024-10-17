<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'amoeba' );

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
define( 'AUTH_KEY',         'f}xnZBvk%RF4)e@.<#y8O<a8L%SlKxtBLd<tITa^EP,HX}Y3ss0`#ka)7.IeKvt ' );
define( 'SECURE_AUTH_KEY',  'N`,Eaj/MY*zw%ADr 1S Nrg?yh-hoM: I5sjh4Q^wi1li~e:V9z/o`Y7+&R#sh@]' );
define( 'LOGGED_IN_KEY',    'N`H8,O?-T!:A)nMnM&3H_xbM0e|57zYh:vaQ<.om$/#df<~cXf(cE]U>K4AsbdeD' );
define( 'NONCE_KEY',        '<<Jc9XK} Xf_#jm0U[%Sn;N{`Aiq p95qhECBpfUYG.MH`+/h4@Em~sK1RtwG)gj' );
define( 'AUTH_SALT',        'RozaIRz&rWo%g-!;cYQ|q6_g*]t;`|f#RE3hYF[}HO.XD-{k_=BlC~g#tgllPC5P' );
define( 'SECURE_AUTH_SALT', 'wTbX^*1mC%;L#b2uXItM^Ov6q6Ce<BCy#40g&zUY,d]`s4H=O5aoz:^i.:3Ie=4s' );
define( 'LOGGED_IN_SALT',   '4/T5.H&ftKU;)ASER1:e=lcAn,FEwON,Siou9Hp|?2?2pxg]D!ti;C9YMtwRE:p{' );
define( 'NONCE_SALT',       'rI17y-^?^z2t.2HpJxR{x]j<HDm@>==NjfMWI5Ys;o^}HB9Tx~5gg1n@? p>oKx@' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
