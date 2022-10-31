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
define( 'DB_NAME', 'stockmarket' );

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
define( 'AUTH_KEY',         '[1Ws N2+Hi,JQ!K!b6[v-$pO`m}F[Fsv>GOQz%Igle7EjBY%bm!XxkzYbV_;7#6,' );
define( 'SECURE_AUTH_KEY',  '_*h}o6h$&Oc8 WVG<V@Yue-Q~m[iPDVQ4t=hiJ?oJ&)|(|,5pV^}ETs*;eg[)<ml' );
define( 'LOGGED_IN_KEY',    'W,Iv1hKZ,d,)ZdMz<puC/?7<00k+;a[)UCv^`(4QRR43WxH_w9xW}9CILMqTd.FX' );
define( 'NONCE_KEY',        '7bG%9e*[4/5l<M<>v8$[8(k9-^y8Qc8&,{b`( m[G-sDV%q6D/Eq02kyopg%v0M|' );
define( 'AUTH_SALT',        'k]/28[ak2Z!^T_){`c][b@(a*X:I$=>8$usT<f<8=|8u24Ny}bq7?!z<vC7<FoAo' );
define( 'SECURE_AUTH_SALT', 'ILgZ_@$N1I?T*+J]l.Fs6!iwv($E~V[`d0TD$~veK<[e|,D$Ugv33}Tt$SQl=+<)' );
define( 'LOGGED_IN_SALT',   '?I_{&C h|WAy$LI.h-jaS,i};E!|QL)s-q{rN`VIu+bd$;Va_Hjjp3g*F[a}=U%:' );
define( 'NONCE_SALT',       '!rC@NVs#KfI?(OWr_! ?qU(YNpm#PBeBXZVCvsFT%PJLEn(J@wzAiB$Ey_(84.ks' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sp_';

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
