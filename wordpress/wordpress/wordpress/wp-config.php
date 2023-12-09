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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'Y_rzPgCw#[7,Pu,OMkF0f;5||{~032YI1/ve}o&ztBanVco*U[c1o99&-eZD-+-[' );
define( 'SECURE_AUTH_KEY',  'Qj68P0yj<hDYARY[rVi4?Q+T2 T)#QW_{$.0-Q57vm2:auX4{9Ht2o)@}U{G>lv0' );
define( 'LOGGED_IN_KEY',    '9G2XLK}&mHA8Ge=cQSm`5iI^K2j0P%8u?Hm53*$M4:Y6-%jBwn?wIF&>cNE~oF0)' );
define( 'NONCE_KEY',        'a;>a.R0qUgjDY/Be;ckfk&9R<S`6Vs5}kDw6<&hMP3Y(KG^xVL;u%BX3/mTEv~;?' );
define( 'AUTH_SALT',        'A25dN8ipK/( K:x<Ec<|T S%H7E2|rZRCml[vVjwn;&>L*E [NqJCgZ8v-hkphIC' );
define( 'SECURE_AUTH_SALT', ']`w+Ff7n@y;l+m|j`9tw$%^PP`#L?*hiL^SPjL 9/lnH4N?c)Tpn2xOst<0(1mVc' );
define( 'LOGGED_IN_SALT',   'X*f]Vo$Pix`~+~)MsRK3~+e2mx2Anu<!$7|t;Cx[=;}]C[yGr|cFPL$!tl0x#P9{' );
define( 'NONCE_SALT',       'J!IMuB?U;;d383@WMfBn&Tq&JyE2oNkZ1!%N).H}b-YNH /M<&IPvqoAgs>&xj9C' );

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
