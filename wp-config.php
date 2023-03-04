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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '==JxzNPN9`&Q{6Q*|fP2sg)VIC.2eY)~bDtRW;#:]r|KvQiW9Z:I.PJ&CSXQk=- ' );
define( 'SECURE_AUTH_KEY',  'tE4,R:JU)]sMZPa(XPFG6L~QB)#mN d=f2BEt #`*T5Waj;k_xO-D^j{KaK%6Qf*' );
define( 'LOGGED_IN_KEY',    'QJW?i8m*XiPux0pzls$haKEttGZ+cQEl=R-^71SC[PMDd9]np&vCTDFo>Xt:$>&_' );
define( 'NONCE_KEY',        '?m`Y6*d3:W6.tx0yz;=90;o/DX9nk@Yg 3>>w g|Adu0*UJNq^t@>I?Ttw5^yHG#' );
define( 'AUTH_SALT',        '$ ^v;gB#zm[aB.i|#SA6FuKbcPugKw!,#P4xl5..0{|k7Xt>flFj?I<jl??SHjQ!' );
define( 'SECURE_AUTH_SALT', '<_@i{7^??#nu*l#)u+zZs!S*FZeL(qQ$nf.1k+jOIx6j/SM%C@HfBfp>u#=CzGX_' );
define( 'LOGGED_IN_SALT',   'Ptg,E(L$p`dJcOy_n|djsI[v&HgMN`~,#[VT[!!e!}IdQP=DKA8t*a+`,C,Ss4?w' );
define( 'NONCE_SALT',       '3&GPbW&`tEp6VL656C+SY9%)~E|*X>5k-CjCO#7E2Sw^Iu*(7,NaG^[@GW<1bwKw' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
