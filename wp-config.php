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
define( 'DB_NAME', 'gero' );

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
define( 'AUTH_KEY',         '8ZL3&^@47$xh@}!Iy+h8bXwQ0=}Zd`j>!hs_Q4;PV4.?3Dsz#C:8?=1d@D+/e1Ts' );
define( 'SECURE_AUTH_KEY',  'LZQHAMImAqD{Joy_RbLK&K.}q7vU-42<%l:%+@$c<#K IV|)?<Xkoc:DBnz%!L$^' );
define( 'LOGGED_IN_KEY',    'sjT*rWXi*H+q22-;u?OO.K$%z$@O;/tf=<M0a@_n3H~ni!)HW4aCp(||9oDU#-Ej' );
define( 'NONCE_KEY',        'VTXLKS~8a3t@O%?[<R^p((F 3z_F=mm||ETV<wtGHjsERj6{5kYR{>?h^oIPAEHV' );
define( 'AUTH_SALT',        ')i3re-m}*tbysPV/b:Xq$UVnS%>)={5AnHCp3}N4pLqogLsLR kjvl6w2 !zxx&^' );
define( 'SECURE_AUTH_SALT', 'GhCU7;CA?te[8P3f@IlmyvmRNw4b,YF/GN+3MV{zM28<A4-vF|p&F]G|wdC]3S]u' );
define( 'LOGGED_IN_SALT',   ',&G+>|XO&ba,Y[TnUX%s=-3Qe[R{6>m*:8KLrz$~G;8WmE [Z7uFwsP9DX].K]rf' );
define( 'NONCE_SALT',       '#O^<CKH9?o,$d0bl# q^G4tI{Id=^/+xs3B<ixrg@[ZrWM9d?iO<?:TwVPfE+|-o' );

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
