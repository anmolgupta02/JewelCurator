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
define( 'DB_NAME', 'jewelCurator_DB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'l#t #>R.rd@]$)R5VEcXbM`EdM_mR:C:Hbir-cZcqAg}Y.):SSG8:O@H;gn}^i3X' );
define( 'SECURE_AUTH_KEY',  'o ]Baafbf?Yx+Oz;~[p<Nt/yA[W[P<a%KB)zHaaJ7:OR6=ERQ9-Sry?i8opMfT!I' );
define( 'LOGGED_IN_KEY',    'yj6^3w:R#j9@ N-GM@cH E0{-E>Vy6Ah{i,iMXGF6,PpSb:QEQL_x3=[N;TWPwAZ' );
define( 'NONCE_KEY',        'OSWXXalS^@AAAE@YwV94@Ti`1,HdqEwE<bm(<ZFmuES#$9Q!*F?izA>P]HEc[X5r' );
define( 'AUTH_SALT',        '/BTP{]<DuTUaVje/vH;6~s7G5bDcf6VZ.%mTV$q&`&.)7p?t-2wK!Cxpzdu^{D{j' );
define( 'SECURE_AUTH_SALT', 'UE;J_XNgLB-D`}%Ezy7$<0>Bpj ^u#qfmeV5YxvN|[cVPq(3h<qx!l%3&,manqr=' );
define( 'LOGGED_IN_SALT',   'rEGn3t+Z+[CE!|RIwbM7;:gC#Ck]d_aRa~/B]GS6U&1ZPM#3742g+M5{*%p68:g0' );
define( 'NONCE_SALT',       'e3VmONRTPD`gz_2 7vttcMfHT~e2b{lb*&]m~{|e{p*3{caFmd*1DGVL<+`m@k%y' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
