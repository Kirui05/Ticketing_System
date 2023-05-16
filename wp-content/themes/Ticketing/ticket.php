<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header('Location: index.php');
  exit;
}

// Assuming you have a database connection established

// Function to fetch ticket details by ID from the database
function getTicket($ticketId)
{
  // Implement your database query here to retrieve the ticket details
}

// Function to update ticket details in the database
function updateTicket($ticketId, $title, $description, $assigneeId)
{
  // Implement your database query here to update the ticket details
}

// Function to delete a ticket from the database
function deleteTicket($ticketId)
{
  // Implement your database query here to delete the ticket
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
  $ticketId = $_GET['id'];
  // $ticket = getTicket($ticketId);

  if (!$tickets) {
    echo "Ticket not found.";
    exit;
  }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
  $ticketId = $_POST['id'];
  $title = $_POST['employee_name'];
  $description = $_POST['email'];
  $assigneeId = $_POST['employee_number'];
  $assigneeId = $_POST['password'];

  updateTicket($ticketId, $title, $description, $assigneeId);
  header('Location: admin/index.php');
  exit;
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
  $ticketId = $_POST['delete_id'];
  deleteTicket($ticketId);
  header('Location: admin/index.php');
  exit;
} else {
  echo "Invalid request.";
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Ticketing System - Ticket Details</title>
  <link rel="stylesheet" type="text/css" href="theme/style.css">
</head>
<body>
  <div class="container">
    <h1>Ticket Details</h1>
    <form action="ticket.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $tickets['id']; ?>">
      <label for="title">Title:</label>
      <input type="text" name="title" value="<?php echo $tickets['title']; ?>" required>
      <label for="description">Description:</label>
      <textarea name="description" required><?php echo $tickets['description']; ?></textarea>
      <label for="assignee_id">Assignee:</label>
      <select name="assignee_id" required>
        <!-- Populate the dropdown with employee options -->
        <!-- Assuming you have a function getEmployees() to fetch employees from the database -->
        <?php foreach (getEmployees() as $employee): ?>
          <option value="<?php echo $employee['id']; ?>" <?php echo ($employee['id'] === $tickets['assignee_id']) ? 'selected' : ''; ?>>
            <?php echo $employee['username']; ?>
          </option>
        <?php endforeach; ?>
      </select>
      <button type="submit">Update</button>
    </form>
    <form action="ticket.php" method="POST">
      <input type="hidden" name="delete_id" value="<?php echo $tickets['id']; ?>">
      <button type="submit" onclick="return confirm('Are you sure you want to delete this ticket?')">Delete</button>
    </form>
  </div>
</body>
</html>
