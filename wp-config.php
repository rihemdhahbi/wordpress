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
define( 'DB_NAME', 'rihem1' );

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
define( 'AUTH_KEY',         'r3|}tVWR_J3(Jw^![k &H4[YFcGsU&OrFqLTBTMe!<N^<q_+YUh@>Ae?SUbd2$&s' );
define( 'SECURE_AUTH_KEY',  'DJ0K}ugQ+zDR$t!v+svwZ9n,:F$Ba{Sc4<YSrF8>A-+Kg5Gsrk/G%T8KVwXWE-n ' );
define( 'LOGGED_IN_KEY',    'Y|pwdMFs75zvVC]ZUyM^ ]J|GHmP6m`Kl97DNPK6$gAj$RRf[<jNZ!o$HQaWXPqF' );
define( 'NONCE_KEY',        ';7I[3us}(X=` cX&TN{hU>_zDcLMK*MkS4o_yj>Rfq@4EJ{}H{fXLmk@Sov@ @9?' );
define( 'AUTH_SALT',        '@$xi~74VIf*1>P6:k3Q+D;6|X1+p_$,Vh,2GK61Xv@Kk1.K<-bXB7h.@D:raJDGY' );
define( 'SECURE_AUTH_SALT', 'IyApfUV?N8H2lYhf~F#}t4$EGg@yx->6_yY!Pr7m6AKo6k!CB?:d qlgku7GS=jt' );
define( 'LOGGED_IN_SALT',   '!b+(668^sprm52ekEOxlIAY%8ihL{b$By;E!10PNeO:-vpMD^4;TRj|hP=C&kj7s' );
define( 'NONCE_SALT',       'AmtLMQ+X9>~g$22ko.@C2L$M>]<^lRguSL3@3-2+=C3g@];nV<&^l~/3hhufh;Rl' );

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
