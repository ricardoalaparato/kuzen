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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kuzen' );

/** Database username */
define( 'DB_USER', 'kuzen' );

/** Database password */
define( 'DB_PASSWORD', 'kuzen' );

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
define( 'AUTH_KEY',         'e G!<$Y(~f;d-a!r9WWBHM:_$ uVaqo{;9VYN$FC{8;l~L698RyNf^z1gR-P66x`' );
define( 'SECURE_AUTH_KEY',  '1O#GT/(@d}ECXa96o(d8DPrbBl=z?U:N,f}Ht>d%)iM@8/]]%W!s4x$MDTY83kDK' );
define( 'LOGGED_IN_KEY',    'y8$J6nk)$(1SQDco2&7[`].(|U+sXQ7#DM9W*QBaMn}Ohz H74GJ.3 ~2OucAQz~' );
define( 'NONCE_KEY',        'D^CG.J3n)yom-$ZPL8RsN:wxN6zg6!i=ZdxHR__}2l+GDBaZx}Nn(83sNL^&V^t5' );
define( 'AUTH_SALT',        '6zR,bTiI?I<#;78nR&1dJVm0C%KM_KrxFEe||B<)55iFq)24C^=K2QKM^d~l6q^d' );
define( 'SECURE_AUTH_SALT', '_n}OZ0/zaY9,{JBbgY{$A:%E]KB/f|kJk>+P4_Ifg$j@Uw^AWP]n:Vu>r%=b?*?`' );
define( 'LOGGED_IN_SALT',   ':wPD4)}%:8L>f=S)PF+6hgy;e})g;*&b)WM~T=!*krJ$r9}/Q7J%m6Co%cEy~IWx' );
define( 'NONCE_SALT',       'kC/3W)fE!|XWdbV_=108p6d.0J5N&|55<WmqEm2-KU=zRzUh-xTi!{UD@bIzQu>M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
