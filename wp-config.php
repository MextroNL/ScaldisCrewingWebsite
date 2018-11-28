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
define('DB_NAME', 'scaldiscrewing');

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
define('AUTH_KEY',         '2TX?0%KwJ}76)mH>,2-%-Z|md5,UWdti>vFbr:`79G#)kSPbY*A_vsY+$bk/Tp4X');
define('SECURE_AUTH_KEY',  '}x}{I8;?iSmmL;t@?D[11euOs*6u.N$|Y&j{(qEHRn<&Cp3|UB-uB+LxE+2PZR@`');
define('LOGGED_IN_KEY',    'G#Gq%(I--@Bd6q&GCq8WxO7(3N _O;;~yYlJ_ySS1^q7JTy[/LFsFc?*amB_,WEx');
define('NONCE_KEY',        'Z%Mud1#nb*&BEL+7RN#?)^90R0X?@%t j0H{]@wOCoilc~*tFVWg&.$R94__hH|w');
define('AUTH_SALT',        'cP$Z0fcLb!/<&d-3a;Ccg:Kz.,]A8Dz*=:DzNG{A&L.-;Vos?H[`N?;:6%-[wj+>');
define('SECURE_AUTH_SALT', '2<Dl2}2JT<z&u?~ux.=tHXQO1A-Y@8`A5~1YFYMXw4Y fq-}>lJ+k_Kd,$9|cRv>');
define('LOGGED_IN_SALT',   'vaw*A-hi7;(GZ$a7Fe/7|aXqcrczAu,oF8!fo!&v3iS#6Q[jq}2H;RO!-gInn_iQ');
define('NONCE_SALT',       ';|Pa~cIV/IB]weGL>er_#GELSBWcvS=Dy_kaYM09vT$6KqTTk0 Ga<j #<BWNV{H');

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
