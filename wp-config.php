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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dost-gwhs' );

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
define( 'AUTH_KEY',         'R_VO`!$|F]rv5:,p_>XkX Y%sfzQ &2r,29H_yYPgKS7ik*JK1|8C&fV&8x:1RY*' );
define( 'SECURE_AUTH_KEY',  '1.dm4)B&xOFQeerXQR)bnVEXirUtr?~y6%yzi!rcR(Ls61HI*AWz)X-`4VsC^D=,' );
define( 'LOGGED_IN_KEY',    'f~*~{pdWoq@s6(&eL>O?]V!]OUpo{+aD1JF:^rz+0=~o#bPsviyQ|DO5Gn#678.$' );
define( 'NONCE_KEY',        'qvUR[EwJx?X;$Q7Kt<y0AF>;Tu-twv %c7S^-H{GOiV?z%Voz;hAb*9E`4PbRg>A' );
define( 'AUTH_SALT',        'Tcqobz{tcD`2C]>t/j_FxE~V_lnIFVpbA,8r@dYV28mg5z%+Gxp3V=NTDY D7q{G' );
define( 'SECURE_AUTH_SALT', 'zFgdm*7.egb<{p{sCEN=gj#&ISnSQ/*.xwpl5WzF 93raTU$H[L9ffK1#B}:F=2M' );
define( 'LOGGED_IN_SALT',   '7/rdud K^5N<C];OucX3WYUo8{8)WrlP%08.F`1`y:-`i9# V>9S)lv*M$h*i1c~' );
define( 'NONCE_SALT',       '+_?S~L7.Xdjr1%D[goOye;395bUZYqv=+mYB`A|=9c8;7H4G??E,UG0RoB)oDllw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dostOne_';

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
