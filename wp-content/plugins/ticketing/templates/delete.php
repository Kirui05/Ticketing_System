<!DOCTYPE html>
<html>
<head>
  <title>Ticketing System - Delete Ticket</title>
  <link rel="stylesheet" type="text/css" href="../../theme/style.css">
</head>
<body>
  <div class="container">
    <h1>Delete Ticket</h1>
    <p>Are you sure you want to delete this ticket?</p>
    <form action="delete_ticket.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
      <button type="submit">Delete</button>
      <a href="index.php">Cancel</a>
    </form>
  </div>
</body>
</html>