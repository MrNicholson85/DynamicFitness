<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'DynamicFitness');

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
define('AUTH_KEY',         'QjC.|,|hH-u1 e:i?5ea0_2v@tYBy1VN*5,$B^%vdoQ-@#7fsoN@R$u`s?=(66+w');
define('SECURE_AUTH_KEY',  '{!Xh1V:(ORcwU}d_&4?Y%e[]`8$(m!|r3$]a$vP.A%tnNvwSx[8+JEdRsv<D%QVp');
define('LOGGED_IN_KEY',    'ph]ID#d-27S3(?_YeDv+$6Tl6FGs)//iw+H#{kO-M;SjGwlo(U}DUhN-WTj`qIfE');
define('NONCE_KEY',        '|-(`UC+hdCi!ghZXI=d:~OJL/jxI!z_:F<)0p@a%3%.Qq5GpDC!.PE6_L21:tt-Q');
define('AUTH_SALT',        'eg~_Ql>3BHU5Om-Ge+M<aC5.1rYd|>-#=w.895g*f)__;=)uyRSmFcLEIfpVb--^');
define('SECURE_AUTH_SALT', '-cd/*RdBzF6RE++Znu.%wFA4_!7<$ZQdfCvg.?EQZGF]Jw7,fl0cy=6&0{]Y`T8o');
define('LOGGED_IN_SALT',   ' 12W52T{k[7yT0)N`LX[PS5*V0YJ Z|dolO/</)9>s2,C=NX@B-3@U,d!?0GZyHA');
define('NONCE_SALT',       'M>o:fu!h/TKNLs!|xqoQ~$Z)d%*xy|18rzwU .C-$WL=(C*N{$X%^/e>R<jimtrZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
