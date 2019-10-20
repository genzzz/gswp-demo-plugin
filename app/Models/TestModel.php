<?php
/**
 * @package GSWPDemoPlugin
 * @author Genci Shabani
 */
namespace App\Models;

class TestModel
{
    private $table = 'table';

    private $db;

    public function __construct()
    {
        global $wpdb;
        $this->table = $wpdb->prefix . $this->table;
        $this->db = $wpdb;
    }

    public function insert(string $name)
    {

        $this->db->insert(
            $this->table,
            [ 'name' => $name ],
            [ '%s' ]
        );
    }
}