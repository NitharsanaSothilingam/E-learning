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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '`*&]IMUg+wg=DZt~UhKmxqS|}%{)9YqD5yhjNApX(5I*RU*u,ubNI|e)n#UWETkN' );
define( 'SECURE_AUTH_KEY',  'QXD@!~?KFo`z(PlAgpA$vfXp#b(nQ4,6?<)m?q8? L_GFcWLmKV!I5e._ 3i.PO7' );
define( 'LOGGED_IN_KEY',    '):uNIMZ.goxjBBfyHv[ySfG$-52FU8Ti<viRh/z<rVbZ?BVywHmA~&.EL?$oV|B{' );
define( 'NONCE_KEY',        '[240?$Ba<y/Asq 9!Oq/eBA9vq}66Nb!x+IEq(KRg;za}43D9bLTtr9n0YPsalX0' );
define( 'AUTH_SALT',        '*rX sdTzve Q%p5QlQvD`(&9g&k.I;U0J<e~}o24lDo90%drIs$*{IW5vjO(dlby' );
define( 'SECURE_AUTH_SALT', '1qrdn5kvkr$2=UO{Fq/tZ- tdzP-.n@4NMxf`@2%K(N*(vN.Fb%MYiR?$35~v5$$' );
define( 'LOGGED_IN_SALT',   'eB<a&x}tQIwyFSdGza@JdrE_J Y3`.-ohq? >bV|jXr@:F0Rq~hMlf,iGXFY/5.v' );
define( 'NONCE_SALT',       ';e`7)R?jQdd`-r>n3.elNiL6J16%,/lK{V<RH9ZQc)ScDc![c$[}Gq-65Pp5[_+T' );

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
