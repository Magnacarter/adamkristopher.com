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
define('DB_NAME', 'adamkristopher');

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
define('AUTH_KEY',         'L +ibeIfj=i;Aj#$9Nf$xYQ&f{oJj>k-4M9Q5Gf`He+zcwM`<O[F|+!){~tYJ+B+');
define('SECURE_AUTH_KEY',  'TN59g9#[%-p]CC>x~TZM7~5f1)iSAR+wM,||wZD>Q{5P+clsB=wG4!{}^K0e@=Z]');
define('LOGGED_IN_KEY',    '80D*@K=-~]NZJ@oPG-5Mt()Ngc$E+Mm e_`tC%O37=*Xk(5m S-!ZF-|}}FS4ESi');
define('NONCE_KEY',        '7tQfS.-6D>K|FNo|5/Tu 1/XFvC}UE.G<`y$+dYhJq|#K1}$E0fj_KC3}tJ;iN&.');
define('AUTH_SALT',        '!!WkNbdY[|c{emn~xHf2mC($TFg3%lzFv~=9I,==vCGE|L/L5sqX!tupMhMP`3~O');
define('SECURE_AUTH_SALT', 'ZdphZa?9 uqKYM#pcRM^GG+JP?Q+Q38$V!}Guzd1hksfQaqV|-?}m~Z?-=S^M!1B');
define('LOGGED_IN_SALT',   '_T~(91&A,Xw1s??JH]Z y%8&vP2t689_HA)*x{Y{kTwgw&ngvB/i$ >6=RFaQJ*4');
define('NONCE_SALT',       'P!)ke+H44u?v 7c9sF`S[_X.LGrQ!qM+NLDj9_#U9&N3q$=t<|bitiDb>pKzClMH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ac_';

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
