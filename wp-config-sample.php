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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'instituto' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'z*zx;|bPP4#]Ky0?8{Js~r33}!JQ%J%+-:7-Z%`!D;R!K`Kp9ScEl>ItX4}QcF E');
define('SECURE_AUTH_KEY',  '&^:(w;0=r@tk|psKQKcVC$CZb)eij|T%*BXhSj|bLB5 S,K+,py*5pb[T:ywNul#');
define('LOGGED_IN_KEY',    'B2Gtw!9P3h%rOD[) |xI|2(5Y3by^n2oVo3;M/1>|4-|_Q-_Smzo+s.%JvM3SUZC');
define('NONCE_KEY',        '+Osj-N&gM6U2+GWJzZ[k|OzyX%k,m#01])kUJqV;^dN#(t7`MXQ]x`t2QG3#J!<G');
define('AUTH_SALT',        's%?(H)YIc(+}49[:C!iMSxpB{|*x|4r,[A3$lcMt-VnuLOmb$tCxsCy+K/n;ACx&');
define('SECURE_AUTH_SALT', 'n>f(qP)Obr/A2P@mYEm%j3G_|W>gB{p]/UB}LT8{Qr$H-3l-.J5M4Hu0Wg%3$KqN');
define('LOGGED_IN_SALT',   '}yY/[-ogA1SS:se-;&>5/EY./-4O9+f4RZ|y#q00@q,zPsQ0c]8tnKEw%|2>Rq[E');
define('NONCE_SALT',       'wn-Ig%|Iq@u&~%LY-URgIe%b*9|*o7nu*3*^O?RM_Y>F$Bd4RSC$Yz1=TM*][=Ts');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/** 
 * Custom configs
 */
define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
