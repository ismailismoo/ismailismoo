<?php
define( 'WP_CACHE', true );












































































































































































/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ismaymqy_wp306' );

/** Database username */
define( 'DB_USER', 'ismaymqy_wp306' );

/** Database password */
define( 'DB_PASSWORD', 'hrxd8.0(dp.CS4)[' );

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
define( 'AUTH_KEY',         'fenhoxnfnz9ldwlqaf6og7zvyi3eqxnmaviethr6rl1l1eppksgbybglpjoolpa9' );
define( 'SECURE_AUTH_KEY',  'mm48fq7abzetdzeljnjnvtutvsghzapwvij4eypgusyckkpklqohrih088lzkb1e' );
define( 'LOGGED_IN_KEY',    'rvrwc4gnhuzcnqf1iipa54pycmuvitpag5e67lf3fboejzuk9dgthucmfhqcglzb' );
define( 'NONCE_KEY',        '7cbefbihbgb67bnkx43fxvbifboepekycoowxrcah8neoe8ldeiedcwuyc9irv5a' );
define( 'AUTH_SALT',        'npi9hndzysia6wisr93t6ejyatsinaqztuu9pmqitn76wcw72nxj1ttf8wxyauhx' );
define( 'SECURE_AUTH_SALT', 'ynorzvlbqckrlbotjhgw6tmqxtvml5dqri2qhcu8syjydvrg6hp5tqdlooe41e0c' );
define( 'LOGGED_IN_SALT',   'ypembnjrjc6vzqamdmddftsq9nkmp4seyzp7lhmrhxgmczl9ewgfgzclup4wyxn6' );
define( 'NONCE_SALT',       'ytuenw56xzfaydirrzqebftd9h6wzryt4musdi4cuvw1racgvzlbdyivat34ya7h' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wplt_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
