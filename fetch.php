
<?php
session_start();
$id = $_SESSION['id']; 
$response = array();
$connect = mysqli_connect("localhost:8889", "root", "123", "temp") or die('Connection failed');
$sql = "SELECT topp, leftt FROM coords WHERE eid = 1 and id = $id";
$result = mysqli_query($connect, $sql);

$sql1 = "SELECT topp, leftt FROM coords WHERE eid = 2 and id = $id";
$result1 = mysqli_query($connect, $sql1);

$sql2 = "SELECT topp, leftt FROM coords WHERE eid = 3 and id = $id";
$result2 = mysqli_query($connect, $sql2);

if (mysqli_num_rows($result) > 0 && mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      //   echo "topp: " . $row["topp"].  "leftt: ". $row["leftt"]. "<br>";
      $response['topp'] = $row["topp"];
      $response['leftt'] = $row["leftt"];
      //echo json_encode($response);
    }
    while($row = mysqli_fetch_assoc($result1)) {
      //   echo "topp: " . $row["topp"].  "leftt: ". $row["leftt"]. "<br>";
      $response['topp1'] = $row["topp"];
      $response['leftt1'] = $row["leftt"];
      //echo json_encode($response);
    }
    while($row = mysqli_fetch_assoc($result2)) {
      //   echo "topp: " . $row["topp"].  "leftt: ". $row["leftt"]. "<br>";
      $response['topp2'] = $row["topp"];
      $response['leftt2'] = $row["leftt"];
      //echo json_encode($response);
    }
    echo json_encode($response);
}
else{
   echo $id;
}

   // output data of each row
   

// echo json_encode($response);
 ?>
 