<?php
/**
 * @package GSWPDemoPlugin
 */
namespace App;

use App\Activate;
use App\Deactivate;
use App\Controllers\TestPage;

final class Init
{
    public function __construct()
    {
        if($post = get_page_by_path('test-page')){
            // find page by slug
            new TestPage();
        }
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