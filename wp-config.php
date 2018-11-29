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
define('AUTH_KEY',         't/ry[Ms~NXhQL]CtJS 9U^8y8Zz^S@1O`cqtFi0AjMD/p&@[Ej%r 8dQW[]N>3Y`');
define('SECURE_AUTH_KEY',  'Wm J}4*K,k9J= ){2h&ge+Qp8Jq6G^:s=Iu]>BsbvrO+x=MH#q}z7VzG`KEAmcvc');
define('LOGGED_IN_KEY',    '2f62Se7]j ?x)5fpN#UCf-qe$[i^Xk&B.l(xQ!vlmtkb1(^Aq 8ABi^0f k)5I6g');
define('NONCE_KEY',        ')Xjy&b|-e)]c;~#}*3@#~~3Fm&=Fa-_2<ZU!*wUZJ.cQx,iLjH=?SYHZPDO1,*=?');
define('AUTH_SALT',        'cD|jbEi72/T{xT(RlMIl{!~,Wp?#]k`Bh?*fBNhYzli4}-fwl@HDZ:+dHowGP5(2');
define('SECURE_AUTH_SALT', 'D7*I@J6p4u`q4<F tPUqc>oD.+*3/XzJ,EIP{qiJJ>ICx!oVL2{l1a|8[6HJ|CP_');
define('LOGGED_IN_SALT',   ' V8$nrTTaP#.[n8MPaFT yo5Iy*K#rJXlwxao0:N0r3|K!~JI8x~,h?dHvAX)eV%');
define('NONCE_SALT',       'RcNb!QpBhTt#e^9sY}X)*#r_^!FwC:`^xSiepd){RbG}jMVQw/3OKwZ0}(]&>u)e');

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
