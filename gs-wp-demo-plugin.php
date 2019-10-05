<?php
/**
 * @package GSWPDemoPlugin
 * @author Genci Shabani
 * 
 * Plugin Name: GSWPDemoPlugin
 * Description: Demo Plugin
 * Version: 0.0.1
 * Author: Genci Shabani
 */

if(!defined('ABSPATH')) die();

if(file_exists(dirname(__FILE__) . '/vendor/autoload.php')){
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}
else{
    die('Cannot find autoload.');
}

use App\Init;

if(class_exists(Init::class)){
    $init = new Init();
}
else{
    die('Plugin cannot initialize.');
}

register_activation_hook(__FILE__, array($init, 'activate'));

register_deactivation_hook(__FILE__, array($init, 'deactivate'));