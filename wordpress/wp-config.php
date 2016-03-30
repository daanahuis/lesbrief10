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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'welkom10');

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
define('AUTH_KEY',         'xex@Qb97?ouL9#Y_g}GoEsAM2HOPC]xRsh>z/LEhL=&L$2%lpb`2xGBoE2@5+V2H');
define('SECURE_AUTH_KEY',  'vZ^zhc)0<8[(-g;FC{zoew2?Uoj]vGJmz0LbvB)1ws,k8r .20x4V]SxO5n|,1<T');
define('LOGGED_IN_KEY',    '{v(KShZ|IxOdtH.mG1I~<dwHZC3VN-)JfMk=>5dY-:aN-Y>TbFnhaft/=o~8%8E~');
define('NONCE_KEY',        'sUer*J5J,VH#ggnVq+8%mvJ1,*h(0uhk9dQi`{9v%#(zJCFaK ?.AgYI%Mxm+Hf_');
define('AUTH_SALT',        'r2%CL8.2Y45_ezq{9S4J5S+Bq#V0LQopL]+wj:NAIco:xe$wyml+<1;%z29;I^i|');
define('SECURE_AUTH_SALT', ':9<P=v{H[gZ>%BgKa%,@ {|GSQ]A6]Ml}?^;Os9uS/8Z<.XEiN6q=*Uwe+?vzpV&');
define('LOGGED_IN_SALT',   'EE87>#x}-AClYB1m<|]WJOBsG2^Ay~o.0|x1xl6?f I|P9;|yDdp^c^(8oOa$*X4');
define('NONCE_SALT',       'OY-|V0}$A@AV_S%y;y9vwXbj_(&kzF.`!(u(#cMc.rt/+Vb?lx_e8V&i7d~dPan9');

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
