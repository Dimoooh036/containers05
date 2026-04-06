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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '%j=2=uzO^a.+._)8L!WRB&DMWL[9_[BR~I#^qUYI8LS)<yvJ$BUVt+h3!/,(U*ve' );
define( 'SECURE_AUTH_KEY',  '3[*Xdb`B>]iC;rnYa4Mh,rzwvb6!a6LRGOJsQ5RS~D$`LBm0j,m+(Z?p8vQz&]oU' );
define( 'LOGGED_IN_KEY',    '@r^4BQw#Dy4ph(`,wj?BI,{@]%vi1hBvddOD!}LTP&p7mtpB,#]4zn<[1|>Xn:8D' );
define( 'NONCE_KEY',        ':%P5}6ds<WQ*B+G.GB&L@#vvolD=mcz.@mh.Fc$quCu;1fj)(zslk_Q[|]U]xo%x' );
define( 'AUTH_SALT',        '4p8HKx4B!jKKo2UeiF N_m]B9Y+Q80CiE(tAxsVo3&L$Q);%RN.i=0io*,{|=gT3' );
define( 'SECURE_AUTH_SALT', 'j_QfumK@:dA7PkUnoi,Lu9##-*V8i_`?;y~fs2e7,qS7!f)}YEG)AZ37@&){jpak' );
define( 'LOGGED_IN_SALT',   'C8k/X}WQ/=rFc2bt]da5n*]R+5Nn`d)U|D|^p(Pt!B~Bb?;%f*{A0`~Z*6:=/6#}' );
define( 'NONCE_SALT',       'C@R@oIO@;3]BYL/$D-SQ*Zc9ru%,%c;U)4.wLm-WknZd2d:M4EHzw]4aWe1}OE_ ' );

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
