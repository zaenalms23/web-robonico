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
define( 'DB_NAME', 'robonicoindonesia' );

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
define( 'AUTH_KEY',         '26nDUJ8],ZG+EbH1M4)DFB-|(4qYi{,ll*PwP~kiAX!jB,?7Rpc<jjtW<}H1-X%$' );
define( 'SECURE_AUTH_KEY',  '=J[Z-rQt?#fm==Xmz3rc&.k64v7}>@t~2 &VO=~v:(s9H3ogOLx}+*,}J,%}*Ycw' );
define( 'LOGGED_IN_KEY',    '1[)ZIB+,4TS?2V yz3p<d}]QRlrd:,kowC;utgPz[4tK;oC58^d~g66(mt>O#[v~' );
define( 'NONCE_KEY',        '`,TJO!H;_QYe]!|y/z?[r:~|v7|5lQ_D`6Y8,i%,v+$n&uW3aoEf&R!kew[ 5FWF' );
define( 'AUTH_SALT',        'K0g^.1UOekG7xB!nDZuU+!0B5uLJKG[r1x_uh^/TUu@~V X2iU[}(U#&_6S+~oUt' );
define( 'SECURE_AUTH_SALT', '[Z;*:*F7;z^,S<jy]IEd.BN?G`*MW[?HdUJNJS2`:}~FlS:~u//n<DIMm/@Pp(3,' );
define( 'LOGGED_IN_SALT',   'L(KwMJK4P$wgX^mTCK lNJ&xHOu;|]M(Rb6J;igipHYAR<8G#t3cua~Dix7azX)q' );
define( 'NONCE_SALT',       'M6e(-/94P|@KY<xlA 5Eff!MUtJ6oDtDR7.?wIglGHxedDbrQ|_W0/l}_Ds&[ZV`' );

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
