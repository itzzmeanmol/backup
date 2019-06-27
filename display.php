<?php
// Include the database configuration file
include_once 'dbConfig.php';
session_start();
$id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
   <style>
      .thumbnail:hover {
         transform: scale(1.02);
      }


      /* This will style any <img> element in .parent div */
   </style>
</head>

<body>
   <div class="container">
      <div class="jumbotron pink">
         <h1><i class="fa fa-camera-retro"></i> The Image Gallary</h1>
         <a href="template1.php?id=<?= $_SESSION['username'] ?>"><p>Back to template</p></a>
      </div>
      <div class="row">
         <?php
         // Get images from the database
         $query = $db->query("SELECT * FROM images where uid = '$id' ORDER BY id DESC"); ?>




         <?php
         if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
               $imageURL = 'uploads/' . $row["file_name"];
               ?>

               <div class="col-lg-4 col-sm-6">
                  <div class="thumbnail">
                     <!-- <div class="image" style="float:left"> -->

                     <img src="<?php echo $imageURL; ?>" alt="" />

                  </div>
                  <!-- </div> -->
               </div>

            <?php }
      } ?>
      </div>
   </div>
</body>

</html>