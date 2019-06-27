<?php
include_once 'header.php';
?>
<?php
$db = mysqli_connect("localhost:8889", "root", "123", "temp") or die("could not connect to server");
session_start();
$id = $_SESSION['id'];
$query = $db->query("SELECT * FROM images where uid = '$id' ORDER BY id DESC");?>
<div class="container">
<?php
if ($query->num_rows > 0) {
   while ($row = $query->fetch_assoc()) {
      $imageURL = 'uploads/' . $row["file_name"]; ?>
      <!-- <form action=".deleteSkill($conn)." method="POST"> -->
      
         <div style="padding-top: 50px;">
            <form action="removeimage.php" method="POST" id="removeimage">
               <div class="thumbnail">
                  <img src="<?php echo $imageURL; ?>" class="img-thumbnail" alt="" width="300px" height="150px" /> &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="sid" value="<?= $row['id'] ?>" class="btn btn-danger">Delete</button>
               </div>
            </form>

         </div>
      
      

   <?php }
} ?>
<a href="temp1dash.php?id=<?= $_SESSION['username'] ?>" style="color:black;">Back to Dashboard</a>
</div>
<script>
   // e.preventDefault();
   $('removeimage').submit(function(e) {
      e.preventDefault();
      var formData = new FormData(this);
      $.ajax({
         type: 'POST',
         url: 'removeimage.php',
         data: formData,
         // processData: false,
         // contentType: false,
         success: function(response) {

         }
      });
      return false;
   });
</script>