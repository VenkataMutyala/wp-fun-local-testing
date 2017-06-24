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
define('DB_NAME', 'test_wordpress');

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
define('AUTH_KEY',         '54u7g!Ze_HB:nfS{D=DS+K?-a2*ktsd`<ZNKP2DM3(NY.z&2FIq`|8{u!y=>k1si');
define('SECURE_AUTH_KEY',  ';LE[7U@ 3xUBN}Y@z;R@l<YW5zfn#T-U|uf(ETxADNm9iwOUv{pJy !M$XvUjVOF');
define('LOGGED_IN_KEY',    '.DJ@elvB`#g|^QOBYx:uwJu$P >og,%x@kxIV;:o7@KERGWLN%W,DJVzdX]9BP4t');
define('NONCE_KEY',        '2:7+W2XUz}%Y3+f{Qc;Yl9_TLSmm8^?v.xI,x#MU(T6y*dWi=5+)(q,0n+I,/X.d');
define('AUTH_SALT',        '&a3[YGpb&bZdAVT blAl&Gfg2pIs#wLb.7a^}#o&$Yc,dYcq]hHy#-8&niXQ6Z$@');
define('SECURE_AUTH_SALT', 'pzcPb1RLtsS0wYDOnZEk_0+.(x%>R2xjF3Ax5I9t3LM)Kjmsux<Vu|VRtSrBGok{');
define('LOGGED_IN_SALT',   '|VE`k<UnS co.tE7&:ow#jOyG.a&bV60E2v-|X*)ZXcs]:%Z{>HErssX<1r*8arc');
define('NONCE_SALT',       'g*vCSCc>om/O>*tApDsv.r )UCsYwR@EPP?>`GY*I<1q+]ALI}z.Ku-^t;k#ugp ');

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
