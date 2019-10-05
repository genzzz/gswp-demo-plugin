<?php
/**
 * @package GSWPDemoPlugin
 */
namespace App;

use App\Activate;
use App\Deactivate;

class Init
{
    function __construct()
    {
        if($post = get_page_by_path('test-page')){
            // find page by slug
        }
    }

    public function activate()
    {
        Activate::init();
    }

    public function deactivate()
    {
        Deactivate::init();
    }
}