<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portwgit_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '33~=-R*<._lA]cU#+LX}@=HS2cy0 sA#xJRu1ZO=zA7VVrn@],)V|XH:4&:@]O@_' );
define( 'SECURE_AUTH_KEY',  'qkxvOd7.^1w!3uKNDxVc$`CnA&aK6u/!JEg=U&;!Fy4T>5hOLOc^E|3ed`.g)M|4' );
define( 'LOGGED_IN_KEY',    '#~vb^g76-v%9Q6RxNc_$@lgAAb1E}QR(bdyX7=_YZmR+?B~..~e=vQUwC=0.%>~i' );
define( 'NONCE_KEY',        'S;:^1^&y8H$!H,;md!S0J=H2|9XE:ZHlaDQYW?ixleJQ?cepZs,{r9#<l7q7J-v!' );
define( 'AUTH_SALT',        '*T(^%saKcGJi^lQpD?_140aKi[ejTJzCgZoVb<3) 803{{S&.r*a.6Sa(^dnWF-I' );
define( 'SECURE_AUTH_SALT', 'nkceZ%Wa0=CU2jPiN>g_|a?pmYL)?JuD3FK]KC[7=s RI_)={D^-cKh}|}zVLj00' );
define( 'LOGGED_IN_SALT',   ')SAsB%f&64~t#!l/e{ CN#/r+}HlDU;Grz/bNTC[mu?v8TLGS9IR>PpdF[2K~CJn' );
define( 'NONCE_SALT',       'pzh9(q1GJnUyQsQ~=<7X<&v1-w-~[al*h}p2pyG]@qXdW-u$o.a!9ED@&@H.zeaG' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
