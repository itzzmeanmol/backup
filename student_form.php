<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/student-form.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">


</head>

<body class="stud-body" style="">
    <div class="container">
        <form action="temp2dash.php" method="post" class="stud-form">
            <fieldset>
                <legend>Personal Info</legend>
                <hr>
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Enter full name">

                </div>
                <div class="form-group">
                    <label for="exampleInputPhone">Phone</label>
                    <input type="number" class="form-control" id="exampleInputName" placeholder="Enter Phone Number">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
            </fieldset>
            <fieldset>
                <legend>Social Link</legend>
                <hr>
                <div class="form-group">
                    <label for="exampleInputTwitter">Twitter</label>
                    <input type="text" class="form-control" id="exampleInputTwitter" placeholder="Twitter">

                </div>
                <div class="form-group">
                    <label for="exampleInputGoogle">Google Plus</label>
                    <input type="text" class="form-control" id="exampleInputGoogle" placeholder="Google Plus">

                </div>
                <div class="form-group">
                    <label for="exampleInputLinkedIn">LinkedIn</label>
                    <input type="text" class="form-control" id="exampleInputLinkedIn" placeholder="LinkedIn">

                </div>
                <div class="form-group">
                    <label for="exampleInputGithub">GitHub</label>
                    <input type="text" class="form-control" id="exampleInputLinkedIn" placeholder="Github">

                </div>
                <div class="form-group">
                    <label for="exampleInputFacebook">Facebook</label>
                    <input type="text" class="form-control" id="exampleInputFacebook" placeholder="Facebook">

                </div>
            </fieldset>
            <fieldset>
                <legend>About Me</legend>
                <hr>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </fieldset>
            <fieldset>
                <legend>Expertise</legend>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="expt-head">
                            <input type="text" class="form-control" id="expt-head-1" placeholder="Title">
                        </div>
                        <div class="expt-desc">
                            <textarea class="form-control" id="expt-desc-1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="expt-head">
                            <input type="text" class="form-control" id="expt-head-1" placeholder="Title">
                        </div>
                        <div class="expt-desc">
                            <textarea class="form-control" id="expt-desc-1" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="expt-head">
                            <input type="text" class="form-control" id="expt-head-1" placeholder="Title">
                        </div>
                        <div class="expt-desc">
                            <textarea class="form-control" id="expt-desc-1" rows="3"></textarea>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="expt-head">
                            <input type="text" class="form-control" id="expt-head-1" placeholder="Title">
                        </div>
                        <div class="expt-desc">
                            <textarea class="form-control" id="expt-desc-1" rows="3"></textarea>
                        </div>
                    </div>
                </div>




    </div>
    </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
</body>

</html>