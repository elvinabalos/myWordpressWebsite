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
define('DB_NAME', 'wp-dbase');

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
define('AUTH_KEY',         ']Llh#q$:C:i<iZ{&K9`lEmTHAF~O,A-EtwES50@2B#9(pwWh*T--6q1*>1RDLqXG');
define('SECURE_AUTH_KEY',  'DK`uA!pM@)L=-+V+@weLDy<fA0uRb[i,t5#t}qO_;8WqYpcAUa{9UZ-6:>O8B+ww');
define('LOGGED_IN_KEY',    'j0;-[+5)N8 yjY$*eC4}x>p/0>}vd]>[Qzl8=*A#gHw;AOl.0~X0a<TVeW7n;9s-');
define('NONCE_KEY',        'J GKfc`PL#4xpjf:eN_ XTS^.[cr;}g[Hz#S??4uYn3[hHsueqTM*-xx0/Q!)?:A');
define('AUTH_SALT',        'H<f.~L}zK==>RU]YwH]7t9H7@E!-a=5U8o]NX$1WGGQ[c#Ut<]y,MZr/hCp+{#wY');
define('SECURE_AUTH_SALT', 'EX#gj@>=)PACJo7:~2,G>?YhY[2T^zBco(aO;Lzh?+/VkcTYeAOQ4jp],3czu]EW');
define('LOGGED_IN_SALT',   'uu!K3#*OP?ST@]m{?g6]^v&I7M8cLqf-t5xa+e|bbD,VQR#bBO`* AI[-j1j{]HB');
define('NONCE_SALT',       '0$:qM**ck.ROiis^muH9vTYPc=iRfbS&-zrU$}yE|kxpXWwUhFrP*;$7,Af?psMS');

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
