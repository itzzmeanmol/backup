<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <style>
    html {
      scroll-behavior: smooth;
    }

    .jumbo-height {
      min-height: 350px;
      /* background: linear-gradient(blue, transparent 60%), */
      /* url("../img/fit-bg1.jpg"); */
      background-size: cover;
      background-position: center center;
      background-attachment: fixed;
      background-repeat: no-repeat;
      box-sizing: boder-box;
      background: #000035;
      color: #fff;
      position: relative;
    }

    .img-size {
      max-height: 200px;
      max-width 200px;
    }

    .student-name {
      float: left;
      margin-left: 40px;
    }

    .social-info {
      position: absolute;
      right: 10%;
      top: 200px;
    }

    .icons {
      font-size: 30px;
      color: #fff;
    }

    .headings {
      /* background: gray; */
      background-image: linear-gradient(to right, #E86100, white, white);
      padding: 5px 10px 5px 10px;
      color: white;
      font-family: sans-serif;
      margin-top: 20px;
      /* box-shadow: 5px 5px 2px grey; */
      /* width: 500px; */
      margin-bottom: 20px;
    }

    .headings>h3 {
      margin-bottom: 0px;
    }

    .description {
      padding: 10px;
      text-align: justify;
      /* background-color: #eef;  */
      /* border: 2px solid wheat; */
    }

    .desc-blk {
      padding: 20px;
    }

    .row {
      margin-top: 10px;
    }

    .progress-wrapper {
      padding-left: 20px;
      padding-right: 20px;
    }

    .progress {
      margin-top: 10px;
      box-shadow: 0.5px 0.5px 0.1px grey;
    }

    .progress-bar {
      background-color: #000035;
    }






    * {
      box-sizing: border-box;
    }

    body {
      font-family: Helvetica, sans-serif;
      /* padding-top: 60px; */
    }

    /* The actual timeline (the vertical ruler) */

    .timeline {
      position: relative;
      max-width: 1200px;
      margin: 0 auto;
      width: 50%;
    }

    /* The actual timeline (the vertical ruler) */

    .timeline::after {
      content: '';
      position: absolute;
      width: 6px;
      background-color: green;
      top: 0;
      bottom: 0;
      left: 50%;
      margin-left: -3px;
    }

    /* main-container around content */

    .main-container {
      padding: 10px 40px;
      position: relative;
      background-color: inherit;
      width: 50%;
    }

    /* The circles on the timeline */

    .main-container::after {
      content: '';
      position: absolute;
      width: 25px;
      height: 25px;
      right: -14px;
      background-color: white;
      border: 4px solid #FF9F55;
      top: 15px;
      border-radius: 50%;
      z-index: 1;
    }

    /* Place the main-container to the left */

    .left {
      left: 0;
    }

    /* Place the main-container to the right */

    .right {
      left: 50%;
    }

    /* Add arrows to the left main-container (pointing right) */

    .left::before {
      content: " ";
      height: 0;
      position: absolute;
      top: 22px;
      width: 0;
      z-index: 1;
      right: 30px;
      border: medium solid white;
      border-width: 10px 0 10px 10px;
      border-color: transparent transparent transparent wheat;
    }

    /* Add arrows to the right main-container (pointing left) */

    .right::before {
      content: " ";
      height: 0;
      position: absolute;
      top: 22px;
      width: 0;
      z-index: 1;
      left: 30px;
      border: medium solid white;
      border-width: 10px 10px 10px 0;
      border-color: transparent wheat transparent transparent;
    }

    /* Fix the circle for main-containers on the right side */

    .right::after {
      left: -14px;
    }

    /* The actual content */

    .content {
      padding: 20px;
      background-color: wheat;
      position: relative;
      border-radius: 6px;
    }

    /* Media queries - Responsive timeline on screens less than 600px wide */

    @media screen and (max-width: 600px) {

      /* Place the timelime to the left */
      .timeline::after {
        left: 31px;
      }

      /* Full-width main-containers */
      .main-container {
        width: 100%;
        padding-left: 70px;
        padding-right: 25px;
      }

      /* Make sure that all arrows are pointing leftwards */
      .main-container::before {
        left: 60px;
        border: medium solid white;
        border-width: 10px 10px 10px 0;
        border-color: transparent white transparent transparent;
      }

      /* Make sure all circles are at the same spot */
      .left::after,
      .right::after {
        left: 15px;
      }

      /* Make all right main-containers behave like the left ones */
      .right {
        left: 0%;
      }
    }
  </style>

</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Hi Anmol</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about-me">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#expertise">Expertise</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#education">Education</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">

    <!-- Jumbotron-->
    <div class="jumbotron jumbotron-fluid jumbo-height">

      <div class="student-name">
        <img src="css/image2.jpg" class="img-thumbnail img-fluid img-size" alt="...">
        <div style="text-align: center; margin-top: 10px;">
          <h3>ANMOL JAIN</h3>
        </div>
      </div>
      <div class="social-info" style="text-align: center;">
        <div style="margin-bottom: 10px;">+91-9087771229</div>
        <div style="margin-bottom: 10px;">anmoljain101297@gmail.com</div>
        <div>
          <li class="list-inline-item"><a class="icons" href="<?= $rw['twitter'] ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a class="icons" href="<?= $rw['gplus'] ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
          <li class="list-inline-item"><a class="icons" href="<?= $rw['linkedin'] ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
          <li class="list-inline-item"><a class="icons" href="<?= $rw['github'] ?>" target="_blank"><i class="fab fa-github-alt"></i></a></li>
          <li class="list-inline-item last-item"><a class="icons" href="<?= $rw['facebook'] ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        </div>
      </div>
    </div>

    <!-- about-me info -->
    <div class="about-me col-md-12">
      <div class="headings">
        <h3 id="about-me">About Me</h3>
      </div>
      <div class="description">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nisi quod voluptate eveniet nemo, at officia architecto natus autem quidem obcaecati repudiandae deserunt aspernatur nobis laborum rem! Animi, eveniet asperiores!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quos deserunt laborum? Itaque ullam aliquam nisi perferendis iure consequuntur blanditiis harum, adipisci impedit sed hic modi a dolore culpa voluptatem!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis esse vitae cumque odit vero quam similique natus rerum assumenda! Animi id vel modi fugit placeat explicabo, consequuntur molestiae natus totam?
      </div>
    </div>

    <!-- about expertise -->
    <div class="experience col-md-12">

      <div class="headings">
        <h3 id="expertise">Expertise</h3>
      </div>

      <div class="description">
        <div class="row">

          <div class="col-md-6 col-xs-12">
            <div class="desc-blk card">
              <div class="card-body">
                <div class="expert-head">
                  <b>Professionally Drive</b>
                </div>
                <div class="expert-desc">
                  Synergicall strategize customer directed resources rather then principle.
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xs-12">
            <div class="desc-blk card">
              <div class="card-body">
                <div class="expert-head">
                  <b>Seamlessly Leverage</b>
                </div>
                <div class="expert-desc">
                  Quickly repurpose reliable customer service with orthogonal ideas. Competantly.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 col-xs-12">
            <div class="desc-blk card">
              <div class="card-body">
                <div class="expert-head">
                  <b>Interactively Incubate</b>
                </div>
                <div class="expert-desc">
                  Interactively myrocardinate high standards and initiatives rather then next generations.
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-xs-12">
            <div class="desc-blk card">
              <div class="card-body">
                <div class="expert-head">
                  <b>Globally Streamline</b>
                </div>
                <div class="expert-desc">
                  Dynamic initiate client-based convergence vis-a-vis performance based.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- about skills -->
    <div class="about-me col-md-12">
      <div class="headings">
        <h3 id="skills">Skills</h3>
      </div>
      <div class="description">

        <div class="progress-wrapper">
          <div class="progress">
            <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Marketing - 25%</div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Market Research - 80%</div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Organisational Skills - 40%</div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Communicational Skills - 60%</div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Project Management - 75%</div>
          </div>
        </div>
      </div>
    </div>

    <!-- portfolio -->
    <div class="portfolio">
      <div class="headings">
        <h3 id="portfolio">portfolio</h3>
      </div>
      <div class="description">

        <div class="row">
          <div class="col-sm-4">
            <div class="card" style="background: linear-gradient(wheat, transparent 40%)">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-danger">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card" style="background: linear-gradient(wheat, transparent 40%)">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-danger">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card" style="background: linear-gradient(wheat, transparent 40%)">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-danger">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Education -->
    <div class="education" id="education">
      <div class="headings">
        <h3>Education</h3>
      </div>
      <div class="description">
        <div class="timeline">

          <div class="main-container left">
            <div class="content">
              <h2 style="opacity: 0.5">2017</h2>
              <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum,</p>
            </div>
          </div>
          <div class="main-container right">
            <div class="content">
              <h2 style="opacity: 0.5">2016</h2>
              <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum,</p>
            </div>
          </div>
          <div class="main-container left">
            <div class="content">
              <h2 style="opacity: 0.5">2015</h2>
              <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum,</p>
            </div>
          </div>
          <div class="main-container right">
            <div class="content">
              <h2 style="opacity: 0.5">2014</h2>
              <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum,</p>
            </div>
          </div>
          <div class="main-container left">
            <div class="content">
              <h2 style="opacity: 0.5">2011</h2>
              <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum,</p>
            </div>
          </div>
          <div class="main-container right">
            <div class="content">
              <h2 style="opacity: 0.5">2007</h2>
              <p>Lorem ipsum dolor sit amet,</p>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>








  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <!-- <script src="js/app.js"></script> -->
</body>

</html>