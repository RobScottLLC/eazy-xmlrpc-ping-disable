<?php
/**
 * Plugin Name: Eazy XMLRPC Pingback Disable
 * Version:     1.0.0
 * Plugin URI:  http://robjscott.com/
 * Description: Disable XMLRPC Pingback Ping
 * Author:      Rob Scott, LLC
 * Author URI:  http://robjscott.com/
 */
 
add_filter( 'xmlrpc_methods', 'eazy_xmlrpc_ping_disable' );
function eazy_xmlrpc_ping_disable( $methods ) {
   unset( $methods['pingback.ping'] );
   return $methods;
} ;
?>