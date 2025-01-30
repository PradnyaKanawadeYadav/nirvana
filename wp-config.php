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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nirman' );

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
define( 'AUTH_KEY',         'l+o;<~K$XH.o`r2a1Un7z69>GtL36JV-F&A7zbS-A(lfd&8V7, 5@NHd3-Sl~h;N' );
define( 'SECURE_AUTH_KEY',  '3wr5aGFU@EQ0> ]Heui[{yb:;@AV~y0=vy/K2BqaM(=#J .*v;vA%=-&Ab^l9E]>' );
define( 'LOGGED_IN_KEY',    '[gO]=j1O/c,y3/@n.pK~!3Kv%WH`6ZoD!F}33$2uo?M51ayHmsa6{=JKR}?@-)H4' );
define( 'NONCE_KEY',        'fY%Cf.aU$Z/wq% 2tB3Sik)80qrG/ {D@bPP]+YFoK7W:2aG*tuvRQ J2!g/w- r' );
define( 'AUTH_SALT',        '.0)<AomONppt-a0|trAj_m7;2 2&L`C[2hut9sz.fi[jMo6bJxYn`#KkSO>@sI6h' );
define( 'SECURE_AUTH_SALT', '#Uv+> RwNFa%Dx#E.X.pqJ|EbI66E|5Vl$Qpcoi0ECi)d`VZp7?F4[]%4.r{m.FX' );
define( 'LOGGED_IN_SALT',   '8p^PP5O&:q~)WT|f*fM[Bdc%uYoL@Ud~+}YRtvxGbVZ6/#43ci5qf+TQ~Y2]X(4k' );
define( 'NONCE_SALT',       'N0Q,E<t+{D$*#%T>u0-Yw(FoY))XIAqh, <dm_;3 e@-JwOjX@FB!#qD.<(R!U|,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
