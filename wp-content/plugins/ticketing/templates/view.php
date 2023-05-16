  <?php
  global $wpdb;
  $tickets = $wpdb->get_results("SELECT * FROM wp_tickets");
  
//   var_dump($tickets);
  ?>
  
  
  
  <div class="container">
    <h1>My Tickets</h1>
    <?php if (empty($tickets)): ?>
      <p>No tickets assigned.</p>
    <?php else: ?>
      <table>
        <tr>
          <th>ticketId</th>
          <th>title</th>
          <th>description</th>
        </tr>
        <?php foreach ($tickets as $ticket): ?>
          <tr>
            <td><?php echo $ticket->ticketId; ?></td>
            <td><?php echo $ticket->title; ?></td>
            <td><?php echo $ticket->description; ?></td>
            <td>
              
                <form action="view.php" method="POST">
                  <input type="hidden" name="ticketId" value="<?php echo $ticket->ticketId; ?>">
                  <button type="submit">Mark as Done</button>
                </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    <?php endif; ?>
    <a href="index.php">Back to Dashboard</a>
  </div>
 <style>
.container{
    margin: 150px;
    background-color: white;
    padding: 20px;
    border: 1px solid green;
    border-radius: 10px;
}
h1{
    font-weight: bolder;
}
button{
    background-color: green;
    border: none;
    padding: 10px;
    color: white;
    border-radius: 10px;
}
 </style>