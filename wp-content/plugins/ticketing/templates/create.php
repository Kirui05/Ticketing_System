<!-- <!DOCTYPE html>
<html>

<head>
  <title>Ticketing System - Create Ticket</title>
  <link rel="stylesheet" type="text/css" href="../../theme/style.css">
</head> -->

<body>
  <div class="container">
    <h1>Create Ticket</h1>
    <form action="" method="POST">
      <label for="ticketId">ticketId:</label>
      <input type="int" name="ticketId" required>
      <label for="title">title:</label>
      <input type="text" name="title" required>
      <label for="description">description:</label>
      <textarea name="description" required></textarea>
      <!-- Populate the dropdown with employee options -->
      <!-- Assuming you have a function getEmployees() to fetch employees from the database -->
      <?php
      // Function to fetch employees from the database
      function getEmployees()
      {
        // Implement your database query here to retrieve employees
        // For example:
        // Assuming you have a database connection established
        // $conn = new mysqli("id", "employee_name", "email", "employee_number", "password");
        global $wpdb;

        $query = "SELECT id, username FROM wp_users";
        // $result = $conn->query($query);

        $employees = $wpdb->get_results($query);
        // while ($row = $result->fetch_assoc()) {
        // $employees[] = $row;
        // }

        return $employees;
      }

      foreach (getEmployees() as $employee) : ?>
        <option value="<?php echo $employee['id']; ?>">
          <?php echo $employee['username']; ?>
        </option>
      <?php endforeach; ?>
      </select>
      <button type="submit" name='submitbtn'>Create</button>
    </form>
  </div>
  <style>
    .container {
      display: flex;
      flex-direction: column;
      width: 200px;
      align-items: center;
      gap: 20px;
      padding: 20px;
      background-color: white;
      border: 1px solid green;
      border-radius: 10px;
      margin: 150px;
    }

    h1 {
      font-weight: bolder;

    }

    form {
      display: flex;
      flex-direction: column;
    }

    button {
      color: white;
      background-color: green;
      margin-top: 20px;
      padding: 10px;
      font-size: larger;
      border: none;
      border-radius: 10px;
    }
  </style>

</body>

</html>