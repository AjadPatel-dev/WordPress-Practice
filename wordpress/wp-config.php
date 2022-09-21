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
define( 'DB_NAME', 'ajad' );

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
define( 'AUTH_KEY',         'rI;ej3V==|x~@9UFiM0Lo*af>[qE#?IQ`|Q1|ET75GHLTzqU^aTX tUU #-CI(J.' );
define( 'SECURE_AUTH_KEY',  ' /IerjYW7>=vW(6^+T$fzcZMM$uo8()$07;L E!trAf`7wlpJ{W0)ktj1L*S;yv?' );
define( 'LOGGED_IN_KEY',    '*Fg}4m&$u-D%Tokx]{$t+-+x2&3nE50;>xi+7Y!0&;+4@(FAc0u~NFAJRLc 6rAY' );
define( 'NONCE_KEY',        'G*[;/5H$@i)MUbO3H+^{g,im35=#CQZ^Oddwc:LEJ)z*i2I%QklyX?,2ie_z~%${' );
define( 'AUTH_SALT',        'B7IwggY4.<|WmGFi3f]2?`6T:5eab=(2i>FB9e+ TzILtnS~Ii?-l~,P|Z*EwF^Y' );
define( 'SECURE_AUTH_SALT', 'X;X<2!j]p)+G`amCQLU1-.D3EUmEd+Z.f&(WEfWWS%*ZQ~,3^-yC-hhWg0#LJM!8' );
define( 'LOGGED_IN_SALT',   ',_?)M[Qc2$TE2}$QFal1yH{PC3NjAY2-UY947NL~)E_|DNh-|aIe$]C/dw#=!2:*' );
define( 'NONCE_SALT',       'Xra<LY@ITj-(EcOd|(lyy6DS#SmlOpxOq$k}[)99_8U5.0_(.3J=*m]:lvL!7nfl' );

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
