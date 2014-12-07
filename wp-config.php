<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'home');

/** MySQL database username */
define('DB_USER', 'minor');

/** MySQL database password */
define('DB_PASSWORD', 'Lminor21');

/** MySQL hostname */
define('DB_HOST', 'minorhome.cyfelemdvto0.us-east-1.rds.amazonaws.com');

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
define('AUTH_KEY',         '>N-Usq%OsJD/o2.[)$[)E0D}!ywAydFJQn:Y$FMz7$!Os>XhE9?+v|b}I!jzXnqo');
define('SECURE_AUTH_KEY',  '}|u>mxmwLd*jD@Nn9DZD^yz- TAs%{)9hA<xPfl)Cw40l8Sqc|)H@);a[FU=cO]9');
define('LOGGED_IN_KEY',    's{/39z+U^2dU) &2R~/#XSRt>Nv9sQ>JhBD+O`;40JY*GhskmO-_dNpe;/3BhX6_');
define('NONCE_KEY',        'Lsed%H,89lg$W@(v$Jhc#*P|w4-e` ]Tcw<HQ)5)ttB.cckP5pu{8@T1J!cl6kL;');
define('AUTH_SALT',        'x-:S6q8s0z@!m():L+A]jO{ay>%!N[6RPpW=Ac,n~v`/=>aDj+pYPW)YT99{1-p,');
define('SECURE_AUTH_SALT', 'nF9F8Sc6es|)+7fpP.C1},_2:nmn2Hw7^f k+66L$X |Z!2]h=kyJ~ em[0-(b?R');
define('LOGGED_IN_SALT',   '6Kg; &hXmrRE>Wwsu3G$s,qV$CPyof|&U!;b|vQpg~#TxRf=!+X%gA95%i}P5O(K');
define('NONCE_SALT',       'V4qN-<#~I{>+y{IizKEWW.]JQhUKngF5zzh]X`&63t{gIned~iwO|#dn+mB@p0,z');

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
