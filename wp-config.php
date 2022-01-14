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
define( 'DB_NAME', 'wordpress582' );

/** MySQL database username */
define( 'DB_USER', 'jimi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jimi' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'LE@w&RaD6l.Dut qdi[)T~wMhq_sys@@h3?M7P!494t$&}tpzgZvQ!GCcQFLH-~X' );
define( 'SECURE_AUTH_KEY',  ')j7&VgLX^DrhV?:D@g[vQ=:046,-k0;`vB1YdPMKy8>cLD|&;:m|!^x0d0{>[7@[' );
define( 'LOGGED_IN_KEY',    ']9_eRv5v1`3H^MO-%!!Pb%yZ8={?Xp@_v2-vwbkqScRT}5>rhTJ1!Uc~DBQ`(V:~' );
define( 'NONCE_KEY',        '}2EX]__G%@|Us]/N)Mr_&oKjgV)MpCTRnMStaHrc=.;qG;3;8[;SditG`!_H-w<T' );
define( 'AUTH_SALT',        '+|O2T&uQRNT]3TN=):z,]I-:SzxerkdBS$[(+S*cNDp)++#;yVB_%e+D^M8!gqrL' );
define( 'SECURE_AUTH_SALT', 'H.[SUBf_(75~9uIR=%>0rAU|g0fu[8XYZO]<A`]_QaTFF8n1T5$IS<VCyUgMn-f6' );
define( 'LOGGED_IN_SALT',   's}o#Iuvz/jQA{#;s^uWX~=Kv|SAr@/%rdpI232:~]xEpXcTsBc8Y3kKtOc;ak$K&' );
define( 'NONCE_SALT',       'A-+.g7f^P#GcJpWUDc?(%cRN42kN;)5gm3+VJXE-9Q:/`,Yu{t9+f$:_=J02h:ez' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
