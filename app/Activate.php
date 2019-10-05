<?php
/**
 * @package GSWPDemoPlugin
 */
namespace App;

class Activate
{
    public static function init()
    {
        if(post_exists( "Test Post"))
            return;

        $user_id = get_current_user_id();
        // Create post object
        $my_post = array(
            'post_title'    => 'Test Post',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => $user_id
        );
        
        // Insert the post into the database
        wp_insert_post( $my_post );
    }
}