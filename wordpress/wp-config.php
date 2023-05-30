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
define( 'DB_NAME', 'WebAbogados2023' );

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
define( 'AUTH_KEY',         'g#<_8=N~@;u!~;8#;#4w5[k]JYrO8&n>TNzzKv%WR?wU;)Ysj.*X{.`M5j;wF;wi' );
define( 'SECURE_AUTH_KEY',  'fJa!?H3_,?H/*-kOzjWl] ,;hG(Vnl`Ff&Y(hj A! -a4|a558Z?MVoZ+dq+s<8o' );
define( 'LOGGED_IN_KEY',    'UjX)6G)J]jbE~]U%-!S&72xr`N:~z2QhrV;ykgCAqAS+S,&3<[s{^!fx]XR3o>Fn' );
define( 'NONCE_KEY',        '**YXM8@z~W<`oqy59E|]g4`jd4P%R:@4S{?:Vy_7L2:^f_S?qBxS{^-kP(z0~|TH' );
define( 'AUTH_SALT',        'zVzM,N&`_qE%OCoJ)J._H%tfS#w_]?Jz0AXfpDiD7>b{M!wtACK)Af@4b]{W_L2Y' );
define( 'SECURE_AUTH_SALT', 'BIv@nE$^Y5FL,=Zr3`])c_Sl_%w,,3Y}WYH_1tTTFh mb}5#$F1qN*`r9C>S%>eA' );
define( 'LOGGED_IN_SALT',   '=?c(`h4m!HCk)6e(;/C,m6py~(B>qzEAX#FT*<Zurv.-3Gd(+>Y&( @n1|zByH+v' );
define( 'NONCE_SALT',       '(gq4KJoes7$)8#$|bT6xS[U9dCrRDh6[ `tTV@gGOP$#GlfXP4`L4oXhV*t(g^z ' );

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
