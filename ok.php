<!DOCTYPE html>
<html>
<head>
  <title>
    Reviews
  </title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&effect=neon|3d-float">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
</head>
<body style="font-family:HelveticaNeue; font-weight: normal;" onload="start()">
  <center>
  <ul class="navBar">
    <li><a href="index.html" style="font-size:15pt;padding-top:5%;">Home</a></li>
    <li><a href="aboutMe.html" style="padding-left:10%;font-size:15pt;padding-top:5%;">About me</a></li>
    <li><a href="resume.pdf" style="font-size:15pt;padding-top:5%;">Resume</a></li>
    <li><a href="contactMe.html" style="font-size:15pt;padding-top:5%;">Contact Me</a></li>
    <li><a href="feedback.php" style="font-size:15pt;padding-top:5%;">Feedback</a></li>
    <li><a href="review.php" style="font-size:15pt;padding-top:5%;">Reviews</a></li>
  </ul>

  <blockquote>
      If you have no critics, you likely have no success.
  </blockquote>
<h1 id="ab">sd</h1>
  <div class="container center">
    <div class="row">
      <div class="col s12 m6">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span id="name1" class="card-title">Review</span>
            <p id="content1">A review while appear in just a sec. I hope its good!</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span id="name2" class="card-title">Review</span>
            <p id="content2">A review while appear in just a sec. I hope its good!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m6">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span id="name3" class="card-title">Review</span>
            <p id="content3">A review while appear in just a sec. I hope its good!</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span id="name4" class="card-title">Review</span>
            <p id="content4">A review while appear in just a sec. I hope its good!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  $f = fopen("review.json","r");
  $r = file_get_contents("review.json");
  ?>
  <script >
    
  </script>
  <script>
  var obj = <?=$r?>;
  var x = 0;
  var s = obj.length;
  function updatecards(){
      document.getElementById('name1').innerHTML = obj[x].name;
      document.getElementById('content1').innerHTML = obj[x].content;
      x = (x + 1) % s;
      document.getElementById('name2').innerHTML = obj[x].name;
      document.getElementById('content2').innerHTML = obj[x].content;
      x = (x + 1) % s;
      document.getElementById('name3').innerHTML = obj[x].name;
      document.getElementById('content3').innerHTML = obj[x].content;
      x = (x + 1) % s;
      document.getElementById('name4').innerHTML = obj[x].name;
      document.getElementById('content4').innerHTML = obj[x].content;
      x = (x + 1) % s;
    }
    function start(){
      document.getElementById('name1').innerHTML = obj[x].name;
      document.getElementById('content1').innerHTML = obj[x].content;
      setInterval(updatecards,5000);
    }
  </script>
  </center>
</body>
</html>
