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
define( 'DB_NAME', 'wordpress_github_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'x?sPv.BHfg@bM{1]HUn$wL}.S~tXJm~@>w<YpDiPYYC U-Xf5P6tA%[:w(ZCcpt:' );
define( 'SECURE_AUTH_KEY',  '8f<LdX~(w1GU9 NTPU114h[#F~ x~P2Ld+ha,fV-F42e?x2B8m4U*0aBT iPj~J1' );
define( 'LOGGED_IN_KEY',    '>DU*VAYfrm,Ks,DcPxdo)IFt51kJr6}sZPAU}t:&Who5Rft*tgelGgbe5PZfu>ZG' );
define( 'NONCE_KEY',        'CH2 F86yVo%uLTmI;6*y8@Dgq@~6{QrOmY!87<8F#&uZyEl`<lQJ89wk3E_6P`PH' );
define( 'AUTH_SALT',        '_ SP3FS6hDhGG$XSYU^EwJ#1m!Qqh_o+0eXjW|B>a#/Xc3/IW=Ie(2r6@j;vm^@Y' );
define( 'SECURE_AUTH_SALT', 'R)8%k#9}Y?WbVF!pL!+&(M] v-H?*7H{^zM5O9FSF{T5D9s1D+F!ug/U&8|Pbzb&' );
define( 'LOGGED_IN_SALT',   'N8<UK%|Je)KLFm]m }K,YqasBu9md#N{**=-809!3J8! IuYEwJ}TH<]G!mm=w;/' );
define( 'NONCE_SALT',       '+?BEzh.O@h5Rh2)@u73{jfn7j9q%FRqKZPVHISZ-CtOJR[.XG;ld9MIgAKP%@SJB' );

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
