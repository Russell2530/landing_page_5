<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_latihan' );

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
define( 'AUTH_KEY',         '3)bqU[i15z9a|}l=/I-k:,-):aPL:v%a>T4=$d8z*NMlv(s?p:/=Y{)y!MO.GJ($' );
define( 'SECURE_AUTH_KEY',  'k=NpT@_W)MqBKPyo}o$j:rs?k!]-?P`fU2bnx:HF.3-dB b9IIxx6uPIXy<RV1c0' );
define( 'LOGGED_IN_KEY',    'Ve7N,>qFNo12w=?vUN|2^%J/rpO`7e0UZKr9blC,Z4p(S0l:DzddS T^j:by;EVy' );
define( 'NONCE_KEY',        '}ziiEh`J{9kV4LRN3Fl>W@)Ft7o1}aAkA@r>F3RET_$W5FPPba|J#*FpT4YjF{A|' );
define( 'AUTH_SALT',        'iam1$j)~#WLOc4;?<JVdhl%[;6nc}=u-]+N5 5ExJLhb1XMAM%G`J#j6Fgx!:~&n' );
define( 'SECURE_AUTH_SALT', '5|hh_;*CEQ?W3^vKeXo&_~0Up#VVYeiMua+H3c,k~2u3 rjdZ<#0VufAF=&2UThT' );
define( 'LOGGED_IN_SALT',   ']PW2F8jc<SN1=yWlPd@?w(s~d.:,GhP Eu50jO<-7rG7MC:6$vDZ]HSO;H;!j5[|' );
define( 'NONCE_SALT',       '$4>4bdo5n9899yls=(+a,ol<yu/mRn-h(9*:^>#i%+>op7gt+aDhG]Y<.D=kFeWK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
