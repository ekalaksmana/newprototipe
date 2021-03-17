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
define( 'DB_NAME', 'wpPrototype' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Bp7sPFe7P>Ij_t?mlRgc!Bglr:A/tfai`sPvNXy{q;6 p*Uj9s~(tMB8=krbKI,a' );
define( 'SECURE_AUTH_KEY',  '^:fpSU`;?uhkn0z(={ZcNOoPD/UpC$:fLyZ4t-t!g,[J5F3<b[;q;<cC*1~cq$Zd' );
define( 'LOGGED_IN_KEY',    'Bb~|1j4;Ze&+pd*R$sH|Jl|0@Vc_^FY#z_U4O#.3cCa3O3?Wu&B(^BxSS2!jZ&U6' );
define( 'NONCE_KEY',        '[/(hcUAUEW#%dVm9Q7>6A#TNZ@MFHr5ykqmTb+cTn{)U?{bu%2R^|{Q(2FQ8FBYU' );
define( 'AUTH_SALT',        '(zsAj;Rd!;-DFUD3 z<r6^fw/WKi(Yfg6r*4{(T#sJ3)Ee6;_mM0|Y_-kZ[NYI<n' );
define( 'SECURE_AUTH_SALT', '_G-Hw(!4.kX/y%H48)j*!J-g9d{1VhM=JWB1h|T~8/_wD(8y&lo!p&5#b_@2FwuB' );
define( 'LOGGED_IN_SALT',   'MU?UHlTp>:3Q!u|0_(4[*Oi9bW)8E[zBejEZE2h:~:^y]m.8zUD/f&(kI~_q|zRb' );
define( 'NONCE_SALT',       'L?SR=]/c?]?FLEpD+D,5O93*4|KB}Di>hfMGam9<5}^WzigLAP-?vFP3j{)a+`sL' );

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
