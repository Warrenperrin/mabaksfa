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
define( 'DB_NAME', 'mabaksfa' );

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
define( 'AUTH_KEY',         'rBo_<:8tfZw,KaQv8FFYKJ cmTqUOWl.bo-rEmCCgk080WrEvSb*7Mdo-&3s?42G' );
define( 'SECURE_AUTH_KEY',  'eah.hL}Gf7}ga/_W?wiO*V05ply3f_uGZD|m(mz~,xam9=]LGbw-{>mo:`B)gcg?' );
define( 'LOGGED_IN_KEY',    'jIG=~^gIuv;zAW 1&y%U6Gb.3*r0Q>X|`NuyH-6cj80@hh Zn8]pWGsl.=jJ<5 p' );
define( 'NONCE_KEY',        'RK]5k w}WTwsy*#&[:APTA.2}4MdDfM@~!vYx?!=L7j;]txaj4U<ZP9aK|:(Fxty' );
define( 'AUTH_SALT',        'ZTTdA,`>zyuXkaa9joP<f}oXC3aH0-XeS3b0?J-1D#zlXDyd8p4]E+I5}))$}Q%S' );
define( 'SECURE_AUTH_SALT', '3Zv1o.v?bKuq:BL^t>rpk3+xm+IjQfmscHIi!MW[5_n. HlGp-[nW~o$HG7=XDkH' );
define( 'LOGGED_IN_SALT',   'I[(oh?1s0Ej}v#UX(5AlQ|X(KX8#s6_:Epz1IWp^SI77i*b&I!J#ypRPI>x0tb7;' );
define( 'NONCE_SALT',       '+JE;H]9.v,y(IyzbX?9i%,Sb/}HCd*]2@wOPZwix=-nCuOQm1ClXWJX9#mfE+<mt' );

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
