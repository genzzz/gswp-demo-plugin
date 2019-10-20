<?php
/**
 * @package GSWPDemoPlugin
 * @author Genci Shabani
 */
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\TestModel;

class TestPage extends Controller
{
    protected $view = 'test-page';

    public function __construct()
    {
        parent::__construct();

        $this->insert_data('Test Page');
    }

    private function insert_data($string)
    {
        $testModel = new TestModel();
        $testModel->insert($string);
    }
}