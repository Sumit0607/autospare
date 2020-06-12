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
define( 'DB_NAME', 'autospare' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sumit@9889436870' );

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
define( 'AUTH_KEY',         '(ohn*Zk#!`|gc*?):A83jfqj,>+{O=23B0POtK!}v%O<YcQ4v[]NsTp7t,Mly,H!' );
define( 'SECURE_AUTH_KEY',  '.`$,JwL-@R~SA4F]M3N?dxrl4 p4_a/d]4=PO@;5#^a7TCzZF1cB.xF-K1m|&+EG' );
define( 'LOGGED_IN_KEY',    'naF}qrFAQu!#Cua,jRC+CM)o%5)8]>v^uErsl5ev/tzK;/J11sX=#xN>xjs;p`sL' );
define( 'NONCE_KEY',        '2ZrPtsKs;1O8JTiu+F2EIbb/.HL]efSyLKb79VooK,wOgTIqsGE/hML5LU8L.Y;x' );
define( 'AUTH_SALT',        'RrP.**ax`]b_?)M^_&xVuP`gFfd:`Gn()ZZKD25<Nu?x*3JD$<M=A:]ri&q[RI &' );
define( 'SECURE_AUTH_SALT', '6SM~ui>dG}~qwwJ=K9H.e6aB6Scm~v?qV]%|;Jxj~ys*o3:<KcZt4=I;CX[E,cJ}' );
define( 'LOGGED_IN_SALT',   'yGBhVO]mn*-*e+);~CReZiY{w4uL|X)L[t:Jk/}L()7lR`4(Y74H% K36=<%Bq$W' );
define( 'NONCE_SALT',       '!#-PmjW H(_2(X%SxEv(|?U2zT0GdE3;ZLv8J0Q/4sPCokjRGV@w;z48ir4VgDyO' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define(UPLOADS, 'wp-content/uploads');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
