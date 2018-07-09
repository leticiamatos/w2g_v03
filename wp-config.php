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
define('DB_NAME', 'qcds2kwm46nbe5ov');

/** MySQL database username */
define('DB_USER', 'o97x18h674088yw5');

/** MySQL database password */
define('DB_PASSWORD', 'e8xfbwjuexi8u7qx');

/** MySQL hostname */
define('DB_HOST', 'olxl65dqfuqr6s4y.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'NiHBhk/Ep{ZWEy>^!Y[`P$I#WHID9}%<`L4aev24yEm3n29ZZw6t+[{]%[@y;5~*');
define('SECURE_AUTH_KEY',  'gKg7=wUtaS1-;PV7hX`Fu@+&tEMj}g)(.>~Ioucd5LZGNojc,!zMM%S=+:30hJ2v');
define('LOGGED_IN_KEY',    'PL%H$~f!uhBMR6Jn=u>i|pncHo2973jNFQ(c))T98k@-]`p9#(a ^v}MU2&ARDR/');
define('NONCE_KEY',        '#Wk8BU?;??K|]+ZmP6xtF?ZP>cOX84*`X8I%FyC1!&ZuG7kuc1z9YMQbh z(d4;A');
define('AUTH_SALT',        'UVz>LeyJm{&tA~?LV}mLlgGx E(0jc-fiE&v`dNf[mLd(ivct$hF9`8V`Ykw&Tpa');
define('SECURE_AUTH_SALT', ';,@=gM^_V%M;xr)TV=%UoWIECy<gzD;P2G|bQmWVo`[fY$Mf[~/CLlDI3D6Mu8FH');
define('LOGGED_IN_SALT',   'V48}RX=WR@;#Yv-$Ju-sBVt/ WFwS%&c9k&#0|_}~Ls.EZYOt27&v 6X<<)-~]?z');
define('NONCE_SALT',       '3e!,ix2:pQ-Z[!^vzl~>]H $?^I0c:^>,a0]A14ozpz)WY^DdXNl!(`AK0935%W>');

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


/** Add here*/
define('FS_METHOD','direct');
define("FTP_HOST", "localhost");
define("FTP_USER", “my_wordpress_user”);
define("FTP_PASS", “password”);
/** To here*/