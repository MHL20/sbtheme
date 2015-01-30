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
define('DB_NAME', 'sblocalwp');

/** MySQL database username */
define('DB_USER', 'sbwpuser');

/** MySQL database password */
define('DB_PASSWORD', 'sd%sbmbdrrra');

/** MySQL hostname */
// define('DB_HOST', 'markerakow.markerakow.com');
// define('DB_HOST', 'wplocal.markerakow.com');
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

// define('WP_HOME', 'http://socialbrew.us/test');
// define('WP_SITEURL', WP_HOME);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&Qh-*$MAjHq!U&]89-|CL0?GTj;6B?V[*rn8d&~rk55/7*laA!oSG8eTd/;p/kQO');
define('SECURE_AUTH_KEY',  'dj5j~@^59l5b~)L_Y!ikkQ:E N}Ef$+_@+C h8)Xp|n`/[U/|+<[^0+(_MKpVV$N');
define('LOGGED_IN_KEY',    ' #T2VMliqWDf;@8W{9*):HIoVx.GC0N{6iyQjQ90$@Y{pL(,PMfRr8&{L)j6XqHc');
define('NONCE_KEY',        'O6Qk2A<{1C6DP uK+r;IL 6SQUpv/ ;C?|R&1UsTC&_B$z?izrij+3qeH$Lt|rCq');
define('AUTH_SALT',        '57^8mUT>:!3f+8#J8?H-4>h$ZY{$AdCV$JE9VGC-Y9?9GxMe>K*Sr<5%DntGDr;0');
define('SECURE_AUTH_SALT', '7pBPTYefmBmHuKl6x7VETC:0dI9,Z^0m3%X^dW%o&LVoi(85DM9B#;*$?RTyuJ9!');
define('LOGGED_IN_SALT',   '1jHR&<PCf!`wd >Vu2Vf%fij/5$E-Is%O!FLoMWu&~g]|;--&)Jc6`LhqMr1G*EN');
define('NONCE_SALT',       '7J^]a/+Fo1bGE}Yxbi9>+d]Wte}lN-u[~&__dS0A(;k?!`:NI!%eRkB|Rl8_WhA~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sbtest_';

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
