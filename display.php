<?php
include('conn.php');
$sql="SELECT * FROM `details`";
$result=mysqli_query($conn, $sql);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <!-- CSS only -->
     <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body>
     <button class="btn btn-primary" id='insert-btn' type="submit"><a href="insert.php" id='txt'>Add User</a></button>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">SL No.</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone_No.</th>
      <th colspan="2" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php  while ($row=mysqli_fetch_array($result)) {?>
    <tr>
      <td><?php echo $row['ID']; ?></td>
      <td><?php echo $row['Name']; ?></td>
      <td><?php echo $row['Address']; ?></td>
      <td><?php echo $row['Phone']; ?></td>
      <td> <a href="edit.php?editid=<?php echo $row['ID']; ?>" class="line">Edit</a> </td>
      <td> <a href="delete.php?delid=<?php echo $row['ID']; ?>"class="line">Delete</a> </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
   </body>
 </html>
