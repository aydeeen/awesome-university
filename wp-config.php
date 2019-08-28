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

// ** MySQL settings ** //
if (file_exists(dirname(__FILE__) . '/local.php')) {
	// Local database settings

	/** The name of the database for WordPress */
	define('DB_NAME', 'local');

	/** MySQL database username */
	define('DB_USER', 'root');

	/** MySQL database password */
	define('DB_PASSWORD', 'root');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');
} else {
	// Live database settings

	/** The name of the database for WordPress */
	define('DB_NAME', 'ajdinh37_university_data');

	/** MySQL database username */
	define('DB_USER', 'ajdinh37_wp413');

	/** MySQL database password */
	define('DB_PASSWORD', 'ajdin123');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XWyjN+XxR8dUZ/CdvigXyzOOiXCJEyKN29udBTEATYyW1Yanh/ISmEsX26K9gUmDJu9gZ5VtW+BX5hYpjqYvsw==');
define('SECURE_AUTH_KEY',  'Fkl1mEUcwTXg2FaFkLgsiSmjfl2J/dQPRf35gbeFLVR95IoJW4IxDW5agFbW5uZgxKKblN1jLTzZsZV/m6uYvA==');
define('LOGGED_IN_KEY',    'gqWPEIEcFpunRA8aNIOx8ZwH8GxATG9xtrhPiza6yV6MkdgRuKJUNdCzrFh2mRL8HY5/z8L3YfJT5w4sitvqeQ==');
define('NONCE_KEY',        'DK08/MGrsGQ6KCz8LPgAKrW9Moa2qt8kuoHbjxBx4HljfARB8vygizPnBISC0Bjxm1N95RBCYQNjz03uWkQa+A==');
define('AUTH_SALT',        'a6+2vpW/jUHyNLzaDlqRNuErViSzwOV35TmOFyAoWTw7uZK1z2G2rfaLtH3uK+6IpR0P1oFUMCsxaz45unCJSQ==');
define('SECURE_AUTH_SALT', '7hmHGdZ3ZMTOBQPfDetQnsN6h603vkeF91yijfrhW/teXM9MuLf6ivc+swl7keo0192mKG0LPKM1KudJJVJcpw==');
define('LOGGED_IN_SALT',   '8qmyFO7auUiEUtBhAtQOQ+YUkgtcmuCiAdLK0U3h8C0v2aehDsf4sq9LPNhRm+KFhPVwQjf6E1RoVi4e7CQMeg==');
define('NONCE_SALT',       'XQcN1Lt3fT+e+hfPAZCkPlu/wWx+NL3cC8WJ9WZ49OfuPg0XKiFKWT40Zcr79Zl+ahBOnA9AgcAiVRILMLrPuQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
