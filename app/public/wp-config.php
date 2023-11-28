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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '>02|f.a*6fNtofIj:r).Bvi-oxsD4>UXvx(Mg.PwQ(TL/X<]5IVho}cHs}|y_fKy' );
define( 'SECURE_AUTH_KEY',   'YNc^l5DwD<w.;upJ?Oz>Iz&g{Iy5#;qlh^&GgJ%ClL41Ch#Sj}O=F`Q1ycq]d/7-' );
define( 'LOGGED_IN_KEY',     'J}/An(@ByZvJ_ Cx@XJ69IGTr_$YAi^eUma7CFwM4sv[v0`AT./8itrpZaFq#-,!' );
define( 'NONCE_KEY',         'QcSh~}w8g;y!1Em 7+[;tL(x:QX)_lf?vjBFf:7c&w@2q&vg|ru.7R7~QzMMMaWT' );
define( 'AUTH_SALT',         'mU+HkC6d].?D;LUy-OsTR|]2T5lBa_(7^t0gJ@b:Hu9cWN UC[BH?SZcR@)Mu}GP' );
define( 'SECURE_AUTH_SALT',  'ct{g`e}[Ym0@.0=W`;up,n^!d<%QLJ&B6>ABV6{G^u$v0hO{ ]huiWh_.M{jBnoS' );
define( 'LOGGED_IN_SALT',    'FM4uARyH$Boz=J7fp2aa5]v7-]~;`,-50 !#qh9H)mR02H*~#7Go1hH{bKw{M/K*' );
define( 'NONCE_SALT',        'b};9.Z?7,WZL{&BjaiK+XNY]5DRJD M2({$S4re5_nb4%oDQ,~MxOCa1gRRTB G=' );
define( 'WP_CACHE_KEY_SALT', '|G!,!jT>qmxU)R37Q)%9Et8s5vX&^)HwDDJ2{H@BxT!@jzk3zfk6s4q2h ,$U!1U' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
