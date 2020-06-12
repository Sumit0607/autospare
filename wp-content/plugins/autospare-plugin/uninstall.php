<?php

if(!defined('WP_UNINSTALL_PLUGINS')){
    die;
}

//Clear Stored database
        // $books= get_posts(array('post_type' => 'book', 'numberpost'=> -1));

        // foreach($books as $book){

        //     wp_delete_post($book->ID, true);
        // }
//Access the database via SQL

        global $wpdb;
        $wpdb->query("DELETE FROM wp_posts Where post_type='book'");
