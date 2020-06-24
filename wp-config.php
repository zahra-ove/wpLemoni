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
define( 'DB_NAME', 'wplemoni_db' );

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
define( 'AUTH_KEY',         'u%_yHxKV9mSko2M2pxBrjCD|8d+kd!:$]qOlEwsCKQ|kQ&V&erp|b!DKzA& <({m' );
define( 'SECURE_AUTH_KEY',  ')zlk)U2[2as6YCw2MRmZ(uVs #,3Oy[wTSL6$fSaO(Fk( HaJ(S+[047=U$rshpz' );
define( 'LOGGED_IN_KEY',    'KyIj!}$fihmoZFZW?rdj;xhe2B|#wJ1TUM[ jC!>X1*P9}3{FsYoP^}D,~]5BB~x' );
define( 'NONCE_KEY',        '{JTB$t2!y]LD&-8b? ?Axl *2ngaj/ !<}?&V_#5+55])Qc|+e^1!R5~eT>k8<83' );
define( 'AUTH_SALT',        'D9:y^)23GUQ=Voi&rtfSgMVsD%8=/(Zz1bQ]-_c::3E~rXV=pwh_qp!/<b#a*d) ' );
define( 'SECURE_AUTH_SALT', '[9-N,#]]]iVZ!2hZb<P$HF|8=-X)FkYkLenV$KD)(b~0Svx$^iniY*].>uB0D$%/' );
define( 'LOGGED_IN_SALT',   'U[2,#vqt~+sZ*~9Dm}0ZAb(!iY1O&a~j3MKT=iYm{N<u>Ev`QGr@b;XG Ei/)VDi' );
define( 'NONCE_SALT',       'Hl%,z<de=3=pdcg&=i:4;(|MQFqo$wSk8Rn^P5jcu,TF1-{9wW`x[@MYWq$(&{a)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lmn_';

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
