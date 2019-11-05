<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cerebralblog' );

/** MySQL database username */
define( 'DB_USER', 'tobi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Famous10' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T6{G4o02-&,5xOp*L_!tw!Z=U0)Z~57mf]KdV63vz+)j-vSs53b-l~#zFyioTM%G' );
define( 'SECURE_AUTH_KEY',  '9vQlz(z-0wW1 *BYFJ-djEj=h&t6l*krm9[Uvs+1)z7p7fB0K&:ZhfJJOh(mRhd}' );
define( 'LOGGED_IN_KEY',    'w|FGCc0qo{fy(v4[fUvPD#*TEZj:v*|Pt{2GiM|U%C!_;`g;[0]f}xyFV>?Us9Uw' );
define( 'NONCE_KEY',        ' 1jXB,:> XCDL0u[nBR:y(v[LZvJ+V(;kp[m4hEkS_2~&Tlf}%#HRa}s;Ji?xDRy' );
define( 'AUTH_SALT',        'N}/YD_1(&whP2:c1[V2dVLa`/!{j-CfiH};;N]L1kP`%wtra9xW={n!?h```)~@A' );
define( 'SECURE_AUTH_SALT', 'aD(rb&&)+ZdjuP3X>-ieo/3!&%i2.#9zZ&wq#9Q{[cN%1%?5K@x5E+8=4q%%A3vz' );
define( 'LOGGED_IN_SALT',   '-^1#eA>tweL#it[Ejk;Mls=~`C*rS0`: 8+C6:yN(ER:N+9A3~TN!B[`;2G(yXe(' );
define( 'NONCE_SALT',       'B3p`t`PUif@<VE8ez|J%,%nck_Hpt-,H+moK:?(ir^95#2hf<zVGa62Jh-{%d`w=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
