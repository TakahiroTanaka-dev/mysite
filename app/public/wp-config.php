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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k/5VHIwxbfGDTfE4Wk+OMcQw576sz6pdeXLHaIu6OmJQ2ruBcI5A3g0DJabUOC2v8xSVJFLGRQHOZCkmwuILqw==');
define('SECURE_AUTH_KEY',  '+Qu24U+NKDVdddU0pgFZriBFuZgUxA/3oGIvFKQbxLKiC8+aOUaUIzLmdDlKt8av3rkKHVmCxzrP7upAwMFwdA==');
define('LOGGED_IN_KEY',    'pxk0wBenalEnymXSuNpxkY/5AwRoWlJvnHOuPJuTVXhoz8aef/ImYHUORqHHLgSizyp8+pBARi6XHP3b1yspAw==');
define('NONCE_KEY',        'F20t8lz/XdpUfEunYrwnpDSLfzXRPhs4lI8N0Z2/N3JHpsUVe6s9gYyJRDylrTUaOIX23/nOwHor60aPr9veKg==');
define('AUTH_SALT',        'h0Git00HbPkHXnsfVCrCcNsdYdf4yItDhcFkMwIrESkvxja4MBtweIrPSYlEfDqodkbHVxCbLMSqJ7HvAQ/5KQ==');
define('SECURE_AUTH_SALT', 'FNoOduTBngTEZZlxIWnsaxng1Kj1sSdY/28P5tvjzlE0GIUcXi3qqLTEbxQhD8rWQn7aoBJ4Y4Jn/1iGNTqXtg==');
define('LOGGED_IN_SALT',   '5u/iVOzrfA24w25iRRajhzWzHd5NQUBRETWUFdRYqHtUW8H0ZFRRD9fJ5+LTgknI97nya5uluYV6QgR8czPXQw==');
define('NONCE_SALT',       'LWWCtq3rds2zkvaKN6wmImNkVnwMybQ8zpOwAbevkg6+vbnW/L76irlrL2w86FR6yyLNVG7yaRwio0I9o3biRg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
