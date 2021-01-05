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
define('AUTH_KEY',         'OOamCNw2wC2Ibs5PccA+VFjXT0MA4r4E/jQj/pX/JABK/SeyICLCZgvC6G0r14B/Nkm1te+mdjzIYRVF+YnKvA==');
define('SECURE_AUTH_KEY',  '5V0+xR/LJ8aZNidf1nq6lUdWmRskqAQS5JIN4sp3Y03OY+GjF9juCWuf3akpWkrQ322Fip+XNucf1jFIlbx5LA==');
define('LOGGED_IN_KEY',    'Y65GYE7/cAMC+/0V04O6pIr2noJHcOYjK8jX/EaLql0z98r8EixKniYnctsBJ85bZU5cI+B08La9Jqypu+1bUQ==');
define('NONCE_KEY',        'Cbn6cHhwSJGSr9Uzy2O+JpCGLqzPQ2N9zN+lBnyedrJA9BaPP8P1QepaS+FphtkGbzn5V2jwKX9ASaF69vNxJg==');
define('AUTH_SALT',        'X+PlYUj0sZKB1INMz8MHDIKptpZjgvPqSxVcq19gT7oueAtILWHfYQVQmzWPfZiG+cKj8QupJf4+EC7Hf7OvqQ==');
define('SECURE_AUTH_SALT', 'wjkadGp7dWil5H3bkj7aKq96sTUfsYKk4y2ZXU507+1uGziyrI0JtQzTuQDPmQbmgKF62iy/bjgF4Twle+9vdg==');
define('LOGGED_IN_SALT',   'zvWEO4fQiBPAJWMVnQXSEDdj0UzZwQL8w1GivfQDDWRTZWJhj9x0sqEmsgd9B8ZrqxLy0wQGtcl+DUw/4OUFGQ==');
define('NONCE_SALT',       'LWukh6rbvdwpvHJIHv0MmSylnbbOftfwf+UD+eZ5IUY38oEXH/pNcW2r/6VjxIcJIO0Z6IiT7qG/xU2ikhXIUQ==');

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
