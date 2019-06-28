<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<?php
  $db = mysqli_connect("localhost:8889","root","123","temp");
  $btn = $_POST['choose-me'];
  $id = $_SESSION['id'];
  if($btn == "1"){

    // $qry = "INSERT INTO template(template) VALUES($btn,$id) ";
    $qry = "UPDATE template SET template='$btn' where id=$id";
    mysqli_query($db, $qry);
    $query = "UPDATE person SET template='$btn' where id=$id";
    mysqli_query($db, $query);
    header('location: form.php?id=' . $_SESSION['username']);

  }
  else if($btn == "2"){
    // header('location: register.php');
    $qry = "UPDATE template SET template='$btn' where id=$id";
    mysqli_query($db, $qry);
    $query = "UPDATE person SET template='$btn' where id=$id";
    mysqli_query($db, $query);
    header('location: template2.php?id=' . $_SESSION['username']);
  }
?>

<?php
include("header.php");
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
  <div class="container">


<div class="contain" style="margin: 0 auto; width:600px;">
    <div class="student" style="margin: 0 auto; float: left; padding: 25px;">
      <div class="card" style="width:250px; ">
        <img class="card-img-top" src="css/professional.png" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">Professional</h4>
          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
          
          <button type="Submit" class="btn btn-primary" value="1" name="choose-me">Choose Me</button>
        </div>
      </div>
    </div>



    <div class="professional" style="margin: 0 auto; padding: 25px; ">
      <div class="card" style="width:250px;">
        <img class="card-img-top" src="css/student.png" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">Student</h4>
          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
          
          <button type="Submit" class="btn btn-primary" value="2" name="choose-me">Choose Me</button>
        </div>
      </div>
      </div>
    </div>
  </div>

</form>

</body>

</html>