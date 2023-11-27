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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_app1' );

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
define( 'AUTH_KEY',         'FKv,kkSuGh*&naQoLfN2SA5J%Lccln:E7%==P2fU>#3>uw.=WR^t(H8g$25#4nz5' );
define( 'SECURE_AUTH_KEY',  '}FdEgSV93D(0k`G#[mmu5 59+G;uvs}R( mCxqnUYg&6[TpdsE?#tB Qs1B{$GWw' );
define( 'LOGGED_IN_KEY',    'w}p:O&G*h]Uf]  S{(9GlP#Ga4-4weoD7B;5XN,-KNn/tBx^K Z[*i4y!bKY=gZ!' );
define( 'NONCE_KEY',        '4w~78lm5q )V<HXbVGF`n.Af4Y4-%j`-ynn7HqdFoPV+(!56!I,{D%l6NU_#=;CP' );
define( 'AUTH_SALT',        '|5k7HJQAVnw^:t:p$mZ|ZalN^D|po-OZzhG/__::4v/6}5*BoGIZWu|ylOYz%L0;' );
define( 'SECURE_AUTH_SALT', 'wmRj03946aEmllR;!a5=J`Qy5A%CuMb[ai$BdO?.a_Pb?@ T)CE9ZDl=OdW@h!OL' );
define( 'LOGGED_IN_SALT',   'B]Z@&E5wH%}HVU6,syUgD7%(*n~r#jOQ1zIzg?.GXDS|!=E}:u5H=O5>/~u$>:RN' );
define( 'NONCE_SALT',       '7g<H )2 VcmkUD]7e,R(f1k=Lg7Y ~bo=>D(>bJkL*;Rz+oJAcK4IG_#8z(/!a4F' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
