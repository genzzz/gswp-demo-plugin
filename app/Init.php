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