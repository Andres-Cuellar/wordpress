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
define( 'DB_NAME', 'andres_cuellar_wordpress' );

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
define( 'AUTH_KEY',         ']RSXClJ#5/w4NHE(MQkM:2fc,[9=>Y B4Oss&F8{a(Ig2#(!?Pz=-aQ,UM1O%)==' );
define( 'SECURE_AUTH_KEY',  'eMso{9bbkhIK|R4#*NhipRQy=N@ko/OG9a=PF@Y#bENLE4pM1XwjAR09b~`T_^m ' );
define( 'LOGGED_IN_KEY',    'gLx~pID1g.YCm,U~2SB$xr2oFP,FZ~F:;NLS7uu_<peF6;sH-# Dor-=-kdY0!Y<' );
define( 'NONCE_KEY',        'Tsb#S?GZj? *3wl_Bt}a+PV]EShQ]]PY~_;s=@:YBz6bCA0{FA.[#9W+VlE,#Gg<' );
define( 'AUTH_SALT',        '35/rfK}zr9brjs(.A%8E/:|xNJFbD[>ddZQ$*K.(.>CAw rd>V<iN}M/{FYh2uLi' );
define( 'SECURE_AUTH_SALT', '-08Mb^(m6)5{gY4E^[WN3 y?*ltkG#{!]>f0+:!<-gZS(GqK6S+``TSP.e>)C#jb' );
define( 'LOGGED_IN_SALT',   '43;qc~$FlyD}%_WGza1-Iw;D&GhX*54__*2{0=`whq<!@H?:!9@YAK2GehLC1UbU' );
define( 'NONCE_SALT',       'xL5ke0>RD0rmPr@BNA[RtZeYo%)lvZSOHDw&Y?L.:|qv.}6LH J>31Wt+U9Penv/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_acw';

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
