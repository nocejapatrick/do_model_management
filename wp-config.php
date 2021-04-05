<?php
define( 'WP_CACHE', true );
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'domodelmanagement' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DAfbjpcewsnS6qosdO3yd5Zd9Nn57BvCqnujDwl6X5ZzUSq68ps0tr006g3k4Gah' );
define( 'SECURE_AUTH_KEY',  'xysph4HNzQdTTziLVh45LlE9vs9VkIZW4ENlY8CNpfVYfF0Co6nsSCCLeyvT7AOo' );
define( 'LOGGED_IN_KEY',    'jdilD7PvpCuvCQhAQ9Q7I8YDdALtK2Nn3YgiJX91RZL6VomFVnHSEkjXn8vhpCV1' );
define( 'NONCE_KEY',        '8ItmpOOri30J9lu2cncvOMSZ6QbACwgwrMXLSJQlj68L2TsPnwGLkpHvM78tpmpe' );
define( 'AUTH_SALT',        'cFJ1LkmgEmljzNN5Dixfei54skCVzQKcyXtSAXiMNpaARgr5hiuVcLieoZiLzCm8' );
define( 'SECURE_AUTH_SALT', 'rLH17600iYvSQmhfieDPobdoFuY9NcyvJz2AhTHOhvOhNtNVRkysEVkKe3A2aug0' );
define( 'LOGGED_IN_SALT',   'SQIqQJYifw31LeaaGC4CqjTSSu1QJLnao6MnkshzMLBndgpu5suQyfunxFA1TGtW' );
define( 'NONCE_SALT',       'jVJQAnOqc5y9F64641tqsrzl6t3xFjcP4Bxao2Qkh1nuE434hAretAE2QjAZBTGK' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
