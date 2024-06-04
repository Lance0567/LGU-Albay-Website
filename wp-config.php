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
define( 'DB_NAME', 'lgrrc' );

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
define( 'AUTH_KEY',         'RU+RNHvHWIIFygc4mI#fyi=71HB2V]|D)VxCU^(zO0`a OM9$jEnZmaN XK.hX5x' );
define( 'SECURE_AUTH_KEY',  'aQSg&2Za4h!DWU%jS,D,v0k q~{rkca4?;quXObNwsw^jmF@[E|t.JiPJ$O;iTV~' );
define( 'LOGGED_IN_KEY',    ',h%1S!7`HQOc,jAm5$0ctAG2!*MV>.?#tQYYv.)UVGI.JH/]HxYIG6B_A~_Yg83x' );
define( 'NONCE_KEY',        '5GlP[ngCb0]9MM!ZZ(q%k(x?P=DAQ[^r(m,9bvd?>J5FJLt&wf+jATeF6LE,Ngy=' );
define( 'AUTH_SALT',        'r7!GDQ[q-?)Pv9dtV>x$ 8qCsO2WSg(2Hd=P4UO,sp3sYUNqXi2ZW_rs,s:OEZBO' );
define( 'SECURE_AUTH_SALT', 'rh*gVdJLiVffx;K-%OiVP/5DD4!S6IpZU($nK:1 1Q*9NG0u/ee@RLl/A>Gi$[8r' );
define( 'LOGGED_IN_SALT',   'fE`)1ZeD/!Y}O4d~!Hx)+:cOuv,]+Y] NVCXt|j<M5@Jt8lqSpmH$;~<]3O~+EQ1' );
define( 'NONCE_SALT',       'b)4c9_ixONkjit{)jVQ}gf_,Q8$N;be%+ebqR2pp~16Z<fulWQv2URWU`>t|*z_-' );

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
