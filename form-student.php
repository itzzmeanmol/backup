<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Multi Step Form with Progress Bar using jQuery and CSS3</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/form.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js" type="text/javascript"></script> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">

</head>

<body>

<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["id"]); ?></b>. Welcome to our site.</h1>


    <!-- multistep form -->
    <form method="POST" action="save.php" enctype="multipart/form-data" id="form">
        <!-- progressbar -->
        <ul id="progressbar">
            
            <li class="active">Personal Details</li>
            <li>Work Details</li>
            <li>Account Setup</li>
            <li>Social Profiles</li>
        </ul>
        <!-- fieldsets -->
        
        <fieldset>
            <h2 class="fs-title">Personal Details</h2>
            <h3 class="fs-subtitle">We will never sell it</h3>
            <!-- <input class="form-control" type="text" name="firstname" placeholder="First name"> -->
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input class="form-control" type="text" name="firstname" placeholder="First name">
            </div>
            <!-- <input class="form-control" type="text" name="lastname" placeholder="Last name"> -->
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input class="form-control" type="text" name="lastname" placeholder="Last name">
            </div>
            <!-- <input class="form-control" type="text" name="address" placeholder="Your address..."> -->
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input class="form-control" type="text" name="address" placeholder="Your address...">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input class="form-control" type="text" name="email" placeholder="Your email...">
            </div>
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="customFile" name="image">
            </div>
            <!-- <input type="button" name="previous" class="previous action-button" value="Previous" /> -->
            <input type="button" name="next" class="next action-button" value="Next" />

        </fieldset>
        <fieldset>
            <h2 class="fs-title">Work Details</h2>
            <h3 class="fs-subtitle">This is step 1</h3>
            <div class="form-group">
                <textarea cols="40" rows="4" name="experience" placeholder="Experience..." class="form-control text"></textarea>
            </div>

            <div class="form-group">
                <textarea cols="40" rows="4" name="image_text" placeholder="Say something about this image..." class="form-control text"></textarea>
            </div>

            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />

        </fieldset>
        <fieldset>
            <h2 class="fs-title">Work Peformance</h2>
            <h3 class="fs-subtitle">This is step 1</h3>
            <input type="text" name="servproject" placeholder="Service Projects" />
            <input type="text" name="jobdesc" placeholder="Job Description" />
            <input type="text" name="atnrec" placeholder="Attendance Record" />
            <input type="text" name="lor" placeholder="Letter of Reference" />
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />

        </fieldset>
        <fieldset>
            <h2 class="fs-title">Social Profiles</h2>
            <h3 class="fs-subtitle">Your presence on the social network</h3>
            <input type="text" name="twitter" placeholder="Twitter" />
            <input type="text" name="gplus" placeholder="Google Plus" />
            <input type="text" name="linkedin" placeholder="LinkedIn" />
            <input type="text" name="github" placeholder="GitHub" />
            <input type="text" name="facebook" placeholder="Facebook" />
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="submit" name="submit" class="submit action-button" value="Submit" />
        </fieldset>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
        <script src="js/index.js"></script>
        <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>
        

       
        <a href="logout.php" class="btn btn-danger">Logout</a>
</body>

</html>