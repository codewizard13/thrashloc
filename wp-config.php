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
define('DB_NAME', 'thrashloc');

/** MySQL database username */
define('DB_USER', 'ehepp.dev');

/** MySQL database password */
define('DB_PASSWORD', 'c0de.w1zard');

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
define('AUTH_KEY',         ':{(BhAfl=4 -KZM1x:bEh/B[s/o&`^B/B>H~f&<$wZn<KrY_P+_8^eY)K}Z2)Q[B');
define('SECURE_AUTH_KEY',  '7SitsW&>1qSeyRLkFWv<+1jq8Z+(G.WgWdfU+1Qcp%(,l^<76UfrkN@cCZ_#z!C~');
define('LOGGED_IN_KEY',    't)NHL7pX+@[%Meit%2nf.F[=}r2_!l>s5G9S;eV7yb6uqW+6yWf:d|&TS*.1GQ<E');
define('NONCE_KEY',        'sN%tBki:7DN?:p&V#c`}(vGA_sdN5isW/>.3Ky%hMr<yO`DAi$5Ok:H-!Pju*EGl');
define('AUTH_SALT',        '`3P8sCXs+D(=aD{!-xa{iZ:qi@Yxgb.,XggZH>e=$79w{$7,W3kGQiZia*ve~%+(');
define('SECURE_AUTH_SALT', 'Lb3oQ3Tw.SniC8*H2j[$XJt7pvvDL}8Wn5+kjOi+<V)]Y -}Br{0LG->xaJ%sMDj');
define('LOGGED_IN_SALT',   '}azgKMOJ^1=`g[U9an_jcqUq=_oE9=1y^F<6vu#A,&bSk?,r=-3uFfdjt@|E]nWV');
define('NONCE_SALT',       'NUh`14/6w%~a.oZ18!E(=$NN@r=R)Dsb/z}zKLO(]Ap?i:utAh]AR=l$^Wh*HFo,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tmml_';

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
