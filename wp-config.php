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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'drink' );

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
define( 'AUTH_KEY',         'TrkfVkj$6}1TwDPpAK,`U_GY/ml2$Q;i1k,H,24R81s:bJ$T2]p}.8$p>(E_iKqf' );
define( 'SECURE_AUTH_KEY',  'kL.2Rr_7Cuv9MQ,517{HuMmoA>9ngLlrf=MEvxI|>(-5X(t{ ooT`HL9LqGdUN!d' );
define( 'LOGGED_IN_KEY',    'Js<1$+;WnEQ>WS8J0:[NV$0;9C (|+W?:G^$7#C<h7uA(j>cW2S7b_h*A3H98n!b' );
define( 'NONCE_KEY',        '9iBW2]H{Q88N8l6YyBY.BUK$)ePQ^N7=s8(EmNi7)<<gbmr:Knh7nD]_1nU1L(&G' );
define( 'AUTH_SALT',        'P((a`>5th,@ ROu47eZ5>=a}w-dAC4^E M|3;4)2NtWgh4XC@kh<y&i6~6&Q2#IC' );
define( 'SECURE_AUTH_SALT', 'Dc3/Sd)_u8l6AS!{U(nk4]OpcI`#]{4h;7}w>(3:]D@&/NK$:;8})2YnuzC5]$4s' );
define( 'LOGGED_IN_SALT',   '64WbL`j0:X^ln@fh@ACtG?(1x#r,epih=%i)I^-K`9F=8LiBvEq89/4U1zyz~/06' );
define( 'NONCE_SALT',       'T1.wsPDr1EL7ra,9z{&cYSuO<!RUrrM*#+eu<ts_/H#dnC-fiUk@5![(Av=O[Y&G' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
