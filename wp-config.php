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
define( 'DB_NAME', '' );

/** Database username */
define( 'DB_USER', '' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', false );

/** Definir wordpress multisite **/
//define('WP_ALLOW_MULTISITE', true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', '' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
define( 'WP_MEMORY_LIMIT', '512M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
define( 'ALLOW_UNFILTERED_UPLOADS', true);

define( 'WP_DEBUG', 0 );
define( 'WP_DEBUG_DISPLAY', 0 );

/*/
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
define('AUTH_KEY',         'c/6nTFj$R<5aZ;dJ-Ji-0ZZnTI<O|>X7B3h3=Z-=r$ Sft ~!uLTg+~`fkk{HJ=+');
define('SECURE_AUTH_KEY',  'gJ#LlQ=jVr~)M.94#NhNB<?@ijX~.}1E<C%L>;s}b2u8Oq1_6)x %e196XM3[L?b');
define('LOGGED_IN_KEY',    'v.zure/Hgcg8fa&+>Pl+|+SU~paHt3+ba1S_2G*(6A}C%58KHqQ`Q`zhz5;,ia_#');
define('NONCE_KEY',        'x&5Ok7j^R<aeWc:~~$h8DryfgdWGQ#Or[9@DZ(WV%GTC;L2y4V**0y{${ZZBboi/');
define('AUTH_SALT',        '+;@kcO1.z@mMuzSohk_I!kd02+@Y0QL&(P`QELxH|sm1*$w[qe#xG CE(9^7+U)b');
define('SECURE_AUTH_SALT', '4,2h]h7RWj__J|<Z{_f+COK,+EL=N`[]98~Ld1kM4Eke#+C`vh<QlN+<mW`{[+NU');
define('LOGGED_IN_SALT',   '|ZVUB1H/0PQRWPM|2T1Z5(U50YS.dOjh&2V-(~|tFEJ{.D5E^C^yc}+$Xb-p %Of');
define('NONCE_SALT',       'o)_U^:~h>b|&#tr+x3CT-Ez(+o|;g,tn[~cUZ|N?9HU4V+R@c,hpHEVe))5%Zp74');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gn_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';