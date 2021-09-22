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
define( 'DB_NAME', 'Real-Estate' );

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
define( 'AUTH_KEY',         '#j_l(ZV54RtM4yq}0u2J[J;P+;7PIb3Z?LdS`H{yCa1S*EBw8#DdCJ5j8P,T#BU{' );
define( 'SECURE_AUTH_KEY',  'R[i`X`<wR`uKd8K82x(UR;X29.P3QS@,&|m.q|gJN^d7^MRFE`.q#rPEx3ce8kw(' );
define( 'LOGGED_IN_KEY',    'zn<sF*?9/>CcHoy;tdvHkIYA~d.cy&5ym~ZTr d=z3A>D_(;m-Qz6kophPiWJ!G$' );
define( 'NONCE_KEY',        '3G@vu=Y29+2lT&rnT;LLz:x]NKg>}G8_:C</Pr&e?GE2r~8cVd0CPbT_Y~K^dXP=' );
define( 'AUTH_SALT',        '==2Q6>ZtAcD%x[LJ]HECyv@~W-4=KqBStsN.+]8y~{AtcwQy_%|0R~<iV7aJ)YxF' );
define( 'SECURE_AUTH_SALT', '4;jk oOeozuHOn |&N6#?r3+pzn 7lY1mP ;&}vxPh/u#Y_jc:&A0!>]HzYjOSnV' );
define( 'LOGGED_IN_SALT',   'CzAl5&3_^vDVcM1[eyNK/F7[xd $R+GoxI2~&lA5Dj&:IaqrADH8^7vTzHMM-3?h' );
define( 'NONCE_SALT',       '*Cme?ueMyUYuV2`[.FL}A6gmLya3Jf|ivUcG[wFi5ENE8u~So[oqFG6o{]KU(o76' );

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
