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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'P@vili0ng4' );

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
define( 'AUTH_KEY',         'nt)b%/gQbo7>,[q3/lcy1ysh|R,q~E+{[(bu4Cya52g;S r/3TC2GBmkoU~d&g~]' );
define( 'SECURE_AUTH_KEY',  'Oj=[Zp?h5,W{`]4C4f/?0Xi$.oS8Uec:6Z{1r,K;T(I}P0K)s{[[w;:40z.Q#fQI' );
define( 'LOGGED_IN_KEY',    'xqaR2Q.gicRJUZg+c;:8I25PDsZZ!VQ8[SI1XK8&F)=*}nh3OTF:Sl h-o((?EUR' );
define( 'NONCE_KEY',        '8R7_U?(%tqd5~6L[}%@(go8OwO1r_o-+o3)WiO16RJLTu0]j$A^B7&P=))UAsOD7' );
define( 'AUTH_SALT',        '*OvugnXGtx$5@fzM+pNWg<,chAjZC8o:-}r&Yh_mJhFF!MmG&MWK{rhc9[Mb>qMe' );
define( 'SECURE_AUTH_SALT', '6!:_(AR.6yT`a7f,tSj+^:%3I6>oxSST]Fp2>@G$Bk]*% d ?RwQKsc-H[kgOxc5' );
define( 'LOGGED_IN_SALT',   'ZY0i,*C;LMDuoX TvlLw-Iv_0fZu-KEYT}IIqKJjV)(~mq&!>>)UB8dOuG,EYI|Q' );
define( 'NONCE_SALT',       '1V_{9Wyz$I;av{EbxFMvRB.%=_(T9vkytxy+eC<(owU=%mQ0KH=aUXZ^;]&^(m+q' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
