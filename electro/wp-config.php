<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u369254171_Q99J7' );

/** Database username */
define( 'DB_USER', 'u369254171_7gNIr' );

/** Database password */
define( 'DB_PASSWORD', 'ZGrv9MfTr1' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '[y9INN @<>[5_ y5Wx1h^-Rgmq.W*E.+%ujR)#j+ism!x:ck.~FAP3~Xn+*B<P; ' );
define( 'SECURE_AUTH_KEY',   'ilV}`~O1O_pn6RYfZQ%p=+ZG&h4)}c!m]*RRG6 wc[{kgOsgQn]s}P#3Dj`oQzn+' );
define( 'LOGGED_IN_KEY',     '_z){k!rx+YP26)0_e0Od9F2AP#`bg`|C{iRu(#Ep`Z}FtJ9#8`QzZeI::e4Pg!G#' );
define( 'NONCE_KEY',         'aR276=/uL@Y=Vn:U&OhsJ@PC1t~@0]c`N9h;d9&/NsLF9SDH|?:OgS7_4o ;WZ:D' );
define( 'AUTH_SALT',         '^^BnYcIORRB=bmqsCVJX.MKp:/O`(64x)!19KS4q1v-SP#,|Y=NSfZIAvPwjZWRg' );
define( 'SECURE_AUTH_SALT',  '},;q:0NZTG_ Mh?v]X+&-a8~9&Yp)r<#|^jOeXgwhEcfacnI-d?l[p|t=fmw8z:R' );
define( 'LOGGED_IN_SALT',    'S#4s?7m4,6}$2pGAy+l#Z6P>1pJoQulnG<BY(lWTWM$sDNiAnsHO/-1m+lHC<o`*' );
define( 'NONCE_SALT',        '^w&3e}WF}+R6{n5h)X*@Mz-3C/3(n@K<euVdp};Azi`IJ/#Z4{%;HjRD 0~*7s`W' );
define( 'WP_CACHE_KEY_SALT', '*rcmCC|<oZjs;nKB)A)z{:h?h]UGx=>y=FUM:Q!:b7.rd&@w)$Bf4MPu> 52;JB:' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
