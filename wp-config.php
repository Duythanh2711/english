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
define( 'DB_NAME', 'english' );

/** Database username */
define( 'DB_USER', 'english' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'K_=Y1-N|&dAZv*0$n]KmE78A~iO17YLYCf1|e6@|ciBj~GU$O5<i_v(%+1{Gc3Jb' );
define( 'SECURE_AUTH_KEY',  'hReJHdP#&J/5G`k&)GlBo8Pw4zXA%2`}Um[Teq/5~sGj)s-n%RIKgujfrDsP*m:R' );
define( 'LOGGED_IN_KEY',    'TsS[nO|^|RqoFGH%j6rS%CW0b,62|r}80-U:=x&8yofoFV*}w%,H{{kQz0HX>CdT' );
define( 'NONCE_KEY',        '^cPhYc6#zeQE<u}^!_uoNZo+SCDC1L|,+juE|+c|htl2{5j)r,E{3{RU2|qrj( <' );
define( 'AUTH_SALT',        '?i4t|q9Dc]n+8 H^XM?;HMFr1K+Ml].J6`[*kjGU6-tw@qTx>[VDUE}+v[Vu$^@H' );
define( 'SECURE_AUTH_SALT', 'h2iQ{@ee1t ]~w#tZaPt6h?Vm>s5F~-yo+lEnh$z,MyJ,j}wD{@?#qEWK,0!J(GO' );
define( 'LOGGED_IN_SALT',   'B~XeV6ibxtD9JA)#XR.O2O5o9xD|<b/L8a10h/DW[iKSf<og^)/: w;I.8#a{2id' );
define( 'NONCE_SALT',       'IPPPA5>r6YsN2jnVgQrB<W}I%Ay[eotN($=K#ptzU8Hk:_j,a0M/+uX1@B:_88X4' );

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
