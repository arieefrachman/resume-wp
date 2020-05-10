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
define( 'DB_NAME', 'portodb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'welcome1' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']3CHxS1=>7ef=*|hSSWyw~,)r!jR;Q1Fifx#Ocn2c@4a{rW?pNsR>}(a]>&I ;Z4' );
define( 'SECURE_AUTH_KEY',  'ji(/HVM7UP ]3E-I;qh9-em:}T((YPeWS}WDnBXnRg4 [`bT{R3?N#s#F:0bXA]D' );
define( 'LOGGED_IN_KEY',    '!aBEWHI(o C>mPjLM6|-kJCze~Aw)7bh-5T72ul`e/B_)EhD5|j5yCm.S$C6BrXT' );
define( 'NONCE_KEY',        '(6o88I0Xnc$C3qc|Ta=:fcZ}]FJ9#Q0[)V-i,/BGJ8]<^-bB3&]m5C{<&V&>~uON' );
define( 'AUTH_SALT',        '^L9RV%L}>%Np>1Vy5yYGHR/2pd/bf*Dc}A8A`F<5n*i,!1 NOdhI!Nob-u&],R!r' );
define( 'SECURE_AUTH_SALT', 'Z2-B=iCee_BGhyu}/Cm(78ea.WfHKq/avpUWF~qkeQAmf(?]q3QiC9Ib#fjP]U.O' );
define( 'LOGGED_IN_SALT',   'm>QMfp#u$2sOiu_w ?cCya-cY;t8wq3^{Dt0Th{xKBIR2H]O*q ()q6-er_H@!s%' );
define( 'NONCE_SALT',       'K2B]b&4|KPcD,1;aX[.vfN2@|C.-UE]dujQFH[ oc.(+<095kGFR9ay)C6$JM*av' );
define('FS_METHOD', 'direct');

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
