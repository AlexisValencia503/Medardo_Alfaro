<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wp_gh21a' );

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
define( 'AUTH_KEY',         ',cA`WYaRq~)v8QQke7L/e,{u!F]ounECQkMv|cz+N)mE)KA<c#X*h216%7nPZ@^r' );
define( 'SECURE_AUTH_KEY',  'HrvjUg1I)I2RxEOJ7MQvTo3}3||2c^@%)s;7]g`9$zgxqZ)&C17vH+!)nW@(Kg`o' );
define( 'LOGGED_IN_KEY',    'w!*Rpgtd`y$:{5?U8!vj&#kChC]{5*>ny% p+MHFBI^z%Nqqkqd0|F*MIxN`A7vT' );
define( 'NONCE_KEY',        'Z0`O.Qyamb>LPu,%P^m&G=y[`s ^m!%%-H>B^2mgyivOv-OD+WzzieOZ?!%lC<IS' );
define( 'AUTH_SALT',        'R}YNEcjJ0=_E+H:m..ILz&}s61!S:)Cg{c>4d<-;JaYq!C<=|NRX@/vo~=cnG5M}' );
define( 'SECURE_AUTH_SALT', '?V(;HiZ+%R~u?4NS4MdmKLca08r&7:)g^IBMi3UxUq5/U>NR_eI~3H+RZGV*VJ*z' );
define( 'LOGGED_IN_SALT',   '[4f?[drp]4673uT5qQ=J!MuDW31b|hoJGDqxn/m!9/c{Ha#>cx:llZ?3<YwfM,w5' );
define( 'NONCE_SALT',       '[P5QeIvMx>.4NV[|iPJJ+l7!NWfOD p ;4#i-4#Hxi&5k~09!p F<1QhWAAfF]U>' );

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
