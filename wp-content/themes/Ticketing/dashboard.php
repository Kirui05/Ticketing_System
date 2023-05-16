<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header('Location: index.php');
  exit;
}

if ($_SESSION['role'] === 'admin') {
  header('Location: theme/admin/index.php');
} elseif ($_SESSION['role'] === 'employee') {
  header('Location: theme/employee/index.php');
} else {
  echo "Invalid user role.";
}
