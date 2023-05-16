<!DOCTYPE html>
<html>
<head>
  <title>Ticketing System - Edit Ticket</title>
  <link rel="stylesheet" type="text/css" href="../../theme/style.css">
</head>
<body>
  <div class="container">
    <h1>Edit Ticket</h1>
    <form action="edit_ticket.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $tickets['id']; ?>">
      <label for="title">Title:</label>
      <input type="text" name="title" value="<?php echo $tickets['title']; ?>" required>
      <label for="employee_name">Name:</label>
      <textarea name="employee_name" required><?php echo $tickets['employee_name']; ?></textarea>
      <label for="email">Email:</label>
      <select name="email" required>
        <!-- Populate the dropdown with employee options -->
        <!-- Assuming you have a function getEmployees() to fetch employees from the database -->
        <?php foreach (getEmployees() as $employee): ?>
          <option value="<?php echo $employee['id']; ?>" <?php echo ($employee['id'] === $tickets['id']) ? 'selected' : ''; ?>>
            <?php echo $employee['username']; ?>
          </option>
        <?php endforeach; ?>
      </select>
      <button type="submit">Update</button>
    </form>
  </div>
</body>
</html>
