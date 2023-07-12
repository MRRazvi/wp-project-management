<?php

class WPPM
{
    protected $plugin_name;
    protected $version;

    public function __construct()
    {
        $this->plugin_name = 'wp-project-management';
        $this->version = WPPM_VERSION;

        $this->load_dependencies();
    }

    public function load_dependencies()
    {
        require_once plugin_dir_path(dirname(__FILE__)) . 'admin/class-wppm-admin.php';
        require_once plugin_dir_path(dirname(__FILE__)) . 'public/class-wppm-public.php';
    }
}