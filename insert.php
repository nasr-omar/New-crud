<?php
include('conn.php');
$id=0;
if(isset($_POST['save'])){
  $name=$_POST['name'];
  $address=$_POST['address'];
  $phone=$_POST['Phone_number'];

  $sql= "INSERT INTO `details` (Name,Address,Phone) VALUES ('$name', '$address', '$phone')";
  $result=mysqli_query($conn, $sql);
if($result){
  header('Location: display.php');
}else {
  die(mysqli_error($conn));
}

}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="row g-3" action="insert.php" method="post">

      <div class="col-12">
        <label for="inputEmail4" class="form-label">Name</label>
        <input type="text" required name="name" class="form-control" id="inputEmail4">
      </div>

      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" required name="address" class="form-control" id="inputAddress" >
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Phone No.</label>
        <input type="number" required name="Phone_number" class="form-control" id="inputAddress2">
      </div>

      <div class="col-12">
        <button type="submit" name="save" class="btn btn-primary">Register</button>
      </div>
    </form>

   </body>
 </html>
