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
define( 'DB_PASSWORD', 'root00--' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

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
define( 'AUTH_KEY',         'L~zT;qj<N(||=X0Jq>2Iau}uRQT9AC+n`v/AnlHv[{,/U4xEYpIV|J9Ke[.-MwFh' );
define( 'SECURE_AUTH_KEY',  'j#$D:1$$J8|Vc:G&&fY)]>>c@{FNtS&`s-bH~sWjZ0iM@r=5~H>~ WUqU>A?Z& K' );
define( 'LOGGED_IN_KEY',    'gTq[=@3rnn89eOCyf4T/wt5mABk679,<yU2/21|11:/7|/~#,D(gL/c(Z~#KkOcR' );
define( 'NONCE_KEY',        '*x[{t_? tTptxw)z?k)lHC,pfP2]swocXoxH@KPXM J|y(L1&z.d[a$:-q;2C$MG' );
define( 'AUTH_SALT',        'RI%JA9 b_r..(+l QgcIuF/2t[70#}>u ]J?oaIa4@L4v1JB^aQTr&I^:<a7e#V:' );
define( 'SECURE_AUTH_SALT', '@vhz Z}wYKn~aV=~S4,1y~7fxx{_f71ZuL6r=**kjp LqvIdco5g$.Z:} .d%>*H' );
define( 'LOGGED_IN_SALT',   'j>V1lS&&hJS~DD ex$nJT)4=of$d:2[y,XoPEx$?}-Y20$vLP9%Ao|b*in<pyIDY' );
define( 'NONCE_SALT',       ';?f&&w}CGHE{Xp0*M|q0@;4YPD,N7@cJdR6fdFmD;NjBr`dRQkI!aK@MnP`_Eu}!' );

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
