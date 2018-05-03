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
define('DB_NAME', 'thpa9933');

/** MySQL database username */
define('DB_USER', 'thpa9933');

/** MySQL database password */
define('DB_PASSWORD', 'Test321!');

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
 define('AUTH_KEY',         'JM3ISA-[B;;QdAQ<oAmw9VTV+CfDqV=>^mO}K&QO8z#0o*8R.}*l*[(6-U!K=C-S');
 define('SECURE_AUTH_KEY',  'sQf>w-+Wmgm/]/ojoE{3xLrXC3(GI$Ow:1tw#Li[@r:jG$M%>R+QYs-x3ms[057A');
 define('LOGGED_IN_KEY',    'j^cOw+-Ujc|C==kB*`)z|`;?>&qts|2d8VgSqqnng$HyUQ.&*TdeT)Gh7%G3-J6`');
 define('NONCE_KEY',        '3:n(sXrOF$[s|tvOvF%~FTa-v7m3eL<!e1g2?C-$*k@`R!ipME~80@cd1_gB1sZI');
 define('AUTH_SALT',        'qD8|1,Kht[R3OE~{A)aIN|T_ETnJ;#==vZF2X,aUnoe?0YI`.oR:H=`LU)$YvyrO');
 define('SECURE_AUTH_SALT', 'O`gXiPU3,1s({Q)),a>=zG?M-tm*~}.RxZS;[8 jg.L65<V?5pu7ZQs$C`}EMn6|');
 define('LOGGED_IN_SALT',   '2l+|!)S;p [Gw@u9WPfj)-w&Kat_a?4PI&|*|YmQ*7anmYP9u;m~+(v.Lkgv|G$s');
 define('NONCE_SALT',       '_dBwoAn^PJF_yI&mzSoPN-q]{6TQMCN@1Dp<tv^_oCvgkqQ-bcXg|:qg}`av_~n+');

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
