<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<h1 align="center">Voting System Form</h1>

  <div class="container">
  <form action="index.php" method="post" enctype="multipart/form-data">
    <label for="name">Name</label>
    <input type="text" id="fname" name="Name" placeholder="Your name..">

    <label for="
    name">Address</label>
    <input type="text" id="lname" name="Address" placeholder="Your Address..">

    <label for="id card">Id Card</label>
    <input type="text" name="Id_Card"placeholder="id card..">
    <tr>
      <td><font size="3">Image</font></td>
      <br>
      <td><input type="file" name="Image"></td>
    </tr>
    <input type="submit" name="submit" value="Submit">
  </form>
</div>
<br>
<center><h1>Data Table</h1></center>
<br>

<?php
include_once('connection.php');
if(isset($_POST['submit'])){
  $name = $_POST['Name'];
  $address = $_POST['Address'];
  $id_card = $_POST['Id_Card'];
  $image = $_FILES['Image'];
  $image_name = $_FILES['Image']['name'];
  $image_tmp = $_FILES['Image']['tmp_name']; 


  move_uploaded_file($image_tmp,"images/$image_name");

  $query = "insert into voters (`Name`, `Address`, `Id_Card`, `Image`) values ('$name', '$address', '$id_card', '$image_name')";
  $result = mysqli_query($connection, $query);
  if ($result) {
    echo "<center><h1>Data Has Been Inserted Successfully</h1></center>";
} else {
    echo "<center><h1>Data Submission Failed</h1></center>";
}
}

include_once('my_table.php');

?>

</body>
</html>