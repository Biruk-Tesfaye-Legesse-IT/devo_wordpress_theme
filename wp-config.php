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
define( 'DB_NAME', 'devo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'YHm1-w;GP{b=_kXmno9&XO4pQ8p?(BJ;}N/7&5Qj+SLg)6/Et0|ur>^G)f=XdX}`' );
define( 'SECURE_AUTH_KEY',  'Cp^`J8m[GPbG/YiR}x/_=h{%-umENIRt(Tpj1,/SOre|ECpZ))}!:bMB6i:OLhE.' );
define( 'LOGGED_IN_KEY',    'pw%[i@oNZ(E6:?;:cVs*-O?P48<[Oxs+d|Bky $AT`v%%IS#$@{Dyka;n=5#Mhoj' );
define( 'NONCE_KEY',        'mQ~(UAkg%up`TG3s0o -`SS%g]Dj0F:h=X]ebg65Cdv2UaCYLL6+kI`S8A$9>N}D' );
define( 'AUTH_SALT',        '4$5qe0#N#FAT~F|ot~|y-i)jnU;<aU<>t0|fPnpPy!%#)TKU_PiWfy$+o5sp2FU>' );
define( 'SECURE_AUTH_SALT', 'Q+5qY%V.={kD>SUzx,}|V.%7X7aP[z`_s|oc@*[KRHL<l<JuYrmB:G<j3g0(iV(E' );
define( 'LOGGED_IN_SALT',   'f9B>!?+gO$I O`X4`rLKs6r)fbn0f*%tGR>U)G,3&@l<ef1Cy.@6]{tKD+ix1A!~' );
define( 'NONCE_SALT',       '&r2f:<%6g!t-9FiKwM_,A4Y|v@pa6fqHEm}/(b <T+y}NTL#8=c|9Sg<ra2Nb5g!' );

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
