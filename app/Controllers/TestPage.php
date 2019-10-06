<?php
/**
 * @package GSWPDemoPlugin
 */
namespace App\Controllers;

class TestPage
{
    public function __construct()
    {
        add_filter('template_include', array($this, 'load_template'));
    }

    public function load_template($template)
    {
        $file = GSWP_PLUGIN_PATH . 'views/test-page.php';

        if(file_exists($file))
            return $file;

        return $template;
    }
}