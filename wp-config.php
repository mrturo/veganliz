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
define( 'DB_NAME', 'veganliz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5mOzj6PNME!Z1!bbyn/j@quXZ4)1Q4seNv(`Wg)rXLAxawpw-Sb~nhS;pbl4qb+T');
define('SECURE_AUTH_KEY',  'U4N:a MuL|q&,5`,y.ZYSU8yhIy$8[9]zv2#?7]5w7;&&ePq3;>bgn-A2xkj/jvS');
define('LOGGED_IN_KEY',    'o28ltgpT -b$}*{pRC/1d+y|{tJ,H|d_No5o}4JLy[x2D-_eDc c|u!c-DwC@eKe');
define('NONCE_KEY',        'a|C(Q8wseTe)9Fyh)FhcU,@(/rZH%0fd/|h,ZFofvy)_JM{!*~:|zmQ#M&A[uGo@');
define('AUTH_SALT',        'W+|NJE0NGQv)L#zQ)6N+>*6qy_w@7@}DFc}?-s+P7VEei J!$p(Q[xW,*`TUFjGT');
define('SECURE_AUTH_SALT', ')A*@K?)hThE{|0$#_r~TO`6D%i%fq)&hd%C4hf=C&o|thO<BVv4H9T7SdoT!ptgq');
define('LOGGED_IN_SALT',   '5+6-gkalz}*Qn|%[NoIQCr:-8j{;g+CEP(;xy+6de#Ry<%W~[eohgu&k|K*K+-mk');
define('NONCE_SALT',       '-pgqY(A`c7)tl(,%0B|Z#l~um6iXHqdDT7`mjU)wAP>Q]g!D+vU|&$/{*zTA+dxh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
