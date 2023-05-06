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
define( 'DB_NAME', 'hanaart' );

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
define( 'AUTH_KEY',         'DD`@]ovvkc%uy= +(!UjWP0V_%JJ{<u4}iyZfB3g[@o~ 7U(wE(,? -Mbnp5Oi[&' );
define( 'SECURE_AUTH_KEY',  'j2y=_nZV8/|p+BmBjG:sZMzrL?X%FqM5A:E2!gT,Ol# iw.2TFBq!:cI<91}Fj,e' );
define( 'LOGGED_IN_KEY',    'doE(2on}p@G&1TI`d9KF!/{sGO|8>kUbYXH{P&sxi-c3wyAB+6Ass>U[Z^Hf?W+!' );
define( 'NONCE_KEY',        'brThf >f&Gow=O(||aT!:GIC.Bq1/vI /V;?W?Uef.`}E%RtZ}hyC>!Jy_X&W%IH' );
define( 'AUTH_SALT',        'SVb-Qy~SX3 ;#wnMiqg&<=k>e8=aBEth`Z,?Aw&O+qM%7d2,Z$]K5NX2v_W$;uug' );
define( 'SECURE_AUTH_SALT', '&# 9l<k|M &t}U>pjB/h(/i/0CTVy1:xrOEXpDV+>!x9ZuAxU,Ah2{}5sac^1A5x' );
define( 'LOGGED_IN_SALT',   'h`g*aYe<?#<gwSm=o,BIFX&*DK8rqLhXpl1~=xz{7/+SR3fcgc`=F=y%!Y7Cxm3@' );
define( 'NONCE_SALT',       '1j`A0FJq(&iI$byi<!(?2zG9:U|q1RaDxMzW,N)vq$:9L>PJ(jc1(^fzA=NvC]Vk' );

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
