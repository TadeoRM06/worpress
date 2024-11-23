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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         'w?q!SNiol*.r$.!&`/Wng59=^bVblp4kyh)Gv(~9$F&DZ.A5vJ>zev.I?LZaQ2CF' );
define( 'SECURE_AUTH_KEY',  's /t(%Og~qV(QM`fFE/gR&MbqsTQy_ds&Mk&Lo&RS:$iU}~lw~0_jf|XNiB<6U{p' );
define( 'LOGGED_IN_KEY',    'f%kOB!vg?NQfyJ3K?.m1ru-t+9*Sg;JM0_z],OP=@__fgCM-!Gz[b3Q@IV$Uu2<E' );
define( 'NONCE_KEY',        'V<~+{@$T*uMjv(*I8P[KAw}8g:hN#t=hM@JNGYgu4syBIS<++lQqZ~y v?]$/*0O' );
define( 'AUTH_SALT',        'd@YMi9Lyjo?C8]5Fr/c[WiO*PO^}ER|tDJ,hr{sA/*hHJxxzSSo>D7&zV,1L@p75' );
define( 'SECURE_AUTH_SALT', 'HPIILOG=x.G{$)KA4|UzFdrI:6#@Z|?WW*XAq+!b+*>YES)Wujx|CUWi#VD8s5$o' );
define( 'LOGGED_IN_SALT',   'b<:!,c_47iu3!yiWq8{4iM? W,2%RvkUFr6lj& @{L3i2i,SXP/fM?6tWN]|~7LT' );
define( 'NONCE_SALT',       '<(2y3bI+sN~T){9r9QR~Z***gI/(k3`oq<2:y sb+;E;E@NtY5[_,P_(QsZBbX?4' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */
define( 'WCPAY_DEV_MODE', true );
define( 'JETPACK_DEV_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
