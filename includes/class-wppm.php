<?php

class WPPM
{
    public function __construct()
    {
        $this->load_dependencies();
    }

    public function load_dependencies()
    {
        require_once plugin_dir_path(dirname(__FILE__)) . 'admin/class-wppm-admin.php';
        require_once plugin_dir_path(dirname(__FILE__)) . 'public/class-wppm-public.php';
    }
}