<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'catarsis_wp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'catarsis_wp');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'kyEimn]iT7QP');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'n;)b4-Y:l-hwRfX3BA!xH$wBbyb1MFxC>|]u?+n!Eo}rv6j&UB(?tg}+q{pmKCq?');
define('SECURE_AUTH_KEY', 'M#+h/nsNXs`w8{:Ziu=T@a<*jqvRU[y-1IdMv8u70R:E,:,1=~3b0({z)-g)zIaa');
define('LOGGED_IN_KEY', ',B= QIeX-f(-a>v=ws*qn>]Uvli#|hBPwJo)^|8}Z1o<ZS+iy]r5^AXDcd|shGdn');
define('NONCE_KEY', 'eu$%G3f;M:Zo)BwL|eQT~t)+fgu3kp|<`?,>rIj(94o%CCDsSsrh/Rp+>d+U+HEq');
define('AUTH_SALT', 'NB|`7D-A1%q@-$%V^-wHt#p0X)p>Y3G7l%V9`+TJ.wbB2^nEbvLW^zm<a:%9krq+');
define('SECURE_AUTH_SALT', '}2Z^-[+y+z@6B<u$9^ye9s<OdxFce[Z2tEP5=d|7z*?eMc@:!{.XE3%oM|5<YCz2');
define('LOGGED_IN_SALT', 'h4G2`}^^GV8?{.RuT%]%!-^tc`}z.#p4j-<UkMvtnMG,71{?+2%u bA|YU oiLP]');
define('NONCE_SALT', '~h;`R/+rq)cp-c0d}gbi=aL;Vdr]S*Q+-S:Tvisps6aK{*=.,zOg6_Dmcm E]]<$');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
