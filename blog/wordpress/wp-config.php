<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '~v{/:S_[*V$mP8<z$2)a#E&D^q:J;~tbSmk`ACX22n.JL~g:!{e ]si2b9BJY/yB');
define('SECURE_AUTH_KEY',  '5O~]b$Co!7]%2Fgo4xkr9Gr^&Sz3??q/&bBw}]F,V?/wc@R9)@boP((:_SN<A#FC');
define('LOGGED_IN_KEY',    '028$Zdd]~#69Yq6RWOa+;4J4:vN>U<Auh;Z&X..7;b4)s5D|4#.v9]%kJw{_S&}L');
define('NONCE_KEY',        'Q@/7wh7u-)BZJNt&#7A@IhACiDc}3/X~{DPb45x0vq9}L_n;3n1i5uXKZMeD>%I@');
define('AUTH_SALT',        '.{*mRadi7$7?L K|TK5&/*A#>=aw2}q j-vi<Ay@eamMWM!B~P=K~j[ob144K?uj');
define('SECURE_AUTH_SALT', '{o#,i+{2Ho;c0)4J!pe!DAmDJ8m#&{bh.b^j}su$I. ,UbD.~z+TeoY`pG0l;($,');
define('LOGGED_IN_SALT',   'w?5(iTj:%-XP/5FDxEFZUR0F7/(miW1MtwVsHX<ZLK^QzX#]v1qT/].ld|/QuX]_');
define('NONCE_SALT',       'x9d>K*vbUd<()K&9Aq+=>b,A]g})NaMOyd~H!B-(*@%)B:a^(XX12JQDk}{~tWCx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
