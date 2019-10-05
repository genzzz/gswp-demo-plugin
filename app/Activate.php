<?php
/**
 * @package GSWPDemoPlugin
 */
namespace App;

class Activate
{
    public static function init()
    {
        if(post_exists( "Test Page"))
            return;

        $user_id = get_current_user_id();
        // Create post object
        $my_post = array(
            'post_title'    => 'Test Page',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_author'   => $user_id,
            'post_type'     => 'page'
        );
        
        // Insert the post into the database
        if($inserted_id = wp_insert_post( $my_post )){
            update_option('show_on_front ', 'page');
            update_option('page_on_front ', $inserted_id);
        }
    }
}