<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jackson');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '8o/O6p<2&FDV(jl}%N1_}Pcg>Cso#1bG<-i[*y!!$rt@Hbpx;kq0AJMl|H-1_sR@');
define('SECURE_AUTH_KEY',  'P+uC}-zN8=k<86O-._|8aG~4=Lm6<fW6]fYuo>}V%3g]2(lhD@*~><i?GX:bhw-%');
define('LOGGED_IN_KEY',    'kFMp|||SEV6qmNcH*fyNZV/,t=IeSU-|~ bV;q+@(p{+R|-i.Z|TfZ^eQ/3{sf2H');
define('NONCE_KEY',        'zf+&+{Y`Wk+(9]g84%c;N~%?$-~GN9y9F|9ke:|@~N8`H&-sxK5v+Kt-g.I!`W,/');
define('AUTH_SALT',        'A!Q^chd|2YXOXv%s5]+T|rpr9_(Wf-;ty_E|zA|ddVH(]M5T59,-9XEDLu*,q%vY');
define('SECURE_AUTH_SALT', '{FNs-~+^iCUEZ1)iKNtY #gw#P@AK/LeEDsxcj?F.HeU3-Z/CFYmXf/AUZH}m(SF');
define('LOGGED_IN_SALT',   'lJ4]Oz7w|K;nANr8SzdCu3:jK)J?--J,?1j+[?57+NZR+- 0uE^ulFD%Ws*{!-%&');
define('NONCE_SALT',       'y*Aej-%48%JQlK_(>};Udx N0u{i35MsH6_Q93%m2k,_lY6j#fXH0#b+>u^zqyFM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'de_DE');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
