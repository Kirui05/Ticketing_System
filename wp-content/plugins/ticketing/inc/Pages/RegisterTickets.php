<?php
/**
 * @package ticketingPlugin
 */

 namespace Inc\Pages;

 class RegisterTickets{
    public function register(){
        $this->create_table_to_db();
        $this->add_ticket_to_db();
    }

    function create_table_to_db(){
        global $wpdb;

        $table_name = $wpdb->prefix.'tickets';

        $ticket_details = "CREATE TABLE IF NOT EXISTS ".$table_name."(
            ticketId int NOT NULL,
            title text NOT NULL,
            description text NOT NULL
        );";

        require_once(ABSPATH.'wp-admin/includes/upgrade.php');
        dbDelta($ticket_details);
    }

    function add_ticket_to_db(){
        if(isset($_POST['submitbtn'])){
            $data =[
                'ticketId'=> $_POST['ticketId'],
                'title'=> $_POST['title'],
                'description'=> $_POST['description']
            ];

            global $wpdb;
            global $successmessage;
            global $errormessage;

            $successmessage = false;
            $errormessage = false;

            $table_name = $wpdb->prefix.'tickets';

            $result = $wpdb->insert($table_name, $data, $format=NULL);

            if($result == true){
                $successmessage = true;
                echo "<script> alert('Ticket Registered successfully'); </script>";
            }else{
                $errormessage = true;
                echo "<script> alert('Unable to Register'); </script>";
            }
        }
    }
 }