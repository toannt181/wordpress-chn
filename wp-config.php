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
define('DB_NAME', 'wordpress_chn');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Set the following constants in wp-config.php
 * These should be added somewhere BEFORE the
 * constant ABSPATH is defined.
 */
define( 'SMTP_USER',   '' );    // Username to use for SMTP authentication
define( 'SMTP_PASS',   '' );       // Password to use for SMTP authentication
define( 'SMTP_HOST',   'mail.cnhvietnam.com' );    // The hostname of the mail server
define( 'SMTP_FROM',   'website@example.com' ); // SMTP From email address
define( 'SMTP_NAME',   'e.g Website Name' );    // SMTP From name
define( 'SMTP_PORT',   '25' );                  // SMTP port number - likely to be 25, 465 or 587
define( 'SMTP_SECURE', 'tls' );                 // Encryption system to use - ssl or tls
define( 'SMTP_AUTH',    true );                 // Use SMTP authentication (true|false)
define( 'SMTP_DEBUG',   0 );                    // for debugging purposes only set to 1 or 2

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mSsd&,Az.;P<D2(7A,PbG&8`|.WeYA1:c0O% 5:[WQgj1IBo_>gRm#Q][yHxpf[-');
define('SECURE_AUTH_KEY',  ';>sO[bbaM;B[_%`()/Ism.5K4~3R20}S_#G+n}UN52 0.a%KaT(rUZrV$t!*3)zh');
define('LOGGED_IN_KEY',    '|A$5S>`AJS:]{lJ}D2y-G~Jgxg7Ao(QKWg@kQ3(p,Rb{nKG)4w5`/}=;rJO#t]dI');
define('NONCE_KEY',        '/X[H.Eq?G .d^|n%`ILHplD6C,6-/3yq1qX(FbL!S5=tmDKi$mG;xn23WH}xfIk,');
define('AUTH_SALT',        'Wi,*xTS:$SF@=:Tii 2o]#KZKkW~MdwA/$YK6m]_U(95I&WqE<M[hf4)<dV}~3cS');
define('SECURE_AUTH_SALT', 'I$b[LOHEPEF ;tr[$&k[>$%7n6fJkph23^t$!Kb%n![8&9M)`{u*[1Z[;#a+YP3j');
define('LOGGED_IN_SALT',   'l4I`!xcJ{YAc%AjCp~E_xx8pM|<5#@/BWOhdf&HZ]dd ZqzoHF&jM%n/ck5k>1)Y');
define('NONCE_SALT',       'k}O)EFDc*g .O4}CQ*,L%M6VJlUx49cWWkr[2KI)J`NkwC?`7*E7Fg^xA>hvv9>h');

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
