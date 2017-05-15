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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_body_builder');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7.WL1w=Drroj67*duMdy*_-X}rX{VM[6t{~zO[v1G(|gp73nLtcsAuMU:C-:+F^.');
define('SECURE_AUTH_KEY',  'p&wOsR`+b0.]8g%rrhaeIQZZ=W[%#j=E^{w#/9@Us-1L{c1<B$ntZ:DTW /.dxt%');
define('LOGGED_IN_KEY',    'EP>Gi#PXaiEkNVR;_=.`MFmXs.K/u=yhP-q%ie{`EjR<<hqdZ[$9%f6o1d#ru=^;');
define('NONCE_KEY',        'G*MC4p36vF~vQ,9kSvXn(@oKB,fxR(^@DkEHlUvao+oT@p|pZj>qDqBoE&@YKjI>');
define('AUTH_SALT',        '5|Yi@44OAAs!,y@M}qGrFKz}*Y!:%,jp.x1oN^~2Z!y8=bBq$[,;3$>oJwx+Bk X');
define('SECURE_AUTH_SALT', '5&Z8x^kx|EDA1BLQ}r43KrToN#)4VY=2t`Zj~=q*Xh:d6$9pBL_I<^B*f<*9WNNH');
define('LOGGED_IN_SALT',   '6RSe%Be_^p|S>gk2J@H]5+2v?1!L9QA9FlS.A^M[Xvpoy[`$/Lr@PLKx)jPJYOB}');
define('NONCE_SALT',       ')0F>iZ&<%/uQm/ywWa6}wh@e_^./K|O$5uR1HgTSdp#vK_S_NUX5boP5IGR=*?kX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
