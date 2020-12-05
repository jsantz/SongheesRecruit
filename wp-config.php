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
define( 'DB_NAME', 'addtvnqy_songhees' );

/** MySQL database username */
define( 'DB_USER', 'addtvnqy_asadaly111' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Pa$$w0rd!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '<n:mdp]jDqd;B)`W[SMY1-imF4.yS)^]M>Yt:KsY@QaPML[u_wHTM`3d~B@>,I<E' );
define( 'SECURE_AUTH_KEY',  ':LV?<61X{*!mv0%Igdur}12$BJDb&?WY~xRxD8eT^*Rl;=2)22E!k:O!ysFQ#7)G' );
define( 'LOGGED_IN_KEY',    'y8&|XKPP:;ux >UQ%opnz`~ykIR&EMg,2j2e]_+D/L1N+Rz&I{f9nBw&cxo<^;h1' );
define( 'NONCE_KEY',        'IlfRwO6sXpd$V:puC~=ses-(]a.R+_tgr>jf2@DH@EoM}s*+k5|_!!.h>*jyb ml' );
define( 'AUTH_SALT',        'IcW;Po!8=Xw%%<V-ycA(CVc)KTR?,&&e.u8_=ac6gJ^C4Lq[L.4MXhE7;,~Or(}O' );
define( 'SECURE_AUTH_SALT', '#O1[6|Y/5/W6Y{#gsscf6NZJql~03;)mJnO|oP_1;6LgD!J_=P0rwMs6?nK$K{,X' );
define( 'LOGGED_IN_SALT',   '18J#XtBN68i.3sPh9NFaKo_4/L{BeSLQx_O1cU1XEJ(_)W`[n+6s_3,{HSpnI~#C' );
define( 'NONCE_SALT',       'AiQ.xY%G^d-([o0J$Y9DL/;GYU`h@jA&kL!1{F1U D8YYbcJKqMo,u,m3wo^{&TL' );

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
