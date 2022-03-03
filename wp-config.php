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
define( 'DB_NAME', 'template' );

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
define( 'AUTH_KEY',         'xK)j}SB*gMyf[D]zn.x7{@]v7gS>UAO;rq6es6Uczw4F%=:.n!Z{LFNkK(Ej(|uL' );
define( 'SECURE_AUTH_KEY',  'nMHPg53/Eds]eh~-LL7C!_!zW[#CyGDWGkp$04(6K%95^DuelG_@LJYr|b<{#B#3' );
define( 'LOGGED_IN_KEY',    'C2cR[8_t8XK6g=K<<}ErrZ^fwUpdkXQ$<g[ %[Tt@Dffjxm{hneWG`k9:9#B9Zl@' );
define( 'NONCE_KEY',        'He9-Q14 S4%IU#|T0,c}UYiAdQ8nd![c-fr(rvL.hOWJ3ANf=*aYj=]KxBNEun.p' );
define( 'AUTH_SALT',        '-qjDJi#QJz{Md*38KO#M:hv7m4Prm7`(<Y}:x]c2DYZgHaA?ZiKA!}4qkU->qgA}' );
define( 'SECURE_AUTH_SALT', '[AEc[?(H-XdtkEL5~KS.KXWGpxMS<ah$D(}C*{GZ7@kC2o2,IFxzl%Jl+.<E25 w' );
define( 'LOGGED_IN_SALT',   'odX7QcGZ?KI{!eFw#`FO*0C|<+Q0,84M4TK2QU,93#F-g|z13TH8Mq-#B:3ZRJN5' );
define( 'NONCE_SALT',       'NuG`J #6=QlC[JC[93RpG8${~SJ r}3aM#Q2g|xXl]ui7.aeptue%B*JEQ[d.-9t' );

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
