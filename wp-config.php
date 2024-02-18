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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'simple-event-calendar' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Password' );

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
define( 'AUTH_KEY',         '/[2o>J7NkWnMiI|zFy DGB!jD5@Q9!0,Sh3BhrHjBe[LL0WlIzryn nxKuXqeVq_' );
define( 'SECURE_AUTH_KEY',  'AkR2Tw-g6op#l1e1$*Y;^ur85,WuPDsU]`R2i{i{v`at<f;$-c[a*Rbcz+N#[?Aq' );
define( 'LOGGED_IN_KEY',    '_bKH] V`DAo[A5kjdUJ#B=1_/hCkdFVWBZ}uu4;9ae.Uyp* ghXO ]T$tMKaE4s4' );
define( 'NONCE_KEY',        'CmSK#ot_k-s8XsodrUu,(H%-|R%g*f/`/a,#MgZ|M6(?^))c2WKC&;fx1}g(Cu_k' );
define( 'AUTH_SALT',        '^J85zGBN|J:ZX/aj|D}q{_).;IOev13oH8(HG3BPFub69eiK$mjI>ePfv*E!?eaq' );
define( 'SECURE_AUTH_SALT', 'duBFgy7#L93N1]vYhGd5aJh.v]~K[J{LMaAIqN]0mXb<:1;Y-6aEI?h?qU8QF2mI' );
define( 'LOGGED_IN_SALT',   'SjSO~.>?p+^~JtfOZJVKNNJI~?oUPE:LI4_~BYuy_BUtmheP2K`gjMvlo (a-)@G' );
define( 'NONCE_SALT',       'DtzkSPePH7VlCB^|Xmk]/& ,=6^=-`PkgRvp<tx:Z7TY13>YS}z5J?GZ-o#v#Nx*' );

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
