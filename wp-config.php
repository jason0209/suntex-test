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
define('AUTH_KEY',         'DToK0F3MHNyCFu2ZYC/jvieeuTJRs6Rz5s7XNcbi9thZdzEm7E9KoP0aV6kUWmiWsE7V3vHSszI/DBZmbqfDHg==');
define('SECURE_AUTH_KEY',  's4V/NmZ/IEB7eY+UkDvX6SQpzOdBokIC+fwZI8RuoLkBOEQt1NB7CEdsA2GzcWoqIocC/SshaDRcXVNo/poG7g==');
define('LOGGED_IN_KEY',    'Irvu0ffP2AYK3dUciwn2Zynop7ksAZR0WtffJObOrkOc/Zbml0V5zu3iMqiutZwoDY28iTHNo/scWzH5INwiGA==');
define('NONCE_KEY',        '/4tDBDwps52o6DnGzDyzCXoJF5J31OdoH8VgIUGAWTk7kpsYwtAYGhvUGzON1WNc6OUXzTmKkq5P6bEXxTefDw==');
define('AUTH_SALT',        'jgbNMDTx8n3E+ceX2F+pFhJRSfbPh/HFHsFJ4M0EnUAy8LinxgsHBC2zFPfeRfyLYMgmh9WUQUXzwth4nwQ2yQ==');
define('SECURE_AUTH_SALT', 'kOhgE52uBzQUkEI0ksGrn6Efd5unlaMaHcK6zX6ae80d3CFt6sWXuFkw0TQlEu9Qg1UXRO7W+gp3J2hjrE/VDg==');
define('LOGGED_IN_SALT',   'nvDIzOYORKaYy9N3uHu9CJhIEZH7Xy/1MtI46W8c5I52Zvs8rtdAx15z7uQAJ4IeYMQiwkT5N32T3dYKfhUnpA==');
define('NONCE_SALT',       'GgW6/ODkagcisTXBUE8w7WilLe5fvSYIvKq9i2Ff7qsL2EwNgnBo8xdH0fSqmKwMR4+pmUL4+74xmndI+IyXvA==');


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
