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
define( 'DB_NAME', 'akreditasi2' );

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
define( 'AUTH_KEY',         'CD^l<W*3e_2c9cy<Bm;E-c^v;B8X8fC5ja)ALG@L;Xu)a73:VB(12HT~<.)1mjn*' );
define( 'SECURE_AUTH_KEY',  '%dG(?:eMIvl;!$8GXBtDf5=CWxEyosD[?jb09F7M./~g>4lEg-Z$dF*lL,SW)iF>' );
define( 'LOGGED_IN_KEY',    'vg0S8<x{%,ua3x3rt5i?rq?gJNt|JJvne/zVw9&Od/wwaW:TI|_e/vq%JBG&|fjF' );
define( 'NONCE_KEY',        '+LSE=<>2f=3~D6#ff|?{h~smak`YZ+%ys:1.3]e2IM /y[y{LNG+.IsH&Hj8ZLJ]' );
define( 'AUTH_SALT',        '/19JHhBUj!=&1flt x85eaO|-z9x_nJt^QloVdYDH0a{f]Db.z+Dd]LwP5:WN|fZ' );
define( 'SECURE_AUTH_SALT', '@T_@V2z;:XGf i1Qhm)7&q? tuFig~fPx!;HudvgJ/wUsFO-<8q5w#8DT_kg)Ezb' );
define( 'LOGGED_IN_SALT',   'B%zVeaE9@<@~r3#[ }uY2ISro#.8q}))6}Bb (<r)YFFe[R-7[p>Qgbq!-eZcrdj' );
define( 'NONCE_SALT',       'L 3mjw,$GV;e-EHc-A1365ag4.% UFc>2!GV[WghWFi!EIy&S?*7_-3O$XdH@.Q!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aksi20_';

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
