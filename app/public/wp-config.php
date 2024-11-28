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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '(GdGg/1 G#N /hs$oi~qX7=b r/kzMU]u=:[g6cVX7m3_,$1shyBA^c6`~i$)y(t' );
define( 'SECURE_AUTH_KEY',   'B}j%Q5?s,nu0$h@Khqc0j7 4x=q;3dh~u9ER|Q-8l:i:4|r[_3~EpKym6r7?MEBK' );
define( 'LOGGED_IN_KEY',     'e4<81|L(b!elk_V6vrTCvK?%:lvOFNl;Ev>sXEC-_HYRB#j#t.Wq[na(kd5OBU>4' );
define( 'NONCE_KEY',         'm:~3Ia&kDsO7-pzQ -7t$teEjGk3g{7Jrn!)#3i/u4<pD,n=g{9$6IfV[wAz V@f' );
define( 'AUTH_SALT',         'mNe_(.ph^J5;:KO7*3K~Tn(_n>n=gcjkea~m5lwD{EL_4<?w2&8a3u`E5MtT1Lg/' );
define( 'SECURE_AUTH_SALT',  '.rW/vrF?i,LDeSbP!y<a$;^$=o#KwvE.(1]=U~Ds|<%Epal><@V $By%Wl:F5$X@' );
define( 'LOGGED_IN_SALT',    'Z#dU5)-/xq]r0SSUGo7vJdOHD:dI&~bDB7SN.|[FzX%A]=}Lw{`{<6onI@=ax0~Y' );
define( 'NONCE_SALT',        '=7a,T,V%x{^(1T_egPBh~@3L0A[#Ud]h<%s1$[)*I?;du2@E,M,nl8_p56K4UMf%' );
define( 'WP_CACHE_KEY_SALT', 'W2Ek<]ci@~3b=77B*U%XCja`Nh`1[Es&)d20d^*!16Hi@QR}I2{B$[p(KtV=u*y@' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
