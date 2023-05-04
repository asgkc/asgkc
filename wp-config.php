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
define( 'DB_NAME', 'asgkc' );

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
define( 'AUTH_KEY',         'Y43f6Fo!3V6Yd.At:)?dV`b2b@BE]Ig >zAMpc/bhlKo@.aIhKys^DUiFr<kl:fl' );
define( 'SECURE_AUTH_KEY',  'u2x<LT43b!Ry@>_X!mAPz{&vJv@z.W%X-wy-yU^i5-=|xpW,L%:zFupKg4e,bj87' );
define( 'LOGGED_IN_KEY',    'x4nqWnW) O0P7Ld&U&A<4?.-L~iQZU^?_vC?frsAK8J:RtAu;MNUf,~0fYul]UeK' );
define( 'NONCE_KEY',        'X+df~ZFHR70|`g@EWZ00h1!-yr?2]I~bws77UDxS[vLUrZUF}IZO.40{z|5||$C}' );
define( 'AUTH_SALT',        'keP%)n~i}+6z 4LC0F#/$KJHbz99Zg}dTDpvt{Brc=sS6qd)+.@]pUX7uETeEjx(' );
define( 'SECURE_AUTH_SALT', 'Ppwt(wC#u:1@vW!.9.5]EFf+;F8WN-KT6Ch5@y0hioYd:6Fu0ie2w!CW8lghHy!E' );
define( 'LOGGED_IN_SALT',   'a5&2-#trY(q]|7)_UzIs:,4AK5b=s}dv|9}rO>w%Bj+:q2Lk_qSr6mvix4!!)o~{' );
define( 'NONCE_SALT',       'a?A@H2=V4h8WN3@C7QZDh^NVP2cps|CHUq[$}1zh=T7?pon:-7v-CIvNJCy[ON%~' );

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
