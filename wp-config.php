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
//define( 'DB_NAME', 'propell' );

///** Database username */
//define( 'DB_USER', 'root' );
//
///** Database password */
//define( 'DB_PASSWORD', '' );
//
///** Database hostname */
//define( 'DB_HOST', 'localhost' );
//
///** Database charset to use in creating database tables. */
//define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
//define( 'DB_COLLATE', '' );
if (isset($_SERVER['WP_ENV'])) {
    define('WP_ENV', $_SERVER['WP_ENV']);
} else {
    define('WP_ENV', 'local');
}

$wp_env_config = 'wp-config/wp-' . WP_ENV . '.php';
if (file_exists(__DIR__ . '/' . $wp_env_config)) {
    require_once($wp_env_config);
} else {
    // Exit if configuration file does not exist
    exit('No configuration found for this host');
}
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
define( 'AUTH_KEY',         '[Om:Nban~x)}V emt12`[QxiCjpgvg17]|,E^1OtDOwIRIiZLfJxC[[Lyxhr]tRZ' );
define( 'SECURE_AUTH_KEY',  'Ge`)Q9^.hjd?Mie|KesvErG&or?V;VmKpVl&J5!O])qwj<fahAdfwJR$zDcRd06>' );
define( 'LOGGED_IN_KEY',    'vqry<IJ{CL0o.3ih_W35vmoa1N/u#=$F=dZJxVUcd5L>Pi(HJz~_vQ7PmDQd$J~|' );
define( 'NONCE_KEY',        'WaX~!e)c=>=Ho,?`>>lwzQG@#}JQ>`)GB#j4$rD|5jtAzEc@W/(<nsG{v;5Rs54,' );
define( 'AUTH_SALT',        'NUB!A5IK1V|:-[_5rW.hp]U^-G)ta]X4{-~&,ic{=K}<?n=eejk/LTe^9RB(-3:i' );
define( 'SECURE_AUTH_SALT', 'tM/|f-*T!]{eOX)92klTqPBZ)A:FEn$qkL5#:7QEQeL?0wemWAyk,~fk0f-{KIRK' );
define( 'LOGGED_IN_SALT',   'WQ}d3EysNb?XfQ`$T&@LX;vSQCwbsO[ABVvh?[!FsIPQyY}D1Qa:`G-LW{A&/2=>' );
define( 'NONCE_SALT',       'O_iRc2T!>Y8Jp9$Ts0b8s[B4/DRb`aackmsfPsDrO_WO[iZe<h2utpW$yKK|m/?R' );

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
//define( 'WP_DEBUG', false );
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
