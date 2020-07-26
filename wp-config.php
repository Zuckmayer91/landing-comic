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
define( 'DB_NAME', 'comic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AEDA286Bcarolina9456' );

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
define( 'AUTH_KEY',         '@si^8{dKd2!fKO-8nz6iDZ(99fWsK@s%5YZFuXm)U(.eDW`]2RW7s}c{D&tvVWHt' );
define( 'SECURE_AUTH_KEY',  'Y&d`H4`%jZkC^t-!UkRW2Cg}y:grNyPs{S{(`Z@jF/3:ryc!8yX{3lR%$o`^e=|y' );
define( 'LOGGED_IN_KEY',    '_g}TJJZ%h9m?0gDpN4I=E%oJT$tr :s>JlME+,mjTRQcm8x_(2f}&*6[,Vv2j1Ou' );
define( 'NONCE_KEY',        ']ew4[g-MXXUZk.1Y*up~VNd/WUr@.@3_7QOC/S`paaD})w$; pUyJI1xr+zZ5zrf' );
define( 'AUTH_SALT',        'e#B~>?-D~)2=>JA`D.N@/8iDp7t>9=U7hAN~Ol%!R1wAj3Em}q5Smv_TD@vEY2|h' );
define( 'SECURE_AUTH_SALT', 'EV< 5z3Ii&M==H:?y)BBji:)9S$oJ ,p,m5#[_Gs_SD[2JE@l2-oUFo}mr?-I$KO' );
define( 'LOGGED_IN_SALT',   '|f`Cde+h$3x|IW<GN){`<03U1$r#_dFOQ7L{o0@{#f{utiIRZse{z}J{^spA;La8' );
define( 'NONCE_SALT',       '5# XShb3MRC0t-qO2GTFkcBQD4Ry!Qz kT#X;JG/i.cgTO<&~Qd`[$j~|Go[-FI:' );

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
