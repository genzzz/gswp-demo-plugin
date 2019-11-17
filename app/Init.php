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
        if($this->get_route() == ''){
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