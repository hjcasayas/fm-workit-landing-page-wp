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


define('AUTH_KEY',         '2x0obLPuVArGUeq2zpbuQXBriNTXYkEsPYNuJcovDTMC1SXkp2SAvTzpOEtdDTTIe7/zhznAvBgTCRom3HmRDQ==');
define('SECURE_AUTH_KEY',  'ZlVMcFRalAyCNbeKqMK+2f1qs8Cg9Tz8sU1GikJXIHOChINawaWXdfusRddSajAOH3fulwQJwGFfy39oUL4cMA==');
define('LOGGED_IN_KEY',    'fvXq6rXRJZV2N5MdtgGp1Je+6QoBeIBMkaqbwgqx/fEmRt4VncWSTtJkjYG6w/FE7kaNSjYqJMzCz5o9GqwHTA==');
define('NONCE_KEY',        'vjazb6x/n40OCidxULjGxQRtKYuaNHxyq6IPzYOJUSHcj4smhwhiGBS4Dnnzqz8t8i4MULSm4FOfymJlRUJyXQ==');
define('AUTH_SALT',        'HXkBkmb2mA/9kSWkGlWlUIBlYooeyGv0Z3wGXsxRhAygIo5sVziCy3eNveJJSlCwhY9lHWvn0Y5Et2h0Mt4yMw==');
define('SECURE_AUTH_SALT', 'S0PuoU7f3olzyqRjO9ccoPauWQHBKbvOtMsQst6RSdGv9uerPmFL84dCq5a+9nOHCZEekJx/q1pCFHz1q1UrCA==');
define('LOGGED_IN_SALT',   'j2iBJy40ux5MHpzwjijfLIsk3pIm8TIxseCFBy+F8PqnnT5dFUlB7xyCoo32TlzVeB+8K012Qk2+YEmgIJyzsA==');
define('NONCE_SALT',       'wCVazz7n2mktyWL3W1crznLbq8IJ0OXCbR74MlWtg02SZx98mQunjr7FhVJ6Vbhj62fADqqnaiLKn/B1SO/ayw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
