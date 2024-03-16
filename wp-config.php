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
define( 'DB_NAME', 'cv' );

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
define( 'AUTH_KEY',         '@}k`z99DLeN}:E:vJ:VkvO]RQ725Xn#W^KJE()[RjrcHBXrd^yTmKxpAG pW ^$l' );
define( 'SECURE_AUTH_KEY',  '2%{tHL266eHBYN]xk@~ikJ PNt#L6`H%QjQoo8pY3az?{T.|FmW^^yy#L:LD*e A' );
define( 'LOGGED_IN_KEY',    '@,O>CeDA*`6##~[YG&;|:kad8gM&]7J;bF|<Z5]$N9OU*[<p)@C&)j 50^J<1*:p' );
define( 'NONCE_KEY',        '}4/3|F}ywHUA{tuhlDJze{kW2,b%6E$C5(Ilj#qYuFs6ME8Ge8iBVdCo`K)Hz[=U' );
define( 'AUTH_SALT',        'pd=mS$8=q5Ww1_nv[orhM.Zug-YW-pixq(smh5,2pNj)9hTMDKEQ^LFFZv0-*z>5' );
define( 'SECURE_AUTH_SALT', 'h<kq#6;+pyuYlhVvk`d-z%6j,YnPeA@oq4I&-U4D1~;S)L|!]D|-,]udQB^9L)Wm' );
define( 'LOGGED_IN_SALT',   'Zp[pV-:&{DC7Nx(0[$$N^OL&!iPEo#I@Godv!b9@C]pF}g5h(S@/ uQ]?V8fzR`Y' );
define( 'NONCE_SALT',       '// aI_&%SADB(FVdHH*GvPMC9/u?n?&nx__vuE7Nvv>nMS*t)%Uo:9aud(*g<RIB' );

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
