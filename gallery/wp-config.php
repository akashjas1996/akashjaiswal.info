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
define( 'DB_NAME', 'learnast_wp947' );

/** MySQL database username */
define( 'DB_USER', 'learnast_wp947' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p89i8(W!S2' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0njedlfuqe9ehvpyhehb0q1catmhpnczulsbrtrt5ecaisjxs7cwkeuelddofldt' );
define( 'SECURE_AUTH_KEY',  'gad9f7y7ek2jzamuxy0rb13kqke4wmv0gtjnngotyrtfmrf6w2umbm0duyqbjqjg' );
define( 'LOGGED_IN_KEY',    'yrrqn4qpivdn1nweltq6nhzpfrm71cg0bpcpfzepjnagh4b4virucui9l5ngn18q' );
define( 'NONCE_KEY',        'dc1quwcjnki0x3jdve3a98jtzowkgkuv1gkgy3h6gklqletrbuiwmjl7finrpgnm' );
define( 'AUTH_SALT',        'iuzulzqwpuvjjrgsr20nr1tjkucrsypml0uu1ockm9dfec16c1xmwyfm859cyfaw' );
define( 'SECURE_AUTH_SALT', 'zts9iygxbda6rnmeodzeerenayygqkpkyftl55jin3r7tj0rdluihtxbwdlssb8r' );
define( 'LOGGED_IN_SALT',   'feh3cehnvqac1ywdgqlvpi2ijbbh0eqleiz7d8dwxvbkbfhtpd7p2e3bh91pj8ia' );
define( 'NONCE_SALT',       'lispibrfn9abf56vivge3dofcfr1ydtwrpbhha3uuideih6raqmqsre6alcdfum0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpma_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
