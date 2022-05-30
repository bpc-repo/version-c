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
define( 'DB_NAME', 'brokehfyks_db27' );

/** Database username */
define( 'DB_USER', 'brokehfyks_30' );

/** Database password */
define( 'DB_PASSWORD', 'MbGc84sEFybdA7gUNkj8' );

/** Database hostname */
define( 'DB_HOST', 'sql19.cpt4.host-h.net' );

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
define( 'AUTH_KEY',         '{&fU,AsEyyW:HlOHCB1pqw{cp:hA-3tgYQa!~R&%$m`(Zq*EIJ1<)PYX)>]>d5Mu' );
define( 'SECURE_AUTH_KEY',  '2 i>*WxVY6=P0#`B5:<?10B[dmIE.=)Uu3|N>IR;{Dpd}G4fOuBBj.hYm9w2EZdI' );
define( 'LOGGED_IN_KEY',    'mNvN^.ped1(g,Ct!m{i|kmQptp~Ypz!<+Lu1[kfi>:lXB)wN;aLR!h`1nE`}.O2}' );
define( 'NONCE_KEY',        'Y3*bHm WK,iix`5GSh<r!=>La!a:&wBNZK){(WaG}]=HHTcnP}38UOsij`F31#5=' );
define( 'AUTH_SALT',        '+BHtK~RU~;mHI!r!@AQ(5!V+d~F+o?9geo<%FPxvwt*jVDE6TrCjOTZtx$h*uAd5' );
define( 'SECURE_AUTH_SALT', '@J+Ml%^F641-=E(e9x&wm5DuF{Pk}eIZuDs(j,Hi,.;o-x(S5o<pw3L$xsJm|5FB' );
define( 'LOGGED_IN_SALT',   '{)-zBk=+QNgv^6e)|QT!t%^H) xSWLG iy6s.?D>PW6CSCVg_jD$E~E@i}Om!K%X' );
define( 'NONCE_SALT',       '-1F(y?NqxT=,>Cmu&BPB(|Y)6b|:1T_i1jTJQ5N:WegZ(l~483E`KL+{zNP9;TKf' );

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
