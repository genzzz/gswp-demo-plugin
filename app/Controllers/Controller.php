<?php
/**
 * @package GSWPDemoPlugin
 * @author Genci Shabani
 */
namespace App\Controllers;

class Controller
{
    protected $view = '';

    public function __construct()
    {
        add_filter('template_include', array($this, 'load_template'));
    }

    public function load_template($template)
    {
        $file = GSWP_PLUGIN_PATH . 'views/' . $this->view . '.php';

        if(file_exists($file))
            return $file;

        return $template;
    }
}