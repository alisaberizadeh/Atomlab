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

define( 'DB_NAME', "atomlab" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '$H7~#.Xy^7J>Kf9PeO`Omr)4gZXs,c3f@1$ZPn*~T>W]k%HcU+4GaO^ATZiRd~@W' );

define( 'SECURE_AUTH_KEY',  '^_~ OnD<fL|xvtWn~.E#1I49aZNy4!oK>rwqZP!M8;2Bit8A!V]kPSeMNqxS]H3L' );

define( 'LOGGED_IN_KEY',    '99>f#Si-_1R^.&.GUd%iM%vR6s;%8g9]<@jxI4svZ!s+DAW?n[@$[mt~4`PO.pCM' );

define( 'NONCE_KEY',        '1+uhm+GrX`u Uml=-bqpFJ>!BT@.Iv{,,/$ft nYIsRZHy^5N/`w=_r(2K_Zb$5g' );

define( 'AUTH_SALT',        'pETi:?krx<*=gjbw:fP(/P.6*B/5e&Z+L^G<^P63[2<{gtMZnU:h94Q}x`G]t-hY' );

define( 'SECURE_AUTH_SALT', '41x;>WuQ4T1k/K7_/<`dkTaEzGEqBF-yu8-BL j}A~Ml:ngm%-Ftz}]Du{kYeM_T' );

define( 'LOGGED_IN_SALT',   'D7e,*V<1Mr15InBJ&J+R1)8~P+Nt2MnycUv~]%r):uVttQUqqQa/sC!-FN#^]xY%' );

define( 'NONCE_SALT',       '[O10hTie#A)]:)kmt6D4G[=0D,6mWc4BD]u^KhSX]QKnSL]tm.Yz{:LjM}T?qi|T' );


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

