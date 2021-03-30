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
define( 'DB_NAME', 'company_profile' );

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

/**  */
define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uQvBceF{#6Q1pBR9Cv-ym}g|I8/Xz0>ZM=?S^~M7X_k[F{j@Wz%cCwxRuPX/$&Aq' );
define( 'SECURE_AUTH_KEY',  'TAGEUZYh1&={e|yn:,x,Q!{Do4<rYt.mqRca/nSbi44E]HxH[w8KzGf5H./+EqQ*' );
define( 'LOGGED_IN_KEY',    'tR:PTTgb>{J4w=:3(#gHAQf6tPso&?>]HTMp,7PuPrG[1HrOd)a,JGu6&(H*h;9I' );
define( 'NONCE_KEY',        'P#fGtBDxOi/FDsI;trreH;jEmj#JR}^Jtz^+|u{wIOdE8S]ortHN){HHv:(,U!*&' );
define( 'AUTH_SALT',        '=Lh&2pnD7tW0Qfhi<UVFaT~% b[b`nheZacfhd/Mw=)(L80(<V{=:#A0v4q}W?]F' );
define( 'SECURE_AUTH_SALT', '! :%-,O]If(gP=g)5^+m3@%C} zjDyNC8hoiddPLgvAJ{f9h*}bXM8Bml*k+p8n5' );
define( 'LOGGED_IN_SALT',   'H5k=aH%)/[XI54mfwl21Q<7l`kqsh:IWF*0tutkF..mi(E=1KvGV~gx)0s]Ps5Ff' );
define( 'NONCE_SALT',       'p=Nd|5b)4cI(::W?ZfQiH[`6eFsX~uwAD3[;qLulU8in{}?!M<#oT/LBtFRe}*^3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
