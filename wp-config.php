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
define('DB_NAME', 'clip');

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
define('AUTH_KEY',         '|HBWp$QbymJcWs0=, C;0-PM9c8:,8|Jh? )6p}@jw^%p-#R^zv:xsK7o,;Cp!@b');
define('SECURE_AUTH_KEY',  '|H}0Zg~oav?|b#Z.S}dJ(pv+l)OmB2gy5ataY.Q2#QtZ(nv$K:VEG?.Ae6Hooqr?');
define('LOGGED_IN_KEY',    '.]{/(rRxFR+;*>/ujEbQc)G1D:|&OV?6/,4{|:X`D1j)epcS(t|XL2)H1up$?BhI');
define('NONCE_KEY',        'N.AQ9QnrI6TtFSf*|G.|9-;;&P)kd!KY#m@Xu M4cAoz2)AHJgLqczsUMy+x,a|e');
define('AUTH_SALT',        'BC 8F_^*^U b[~C eg+r|ya}L8jo*xO?EB:bwhwHAh|Jt6P~I90]1-[On<:Ux-B-');
define('SECURE_AUTH_SALT', 'R3v@:^Kb]/GqeP2w+<%+E^x8;9rb[iu;&akb[vliI=$_lLLo@rmq|!-tM~3DqJOk');
define('LOGGED_IN_SALT',   '*$!Fm+|qzo:+m.5S=EEF+5j` |0u&FyPO2@V),MJ+}XrL9|yUU_;+w?~o;k<-U0}');
define('NONCE_SALT',       'dP3x:$iYb6M~C=!|U#l0s <dpLVbq4Q53L[EN#Kc>>eC@@cHi%a=J7g5Gfem[o]i');

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
