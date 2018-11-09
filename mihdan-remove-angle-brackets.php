<?php
/**
 * Plugin Name: Mihdan: Remove Angle Brackets
 * Plugin URI: http://milordk.ru/r-lichnoe/opyt/cms/ispravlyaem-ssylku-dlya-vosstanovleniya-parolya-v-wordpres-3-1-3.html
 * Version: 0.3
 * Description: Removes angle brackets from a password reset link.
 * Author: Sergey Biryukov
 * Author URI: http://sergeybiryukov.ru/
 */

/**
 * Удаляет треугольные скобки < и > из
 * письма восстановления пароля
 */
function mihdan_remove_angle_brackets( $message ) {
    return preg_replace( '#<(https?:\/\/)([^>]+)>#', '$1$2', $message );
}
add_filter( 'retrieve_password_message', 'mihdan_remove_angle_brackets' );
?>
