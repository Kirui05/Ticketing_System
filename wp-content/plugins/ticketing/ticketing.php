<?php 

/**
 * @package ticketingplugin
 */
// my_plugin.php

/*
    Plugin Name: ticketing Plugin
    Plugin URI: http://.........
    Description: This is a plugin built by Nicholas Kirui Wordpress
    Version: 1.0.0
    Author: Nicholas Kirui
    Author URI: http://ticketingsystem...............
    Licence: GPLv2 or later
    Text Domain: ticketing plugin
*/

use Inc\Base;

// security check
defined('ABSPATH') or die('Security breaches identified');


// Checking if composer exists
if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once(dirname(__FILE__).'/vendor/autoload.php');
}
// Plugin activation hook
function activate_ticketing_plugin() {
Base\Activate::activate();
    // Perform activation tasks here
}

// Plugin deactivation hook
function deactivate_ticketing_plugin() {
  Base\Deactivate::deactivate();
    // Perform deactivation tasks here
}

// Register activation and deactivation hooks
register_activation_hook(__FILE__, 'activate_ticketing_plugin');
register_deactivation_hook(__FILE__,  'deactivate_ticketing_plugin');
// class Ticket {
//     // ...
  
//     public function createTicket($title, $description, $assignedEmployeeId) {
//       // Validate the input data if needed
  
//       // Insert the ticket data into the database
//       $database = new Database(); // Assuming you have a Database class for database operations
//       $database->insert('tickets', [
//         'title' => $title,
//         'description' => $description,
//         'assigned_employee_id' => $assignedEmployeeId
//       ]);
  
//       // You can perform additional actions if needed, such as sending email notifications, etc.
//     }
  
//     // ...
//   }
  
if(class_exists('Inc\\init')){
    Inc\Init::register_services(); //considers all classes as services
}