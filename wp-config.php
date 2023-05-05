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
define( 'DB_NAME', 'epasal' );

/** Database username */
define( 'DB_USER', 'rajendrathapa' );

/** Database password */
define( 'DB_PASSWORD', 'Rajendra12%$#' );

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
define( 'AUTH_KEY',         'f`9Xnl~HBN%?*vVhX~$tQm&*YIN*]WtYvihjd*^}!kMH}[2}v{EMzkhi1f!J1I/5' );
define( 'SECURE_AUTH_KEY',  '073ztLtb>z=q-D^&>jGcDt7A4w:(J0`ZB}gCL?!tlTv2&/Z%QNwJSvdF(<}(CU4U' );
define( 'LOGGED_IN_KEY',    'e?.FngBcokUu90[jdk|bd{ul(_|(cl;HbN!Zw2mVf6-c&f)M5A/cg,j$|qi2[Nm6' );
define( 'NONCE_KEY',        'X7GwZRq51SK)`k;[>8w<N)AK=h-73lpD`9_!Xa.VD]zr=+?(v);4];HZ]BgPHRTP' );
define( 'AUTH_SALT',        'J=U^Op,&-L.[yvJ&,Kn$$ENSE91~)l]s(HZmG.5Zh=Z)g4>Mufz-0:LMu!Xb|z8;' );
define( 'SECURE_AUTH_SALT', 'QpD@%#M9#H8F_DAqr:w[(HLBu@G&w=&Dd?PnV8cgT0$ZwmBAk<4jkGcaROjHy6LG' );
define( 'LOGGED_IN_SALT',   '>/?X}q LheY?s^T[?CPUx{Tl%q7A t(W1aGXZ@T+Bw~Cq,TMpyLS* a[@lsx-jNm' );
define( 'NONCE_SALT',       'X?{4ts7Z-ABZ1eLa3~FSC0I$uOc!l $5S9;M}b$3`<<p,BN3Uga]KM3aOGoTK|B<' );

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
