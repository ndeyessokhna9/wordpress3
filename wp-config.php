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
define( 'DB_NAME', 'wordpress3' );

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
define( 'AUTH_KEY',         'uVeZNMPvNi0-O?]=2Y@s2tW_NnZ-2&<~R7Kf W|I:9:+[4Pbvd@<<3%y9OqGD}y[' );
define( 'SECURE_AUTH_KEY',  'hz[fw1uoA[1`sfXSKOo!;$&:g{FbIf`JO9A!Es,Yw~<ZlR7.$;Lc+yYWC!*r)Jk0' );
define( 'LOGGED_IN_KEY',    'c1sOlFWWheWrcRN6W`-Rv_}=kk[kok`I$7 )N:h28yUSTT7.s(Gd8n?U.>}&%y]T' );
define( 'NONCE_KEY',        '3ij?GjOPe6t h9A6jp]M<W<D1${!F#$g^H!FKrh0(9|y|MHI5BLKxr>?&MmOKDJ)' );
define( 'AUTH_SALT',        'iveFO^yZ0f[[w7mB/Zm?pw&gPAJ.iG^{jc`#-bEp4P8/&&vO5X9#jCQ5wiPB.K|G' );
define( 'SECURE_AUTH_SALT', ':}/l,2n/5y4,2|2%p^lki2LbTGsm6_#R2xoMeC,J@op1?r#oU[L/@!C4N;F$@^_:' );
define( 'LOGGED_IN_SALT',   '^&up`;IK#c7[hccfkSouapzzC-@gOcHqs~It7-/z.3 i17O3cK*To|So!&/|[5)1' );
define( 'NONCE_SALT',       'n.Jfz]Z{f%g=uEeY2+2UYT01J7^0yEiHd_SYWq2el=l8sBL.Sa 7Sjp5(>F61&zd' );

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
