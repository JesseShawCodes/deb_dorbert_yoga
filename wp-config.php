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
define( 'DB_NAME', 'deb_dorbert_yoga_v1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'XG#NEwaX4?Vj72+1TS{(ym^u%_iW|Y74i4o3V7y;xzQ2&< ;-Ji/z>JA]l++6wjB' );
define( 'SECURE_AUTH_KEY',  'du]1:H[v`3^Mlw,]GCK%VzF&[J,3}XMrshp)m5mJrQfc]{yX*?GO_-rk_*~/7v-l' );
define( 'LOGGED_IN_KEY',    'gVQ]gK/_C[il3*gB4hQk0&Bw`8nzKpu&N8C7vz.OUt)9QVcpNb?[}= }#k7{kqA!' );
define( 'NONCE_KEY',        'hH:xL`kQz+~|i,(2$Rpo|t8OVLC x{B.JT3f.DORg0)QVy*9M ~Y;]3 +Ju20^e8' );
define( 'AUTH_SALT',        'gVZ-(UWQqj+!-5DTW<z$PuM:^<6uQ:R!d.?H|%8o$G^z/6sRrW.jkY4HbxkhY[MI' );
define( 'SECURE_AUTH_SALT', ')gX9isDKsjtXiX6{, l9|o*zl=;pmTVx|<CrbjT?dRN,q9l}+D ;7XY+?ct#en(p' );
define( 'LOGGED_IN_SALT',   '#L4f@EFz~Iwk!i+8a5VmQfuvBkD?_^7n-C>VfML$ly+(j~42}[|-iE:fa1Q`|:k2' );
define( 'NONCE_SALT',       'r/D~op+G-PMiCgl$5b+X<wWqQ1hZO$#*CbRET]& FY$)bFdTEj0{GGnv-]c 5gn@' );

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
