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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>^$9LZ8C?UI?#HR_%z;#1K3_{ZtkDYs3L37pe]xz-}FwVb`d4nq4s@7bWw5;~K|`' );
define( 'SECURE_AUTH_KEY',  'Ay?H1g) fN~$ |UW$(oBQ/b^HHPC&.QL6ETTQb rEFtmu^,Zb0zY#O-rN7e$Ic/?' );
define( 'LOGGED_IN_KEY',    '_)Bo{QC)Ba&2:68matc1%i)^.?CTU%~!.0dx&G$~`1Z|@mJFK.PqKWF@kS?n#VLp' );
define( 'NONCE_KEY',        'e~M*@I-L/t?_Hx-W3#FAt:r3]IeA,$?6 9*jQkbR5MR8Rfmh)*HibEA}HYUgkwK`' );
define( 'AUTH_SALT',        '#gBgPWUT?s2P@o$}$b2J-+3uMIj!4yE2@aRnqkGUGiMO!#FU!k4#)T9+M~too@P}' );
define( 'SECURE_AUTH_SALT', '1k}Y*^ lGJQ7OVwss&7HL2nNWZ={#L;cW(9#yD=.e&UEZw1T:yDlxQhfuDU@<h(C' );
define( 'LOGGED_IN_SALT',   'eQ_*pxr5%8# yE~c1PZPsOn,n_gHyl]VLhY5QN6<?l1Ba:.WrY uu`!8)HRNz[e<' );
define( 'NONCE_SALT',       '(ys^it[ Rvpg;u{[37lTBJ%OZwTsMsAD=Lt`p/YH=9C_/qgy5zZ8VrC0Vt6M+K,_' );

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
