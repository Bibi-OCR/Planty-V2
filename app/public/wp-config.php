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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '70171Md?/UMu9_c/M*6I7#b;v@px}1Ayk5_*D};6P|a5LTGef0n)3ZFO{nsJ4%{ ' );
define( 'SECURE_AUTH_KEY',   'W#2@-d&-Q4!*FToJ,X>AbL C#Mk%AyNi+ eii<ll7w&S--h9s@Ml/s9D<*A)@p]|' );
define( 'LOGGED_IN_KEY',     '-8ydzHsH(oS%/N8`wjKvLS*fMr|y*Xh0]:*O3:i&Z ~j8,e7](%d;DfvPn]?)6fB' );
define( 'NONCE_KEY',         '=&.Otko$W;zRn|*OK=>D)fn%#],hNLdt[2f+@YFQ`q+phwc5lMch5+HHv]Tq(2d}' );
define( 'AUTH_SALT',         '24EB~1$OtG7^THd9^bJgk%0JRk2(Wj;R&GNWd5hO.fi^J:*s6@T<u$<Ou}lSzsEm' );
define( 'SECURE_AUTH_SALT',  'mk$X;CyA18kB!?=59|:eQkH`W,.KtCQQ/Pq0AjQ|0<~$1`sHD5Qlm#VwGtYGo-1)' );
define( 'LOGGED_IN_SALT',    '@B?Z[E;:t/[i&s`W#l&;,RbElH#h;3/lEsz&A7X%HhR^@YYCyBx/I9?-m9_|s`O{' );
define( 'NONCE_SALT',        '(AoM^TO[l_+G ;oIUs _V%!$T,aBRngZh7fp~o#WIgL(eSU~qYAhmPJGy-|FP#*]' );
define( 'WP_CACHE_KEY_SALT', '3_C8,6P+Gg:=t>xG&<cf6LRi^]6}M+GwyEC6c-vv?G/1w3IWB(5)cZTp-[IVxH{?' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


