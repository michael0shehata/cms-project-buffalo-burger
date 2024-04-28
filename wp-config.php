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
define( 'DB_NAME', 'buffalo-burger' );

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
define( 'AUTH_KEY',         '5eCsb6] hP=yT)Ah#S#T~T%`W<d_TWkfwT<i/}-cUGLYcTVU#]JmP:b,pr@W=gv;' );
define( 'SECURE_AUTH_KEY',  'no74c,50`F=Nyv];(ETa/{ e)8H<Dq;e[Ckfv(mz^D_{=%HD;-%M/(knakWZ-BDU' );
define( 'LOGGED_IN_KEY',    '$=v/XGv6J77-sC<K-C_7XDZI4vX&2)=ZUQ=8Qi F7qiEC(Yo$Hxm;sM];&i2:GXz' );
define( 'NONCE_KEY',        'mwsLVPb|)WK$G3~uG|r/5mB[fy*lm[Z+wH`}1QE&,Hkv/Vs)O9$^ZK]{#3/a{afe' );
define( 'AUTH_SALT',        'kIBK<~Ky:+SZ*4=9ICr!q&2:TF/jD>AmDietGy.b4zYv_kjnYq[cvw|<W)xJL:#f' );
define( 'SECURE_AUTH_SALT', 'Pt_Ow.!r|sfR6n!an4TZuBTd<(0h@y@Um]Pq9 *bY5&kA!wZRRJTS0CsHOp$,d%f' );
define( 'LOGGED_IN_SALT',   'K]%;MaFS6,FDJ2<3x+/{FFmb?`>,T Oexy<jb_W&?1,4S^+R[RQ=pi^g.u|*a3z(' );
define( 'NONCE_SALT',       '~ q~$hP|PgGoRMWyAE`,G/5v$A|#O)a_F^=-K$NKAKlou7,V;%-)?{_l6?3L$CjI' );

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
