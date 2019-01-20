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
define('AUTH_KEY',         'Dejt7A1L4tJbNaWWmtSXaVVQkg0yJjjz1HSa/yygqK0qCO2Uh0suBrpSzzwfj8yCONGBBoj7rwn9xkklhhoryg==');
define('SECURE_AUTH_KEY',  '0XZPzStAbKEG7TNpgu91yu1Q1mbGXfnmkEilPy1t/Bvbd9gSlTrTuYdmoimXOK9dEDa1e2JwZb0S0yqqZ4/+9A==');
define('LOGGED_IN_KEY',    'kmjE3MtAUjd/r+tA/J8DCUrSApgkiTpt7cwKe/nawt8VW/XlnU5gKXQBbA/BSBpRyrz0QZHVBd5EqFkR4vyS8A==');
define('NONCE_KEY',        'rWrxC5SVwOvM7LPQ7l97shIq96Zlff2uXO+9WHjQ/AirRXFPkkhY+NEYnTl6gsz5fvs9TelomaveEq35inQkDg==');
define('AUTH_SALT',        '3AWRN1N2kdXEBAnvnu9BxKJHo60jh3qVdqf6Ec7bWOrM4FFSCzhvDGKFF+0tc6ym0jsCteaT9LkiEo6Y9MtHPw==');
define('SECURE_AUTH_SALT', 'AuIFFIenSX9oF6wUQu1J4J8OzQ1Q3WibvkBEZlCZHC9Ok5t5DoaR7AOONGUn8cOUtGd30UjYJqKtFDtbY9pe2w==');
define('LOGGED_IN_SALT',   'YAZIieLbPXUagvKLjq+kcNLwt6gpIw4jGgxjBg5/inDQnhUcQfUl9CCo1ts1+2Upp6Qe+iey4Wo0AgEROtenyA==');
define('NONCE_SALT',       'Kxy3Mje7FauMFPat30d7R9IoRKQPlcFB5m0E5T9nbv2ILCp+eP95tlXxIjOn1Sm92oFyOlaL4MZ3YAdRR6BfLg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
