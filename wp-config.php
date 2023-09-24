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
define( 'DB_NAME', 'omelectrical' );

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
define( 'AUTH_KEY',         'S>y1H{s;l++H^-3}fDdM7{)?-g9Hky9.GPSe4(Vw!2uOk- k_X}jB3WF#22-r2w8' );
define( 'SECURE_AUTH_KEY',  '2VP2hYJc6VLF(GfQJ+?wsf5&fU^?o>}}eu,Gd3&dR/ssD=6mZ_l.i`/Xy]LetrcJ' );
define( 'LOGGED_IN_KEY',    'SzV|h2.Y;q-`fRU1m^b*qC_t`u(h@0c~]r*NW19Q@^X?+#5i/.nUh:/O.;FY;8}]' );
define( 'NONCE_KEY',        '~%zv7mPTnDWP]+w(n7(?Ynl2{W6MnPr)Uf*4MWHi1i3C-m_RoC2Mrjdo3Rhi{H:c' );
define( 'AUTH_SALT',        '~u1Zn?:#a+RGl0b&qMs<HzFf`#Bn<<Nb+eN19RU`YP5W4_VaqV.I1[ll?g]nK!Sa' );
define( 'SECURE_AUTH_SALT', '77xA!HooX(,&b~0C2NV$lr?VGl%:4Z-+*Z((A43_,y7ay?G.(F3^[S#S{_[@$g)d' );
define( 'LOGGED_IN_SALT',   'hV||T-FM:glt=9hKP&ZZqSpdoyCT<@/M*:DFn>v9nfQ^Tm(>Ur~>!#T^]r-zJE=2' );
define( 'NONCE_SALT',       'nGe+[v]@cR}dHCO;y;t7M#%spRup)KNS2erhEy!*%lw~<? h;c6>3it*%1`X%<&3' );

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
