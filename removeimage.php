

<?php
$db = mysqli_connect("localhost:8889", "root", "123", "temp") or die("could not connect to server");


$sid = $_POST['sid'];
$sql ="DELETE FROM images WHERE id='$sid'";


$result = $db->query($sql);
header("Location: edit_gallery.php");

?>
<?= $sid ?>
   
   


