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
define( 'DB_NAME', 'wwfSummative' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b671a266ca07bdc1f366c0317d75d6cfd9dfdcf8262ee7b4' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?&2.~cCIb$d&sW1hnctLXx*6Xnc:zBMP;n.2+;*Sf2,~KltcA4IeZDN84)0TR88*' );
define( 'SECURE_AUTH_KEY',  'HbM{*,yN7zREpl/#56Qlt@vwzfbRE^>._,L0)hnHr-E%~!Ai)x~AJc5U/H*H`puS' );
define( 'LOGGED_IN_KEY',    'tlGY#)|P<-E%}mUk{ nQ6 gS@Dx<k~k;Yad/[VSwfwq;AvwUWdB#.j<HK<*o3*dh' );
define( 'NONCE_KEY',        '$S,,6xs>7Pd% O!m9X4LF:LR]MJj 4g4KY[zpz>@UyhJCw#7x?iQ=ApF%y;B7uMF' );
define( 'AUTH_SALT',        'cGwq}kue/2Mdgi!5ukb)cEI0*.4 z>x<<;a6KR<KHt%6,D:2,T-ZOq@8>]@3qMQ^' );
define( 'SECURE_AUTH_SALT', 'vlQWJZPieSROxsujwcFdB[xy~1M{C[6kN+R7-c@)^bP(TxkJI%2q-V27I2!eQh4s' );
define( 'LOGGED_IN_SALT',   'oWe+Cf&)}=Whp#u?o=eG*~Km;T]b|v` %jVTv>Sx;cN39|O`zboe aZc8(F,Y./-' );
define( 'NONCE_SALT',       '/kev0my@N}HF-Z:)ST9EOG|d+jCi9SRO_[9k(q,{a`NrO;lH)<GR_>8aq={#=<[0' );

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
