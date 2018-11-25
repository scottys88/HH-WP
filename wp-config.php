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
define('DB_NAME', 'HoutermannHorner');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'wTd$k;#;Hz@>)~nqCsN;ISFDIfDNwB@M0y{@s!v<:r>qTp 7].G{We-QNRje3rmS');
define('SECURE_AUTH_KEY',  '2yZu/M)Ra3PIxT}]jY=P6XDj3=4n6cvkeHE~Jfxw!Hw]]M3[xNpWArM,*EB=ExXU');
define('LOGGED_IN_KEY',    'Orc%va|S6?+T`Ys+G_MgiuN [8?P+pn{w7jE|8YLf-Y5`XEM:bPt~t,{o^4}U Lv');
define('NONCE_KEY',        'Js?[)guy&:_DI?ZV,}F1jkQ.NS/%SvASS[bh[9GWSoVh]y`;kwb.`}I7(E)j0tGZ');
define('AUTH_SALT',        'weM7-`)a;d2fykqE-*#GY|gE+~m.%TE%ZSxCLMbj::N?5dI+{7d|9qO(F/L$BKnB');
define('SECURE_AUTH_SALT', '7Z.juga#z|eP6#z#PSdJ~jCrlM7a7yEbyQj#,2AyNo1PT.j*YEY}?2;iKdK:r0Do');
define('LOGGED_IN_SALT',   'm;Eb]2JUA=R+p*fl.M$R?#y^)z9%<n$4]<;.^G*nL[heUA8[8E4Ff}H&qgtw-}aJ');
define('NONCE_SALT',       ' Fga4M t?5HX1Zi<4P$Q7[wxyd{[hZNAQua9LUDJfK$<1~6U{.K0a+42&W#MM!%d');

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
