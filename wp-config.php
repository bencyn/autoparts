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
define( 'DB_NAME', 'autoparts' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ben@9420' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
#define( 'AUTH_KEY',         'put your unique phrase here' );
#define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
#define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
#define( 'NONCE_KEY',        'put your unique phrase here' );
#define( 'AUTH_SALT',        'put your unique phrase here' );
#define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
#define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
#define( 'NONCE_SALT',       'put your unique phrase here' );

define('AUTH_KEY',         'ze/7a<`mUey;)a|kk@&TmvlsoLB=R>S`j+TR @}G~[4,H9,7%oH3h--^{LU73:z)');
define('SECURE_AUTH_KEY',  'A{IY90!3Ya+UB;R?*8B[jm3p|psMVWr{A26;ONCn|H~jnIBRrzS vXd`$0pk+9PV');
define('LOGGED_IN_KEY',    'Xhzc+OUlUH+=P_esj+S1HXs>0>/$M@0-G^]1D}J@}e<-2p)h<]pgci<05YbY?GLQ');
define('NONCE_KEY',        '>WF3B|Nn=grp{u:^HR:O&WA$Y-@-N/J=|8|13 :?QF3fBi[x{V$}t]jmmj_!b(xB');
define('AUTH_SALT',        '/V<T}hj~tcUBRN`m&tK3xIh[1$`<+JNI|28U]3kbTo s=T,20%p*RV+.s)@XxN|H');
define('SECURE_AUTH_SALT', 'mvN-(S6L0bo>t|n~=a`qEV.g@}Z%BsZ><cY>WyR||7VjES  gJ!wPTGy&VORhJ  ');
define('LOGGED_IN_SALT',   '<(.t+u*o MGor{B6f|PaO2{wtgb6WxMC_;]RENU$-jO6xQqf|-Bz?N#*l&|[HWl`');
define('NONCE_SALT',       '&l^$f18-GE~-$)%B?6aR4gEU -uEkPONN*|Ee2t,) IHhg[`eP]OK{_)r_<}~QYJ');
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
