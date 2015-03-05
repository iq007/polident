<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'polident');

/** MySQL database username */

$mysqlUserName = getenv('MysqlUserName') ? getenv('MysqlUserName') : 'root';
$mysqlPassword = getenv('MysqlPassowrd') ? getenv('MysqlPassword') : '';
$hostName = getenv('HostName') ? getenv('HostName') : 'locahost';

define('DB_USER', $mysqlUserName);

/** MySQL database password */
define('DB_PASSWORD', $mysqlPassword);

/** MySQL hostname */
define('DB_HOST', $hostName);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Zx n<{~[E?s6<;$6g6f}+nmH$YH>%~rt`gdR9WiRt5{f8&QA9S|A.-@kBH0%IzrC');
define('SECURE_AUTH_KEY',  'RZa3R#.#76)7XeAupIkL<YW+mB$RsD+9@bZbZdf-+|P,41.)GF4So?N~|;fGjf6T');
define('LOGGED_IN_KEY',    'WYrJhJBU-7$^9CW>#6b8Uo.1U`24|`hjASIsB-|dCA>+LK~o(5f8Yo kmPqnX5Q:');
define('NONCE_KEY',        'bM?q/{nE2_*G;^X@zc&2+h!pb=F[CoP{.u3>AzpEii|*^Blq|tzPXH9&<qW>+[wX');
define('AUTH_SALT',        'TIoZswQEwS[SBfocxxO^MP?;+eGKhhsQ:&0CEX`d)-wh(2] >tkeD&`lBvi/T`}l');
define('SECURE_AUTH_SALT', 'o =#9_B+r*WRa:-))gO.-l8Ywl;{>FDQ0=yV|+r0P_Yi}Ryk}yS5qjv[aq`DoX<,');
define('LOGGED_IN_SALT',   'f>=7>}vq0A%3!Cy--WQsb]~VOeIJ^<@MX^._=-wM}8~k3ia6+>6wPpWfz|,ya8v|');
define('NONCE_SALT',       'WznVf)!A<K[4V3b)?y#9y)XTzO,H6eAalx+M$:@c^iVr1h|CGf+}au;<:}h!56pk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
