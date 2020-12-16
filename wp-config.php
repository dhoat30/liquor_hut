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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'liquorHut' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!|Y(dg,H<= UkjP>C]|z7<@u-q=FH:RN5Jy(pW&ZV&5cW%y`7.G]1gA` e^y $nd' );
define( 'SECURE_AUTH_KEY',  '>;46>OC(GFD6I6qKQ,VrOU,#QO0y![FFKIV03Dauof#>3d5[G&y5eBuIV$sUSg,K' );
define( 'LOGGED_IN_KEY',    '<ZLDF$K 4w<o% 51[opX-86Tm+x$pYznClkI_ze45c)5!|~|CLvkU5A;:RyD0$6r' );
define( 'NONCE_KEY',        'K>>+fhgv@UOm-9P0jsy^Ii@fE(2;2j.ruHhg$:>PcPF;j]T3>ElQb-i)ZE3M$oGd' );
define( 'AUTH_SALT',        '`)uA9wODQllvzgHSlWXVtx>@-tnij Z`{YMA~R43^gT9V3ha)bH=9s{%aS[GRka%' );
define( 'SECURE_AUTH_SALT', 'YaG<G6$9zJK`(CBzawmHa>x5;Ko,2k=p,imd8]R6d+LrYD=)1!4v8U@FsB(rbK3B' );
define( 'LOGGED_IN_SALT',   '@OW*/nkCkd79[I{>o_f!xD+Eztb]>E]6YP&Z`x##s*QUgJOmIi5u9[Q=T-IAiZv8' );
define( 'NONCE_SALT',       '3@@Vt?:3J3S6Go7J*yQn&jG!&!Oo6PmJNrCE:#__2,CcAU.qwVFHlY:Y;YlbDROm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
