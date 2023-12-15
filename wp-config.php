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
define( 'DB_NAME', 'martiniblanc' );

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
define( 'AUTH_KEY',         '[1fyWDriHk`^ [-z/Y4B?!oFr3MagMb<`fbC1X%E3E(1_]tf2 Y_+0<``qIT^ <t' );
define( 'SECURE_AUTH_KEY',  '@^p>^Ec5~tA%J#S !lfYU6i+U0Zf$9jIC?|N<Rh5:x-AB{}yX.$@Cp<|6#R ~wbK' );
define( 'LOGGED_IN_KEY',    'VE,W(ac7Q1Ci=LiIwq}P<m[p*^=,*P.Tl$ks@<T5ZCJ(3PY;Al9PmEU6NiPts/7=' );
define( 'NONCE_KEY',        '`;a2PfE^TM^`b6uoU75!I(6J{s,}QxN63y>8_m&3zt~]KUUD9Q1] /eq;j.$oi<%' );
define( 'AUTH_SALT',        'OO(s]XKL1+Y/26#CI*Y!IQe_&}t+FV<~l#/azQSiWNN s.NG t()=bPODy/wL4T~' );
define( 'SECURE_AUTH_SALT', 'hof&2.&v)=3QJ-cZP?7&,s_9&+@rJY-(XnjH.4;Q 1p*dKEtxlcIRd ~]V(Pbdf{' );
define( 'LOGGED_IN_SALT',   '907?ehisauIK]JSql^<`w%v+P0F(/l@dSB7]dD`g@NGBc=^ZgiNEz{IlQ5/F%Xxu' );
define( 'NONCE_SALT',       '>:4iXdxL{^6WOvThwF^(5@y[(@R8T|pJp[?c-/VYFX2c8g:kV7u3<l&P/*Eq_r70' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_mb';

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
