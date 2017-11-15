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
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '8W >/8g%tLQ25A8g$5KV_xA]Q1of%)mT;wFygm:M!-:l<?sXSHG6~fI7-x|d6</7');
define('SECURE_AUTH_KEY',  'BD_n_I*oH7:7C~f/l]!q3Z^eZHG`O]XjcWEEK]p4$/&0H[Q$6TT&q!Lo-@RDE=t]');
define('LOGGED_IN_KEY',    'WO-ozvxEF96pM.>9 :UfO7U^ZY2]Rk8+].u@?r$#=VsN>zI+Db4X~:tN~K_RyC#i');
define('NONCE_KEY',        'a]>R@fLF)ZbyJ#K)ykZl=_,mi4F7X$,I}oQ}F.eNMc.^-TZ1~E_s(_fa2X2io_mQ');
define('AUTH_SALT',        'B+cno&ZAn(A+cPq@pj%ZpW]_tJeTi=,cPcHMg4zx`*z#w!,oQf.$$ail4<L6!HF,');
define('SECURE_AUTH_SALT', 'B[Q)W%03B>u(J?=$qj??7x#|Hg9uuJao*E9`,m-^ (A#`r).g`^n8W_i8/8?n]_S');
define('LOGGED_IN_SALT',   'MY6tuT9j}/}ZQzpP_$_&m-~zWY(]7?Yd.)Z`f+$#qqZZ@Aoq;f_9N.vq`aDI48OP');
define('NONCE_SALT',       ',pxAP[P+S.G7/E%Q];eHS8A9=U%9,^0*])!*#5kH?T=g_g6M[{g<,}3wN_-tXv[)');

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
