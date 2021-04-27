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
define( 'DB_NAME', 'grofers' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'BAx>QPp9]&l^(R :Dxx`4@dEDH.?9d4<eZZP{lDM[M*@Aw1+}0X/(,KYT@^Ftg!?' );
define( 'SECURE_AUTH_KEY',  'W1k.=;98vnH, |jWVy3>.D(BG.<a4@O=D1jR.KRcd <B0+,[-05C#G:zdK&C(-uo' );
define( 'LOGGED_IN_KEY',    '%nw#hLx[WJXMSS:I5K&?<2mgBw{1u3o!+87YpjaP3b$4;^rrlic[,djbMH(L#j@D' );
define( 'NONCE_KEY',        '%v%L>;HW-nd)W/gL %~>7S6?Co9,k~*0;)g.RT>v2p!51fW7dV:;A4C,VGW6:dg:' );
define( 'AUTH_SALT',        'Tf)@f(_)|X5vX2czQN!C<ZX3dNx%+KwF-tVhpq4uCZ8TKIPjMWH,K^5/0@E5?7Wq' );
define( 'SECURE_AUTH_SALT', 'XAvoEaCp5fi0|).rS~T-hPd<s@#Y3gDdUO@#&%^(Bb%&oo JHO>Kt  sT%0UDzDW' );
define( 'LOGGED_IN_SALT',   '|[egUW26ghJII~c-&4}4B&vRp?;O5.>~qiBBAYm>G|Xi(jAXJRq,]WniE,GP)mCb' );
define( 'NONCE_SALT',       '$9mszw6:?!%_5w[7fbv(445~(@`=UB`|<KL,#?3Do>[0yT%s8S#5LGm,v>GD7s}X' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
