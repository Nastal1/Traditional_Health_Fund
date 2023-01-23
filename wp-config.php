<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'traditional_health_fund_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WLnN;JY4y^,eZ%@hEl1YI94AK1gLw{3W^6<>Dtua7X<u50^g&A2Mn3(q>.A2OF.Y' );
define( 'SECURE_AUTH_KEY',  'POYIoD6u.RU/xTi*Joa<lP F](9s~zrQpP0P2bv LEBL9w%_Z5LbK`gefnzjoK;:' );
define( 'LOGGED_IN_KEY',    'f6@_T|c 0:d*%@DBxqvcUYbMRuN^#>>yi2PW_2SldD.kMj}S4XiInax@{vX_{^sl' );
define( 'NONCE_KEY',        'SePiX~`DXO)O QPA?m-]3%6]g;PXJtV;A.5g$7xlKs[;RpaxF>;#WTjY>:3r?X+a' );
define( 'AUTH_SALT',        'tb%n cm=bm3}<X#f1}Nyp:H]JzfD0],bsS8Thf]5+i@t??}v<HTX6+0MY=TS,aCz' );
define( 'SECURE_AUTH_SALT', '1kIYvBjX3ql[N,-X7e;IP#+-X3@,UYCTuDCpJn R`n3RB`A!^cd8PXXf,Bcdh2QR' );
define( 'LOGGED_IN_SALT',   '+lK#,pSmrAWDX~DLH@9vGn2 rhoJZ#!P$YMa/5[]5T$wBDm2rcNIS!K_0S``/*:N' );
define( 'NONCE_SALT',       ')n~wttzC#Oy~B*7]Nsg`$f2Ua;A~{N.8$}R5t,fXXi(M+eUK)gpQXCd@vqz:[,1j' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
