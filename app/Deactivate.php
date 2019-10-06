<?php
/**
 * @package GSWPDemoPlugin
 */
namespace App;

class Deactivate
{
    public function __construct()
    {
        if($post_id = post_exists( "Test Page"))
            wp_delete_post( $post_id, true );
    }
}