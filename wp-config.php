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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'D|Dl[b[t]t+eF54PJs{<|E%c|9ZSk>)hS]@!+os)epF5aL!1]-1$MVP*s#wt{sdX' );
define( 'SECURE_AUTH_KEY',   'DD6*DWtR;?&e(dF,Dyi9&!PJ%1/$5WkN2QHbRHzH~0.*sd+W+u[r-{]#N!X>u$0#' );
define( 'LOGGED_IN_KEY',     'Q~@(()p-ibl6=.l8}<tB|.^mFn_[-hjINA7%%3d4&Bi/p:&Ub];oYy] {=xa+Y(L' );
define( 'NONCE_KEY',         '2SV3mLzzggTTXEyj/8*R*D{Ns7~2:U*~oF9Hls<h%wjTa+oO]i)@ !T+j3Q_-JH<' );
define( 'AUTH_SALT',         'j6#7(8qUu8X*.5$6*9xET10ip2#, 8#Qu=`xZaEUqv<`/W;=-{4m`R9040rCPN}?' );
define( 'SECURE_AUTH_SALT',  '*}.<gG4]|Dj48y*s{U}tVC4C#VgxL/?-J.vd3U&Z%pi267 c^TS6QL|=?A~>RsDr' );
define( 'LOGGED_IN_SALT',    'b`zLB%4a4A/,jC~y[-U0f OT#k#t`E4rFL~=f~e*yIcB1@)EeR.;`:,3iB&Vq:ny' );
define( 'NONCE_SALT',        'sPh[#/iJ-`w7(a@;UZ#[&_^kvxR?tKF$7H1jP_5L^gBn@()6UtLiBAHfec)m7I_T' );
define( 'WP_CACHE_KEY_SALT', '[T<N5Lq3y2,pO1+6T4nn*~*`ds>;]Ue708~r5^p*<Ji3Zl2q{qKe(Tiw# No2PpF' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
