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
define( 'DB_NAME', 'haber_projem' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'E10327458842' );

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
define( 'AUTH_KEY',         '[5sOw_ 1E(oz7]z@u3.:u4%tM1J1Qd3Tkc`7g{RHn) 6/[4RpKLuouJUm@JaD@om' );
define( 'SECURE_AUTH_KEY',  '?$A7dp+&dFFMjo2}=4i#XoWeFW/Ush#4EycN_O#mpYZ><db(LeUh]zRT}>l?z$=^' );
define( 'LOGGED_IN_KEY',    'LZCo:$`HG)D1bq]i}hDPI~DFPVe3d/K?*>Kvm!/aZuc)]Z[`ad.Ob4:8&g~%2.!j' );
define( 'NONCE_KEY',        '-,=lDynhye,.vi*a1 qCzg<4ZL4Ov_~Yn,}x3{|H{,sIA_x%I;TO.chiD`ij5@ZA' );
define( 'AUTH_SALT',        'xHm.f{CC!rhUWl2 w.3owVX[bLh@RZcf@+w)q-6z?J_;WKHYlH/4z+I%{8K|arYn' );
define( 'SECURE_AUTH_SALT', 'x1}ehs89SZa@!r4jz0_].Uon~hCWia>|):v}ziJm1 ?_rZ[%%u+AhC1tm[,uG,AF' );
define( 'LOGGED_IN_SALT',   '=/rv9M?fobZ+rYgYj/y-zjjq=t[AcRZWJ9}qSdXZ38am$ ?5Vs(>CgEz~T<$Qp P' );
define( 'NONCE_SALT',       '92)*axF-ISo.W?&tAuXWS$vi8D0,LnyWAdVh[#4F|3.N1[2A:iL9*g}/qY|Vr)|L' );

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
