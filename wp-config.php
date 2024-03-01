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
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         '4xkD cb+s3gVx;ThOR[p(MG=9p){W0+-by4&G*Z~?KEu$Ul}SU1<P]ml {)[Xwdb' );
define( 'SECURE_AUTH_KEY',  ' 9Twa}guhK* ~4C.F|:m/g|5jZ2~[+]spg45]3}~-Gd(yTR|o}<]8|} 5K@/[/;f' );
define( 'LOGGED_IN_KEY',    '{pL!s/-KENxO(ANhwA.^#7_EVL}>R2&Fx+l 0&97Bu&;w9_k/_G$ou~L5FwPj_fS' );
define( 'NONCE_KEY',        'T{vkoZ&SS;VzB?R & J:K@G>GH.TgM8,)oGE,nfzEM;4=&U2hX<^JFKxr3So9&9W' );
define( 'AUTH_SALT',        'H#Hm]4V4RWO_#yItR(L;d8Q$h!Zo&PNa>x$hp*h(uVJQ-Ny~w0IrMQm?<8((DI!`' );
define( 'SECURE_AUTH_SALT', 'LAk75sQYy@(2<|/,9>el4ZQixl3#8LvNj2d{>|v16z9rI=c(UYj*U`L4$zGm++)S' );
define( 'LOGGED_IN_SALT',   '+}j|9NMB-,T;<K^xy)nc3KYoh&Bsrikq&n55@:)52Z)a/v7f8mS{o{B^4t}|G6<4' );
define( 'NONCE_SALT',       'c%vCQa$<CZ#~>9[H2jweZg(;%3ano<XU:Yg4^gu^c&x}CRpCfEhMima QsZ1xf=*' );

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
