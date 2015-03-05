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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'l_+|{@6#v#c`_c[ O[ Lh7b+1 9F9f4W*5Q` 8s$2i+9lMfh1wY1+(vvvU*QuK*C');
define('SECURE_AUTH_KEY',  ':5Fu3D?b}[gis2Of?gTndF8B/vPTG9Y+l/$9>X4>ZF{1/HTR~e_UXd;*i{`Ik$|c');
define('LOGGED_IN_KEY',    '&IxRG*nK2xZ84eQP>BS(A+D~=S!!>qsN)s+A-d|+-~zkao)8Ol% ,n:Cmo2>o7Kj');
define('NONCE_KEY',        '@Fs;7D^>f7jlqD=|]JmF >NQ$.92dc/oTj@D5M7#[-qOAZ8Vz_|c3jJAF8c|TLmn');
define('AUTH_SALT',        ')Q3U3Xy(3D2)@kx7g}-+2(%`0bN2)9@UHaL$%A9RW</{3K<&~.VH5-leDRuz;tcb');
define('SECURE_AUTH_SALT', 'kO1c+!!qmNZT_WdtUT!fn 3&SjdFpM!.cb=-{)^B{m%(`=?Y!ml#*/b}@u`8MBF3');
define('LOGGED_IN_SALT',   '!XcW$1$e7PUqt-KPjJGtz #k@r-nJ?Fuq-*zN6$}-kL<kyb-_yaUy-^lFx&nt!X8');
define('NONCE_SALT',       'XB?=#wC-~nF?^&&lv;V6/yK_!fbAO[3:cngi:vI}ykf;5vUKI&!d.VA[<R~F T9U');

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


