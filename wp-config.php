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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '{S/}vWNi-y}zO_`!j7p&&<h|qlom)!H^(m=MQ}UV+M[plXCB`<j/51p6HL@+Xn0d');
define('SECURE_AUTH_KEY',  '%Jbu}%GHvi8_eXWk*)Pf-v/.?aIaGY*8IS&a8iY9mTD(c6g3+pI3/kRR*Z6R+Of&');
define('LOGGED_IN_KEY',    '+Dt&;Nawb>njQJ_OI/|e|M!4pcsHSy6qpIr_s>[&R&p&yC&>[qW+o)E4~|mmQF(L');
define('NONCE_KEY',        '_19Wv<QD8F!$r#ba4<a4U}N7SH02}3QAv)GO=33wZlink]-<8-W1-g@+@z:?XqG@');
define('AUTH_SALT',        '4uMyK]uGr+.D062u7Tu4J{7(g?n{U3d}6~#&:kd_t0[LWA1hph:[BsL:SZRD&[U|');
define('SECURE_AUTH_SALT', ')/uJ]K>ciU/nhjiOOFIUfe}_-XT|u@9]-sWXd:;S&1YNOK4AJ5&43kC7sYi4ym,-');
define('LOGGED_IN_SALT',   'PGI^pz?hJXTX@~TN)_+d_C5.G!0_F?+PUqwzbXi07]Qy60&h#5!F3QW /k)T!JCT');
define('NONCE_SALT',       '<PabA*!1VXPAf&WO![e[5.~Zv).`3u-:I5xKEhSM%%NmKF2bHfEW{RO--5V%_1=H');

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
