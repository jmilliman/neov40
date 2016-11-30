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
define('DB_NAME', 'i944213_wp1');

/** MySQL database username */
define('DB_USER', 'i944213_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'W~1u*ezP0B9lL]KjXS#11[(8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ofaj7fZrr1Wxet1flrLO60q8l1DvtgiemjcqLiy5LZ0V1Y5r8ZGBUVx81eKAgSXo');
define('SECURE_AUTH_KEY',  'x3F8WVNlRmpAyUnq74DKow5pC5eTBgZLouEBgZDb52iRWAyjIq1wNjMjVxJibl4c');
define('LOGGED_IN_KEY',    'NhUczR85P9xgOBE3a6t9zlSDFyqGjrfGyMJ4OHdpkkRiqG5d9qa46PS17nRtp6jT');
define('NONCE_KEY',        'YRk0ZKS4VsQ0VbFjae4U3Nf4LjK9NRSEXOSLAp11TXJZtTH3pLnGwUMSFWwTzuQL');
define('AUTH_SALT',        '7k9xpfoHTCYHDAM132lfRjplmAhHg5BWpZ9AbKitKdYyomUV7bA3rkpEG4KPmtMm');
define('SECURE_AUTH_SALT', 'IPIQDWil2heLohCeUYUycGVa1p0le4OtTeFsdXPtJR2XvSFujIzBDoyAS4FyPnVb');
define('LOGGED_IN_SALT',   'vTdEZb5DFLmih6njSufsqRfbuCh5dKJBbQ3bsToC7WWCDccfSPFqvoOcjPnCgJmj');
define('NONCE_SALT',       '3HMUBrmKio6XXL0pvkEQ8GJ1lE55vHu44wp5RyQwzhKzOL4wrpnLd631yx9QcAR0');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
