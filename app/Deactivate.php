<?php
/**
 * @package GSWPDemoPlugin
 * @author Genci Shabani
 */
namespace App;

class Deactivate
{
    public function __construct()
    {
        $this->remove_unused_pages();
    }

    private function remove_unused_pages()
    {
        if($post_id = post_exists( "Test Page"))
            wp_delete_post( $post_id, true );
    }
}