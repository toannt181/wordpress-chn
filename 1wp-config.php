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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'ph-O~pmI!RISD>PD}SobWk*-sw=5XT]e1ZM~=j=a%Jtz9vciaF<O(?>Dv+MOY-l^');
define('SECURE_AUTH_KEY',  '>NcVX>x(_pQdk%x}bVO(J<o*ZqM8=I;eGYX2E/%SYpie3XzM>Rn>va,=KMx_oylS');
define('LOGGED_IN_KEY',    'x,[.(Pi6rbY!TPt$B`%HZh0}IH_h1WOy4gQ<p[]~!A:i@fHw%7Me;oAfN]Fv-9EN');
define('NONCE_KEY',        'I]E-acfiLQpMu>6y9C-DT:0E]@s6tuJH=7hQfX!bey54;%?EiJ=>IK)hi0Mw&dvy');
define('AUTH_SALT',        'nrgoB.](N.Q#%yu>>Zt(0pGD$}>:`m?t_O1}Ao(,sL_/K-%ihrG7)=(X%pT_*pas');
define('SECURE_AUTH_SALT', 'JpR&>[5A{ oO@>$Q8j,boImwxTm1uv%vq[}4*hvZ^Co_+vDc5-rmFX`BD~Wf=%xq');
define('LOGGED_IN_SALT',   'nRr}qk;iMiV)nhgRv&F.<-{TC0M!.H9[W*Saq0ozUv MXxz{?5rC=7~32a9!8 _G');
define('NONCE_SALT',       '2t)O/.j$SlUb/zdwm%u?zs x2j3=M&{YljbO,QIG/1VdVFI&)Vn[;1okV[.#.?X#');

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
