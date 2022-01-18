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
define( 'DB_USER', 'honorablepress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'passer123' );

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
define( 'AUTH_KEY',         '7Tj+I*9UT_t$^~E9:zEenT.+-2|z-,|E],|VCgp:*pX6zygY}o%F!OBj|jO}ZdoA' );
define( 'SECURE_AUTH_KEY',  'mxl[D_KiW24-6 #lV3L.z~}e:oRpli)Cw;@hsUtBM]LxnWRQP;/d2oE~4^kp,vHU' );
define( 'LOGGED_IN_KEY',    'gsSfBw$}%z*3DqE%l4#i?ORI?i$T&FWRhk*_XbI*iRH,8jKdZ.Pp0d=J!%#BDy~-' );
define( 'NONCE_KEY',        '*np9kjo`AnK3,E9t$+%L-9>027Cl:jrgO[N=Vsr{3oYB0i*XZn{_A7+ssPpbmNN~' );
define( 'AUTH_SALT',        '&/scn[ak!:*v{!vDAc:G,}sD<<m2+]OwnX_XnZ$Q|j$JefxR*p<K6v1?wc%g=VtZ' );
define( 'SECURE_AUTH_SALT', 'UY;#JUEZEj&/{fzL>gIBvL_jAe}a^F;b3j@ob?DMi6+Au=WY,88q)<k&b=oZ]5><' );
define( 'LOGGED_IN_SALT',   '%8v}~fa 1%L9X;)]Gy1z94ypTJD.IyQfHuWzg5|K<tvow>h81? 96GrNnJxq7e#F' );
define( 'NONCE_SALT',       '|]d`+16dx~~fL{L=:R|#{ ~Pnqkk?0pYg]H%,$ItJl-SaV8Fc6e+Qi?ju4l7s-<+' );

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
define('FS_METHOD', 'direct');
