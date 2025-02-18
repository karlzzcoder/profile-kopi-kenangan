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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '[s?!2c iLK$A@np0k5(l527@lVvE[3a|8`}z^,-<Hom+*elt FA3_AMR%>2bYCPF' );
define( 'SECURE_AUTH_KEY',  'k4U61eH-I7EY3Ou&9,4t uZ]1zYmIu[-x#E6X564_x/G}w.!9Fr.l}O5AD6*zqeN' );
define( 'LOGGED_IN_KEY',    '`!<k>!OkJCgxo+`xlkNZpy~=3.`4apC7H*.<e+)=<d>-FL1k0c;I!<J?e2I?mj-S' );
define( 'NONCE_KEY',        'G<tET}x[d5<kC9gKzHe?68%=(;aRDdk.phrf5D|4rOGKrG>qB2VK{k5t*Puu?)X9' );
define( 'AUTH_SALT',        'OTTbva 4y.rz5BU:t`g9J@R%}xtV2> lcYVPv#P5oq,r?{9@RtmEHp6Xa+L|W}Dr' );
define( 'SECURE_AUTH_SALT', '*0G#r5%$#SMDSA/#aBrm/&PkENQP`}R_0[9%FxjjdD1$MRq_pS)Y^}pGD,CZR<$<' );
define( 'LOGGED_IN_SALT',   'U]+~HA52H}C`X{NmH^BO}u9-BN7(8drd2$$6]Er<;:(@nl>e1Ix!~S&`:Md[qT$!' );
define( 'NONCE_SALT',       'W+n$T]yybnPvnivm?3o,/GIwPKU0YxA.`32VX?R7|_%!L^p$DKqW*Pokm~C;5A_r' );

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
