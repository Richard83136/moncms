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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'richard-schulze_wp_dc1kc' );

/** MySQL database username */
define( 'DB_USER', 'wp_jsjer' );

/** MySQL database password */
define( 'DB_PASSWORD', '!qPwaQ9?674io_0S' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'Eg@@49v|&j2i0-R3Sq7h3;81C0u-fPq6(3ic[85UI4E5|8sL;|/1:GPgD44v*rA2');
define('SECURE_AUTH_KEY', 'F69HHl;yCPy8_7mDf|ygge42IgmWwVMCd-|E2]![!N#-2Cy4Wvw~%7)3g/utW1%*');
define('LOGGED_IN_KEY', '0X|a1Hz]AgmN5Kn+|8![)p79OFR6K4Tyw3Sw:AtxKJ_O|2xLg&_O2DVGN&V[82N:');
define('NONCE_KEY', '50Mm&Pn8B8Eq)O1*xn8g5+g3!Z[(O%Q-9I76;5!8!|803zaK53i8iGR;u7X:kv9k');
define('AUTH_SALT', 'F1_@#CtO;K)6rm[M_q86!40vYsj8tXB7hv1%K11-h[F&/t%rDgBd1796*q75&n4i');
define('SECURE_AUTH_SALT', 'o0@K)Kz;p[-B!B*!m;4I898X6PE99P)R|te+3*M9~%99#k4_[1d]a&9]OT71IOwe');
define('LOGGED_IN_SALT', 'cu3it08]h78C;b9)99[34_hs|w9*7vB#T2A+|SCv9&T8A3b88j-96-u1Dqw!SWXJ');
define('NONCE_SALT', 'l![]38W:8;#X75:|e@iW8u52ByM0AEq0ay!XX5;48P5748bxzP;COm/CZchX7-1_');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ZfNA5_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
