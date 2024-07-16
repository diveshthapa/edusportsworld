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
define( 'DB_NAME', 'edu' );

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
define( 'AUTH_KEY',         'j4;#J+}WS0t)sSqO#A=+N|w(k-8Q%fQg*ZQfSjN)/%Pft5OqW-%<SCc]^{3L=D#}' );
define( 'SECURE_AUTH_KEY',  'yAuAn,S_n>U?)|~Lcq8+P/h/Y<+8mQtS~VI?o/*/IQ6>]xRY0oc~ I1+(a;X.1}t' );
define( 'LOGGED_IN_KEY',    'v;l*?$IQALtH3u=,|gc)_tt!s_L0p8GzyD?9|J?3Y5Pw{:cY`S*#1Y=;6fPlS-)n' );
define( 'NONCE_KEY',        '1Jy*U<i?~m>FKy $vmb#,]Y-/|{sm<qsg$LMp)4qLlyX9nWor>h%5kx#6>o[KOMr' );
define( 'AUTH_SALT',        '?SjlKt6I[gu(}t}+<e1jxf]R3[OEn<g@o)#Xz:p2}zaQnSc;cDTZ`Kili.6u|f>Z' );
define( 'SECURE_AUTH_SALT', 'hiQ1aYpdp{`4bYCY_]}@P4j8AM50*SIvxKAjsk*^.Ffs[R/OyTG)|n#ufpr&&ZAP' );
define( 'LOGGED_IN_SALT',   ')PK=|_KTmKZqMrGH<%eZqlm`3n>*ahJ$_LBd@{F?bLH&ns_VH[zROyJso$>kPS@ ' );
define( 'NONCE_SALT',       'CjTI:A$]bJZd.?-Zj1#HvvzbC:MdS!U_kycFNKLP8Gjb,`2&lEw0k<|PgjR?(4&J' );

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
