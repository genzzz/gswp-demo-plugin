<?php
/**
 * @package GSWPDemoPlugin
 * @author Genci Shabani
 */
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\TestModel;
use GS\Test;

class TestPage extends Controller
{
    protected $view = 'test-page';

    public function __construct()
    {
        parent::__construct();

        $this->insert_data('Test Page');

        // print($this->print_test());
        // print($this->print_another_test());die();
    }

    public function print_test()
    {
        $test = new Test();
        return $test->print_text();
    }

    public function print_another_test()
    {
        $test = new Test();
        return $test->print_another_text();
    }

    private function insert_data($string)
    {
        $testModel = new TestModel();
        // $testModel->insert($string);
    }
}