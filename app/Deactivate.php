<?php
/**
 * @package GSWPDemoPlugin
 */
namespace App;

class Deactivate
{
    public static function init()
    {
        if($post_id = post_exists( "Test Post"))
            wp_delete_post( $post_id, true );
    }
}