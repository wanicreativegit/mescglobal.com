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
define('DB_NAME', 'mescmain');

/** MySQL database username */
define('DB_USER', 'mescuser1');

/** MySQL database password */
define('DB_PASSWORD', '(wQT*=fbyiJ}');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'AUTOMATIC_UPDATER_DISABLED', true);
define( 'WP_AUTO_UPDATE_CORE', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         '8/FJK_+CB7V7&q2!b0qSI>IT]>g,11t}UNi1ifGs|+bAzr.9]f4Tz4z(,F,j4gH-');
define('SECURE_AUTH_KEY',  '$bjM=8Zn2m|rI`!Z.~c.rpV&$[=Kz_ykYb84U/@]GHbPTp.okgQ@R&sIO|2Jlf4R');
define('LOGGED_IN_KEY',    '.ICdihM2(,X5OrQiSB@ld@n#.~0r|P}Z8:|lbmv~8PKN?%1wod^S|;DOe<4)|0H+');
define('NONCE_KEY',        '<ux9>?JJ#Cbt~-D?E]|G?i^y|~_lr{e8ZLjNeFd:9Sf}L-sk05aDSF9e~^RqJJy<');
define('AUTH_SALT',        'bDftS-QyBMl}]/;^_haTQHYt0nhVf|^y{3%L((8`i+B3jF|pLZ{A}G(9MU|TVQ21');
define('SECURE_AUTH_SALT', '^I?UyB%e%bN`HS|S&*^hrwRd)D:e-~pF!a2r3n38P;W&7M`~2SOJl bQTYSaXsZ>');
define('LOGGED_IN_SALT',   '(*CV;H@yD^kYNQra-EWX BrA+d=T~bqd^<7-(7*<xNv1[@:xEI{+A~7S+Qdp_JWv');
define('NONCE_SALT',       '`n;PE_*;:?@?jUb#8Ko7BXUfUN20+~}Y%<u/Ehhs;NZYeYJJR!m)bj.M-)#|j+uN');

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
