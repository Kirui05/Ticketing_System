<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
  header('Location: ../../index.php');
  exit;
}

// Assuming you have a database connection established

// Function to create a new ticket in the database
function createTicket($title, $description, $assigneeId)
{
  // Implement your database query here to create a new ticket
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $assigneeId = $_POST['assignee_id'];

  createTicket($title, $description, $assigneeId);
  header('Location: index.php');
  exit;
}
?>

