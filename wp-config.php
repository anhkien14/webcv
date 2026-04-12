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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'o#Dz})+k&)YIxpXDKY}PfftQj[vU6Y!>~{y:CkBl?2=nyGJJ)N3]-,%6Ii<:wi><' );
define( 'SECURE_AUTH_KEY',  '&ISb08D:ONjIdotA5%ppmp[SQuRy=,id:K$jd_Y~1z])~=-)GX[qJLNJ97mvmH^W' );
define( 'LOGGED_IN_KEY',    'Tz=$#Tpv]bO*ZQl(ScQ)mp$|k+t6h)H,l1KTNg&!_#QIH>R)*{MBib#=,CqB^2`P' );
define( 'NONCE_KEY',        '[CP]VVI4~$y7sV=|tjkg-Ejekts-7O^(9|}!9>tuNtt<K4z=_(KfH[f3-W~*p_/|' );
define( 'AUTH_SALT',        'gn+-N<xj[?l`/yCd$7!-hZFiU]?Eq^#iY32h+Qm[,3[lwzY9.6-GA*u~^;AGAhNq' );
define( 'SECURE_AUTH_SALT', 'lYx)HU%.sd]BcA]Ct4er7/#Lc(n;ZpIgPw+k<IGNM!na`];0nlT#MLjTsc@WSU4_' );
define( 'LOGGED_IN_SALT',   '^y[mR`A2L)r:`,1:L[4:U^b>*f@5zPo}n.N/ oe`vJi_ss2p3<a|Bfy|&i[jPr<t' );
define( 'NONCE_SALT',       ',}$4+w~pe;4]/^2?*Wm?w&}XUbZN^@Lez+mk@)qFAP+Bn*MP|iqohMso<j7E65~&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
