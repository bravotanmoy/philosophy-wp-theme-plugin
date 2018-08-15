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
define('DB_NAME', 'wp-philosophy');

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
define('AUTH_KEY',         '(?6~wBjnt<hSp5==qXZVMxb/n$@Bfye(X5C;wO|#.pPR%QUff^om<TtpmLSpfLZZ');
define('SECURE_AUTH_KEY',  '^X/w,XwY,&(S9r<+_ZgzJBkkgt[S7TeUe=whsAp9C,ad:!AEfc=3,0_gbjU+s8No');
define('LOGGED_IN_KEY',    'k}I`6D%)>>1b(t*Lr@s1/~R;mSYf}kVb_5H-k:]{(9nu>8b/:>GN*MY!_%.~N}l3');
define('NONCE_KEY',        'j^]4M*U3En!o;6(*En?j-V?ryW:KZrcr%7vvar7Ut#7Y,=EXay(70+jIg2k*hf]P');
define('AUTH_SALT',        'VFHG<Ijg$pL};Q}MI#%;FHlW&;IY;,DgbffoOvoqp0fghn_Osrf>>,q(~!0Kq}dS');
define('SECURE_AUTH_SALT', 'y(6HP0ja X|}uAEa1!?jj+Nk6q.pe1Z]ruqKKNvzj/MCS#!/|W4XnNmY.NF1$mk9');
define('LOGGED_IN_SALT',   'qU~c&g{5^}@M,&*=~n5(975}*6o!3zIKJ}Pti+s9H~~w*cnE)_`V ({P`kHb,`]5');
define('NONCE_SALT',       'Rm^Rc&a8YTkc e|Ni()=,=%5F&vpEYrQ^<=%Vny7OZJ3-nNe+6Y8sQ{6I%&*u8q:');

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
define('WP_DEBUG', true);

// Disable web host
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
