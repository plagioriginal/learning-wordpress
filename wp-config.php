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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H `TSR(($aHp&d%kK[?Hw{esjeC*1Em]N`8RR}./=]js l`Z0UVsZ9%gF<5 Q!iH' );
define( 'SECURE_AUTH_KEY',  'pmq)&Sb^O>qSpVUO_h`}>Jn]q-U_avXU(DqrEjoU0{/{d>PI&7ChqRbtZ709])cM' );
define( 'LOGGED_IN_KEY',    'n_GrK!c5H+j^XNfD<c#ixHBmp|zTjr;YeaBNl9fYAg[.y~;/cgSRCFfBo(/[%A-(' );
define( 'NONCE_KEY',        '-zoS63jHPB6qjQaJ1xuTc}yMi>IhSn^E<Q|_k%L9/mkR@#fN_9WX`@$jXs>s!Vk@' );
define( 'AUTH_SALT',        'OAP*.u.Z0 (H.{#TOr$Rkh(Hr0 coa^8G%Ez85*>-L~z~&YSktO ?8-Q7~vjPuTa' );
define( 'SECURE_AUTH_SALT', 'Td-J7rHe4xbkuA&O.&tTTzN L%?%zS9_,BQ<<H{Tkux)~2(<)UFO`[D7*ke8ELv7' );
define( 'LOGGED_IN_SALT',   '>AGV}VX!Vq3<MS.9mliA.&quDr)4xpimy@Dl3:4}bun?`tV<g{8~-xEh<j%B2n*b' );
define( 'NONCE_SALT',       '4,-.b,y>QlgcQ8LoDj<]FU;06Y4/_ZOLvu^UGIb:gjS1Z;@>Lga(0%WCw5&+7#nV' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
