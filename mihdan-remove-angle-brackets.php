<?php
/**
 * Plugin Name: Remove Angle Brackets
 * Plugin URI: http://milordk.ru/r-lichnoe/opyt/cms/ispravlyaem-ssylku-dlya-vosstanovleniya-parolya-v-wordpres-3-1-3.html
 * Version: 0.2
 * Description: Removes angle brackets from a password reset link.
 * Author: Sergey Biryukov
 * Author URI: http://sergeybiryukov.ru/
 */
 
function remove_angle_brackets( $message ) {
    return preg_replace( '#<(https?:\/\/)([^>]+)>#', '$1$2', $message );
}
add_filter( 'retrieve_password_message', 'remove_angle_brackets' );
?>
