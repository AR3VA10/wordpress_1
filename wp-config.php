<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_word' );

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
define( 'AUTH_KEY',         'b&|^U~ULi?QYo0Fgunmu$;ikh<}k{((I)`XAMxZi<))P@+S<tBNG<Y$q] ?M]Ba}' );
define( 'SECURE_AUTH_KEY',  '.@vo;2n*u@} s0c_a=Iit//M~0h|0:r)xjxY9)OX)]?3Rz0I0,(K_N_}bMW1/Cu;' );
define( 'LOGGED_IN_KEY',    'c| }_r9CRE7uu~vupuonqcI6gty~C6@22/vK:fH(YN@*5F+P(5v=&d;VGq*1NPm]' );
define( 'NONCE_KEY',        ',N)[Vy@4[#:?N=p+9~Mpn9=]u`&Fj>n#:XxpR}<Lrr.4HN[zO?G2EL=KC.[CqlS}' );
define( 'AUTH_SALT',        '~V2G6$$1BE$lzi^Hk[+<tn}J[wF^1-SUW~[-!Y5ktc*72yd5:s%-Z~4E.!T;#;tx' );
define( 'SECURE_AUTH_SALT', 'z9<2Wm+L1$6}Z#GQT)SIVtfo;%{U,RJ7qZj:j3J^%|_)dR_74xY>a_%y&<l&q=m_' );
define( 'LOGGED_IN_SALT',   'pcQ|06EBi^gR}XsTj? ?9|MS?30f4oXPgvI^gmhB8$KOg`-6N#)yADq>f3ZXbBc6' );
define( 'NONCE_SALT',       's&* EMyVEFAe4b>e`@TTY*5#;;`&S!Y:F@Z*8w-!Ycy]-u0,}dEV(.Ay!vRiq/j|' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
