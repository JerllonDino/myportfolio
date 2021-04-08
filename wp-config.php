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
define( 'DB_NAME', 'u288708602_jerllon' );

/** MySQL database username */
define( 'DB_USER', 'u288708602_jerllonDB' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jerllon@artisansAlley2K20' );

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
define( 'AUTH_KEY',         '9)E@rNw<I(%oY#YX52]:S>xiwX~t9MNvjD+~91u9+tI*Xq+*.75A`|kq{wc TJ%9' );
define( 'SECURE_AUTH_KEY',  'L.}QLUWc0FZ0ea.~F:-Q%F(<Yn.}s@K^|m=f1(]FZmVM=zsAVLg 1Oa78F@vBKVe' );
define( 'LOGGED_IN_KEY',    '3MXq|Qm.hT@5&D|iFuC]5Sn6wi0]9c(EG0v&?[VI7@M4v/fyF;^p}il;$>%Gz@{)' );
define( 'NONCE_KEY',        '<SLI:+3cb[0GRHj`dAOioQajb1CG&B2~9dhmQCcTRIwoJ>(z.wZ~BD2rm>F8M~dn' );
define( 'AUTH_SALT',        'b-Z7`A)B! F[8|J5CTOP >@+o5=W*]d#WkG~0(tO&qS~Bl V7Lwz;<AhVa{,o6Z2' );
define( 'SECURE_AUTH_SALT', 'y1<)I9}k,YWP7Q6rEy%Ip#~]H*|n-)o!~v`G]Wrb.l_bO;@kiwb@@2pWo?LnW{`C' );
define( 'LOGGED_IN_SALT',   'OMl^<+gf1Bvsxf}bA,NKiWh0k;~wa(Nz&,P11eM9y/+stM|7mdmZ(l/ h7nU*ZKz' );
define( 'NONCE_SALT',       '1erxnJccJuhiA5h$GM.lH[c2FS;ISG{r$MTImLv*M*ahA/jN%Xwy n(6Yw2G:qc+' );

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
