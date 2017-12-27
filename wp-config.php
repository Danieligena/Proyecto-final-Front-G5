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
define('DB_NAME', 'colectivo_ss');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'N#rS|?1& 3M:Yx0X,nkn qxM<,Jz|qM4LM;UH;K W>m!~zj4.Y|B+$F9x<fg2?-X');
define('SECURE_AUTH_KEY',  'uQQ91[)+SaJN:)5aT9a?KJ>k>=QI|@7[uEVx@af=2>FvsXaQL*3rb8m)}XnbQQ}4');
define('LOGGED_IN_KEY',    '?ABh-aq*4Co:$-~cKQ]cC],Q|oKPod+Pa%QSiN/QQg|72?IrYI8]&,q2Qz{?:Ucc');
define('NONCE_KEY',        ':lI+`N<APo;j0+[Sn%5T?^1&4io$U) 81SnPf1$N.WSs]EtUY$cyXA&-C}%_+aXs');
define('AUTH_SALT',        ',u|!uG]lN E%K$x^3qK]yu}9:ybi4I3z57Fxixqcrp0~:LI52KwXeL%^nWz9,T9T');
define('SECURE_AUTH_SALT', ';}5SYk!EX%!8m61ne4_FtgM=.y3_}70GzH<4?w/=4+tSn6xd_zi@j|{JNO sR[CD');
define('LOGGED_IN_SALT',   '>WX>X-&b29Lz{Kz2KF;c;!4=:U2mwVd~xI~:tSyCO[WP)%q{W +i*z!9og^7`!!3');
define('NONCE_SALT',       'ZOhdQ-%Tr70Mx21_@Pt?[&biD)w*>1%ioR,BT`{,}@0V<@fld;?mPZdt)w}*rW@*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ss_';

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
