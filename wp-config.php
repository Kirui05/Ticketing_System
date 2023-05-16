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
define( 'DB_NAME', 'ticketing' );

/** Database username */
define( 'DB_USER', 'admin1' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'kt59^KeHy`Q/5 o%ZHKe@brdC}MdBMQ#S1vU _BV=.eyZ,w^V+Qfykw=ljI]EQxL' );
define( 'SECURE_AUTH_KEY',  '8z< XbPH#$ND(1(+3bBFoR[P+vuSsujoc77A,Gj)3U{.*<ek!+f84B!KcT.tZ>[J' );
define( 'LOGGED_IN_KEY',    'wM-/F*4>4VV~l6)F;UPRhLd,I+*-Kq i{[m&HBeF&fG|y4FO%i$#t/N:6v4-$S^#' );
define( 'NONCE_KEY',        '#QL4f|tLlLc@CzXrt-x({di+]KYDh}o4SxnV<hG%/i&&/?Y,30tcxI3&*.];23Rb' );
define( 'AUTH_SALT',        'N*1u=bk)Pb_rTX;3CBL0/6Jc:gBDIdpl(rD#t(Lk:a+BI9)gWgP(xT[9wHloA`x&' );
define( 'SECURE_AUTH_SALT', 'W@5^On ,<IL]H3<ZRROJ(U:z e9k6%9sj}fY .LCrStN5OBXNT5X56:Wj-/ZELST' );
define( 'LOGGED_IN_SALT',   'wZwV3xf@ZYelgAR[fCw6/]H)$^0JQP*f_}V9n]FBJ{J[s75bI``r/R9*q/KRTYc%' );
define( 'NONCE_SALT',       '0/aZ=j|Lg&uq{GOcqVA@&y/AchRL]4qxS86PY*(muvex,Z!t]ryrpkuVLpv%d]w`' );

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
