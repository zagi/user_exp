<?php
/**
 * Plugin Name:   Uexp
 * Version:       0.1
 * Author:        michal<at>zagalski.pl
 */

/**
 * Check if WP is loaded
 */
if( ! defined( 'WPINC' )) {
    die;
}

/**
 * Get main plugin class
 */
require_once plugin_dir_path( __FILE__ ) . 'inc/class-user-expiriance.php';

/**
 * Plugin main function, which runs the object
 * @return:   void
 */
function run_user_expiriance() {
    $uexp = new User_Expiriance();
    $uexp->run();
}

/**
 * Init plugin
 */
run_user_expiriance();
