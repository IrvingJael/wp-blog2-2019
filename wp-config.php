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
define( 'DB_NAME', 'wp-blog2-2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'edf6fa09d1bb681f6510642aaa58645f5314c7d24ac69586' );

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
define( 'AUTH_KEY',         ']LUsWkk|,DcU/dU<a3->:pftT3Z2!x_jw _gt~RYlimExeUhlGO7@PG_>u6|%J^L' );
define( 'SECURE_AUTH_KEY',  'ERfDIx9z,;v.B;>oRSopaxJ`b.arqq:tT&OP|<!-<q4tRLm);<X=P6VcEijWykq9' );
define( 'LOGGED_IN_KEY',    'JyQ4o1/zegdVNN)+zw@j4 wLikyrQ8kPM@$o~SexBj#Pkyv^8Y ctX0)oJl6~E4]' );
define( 'NONCE_KEY',        '~G$`Ttw:th|TU]v3k8eRWhdUGG 5qASwxc!2KA5R**6hEr`F,f-5F5a7u;Rat81v' );
define( 'AUTH_SALT',        'k)}Q@Z=8f]z8mt8tR:Op1Ct9kV:0+WNl7y/RxhZ@$<1Zi.:u!^CB..nR_D|) @)K' );
define( 'SECURE_AUTH_SALT', 'Fl61pC/M|Z12d}U>*+BFnfqfRs-B]J&VSs+hR&kO9ySG6TY gqK,a;m/L/-UY@9L' );
define( 'LOGGED_IN_SALT',   'nLB9{A=W9nJm,mt8De7C&Mz!LD{J<OLIaehGkm3IENaT3S5+1z2%*Mvz{j%i4VgE' );
define( 'NONCE_SALT',       'r^;1a4+fF:)40;@um?quKc.}}.G^fO D6Z,p cZ][{<=+0CNU>]w:-m3SdYdkV58' );

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
