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
define( 'DB_NAME', 'u732393897_artsyamigos' );

/** MySQL database username */
define( 'DB_USER', 'u732393897_artsyamigos' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Unlock#123' );

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
define( 'AUTH_KEY',         '|tXN,S2$g&yxH2hf(+|/Thy$An=H}rX<A!,jn&%;1(o6bhE*~;^]z~/IgvOWp=yl' );
define( 'SECURE_AUTH_KEY',  'KA.=b+87PkD)xGok;dH3wQ]agIEL.r,D|!q],G!!wG3bm$ff!5hysc^BWn7R+g)l' );
define( 'LOGGED_IN_KEY',    ',5l/FP= |LHPWIW:DRTz{5r1,jZSnQo,~niC5{Nc5X)HZ/X_/;T_/L E:(10!#>I' );
define( 'NONCE_KEY',        '=bzNzy-.;9<g.}E &Bp0O#89[pm#SvViO-Y8L2Rr7#l-?.fd}tpFkeq.||oR^tps' );
define( 'AUTH_SALT',        'bN`5w8L6p4DfV3I]*M_G-ro}Jj~UQOF4ycH(s^D]2(A7>:ve@zl=wUKe8VV->HX.' );
define( 'SECURE_AUTH_SALT', 'elJ>0;~L,YV7som2:5z$P.rq7#P+/e~pFv&P)d[y[z/(6=jYpXdY()-zM7*&fjSf' );
define( 'LOGGED_IN_SALT',   'sDE jx<e|b0*$! =(Fj40Of4,yKZ_V8Ewx`~<3&JL*TdGOm8R0g#I{06EdN>[dnK' );
define( 'NONCE_SALT',       'X[}bOuzFq(p]zIJ.@CqaCP=1wodSO^SgJ_WSKO}EAAq2Q!xEIx^lE=^z0PkO][(%' );

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
