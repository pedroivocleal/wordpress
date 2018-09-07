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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '*R+qggF30bg1@la+927Ui7{Mn^!%T)G>qY9e5}MI#Kac:}??~f*S~>NbCa*/7P!4');
define('SECURE_AUTH_KEY',  'BCt.Icz$BX2w=$1$8zI  V&<k_6h%@>1%H3WP[#s:f>rU(5%jAp.l3:3%lN~xp.,');
define('LOGGED_IN_KEY',    'JU!togNvU}N@[,KJf1~M>bc_*J?`cj<}??Dch7oX$Sw9YGS1^`?QR)0*hz^FPTor');
define('NONCE_KEY',        '[;g{-gEm/*c&!]1_ODO[8rBm-C- .3WH1r4|AV1RnZWKQ#b;<Y?q5-rR.hxS~=C5');
define('AUTH_SALT',        'm#oMr+3wOc0Omb#9Q%dJ(m=&JwD[OgYfy VDt.}djlUCp~cRw2JagU[rt7%?%{jQ');
define('SECURE_AUTH_SALT', 'Y-[v|IL<Gr&BRLM~z]a,2`0DH]e.6_n}vRy~sAOH%)w.{3_wTD_jJvBt3)Nl`kq0');
define('LOGGED_IN_SALT',   'e{v4|%tTOu1UP6F?JTwcKyzz{bZCRwC_Cc$L|aa6p4<8J%ML8vqPdx%.6|{Wa%EA');
define('NONCE_SALT',       'Tm(yd0>fhe/0Do[eAs<38/8t`dsNb&bRV?U_4bOWeQ$@O(%FKf`#jPeYd]v3bfu!');

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
