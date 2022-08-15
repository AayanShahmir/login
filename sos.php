<?php
$conn = mysqli_connect("localhost", "root", "", "test_db");
$rows = mysqli_query($conn, "SELECT * FROM users");
?>
<table border = 1 cellpadding = 10>
  <tr>
    <td>#</td>
    <td>Name</td>
    <td>user_name</td>
    <td>password</td>
  </tr>
  <?php $i = 1; ?>
  <?php foreach($rows as $row) : ?>
    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["user_name"]; ?></td>
      <td><?php echo $row["password"]; ?></td>
    </tr>
  <?php endforeach; ?>
</table>