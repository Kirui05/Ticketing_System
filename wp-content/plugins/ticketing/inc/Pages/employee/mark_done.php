<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'employee') {
  header('Location: ../../index.php');
  exit;
}

// Assuming you have a database connection established

// Function to mark a ticket as done in the database
function markTicketAsDone($ticketId, $employeeId)
{
  // Implement your database query here to mark the ticket as done
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ticket_id'])) {
  $ticketId = $_POST['ticket_id'];
  $employeeId = $_SESSION['user_id'];
  markTicketAsDone($ticketId, $employeeId);
  header('Location: view_tickets.php');
  exit;
} else {
  echo "Invalid request.";
  exit;
}
?>
