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
define('DB_NAME', 'u582559673_aandk');

/** MySQL database username */
define('DB_USER', 'u582559673_aandk');

/** MySQL database password */
define('DB_PASSWORD', 'System32');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.com.ua');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm)PHX,[^WsO6xWOQVM=KbZVp@84`zX4H>/o7o4<)HdOb2802,-l+P)E8mbp,$1jZ');
define('SECURE_AUTH_KEY',  ':Qb{[x7G4$RN`p1fs4KKq>*iT^u1OSfn6WH-x7w6O4zH;@#G JP~5AuvGIS>B!D9');
define('LOGGED_IN_KEY',    'Sp`j._25@oUE~y5T~HRv48ssM+Pd|^kJ6o.xf]`GcuazOw54r6G&YMD6DRpYgt._');
define('NONCE_KEY',        '1^h#*P=la?IK*8&nNG$)z3aIE83H-#*j[<aHr1oyu;mDoF,Q(Zg*o&0[[p+NZ~UA');
define('AUTH_SALT',        'o&+N!LZqW[@kou^`95rsS$G&v?^vxZ.S6~`;9(ntKK_lND7>)xV*M=5Uz-sp#7j%');
define('SECURE_AUTH_SALT', 'qL+kc9$-B63NOt!3l7T-$]<7Es?ii!/Z`I <pqph}UG6t.OgQbr>l-)xjt4cJjjO');
define('LOGGED_IN_SALT',   '1URUE^7=rOYnz1.|s;:4=)U HF*^J.7bA3dcOIq6>U[7EO 6v+eYQXwST^:[&F6|');
define('NONCE_SALT',       '`0V*SFwmToq>0C<j@?SARMsJC4/xP<A@Yp3(e<jv(%G>y%MU3>k<u5,ZDfW%xga:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aandk_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
