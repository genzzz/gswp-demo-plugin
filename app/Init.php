<?php
/**
 * @package GSWPDemoPlugin
 * @author Genci Shabani
 */
namespace App;

use App\Activate;
use App\Deactivate;
use App\Controllers\TestPage;

final class Init
{
    public function __construct()
    {
        // echo $this->get_route();
        if($this->get_route() == ''){
            // find page by slug
            new TestPage();
        }
    }

    private function get_route()
    {
        $route = $_SERVER['REQUEST_URI'];
        $explode = explode('/', $route);
        array_shift($explode);

        return $explode[0];
    }

    public function activate()
    {
        new Activate();
    }

    public function deactivate()
    {
        new Deactivate();
    }
}