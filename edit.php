<?php
include('conn.php');
$id=$_GET['editid'];

 $sql="SELECT * FROM `details` WHERE ID='$id'";
 $result=mysqli_query($conn, $sql);
   $row=mysqli_fetch_array($result);
   $name=$row['Name'];
   $address=$row['Address'];
   $phone=$row['Phone'];

 if(isset($_POST['save'])){
   $name=$_POST['name'];
   $address=$_POST['address'];
   $phone=$_POST['Phone_number'];

   $sql= "UPDATE `details` SET ID='$id', Name='$name', Address='$address',Phone='$phone' where ID='$id'";
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
      <form class="row g-3"  method="post">

       <div class="col-12">
         <label for="inputEmail4" class="form-label">Name</label>
         <input type="text" name="name" class="form-control" id="inputEmail4" value="<?php echo "$name"; ?>">
       </div>

       <div class="col-12">
         <label for="inputAddress" class="form-label">Address</label>
         <input type="text" name="address" class="form-control" id="inputAddress" value="<?php echo "$address"; ?>">
       </div>
       <div class="col-12">
         <label for="inputAddress2" class="form-label">Phone No.</label>
         <input type="number" name="Phone_number" class="form-control" id="inputAddress2" value="<?php echo "$phone"; ?>">
       </div>

       <div class="col-12">
         <button type="submit" name="save" class="btn btn-primary">Update</button>
       </div>
     </form>

    </body>
  </html>
