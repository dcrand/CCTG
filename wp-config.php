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
define('DB_NAME', 'cctg');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '^OCyg|Ap%|P%U%Q:nU};gvv1&tk5M^C-XJ;ox)B,P@+V~3Sx|@yc4U(9A?> A_;r');
define('SECURE_AUTH_KEY',  '3Qm,fQKzeqDUf|9,IBP*t8yb2kN?3Q@L(c(O oTWOnZ7EHrl4{833Ja|S!|hL^e{');
define('LOGGED_IN_KEY',    '%DsU!,=C8ILD8c^/(YDC$)!(}zJP|am:IjywQ5PkC)L%nVNvFYg61~~/O-Eu#{n+');
define('NONCE_KEY',        'q>fb3IX1FA*QqidRm.An(^JS-O 0o%Puc1[R>l.O~P+6lfX#k;L?%67DD{#|d`9J');
define('AUTH_SALT',        '$akYjI!X+-WiEAIhB-TdhJR0Rq:c0[qDJSnusX#$O,_o.4,RW#~+V~ecc9O+p+bo');
define('SECURE_AUTH_SALT', '(+3QXao-iN!}{gdc80hr{@fv|wU~H+.$mc3sq{9A|o<M0Ug63ESdj6GL)H8FnIKY');
define('LOGGED_IN_SALT',   'Z9Ey55Sr{0mvF-~~=+ICl?4AnhvA|+XJ[Jk|]NyeSOZh*9Cwz9QS67X_OMvtiND5');
define('NONCE_SALT',       'XzNq*V< ~tG,b^J`No|BVy+)Zo}|pudj0!K~!*2j?tij(8;s<i=c0fu+FMLvouU|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cctg_';

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
