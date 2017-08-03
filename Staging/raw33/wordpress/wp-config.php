<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'zadmin_root');

/** MySQL database username */
define('DB_USER', 'jrdubina');

/** MySQL database password */
define('DB_PASSWORD', 'eqyse6ybe');

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
define('AUTH_KEY',         'sguwuv3.R`o-4HJ^%#jh*5Q+n]PDu}^/x[k-8a36h[1GME+K($*<6Iw=+@w1}yed');
define('SECURE_AUTH_KEY',  '9vsFDl|[ZB5gj2EI:+HHYc9gtg,IbBsGL^|YxUIX+?+j$de=)-`i]0nQyx{OeJ3{');
define('LOGGED_IN_KEY',    '&KlsG(d0-))sWrL#<]&.h-ZLaO4+tS4 - 2&?>p^8r*x|iqfg^Dtmc,uy>W(Bo#2');
define('NONCE_KEY',        'KuAmUw-[}rmrsmXs;S,M)A3{(fCY8kgS#(ild7vzu9#E6+^ zw&c8@RFI0q-|x|?');
define('AUTH_SALT',        'X-*+&RN2!nwO@1z;MT.j*bhK&Q4+m5.Ek3{Au|4lMG0mRq>S<8CSi6pQ|{;nlgdT');
define('SECURE_AUTH_SALT', 'RXPpoo1-3OU(+{z;2VJJBo~Pj#R) iWcK;gkNn{|( Kjjx}h^C?Bp!$BaL+|U+pE');
define('LOGGED_IN_SALT',   'ff7]G?&MTJQ*4p%ElVYjG1zAe!:D`N6f#4Kk.{Ldi#q>Ggv{pBZ|,.+Z90#8+0nC');
define('NONCE_SALT',       'lx$)nS;juh@|Jd>+e#;!q)dn+gWePn/U;az5:uy,>=!N,64)1138Z<^z3Lk8yB@}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
