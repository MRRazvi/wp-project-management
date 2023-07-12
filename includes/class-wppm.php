<?php

class WPPM
{
    public function __construct()
    {
        $this->load_dependencies();
    }

    public function load_dependencies()
    {
        require_once plugin_dir_path(__DIR__) . 'vendor/autoload.php';
        require_once plugin_dir_path(__DIR__) . 'admin/class-wppm-admin.php';
        require_once plugin_dir_path(__DIR__) . 'public/class-wppm-public.php';

        new WPPM_Admin();
        new WPPM_Public();
    }
}