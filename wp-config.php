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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'propell' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'Ie>DR1xIz+DjIpQx>dI2o$WCR<27_0,Yf{T#SfQmN8WX:K47_{xsHm64OXw5S|M&' );
define( 'SECURE_AUTH_KEY',  '9u9(N$)C!Zd{D)r=@FANUDR}F}Cn;^44H8sg!xl=nlvd_U{=5ORHe,qyRGg_/E=@' );
define( 'LOGGED_IN_KEY',    'R&!}Lhy=Wf:?S[i[CusFyJgf5y|Ky%En^{#,g=],w_LqhWFL 6BG z4 (/ESv_|S' );
define( 'NONCE_KEY',        'u^, n>Vpe[KJ6j,O*7;(&4:8tDd^7k1L(]f1Bv5EF0Ew; aivbitT2W^he1w]1u?' );
define( 'AUTH_SALT',        '%[5gv|4.W,^/i:UY[jl(+h|#:u)Ls*jKP|l/_W_)Eu,A8rU;hBMjmZJ~]l9<5Jxc' );
define( 'SECURE_AUTH_SALT', '5UO+58.`{5^I_tX)hH7+SPrSIPx7P&ow5gzDweeuF.@cghKS8QK~#k`{)@mQS_%M' );
define( 'LOGGED_IN_SALT',   '!CHY.sciBe};[9RN&+<xv]T=YkCbCR-U]fSY[;):/9M.|+G[1SW8a?[OX9j-hiCN' );
define( 'NONCE_SALT',       'Izd~q9K=_.5y^bVD1BcF~p,Yz3H3w 05#-k.lcjHi:?xgwV4F:(|t>G%?a8Wh9<n' );

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

/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
 */

//define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
//define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
//define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('VERSION_STATIC', '1.0.9');
