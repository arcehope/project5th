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
define( 'DB_NAME', 'project5.1th' );

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
define( 'AUTH_KEY',         'lYt{mbwbA@=i.a_p<A]!9b?s0jj2$.D,86B`4BsGaXM<~0]uRYX#{]GV+/q*{y(l' );
define( 'SECURE_AUTH_KEY',  '/[wn-g-7]{u0<q[-Jo41Pci|%uYX0~T4{=BkTSPj}ydEADTcB0!%G7@btrSq)Uv{' );
define( 'LOGGED_IN_KEY',    'vJi%220@Tc*|zubQSy@p>Ju0?M00p{tl3JI[p>okst6`o.wQ1L]?(p,f^EudEl6P' );
define( 'NONCE_KEY',        'M4Zzp7MBGniabd2LJl0*-$(O31N.-y.MT;HyS(O2,=A$x7rZS*J. L8^c f2eN5w' );
define( 'AUTH_SALT',        'w2O}|OE|B-[ay0gx2E96]y+2qk2!DO,SI+wuH<O(6OhT7T[2^VnHfsEZ1,Uz^xjo' );
define( 'SECURE_AUTH_SALT', '8{$Aqr9^(eY19|k2?flii}R$N}._dsuc)4:Jd#`hp4|b#+n!{NqYVUus~u8V=Tp>' );
define( 'LOGGED_IN_SALT',   'TmMM!34j]_@G:+JdYq~=sdv|=mXEuOI1#Q=<dK^o6K,|xNtdmMpxH80zkbgbh&Sm' );
define( 'NONCE_SALT',       ';S>S;c`C?!Lu_3?&UG]koV8e?X##qOJdUc~1%=1LB/P2>g/&A(H&V5/VF,GBi?ZW' );

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
