<?php
/**
 * @package ticketingPlugin
 */

 namespace Inc\Pages;

class AdminMenu{
    public $pages;
    public function __construct(){
        // $this->pages= [
        //     [
        //         'page_title'=> 'Books Menu',
        //         'menu_title'=> 'Book Menu',
        //         'capability' => 'manage_options',
        //         'menu_slug'=> 'books_menu',
        //         'callback'=> function(){
        //             echo '<h1> Cohort 13 Books Menu </h1>';
        //         },
        //         'icon_url'=> 'dashicons-welcome-write-blog',
        //         'position'=> 110
            // ]];
     }

     function register(){
        add_action('admin_menu', [$this, 'add_admin_page']);
        // $this->settings->AddPages( $this->pages )->HasSubPage('View Books')->addSubPages($this->subpages)->register();
    }

    function add_admin_page(){
        add_menu_page('Ticketing System', 'Create Tickets', 'manage_options', 'create_ticket', [$this, 'admin_index_cb'], 'dashicons-welcome-write-blog', 110);
        add_menu_page('Ticketing System', 'Edit Ticket', 'manage_options', 'edit_ticket', [$this, 'admin_index_cb1'], 'dashicons-welcome-write-blog', 110);
        add_menu_page('Ticketing System', 'Delete Ticket', 'manage_options', 'delete_ticket', [$this, 'admin_index_cb2'], 'dashicons-welcome-write-blog', 110);
        add_menu_page('Ticketing System', 'View Tickets', 'manage_options', 'view_tickets', [$this, 'admin_index_cb3'], 'dashicons-welcome-write-blog', 110);

    }

    function admin_index_cb(){
        require_once plugin_dir_path(dirname(__FILE__,2)).'templates/create.php';  
    }

    function admin_index_cb1(){
        require_once plugin_dir_path(dirname(__FILE__,2)).'templates/edit.php';  
    }

    function admin_index_cb2(){
        require_once plugin_dir_path(dirname(__FILE__,2)).'templates/delete.php';  
    }

    function admin_index_cb3(){
        require_once plugin_dir_path(dirname(__FILE__,2)).'templates/view.php';  
    }

}
?>