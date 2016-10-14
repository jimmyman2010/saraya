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
define('DB_NAME', 'sanaya');

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
define('AUTH_KEY',         'K4o/FxD/}Rc7JM)]^M].kr[|6.^N>_[6<d/yy)_iN6 GYvfx~hu;6Y;h}9o>CwMg');
define('SECURE_AUTH_KEY',  'uq[Q%Cn.CKw6E}-Gp;(Z`#3pv}bUXmY%*ZVjgq*G1n-Bpd,L~JhL-,w,Uc^u4s@a');
define('LOGGED_IN_KEY',    'n%]h[y}<#]W?~&PS ?(*pTHe)CPW9QsNHxJcwqoy8~>O.]$]*H{#!D<Kqx|mQ>{<');
define('NONCE_KEY',        '&,a%&+y(hStk8AF(4LPZIBaHHXuXw{&x/ ,CD$gDT!M|VH9g@:{M,:(I],F|xB06');
define('AUTH_SALT',        ',2y{ZpJj$U~bc|1K0oEL}b/Fq3nFF,Lyi^P0K.1{@Pdt_S<Jz|K{L2|w*C1:/XBZ');
define('SECURE_AUTH_SALT', 'A*jk}}yg.UIw&rb=opuHd+J}u_{bBE2r-_[2}M93F;nk7s^A7IPU-d6n{tBz8jA9');
define('LOGGED_IN_SALT',   'S/8eu3VAKBeU?HBt?k$:auF#]Fakc2Y(tK=+VL?F$th|Q7mUh{w4X.u})k4ZDR;X');
define('NONCE_SALT',       'iHaGy?Y%@MxGzn[#r5lz@d?E4?I3r[^gecA k4gF.{~4-^@{h|j~~AIg7nWhWy<v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sny_';

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
