<?php
define('WP_HOME','http://localhost/amor/deseo');
define('WP_SITEURL','http://localhost/amor/deseo');

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
define('DB_NAME', 'ad');

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
define('AUTH_KEY',         ']Qm6C,/lqOEMfzUkQ^noC%CGRt^tJ(|Wwt9C3Z!^SlK7`?*9)C]Y?e|52jCwJ@v=');
define('SECURE_AUTH_KEY',  ',80;l Zvy8>$UaY37:A%EYGHU]&/|Bo{xus[7f6[yvV{jf.Z@ylanD<%OwVV.KNw');
define('LOGGED_IN_KEY',    ',Z~kuFfQ@t?`;.Q}O%(F:c[7soWff4W`8!#HHuQj}!.4ZIBatR~s?Kj*@Ub@-7Ql');
define('NONCE_KEY',        '2GplpoF{-`lo5kNfg`<1w 0-s!d=@Y.O5Pdf*P9|PufEBuhtGeU>q0%sAWC7b$G]');
define('AUTH_SALT',        '>:&s|yGhs*vPh3pEv_DXtA&}u#;5S8q*R2yd}iZAKYAQ}4-5Y-#gj-W)bProUtKA');
define('SECURE_AUTH_SALT', ']{a,R%VADF|-|-2Ow~ppu}H,5K!}X$%=yl{1QmWB?Z:Fqb6BiU%AZFpU( ];g{2-');
define('LOGGED_IN_SALT',   'fNX3:unhdq{iB{<l*NYf_f9NXBDB%bP*n+4&|}[xT-2f]yf&:bY3oz[0[{GiGFhd');
define('NONCE_SALT',       'F`.jpJB?|=`nQd98OI-A W7@`=9=lJD,(>+3VXzT:}-i2iCW!B&O$)V+l$x4uvk*');

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
