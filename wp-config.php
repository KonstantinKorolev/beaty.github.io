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
define( 'DB_NAME', 'beatysalon' );

/** Database username */
define( 'DB_USER', 'beaty_admin' );

/** Database password */
define( 'DB_PASSWORD', '20012' );

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
define( 'AUTH_KEY',         '=v.H^IeOJB?3@p zH/r,BRQVaX$^8J[ *s$zepl#8D?|(O<HE@[ Y a3Pf=d2.uz' );
define( 'SECURE_AUTH_KEY',  'as^IUyjdhk_(1-~2qmEr>D:w(((p;_%M<@,hR%LG{M<8M`.Y9wnhgBsID%_tGLa|' );
define( 'LOGGED_IN_KEY',    '|{)D,O[Q&(@}4*Lc,H3%,3=M;&.y?jafz[R&gXyy$Pf(VaqC%6]Jx[T${ }xG;ZB' );
define( 'NONCE_KEY',        'Vlr@aE}XMPqPrGcqU#Ta:y3D/Rrza*:w(% j7_L4 o|mNN* r6tgiH!Q[j>)wQeX' );
define( 'AUTH_SALT',        '<p:@ncExtU[h:~~3vK,*g_.#AFxBy5_KE5z3R|<8H>~y7rew84{]kGMj8 z2}Q6*' );
define( 'SECURE_AUTH_SALT', ',$xtsJ3+A>Qc?guw3,#4dT2U85N[E)Ik7y/c_MK(J^n<j{o7y07fFfD+[uAaR2(9' );
define( 'LOGGED_IN_SALT',   '+K38F>>Cu;RG48,cJY-;5!n#Y`i?>N8-DX94_H@mDYUsF#0kL9k~$-{*Q)9atu+v' );
define( 'NONCE_SALT',       '|#Ar3KhRoPzv.(4x(8/rJ@q--1gT$;o&hoW>5Pax?C}6trQ_Y/_$_kRg+aR6ISe$' );

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
