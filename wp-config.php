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
define('DB_NAME', 'calculator');

/** MySQL database username */
define('DB_USER', 'blueglass');

/** MySQL database password */
define('DB_PASSWORD', 'WM9tbU9cUwh7NxXU');

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
define('AUTH_KEY',         'kRKJt<626^6>}xYs/@S <j e%<u0Cw:@4J%/H|+MtMET]zcl_x<,|~^ M}cE~uc_');
define('SECURE_AUTH_KEY',  'ii2.,}aS8$$^1$CF6*z8Hok+%ll-*EmARsvw/6O$X&pVUR -2bas*bVv5!*H^lcX');
define('LOGGED_IN_KEY',    'ES(^&{ER(S7Tt;an2,$p8zU2vPrqOrIjnC#%ZozF,;bYY1f=bQ^S83gJ<*<2C$O ');
define('NONCE_KEY',        '4l]5k-Dto]v[}_K_q[es7B5sU(S{G^/8&`lx~8S7P81=R|%/B]v[l/(mKFlQy xh');
define('AUTH_SALT',        'rj!m+Ts1d(7Di$kL7WRY#9]<?uQg-;?A:&T4_oAjln!X5>sA!>#b?`?p-ZgQm72h');
define('SECURE_AUTH_SALT', '-o}nu|KE!&onm4U$pG@#>K!oz5Lx:k!zXJ9T70nu:Gar<4`<oCyup2Bty=DP/m!R');
define('LOGGED_IN_SALT',   'D!g2L>WocpYc`m7n|#VCG.BJHQ;_5j0_8hF_|Gw;npG9o{HqBk=kDwyU: ax!N_A');
define('NONCE_SALT',       'ctZjZC5_UTp{er2Hdg3_}cTjjL^!Uh DzT[It7@@fvv)IUt?P?!GK%0ruym:t kL');

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
