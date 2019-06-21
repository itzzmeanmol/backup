<?php
$connect = mysqli_connect("localhost:8889", "root", "123", "temp") or die('Connection failed');
$topp = $_POST['topp'];
$leftt = $_POST['leftt'];
$id = $_POST['id'];
$eid = $_POST['eid'];
$qry = "UPDATE coords SET topp = '$topp', leftt ='$leftt' WHERE eid = $eid and id = $id";
mysqli_query($connect,$qry);
echo $topp;
echo $leftt;

?>