<?php
session_start();
$id = $_SESSION['id'];
$db = mysqli_connect("localhost:8889", "root", "123", "temp") or die("could not connect to server");
// $color = "white";

if ($_GET['action']) {
   $sql = "SELECT color FROM person WHERE id = '$id'";
   $result = $db->query($sql);

   if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
         echo $row["color"];
      }
   } else {
      echo "0 results";
   }
   $db->close();
} 
else {
   if (isset($_POST['cadetblue'])) {
      $sql = "UPDATE person SET color = 'cadetblue' where id = $id";
      if ($db->query($sql) === TRUE) {
         // echo "Record updated successfully";
      }
   } else if (isset($_POST['blue'])) {
      $sql = "UPDATE person SET color = '#0073aa' where id = $id";

      if ($db->query($sql) === TRUE) {
         // echo "Record updated successfully";
      }
   } else if (isset($_POST['green'])) {
      $sql = "UPDATE person SET color = 'green' where id = $id";
      if ($db->query($sql) === TRUE) {
         // echo "Record updated successfully";
      }
   }
   else if (isset($_POST['gray'])) {
      $sql = "UPDATE person SET color = 'gray' where id = $id";
      if ($db->query($sql) === TRUE) {
         // echo "Record updated successfully";
      }
   }
   else if (isset($_POST['brown'])) {
      $sql = "UPDATE person SET color = 'brown' where id = $id";
      if ($db->query($sql) === TRUE) {
         // echo "Record updated successfully";
      }
   }
   
}
   