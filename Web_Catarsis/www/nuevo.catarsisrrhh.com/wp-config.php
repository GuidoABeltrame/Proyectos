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
define('DB_NAME', 'catarsis_nuevo');

/** MySQL database username */
define('DB_USER', 'catarsis_nuevo');

/** MySQL database password */
define('DB_PASSWORD', '73c!%)^Jx9aS');

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
define('AUTH_KEY',         'Kz.$t%[6ArMb$3^DHMSa~qSb0%<b5u0grS9RB12uMkll|4wU#&RWCQKuL|3m`%2]');
define('SECURE_AUTH_KEY',  'E$6:QLC,?i|kah}?j0*V#5oO3{b[%8yB!*iQ &lgNDHn&k-wE)U5/7cYm{w`Gl&#');
define('LOGGED_IN_KEY',    'IDkB%*Z2 7jn(^|^9C450v{vVI!F(1yII#0!n[az h5t@TJ7V*N.N{1hagL0/>L#');
define('NONCE_KEY',        '^jYW;~K8<j}{RjN2URU8IE8%jxiikW<e1c>lJ<W}<nC(SE_Zodx}H~*4rr^6GdPs');
define('AUTH_SALT',        'y$FM&+f0dRBCL5_6>dgY-Sw>P5?XJHuCcp{Q~Sb@(+8AuB*E4@t,Ecw7kY!]C0sw');
define('SECURE_AUTH_SALT', '8xXReUM^s}H@gy3!q^o@/9ciMnU!Cz8Xj)TB1CP8W5~j1+{{ ~Ih/Y(]62>]r?[0');
define('LOGGED_IN_SALT',   'f9VTKyX+p|FFF5kEz2l*=T-k!MGVH@Nx=;.&8(m>,UQlVB+OW^>b#aopNUA(aocU');
define('NONCE_SALT',       '9nM5#qbY]HY75sH5u9K->AAZZN4;%!Bg5ASi$oYOoxt!|L.Co@PSLecA=^.**_UC');

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
