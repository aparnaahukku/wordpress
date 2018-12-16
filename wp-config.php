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
define('DB_NAME', 'gharaaja_db');

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
define('AUTH_KEY',         'q&suBDMH46JWF@|G.S?DIY4S1@l[YU^mU0JU,5.(QUTZ{F>G?zcTo@sEU?8ja}3a');
define('SECURE_AUTH_KEY',  ']Yl8vKaf|}ibF|bReR0}}NOtu(FdAmVTj{({FKs{{2A]< <e,2]OX^NCV4Z8OZ#f');
define('LOGGED_IN_KEY',    '%`pPVV<c[bbf1MN?$S<*@(<Oz5wx9}[OWLqn4pJ)5Hh0h)ES$P+[@NM9Jp1EzAPq');
define('NONCE_KEY',        'GksBUU,vcHll>S#{z}cf^>R=/^yaZQMrrlx@N2@EH0I{@:2=^B];}K!Ivnq;(LS)');
define('AUTH_SALT',        '%m(4R?Se;Rk^y[RIfI$j_m2~T8Bk)!JB6$ha-`Ftik!Ysh15ERx@g?WvdgvcIDhL');
define('SECURE_AUTH_SALT', '._r*M&Kt;_UDMusM?3<_},!C&vcFwhY?<Sb`50`S[ZVDhO#/it)`8tCNw fCuY>Z');
define('LOGGED_IN_SALT',   '7RX?G>[{;=)lIf?,6<@s7hRLqwG2lf>d-&&C/ly%w,>!%8I4z`,c&+3:1Qfu!v*L');
define('NONCE_SALT',       '$FivT*e&=nKS%tJLy~C[xs0MFEU]~b>oR[.~,{iS}U{Gr94C+6SAhLk!HO13W!,#');

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
