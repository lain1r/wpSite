<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpSiteDB' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'C,7(%bdFeoMNX=UDk;27A-:/OJ&mVN!UFxO`aGMs;$BrU.|YQ5`:Ed=~+6]61p@r' );
define( 'SECURE_AUTH_KEY',  'uqU=l>*s]5LtULPQt?Ug;X?gyz,R)VS%b7@]DSa]wa=3Gm~+:_%?>lrVrj_O^.d]' );
define( 'LOGGED_IN_KEY',    'PV~^QX/0I.N<N6&I%K^~K+G8VUd}1bl.^{`MHA!P%$qE2-K1 -)jbbE!P`%,y^1*' );
define( 'NONCE_KEY',        'SZy8]^!U>6PWN#ZwJBqAD.+S-gnC@:popuhJ}ad{?)d:^XAEJo3^,?+xX1^k`RWs' );
define( 'AUTH_SALT',        '5Ksrdvn?hz@x5Oy+E 3Qbru1+u|aqN9{Q|tauC$mWoI(kw*7r[N>RxG 0,+S=Ued' );
define( 'SECURE_AUTH_SALT', 'Ut?O*;FyD0vx!hk65`9=85:fcpLU&[Y^r,ab,&Q3 r%RKAg~p6E||/4rRk,(KcY3' );
define( 'LOGGED_IN_SALT',   '~>1Y@}FmV?sQoiA-A]x&kXkLeLyGiIl>>[Xjz1,HGt# E-t%msUk}pi77aBlX2*@' );
define( 'NONCE_SALT',       'f7vpPHsqy6_Y:U8&AY;2Ht!-^eBL[8`ZvPa(HhmYB*U]>#qWryO&Kv8OmR2A-w^*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
