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
define( 'DB_NAME', 'photo_capture' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'photo-capture.local.com' );

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
define( 'AUTH_KEY',         'c LkW/Kp>~LPb<CBC[r]d4ngg%Cnd^qAgt7dIQ:.?.@Q [)MY<?)!FbZ_>c|my3I' );
define( 'SECURE_AUTH_KEY',  '*%7y/i1(/Vem[JX:CYK96?ICU-Nc/p TEe6o5ix|8,xde-UBdgJ0$q1:tJcU<;4~' );
define( 'LOGGED_IN_KEY',    'kEBj=<;o.X-+5%M3/A~>)3J+nMuQIv8oRNnCZRi[kGI;0iK[V>`XL|qpU12tWSO7' );
define( 'NONCE_KEY',        '8-u>{ae<%MR.#F2.{bi&g*.H>_B;>asYvEdo;B|^ZVj{^]2)+%Gee51.b9h2w>ar' );
define( 'AUTH_SALT',        '03ci7Q}g:QjKJPI>o7:2wWOK9gNl]yJ&r?/s]rQ~aO_Q/}sNxz^$i6TiYc`J(QH.' );
define( 'SECURE_AUTH_SALT', 'dc_ 4WC=~IXS;HswMD}-PRDqV_|0S!pfU3QIbI%JZ~KiyiL/33-`C~qDO/0z)anE' );
define( 'LOGGED_IN_SALT',   'ne{FA{aE?+^LGXWVk:~-s?Td-eMgK$Tv?G[-`RH(s0#]hX?S9vOE2{{s>sj`}Chi' );
define( 'NONCE_SALT',       'DQGsU2QJ)7fh[?dQ2m;0)t$h(BRUhVBCQus}C^9fQNKH>Ge`Xo^Z36)HFQUMb6hd' );

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
