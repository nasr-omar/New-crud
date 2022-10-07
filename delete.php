<?php
include('conn.php');
 if(isset($_GET['delid'])){
   $id=$_GET['delid'];
$sql="DELETE FROM `details` WHERE ID='$id'";
$result=mysqli_query($conn, $sql);
if ($result) {
  header('Location:display.php');
}else {
  die(mysqli_error($conn));
}

}
?>
