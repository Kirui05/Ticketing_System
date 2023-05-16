<?php
session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: dashboard.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Ticketing System - Login</title>
  <link rel="stylesheet" type="text/css" href="theme/style.css">
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <form action="auth.php" method="POST">
      <input type="text" name="employee_number" placeholder="Employee Number" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
