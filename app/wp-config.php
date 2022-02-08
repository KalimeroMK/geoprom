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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'homestead' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'D!S&Wat<,3UJ:=4LctJcK7.Yp?=:^441G;JZ<fWt<})%Lepc}nc):>2L3lV8{V3R' );
define( 'SECURE_AUTH_KEY',  ' qT+J.w^sn6o3b)YF1~^5+xq~#imLYL/rNe|[E-6jTr%&HqdQus)gbC>yIrC)`fv' );
define( 'LOGGED_IN_KEY',    'CNiPCZS=Ft?R)PnYwVM{wS.5ff=%&05Y7yoiBw{cB.OiLniE,wczeTX(184S#!0}' );
define( 'NONCE_KEY',        's$?Bm<s{~)`@z13=qU^JGl=Cv2<~c-.$B?9L<5n0s!9*d#aV|G{BsH>2 !_<<]m1' );
define( 'AUTH_SALT',        ':r7),<T 54_|+X^qKRcKI!N.lx)sL+Z,cFLc3?mK36{4m;wGj%(P30mT)RepH;f`' );
define( 'SECURE_AUTH_SALT', 'o[{%*0}GE.L!SY/mit}kUvXBXp`qBXc ~F|K|E)>&{:+|Ezl&UNrA@mUoK(HZuW/' );
define( 'LOGGED_IN_SALT',   '(EC(UD=h1sFn@G}fTH.WU-,AOtHm~X7uC:iZ[khykq-[%Z[poE$bo-jc_t?eA)>_' );
define( 'NONCE_SALT',       'e<(+|v+ t4+MNR%x_vCTYeF$AJ/9y1m+.0!i=&p9&I=u9t$G}553EDydW{NYGj#:' );

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
