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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'i#ABtNR*7$o6~2]@r%!!#s]w7UVJ2,gEdQv6VH}O`7Q1Aup~_,`2pelvcv+m}%(V' );
define( 'SECURE_AUTH_KEY',  'V=T8=Zm23#)*^cI|N(NrzZE/s`p7>{Ut<,h,*Wkt}M<>hy6uG5+^W@wsOqW,VF2,' );
define( 'LOGGED_IN_KEY',    '-@XE.3N(pE-WBtugMta2;JH<SaVb2O1ZLHQXa%|Hw;?bj1)M~gs>`g7_ZS~F!hzJ' );
define( 'NONCE_KEY',        'Y0SLwuH1~h1}kB2uuIE~AwT g!Uor4?_ ,[rN(Q*K4{,5]dP/ vMFMP/$/0B6V@|' );
define( 'AUTH_SALT',        'f`PU~$Upjd)wMwRBx f#4>VH3+V>P#f49NiO8Si6eBVGxUF}/M6762aBl , +&;}' );
define( 'SECURE_AUTH_SALT', '=L#3526}LK:9d5Wr&%0[;89GLtTCM|j3GBE&2=w2),4PQ~X9$*wdP%41iI/sGmS%' );
define( 'LOGGED_IN_SALT',   '=Xg]^@+)|xdF^Gk.;$+_/([ZF1!*HtxqYK/)x`]|7oAzRnQ27kJ&@pGm:5RT.Rkt' );
define( 'NONCE_SALT',       '*Jm~LS_s>-aA9};dY}n`&u:_PkcL$PPro!%;tx0#E^%TU5P2N=F?(%FGG:~NiW02' );

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
