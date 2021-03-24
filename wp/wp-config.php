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
define( 'DB_NAME', 'Erika_Tunjic' );

/** MySQL database username */
define( 'DB_USER', 'dbuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'erikatunjic' );

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
define('AUTH_KEY',         'Xjl222WG{XN!Yh<.f`0#?|dI+N+X^c!=+O0}q-,U=@f(FqmqKJfM@SyNbg%fCj^O');
define('SECURE_AUTH_KEY',  ' [ho4+3&:duQ91u|77<M-nmT:;PeU@m|Ce-pr9c{`2p!}Gt|osvsUU)k/[LHp8|Z');
define('LOGGED_IN_KEY',    '*-&c^@Pm.nO~pX_{M@dw|6vq4Hfv3U|+YvuSPZokptS1`t6/sT5hz<LgheW?W*,J');
define('NONCE_KEY',        'Ktm(T6+}p<ub<FcvS+|qkQq|@R)`l?q/b3jN>6I7>|58kbVscV8+JT%nZ#+^=mUL');
define('AUTH_SALT',        '$1$-rF+-cV.!P7|u<Cj{iKSoC|k:n<>tel+EU[Y7avs3Z#3]6%J;1A|W=3# ;d?>');
define('SECURE_AUTH_SALT', '&Cz@L[;z(d!|Vhh1:!2|DsM;/?k U?3sa{P@Jb?+-R(wiJ/m-}?8B$4_AI2+8>+c');
define('LOGGED_IN_SALT',   '01n/g~)z?TqnLe`|0T-0 g+YZ`to<as+++88gIQl-Y+[*kwa((]WiYG4.:5RTl8=');
define('NONCE_SALT',       'v)}}E{}1%E2l1f/D}(vvw[v}P*2<r+Ldn]f)btw9swt$hQ]D/_|R$`4El^T|HT$+');

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
