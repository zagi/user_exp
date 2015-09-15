<?php

/**
 *    Plugin Name: Dos. usera
 *    Plugin URI:  http://zagalski.pl/dos
 *    Description: Formularz
 *    Version:     0.5
 *    Author:      Michal Zagalski
 *    Author URI:  http://zagalski.pl
 **/

/*
 * check whether the file is called directly,
 * if yes finalize the execution
 */
if ( ! defined( 'WPINC' ) )
{
    die;
}

namespace UserExpirance;

use UserExpirance\Events\Cookie;
use UserExpirance\Providers\HookLoader;

class UExp
{
    /**
     * Instance of hook loader
     * @var \UserExpirance\Providers\HookLoader $hookloader
     */
    protected $hookloader;

    /**
     * Class constructor
     * @return void
     */
    public function __construct()
    {

        /**
         * get HookLoader object
         */
        $this->hookloader = new HookLoader;

        /**
         * check if it's admin page displayed
         */
        if(!is_admin()) {
            /**
             * check if the cookie is set
             */
            if(!Cookie::check()) {
                  /**
                   * start the extension
                   */
                  $this->start();
            }
        }
    }

    protected function start() {
        
    }

    protected function enquque
}

$uexp = new UExp();
