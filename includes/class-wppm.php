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

    }
}