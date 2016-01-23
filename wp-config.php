<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fufyFlorist');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!]sblwSA?y.AL5VeRa$h8k$(?}Z-w*z?h67P~gUubYt%Vw{eGWY1X{)I?Ag-/Nt-');
define('SECURE_AUTH_KEY',  '5E9FfhL$l/t@fgUT_aSLR85ey4NIJMTRm&|,Leo3Jt.N~f`mHz2{7~+]lTfbm($q');
define('LOGGED_IN_KEY',    'WL~#Z4v ZUb{{P-5kx_QRcIhZ@Lu1im,8k+^3`<Ks$y@$P-L[3MUqn?BuIVoy?-!');
define('NONCE_KEY',        '0|)tKkL2x+z^P|HA<he+EC-XM^TNNl-f.S!<uQW.}t6u7g%&I5d{z8,oQ*(.0-W{');
define('AUTH_SALT',        '~H([.){[Z7HJj(fBOPU4B9EeMJp,q6TFvs<k.#qHLDg9#ckk~3,/`XRNE+buv5F{');
define('SECURE_AUTH_SALT', 'QGfnO!p5&SsY`9VjVi.D?6d /~gEQVh[Rx>9=TpP`qjZjlh];xB!9Fq;ppWQQ]-3');
define('LOGGED_IN_SALT',   'R]RAf^O?XL0Z2,6yids! >[}jVf[.D|F,x(,v0${0fYR5VC.jaA.:M*#|a4}E#cm');
define('NONCE_SALT',       'JQ,eh29jeEQb0=x_+S1pNG6G|evEg214L4S4*8-AmZX24B!L,/E3ppTEp<J.j3`A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
