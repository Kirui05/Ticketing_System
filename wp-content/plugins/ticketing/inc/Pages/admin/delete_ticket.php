<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
  header('Location: ../../index.php');
  exit;
}

// Assuming you have a database connection established

// Function to delete a ticket from the database
function deleteTicket($ticketId)
{
  // Implement your database query here to delete the ticket
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
  $ticketId = $_POST['id'];
  deleteTicket($ticketId);
  header('Location: index.php');
  exit;
}
?>


