<?php
session_start();
// Establish database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $employee_number = $_POST['employee_number'];
  $password = $_POST['password'];

  // Validate user credentials from the database

  // Assuming $user contains the user record from the database
  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role'] = $user['role'];
    header('Location: dashboard.php');
    exit;
  } else {
    header('Location: index.php');
    exit;
  }
} else {
  header('Location: index.php');
  exit;
}
