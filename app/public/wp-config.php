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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'p_^t= @2@u9WeScz(}ME(OS$t=*QXNB-_e3DT!i!JzJkbz9CD)qog~F{]g!mkPdx' );
define( 'SECURE_AUTH_KEY',   '0dt^#4j=/A2t}BXkUr=8;9*ykLnq*8yz|m!AQ$>?yM^:R]w??)84UT*4NW9qu:<%' );
define( 'LOGGED_IN_KEY',     'XRgOUP9|r>T_@:&w{b_l!%+pxXSmxCmLA%9k+0=-X<JF/P81l9]9lzWV+D*2eJ+h' );
define( 'NONCE_KEY',         'R`6jT>[Vg-2?AH{Zfo!=3b>eUbH7NyWw~D[R|?H)3B(8y8L?I@oa*-YeQp!Y%}J)' );
define( 'AUTH_SALT',         'Z8JTXSJ6W]hkl@Z:?R4Kvpo{gH802&.*:_K?A23h.5oKN/AoiX>At@kcJ9_]`vZ4' );
define( 'SECURE_AUTH_SALT',  'ql4^-$I&^!rO!j+flZg.stdw30drQ?!PY2-gfv#TU~:_;!B%G6$(4@|>ipv:3jX[' );
define( 'LOGGED_IN_SALT',    'hyDD4~dlB;vX[Mf5IfM._^eU{%?X<mBL0zH| j1DIsybFFA0^Y56U!q4l!evMHv!' );
define( 'NONCE_SALT',        '<YDwt<TCZ|Lfd#G qjdn! f9;zQ7*uKO0:.j}NBGKe6v*8y!7y@6qe6o) J{/zk?' );
define( 'WP_CACHE_KEY_SALT', '^U>e%ak.i-a_3Dbox$Tvg5}>O@GHq8 114InEL 1u5lb<2M@wT6*nfiAIipl1[V[' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
