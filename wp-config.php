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
define( 'DB_NAME', 'demogit' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'SG@DqEqTh~!v:VSdIh9t^VN&=W_I.]3$9f-x43I<]|QzRyKLXNzC^KIVY}em{zj$' );
define( 'SECURE_AUTH_KEY',  '-[}g$xG{13S I48Y#k]mG6}nRO(3d$mG^_yUo~V6i Hs/lC4jlN`Us0!1oKmDx-n' );
define( 'LOGGED_IN_KEY',    '[kivs5MpCH8p4+tk{aXU_wSL=[0TW[sEi6m5z5&(QtW;YE]Qyfym!dav]xet6%OH' );
define( 'NONCE_KEY',        'kgleQda?f3-Xyr,Z/ksLU]|Im~ix8G+0`c*V7njc2CREW+_+UZ6IGQfxYXLO9-g.' );
define( 'AUTH_SALT',        '74+?j2)T1qYOk5-O<:{slUK3(Kt1,BfK:+PrAm((!P[o]S]&.&2Se$j=pDRFE!L?' );
define( 'SECURE_AUTH_SALT', 'pj)-76[/0C|WW 6j8HWF:WQMj$_z&Uia:y/2JsfTa]uut|E2[l}0Y+BNz]1XGSAB' );
define( 'LOGGED_IN_SALT',   ',91TBzyc,yEqL15{gpS}g56Z4K/FCM/j@^.iEnppn@P.<ef3d%C^d1mW2sEm>Ysd' );
define( 'NONCE_SALT',       '5@A=kAt 9.[:=Zr4Hf~4puA,e[v_LdHyI`Z<&5fJ{+V>8pO%Egb-F<o TX@/N@OZ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_demogit';

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
