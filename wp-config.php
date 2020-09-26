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
define( 'DB_NAME', 'sportcoaches' );

/** MySQL database username */
define( 'DB_USER', 'frurak' );

/** MySQL database password */
define( 'DB_PASSWORD', 'JAsBkudYwktk87Ap' );

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
define( 'AUTH_KEY',         '|<0$3]j|>:W~G!Z,O/9j)v3K6%LZky nm|7XejpG@Ki9.*9/[+K&fsqb/{W3ctwu' );
define( 'SECURE_AUTH_KEY',  'QDXPRRfv8/I^[Dw}Bqnl&*3r s0D5WsK_%a`a?.~|{W?.NMFBX)F$Gr431|1I3*[' );
define( 'LOGGED_IN_KEY',    '~I@.fzGq2bo24&(R8-8 Lx<L*kY^d{-;T(5<-eSuAPaz9W~,W~7[ausB,S8!S{}]' );
define( 'NONCE_KEY',        'k85Y}RA?&zKvlE|[-dssb#yd;GH@LSjzKM7<BwsTjBh0(B6^Q%FxL[.(lA@,S#(s' );
define( 'AUTH_SALT',        'L}T|/UM$.Aiu*a<jp-J @JlA9YH86pg%:>0<Gr.=ELCV}KohE[bY*aMj}HIx_b61' );
define( 'SECURE_AUTH_SALT', 'ObCAm!=Lagc$@Q]E[_BmsdoXr@z!jOicB^NX,`97U{{-?h,**5=u^V;R#T8f=!o)' );
define( 'LOGGED_IN_SALT',   'Y@U2tMghNd9`JcpsZ;{1qM]`qrX-yc dn^&zIui(S5mg|sDfyyf^PhTCtGVMX6aw' );
define( 'NONCE_SALT',       'zhcMn0Mod5yY_0wel5R`CiyN>6HGR9M=XQ+#<(Ia3KGPIF;)(tQ>37V0R@UAOnqR' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsportcoaches_';

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
