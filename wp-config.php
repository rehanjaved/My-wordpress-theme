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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'hcaz3{zK}d1Xq,sd{I:l~o0j.GJ6aWMAR73Rm:,1y0`4F@:Mp,r%l5-v$ZGQ8#2u' );
define( 'SECURE_AUTH_KEY',  'J_$V=6d}NAuqkT)DyZ_ozbf9u2>.h,KCd;;c,`U[S:A4,0(|cq<6-0S;5WZ4sht5' );
define( 'LOGGED_IN_KEY',    '<^E5k&{+qH87]pU5qid0<2c5JgVi{rf9C:Tcfw:|%}R*my1I/2mR[vBMUR7q;!#T' );
define( 'NONCE_KEY',        '?o1ZDak6GMQ,TgLyoL0W!y;L0/-A$^Yhp6qVyMzC;F dkZ(E~4`S~JA;27$_7^Jp' );
define( 'AUTH_SALT',        'mec3g`NXM;%7_+S-Y.Ko*?H=jswX@B+}7]_>At?ZrTSKg2157kZ|x0^t4e.w#x}q' );
define( 'SECURE_AUTH_SALT', '&;q&ljz/.M-su]xI7 rnx/Q[%j 1d;|dxh)|[|Zpy1d^oDD<iTS35ISU:%j%}^^H' );
define( 'LOGGED_IN_SALT',   'P-qn(}f&MER>[u`XD$=uak^}xy5cb4rbJ*o|VlXG()*v:@zx35lM%8rm]#Dkr4~Y' );
define( 'NONCE_SALT',       '+L29)zD%u]88icq]^NbTvS]d=fq@tZ8VX4;)D(]<Do<gQJKA@a![id-RFccwp,D<' );

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
