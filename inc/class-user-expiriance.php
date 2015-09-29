<?php

class User_Expiriance
{
    protected $loader;

    protected $slug;

    protected $version;

    public function __construct()
    {
        $this->slug     = 'user-expiriance';
        $this->version  = '0.1';

        $this->load_dependencies();
        $this->admin_hooks();
    }

    private function load_dependencies()
    {
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-'
    }

    private function admin_hooks()
    {

    }
}
