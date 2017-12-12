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
define('DB_NAME', 'haiyenyoga_db');

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
define('AUTH_KEY',         'Owy[B0y-q]OiNK@[te3KOaU7oqnTY6.i$s7at;o9hVLM-&ov81At&_n%`f/W]Mo#');
define('SECURE_AUTH_KEY',  '%osBphaso68@]AN+CyAa6n<u_VQ-:Y+S>Cfhvx-}2}b-(?sCm+M|7r7N%%w4~9eF');
define('LOGGED_IN_KEY',    'a]N?cwMpEH,g{u4Sjo<e5<jL3]]}UQ?4|Y-ZMiD?PxHbusww?]ga, XI)sWQ&0FN');
define('NONCE_KEY',        ';MWtX!G?V}P74{T~m+3N!sq{|=[O[1y#,*jw8]<k%u9rVLc9OO_q0Srns=PL[/W/');
define('AUTH_SALT',        '0t?YO,:y(3Wje@*.iQj`cd8g_80Aql//6I[M.RjwP>!8n92LC+&u{LVuJx&TO!|J');
define('SECURE_AUTH_SALT', '~9TGssN/1z|N)]Ff9>RbFoYW%z8UZu3,?Kvb]5*|^B5Uv3.bIDSWTg-fk5`yeWCa');
define('LOGGED_IN_SALT',   'ht<S~qgj>NY8E:&icV1YZOK!9}zo_jBorti6!B.q*=Z&X>8dke7O3rKE*FAEdk[K');
define('NONCE_SALT',       'iVxePiV)^mWY:W?~M@dI1l>TRlKi-h8.bD@vC>yvi/8RZ|@70fF9b:;Xtngkxl)%');

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
