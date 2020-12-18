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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'user42' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'ftmysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'H_T=b@RDJ|dkq-+m!]uy%B< pn(k=L-c+ULEUv-s9,YWOWZ3tr]<|6OH_-v7Q#/)');
define('SECURE_AUTH_KEY',  '|64ns++0o$.pDmjW+yL_|Wkpc|wB~oeTa9SFiGQo?<:ky0_[V6R4~~|~h?EK~s|}');
define('LOGGED_IN_KEY',    ']lN&9!!_+``/>|@pudJC//r+;Kg&Fg*R/;qLV+**dLs3e+h,K1wxm:I4m!R*&GNl');
define('NONCE_KEY',        'zGM31jP5r%#c+swBT3Nc|s-|%73Tu7kW7(V_hLs3Y .x-q$flc#Gni@ueUqkebkK');
define('AUTH_SALT',        '4j4?>9o!vnb9x>Eh,(#C$@Z:skJ+31?/#k{smyc*_C8A:OL1r5Qle]h;VIX-#]+_');
define('SECURE_AUTH_SALT', '+Up-GtMzrn|}S|/|9TIVt_ySJ++@+=MQtYn|y@/W:eqvoX@JKJe3UCw3[.D1K@A!');
define('LOGGED_IN_SALT',   'zTN>UR+4mY&SGewa~sMDKXNT#F#FpLZ{(.{YTvoWCk1+ z.v;RC;%NJWQ^x2zHVV');
define('NONCE_SALT',       'yoIa05%vgZkBIs:o09:i]+x9oPbqx#QsIZW~Ok]a#`_jW8k-|SzlEt]4?v{+kr)a');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
