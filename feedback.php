<!DOCTYPE html>
<html>
<head>
  <title>
      Onkar Deshpande
    </title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="11.png" />
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="font.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/png" href="download.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  

<nav class="white" role="navigation">
    <div class="nav-wrapper">
      <a id="navbar-brand" href="https://www.cse.iitb.ac.in/~onkard/" class="brand-logo">Onkar Deshpande</a>
      <ul class="right hide-on-med-and-down small-text">
        <li><a href="https://www.cse.iitb.ac.in/~onkard/aboutme.html"><h3>About Me</h3></a></li>
        <li><a href="https://www.cse.iitb.ac.in/~onkard/acads.html"><h3>Acads</h3></a></li>
        <li><a href="https://www.cse.iitb.ac.in/~onkard/CS251_Team/"><h3>CS 251</h3></a></li>
        <li><a href="https://www.cse.iitb.ac.in/~onkard/projects.html"><h3>Projects</h3></a></li>
        <li><a href="https://www.cse.iitb.ac.in/~onkard/contact.html"><h3>Contact me</h3></a></li>
        <li class="dropdown">
        	<a class="dropdown-toggle" data-toggle="dropdown" href="#"><h3>Résumé</h3>
        	</a>
        	<ul class="dropdown-menu">
          		<li><a href="https://www.cse.iitb.ac.in/~onkard/1page.pdf" target="_blank"><h4>1 page</h4></a></li>
          		<li><a href="https://www.cse.iitb.ac.in/~onkard/2pagetech.pdf" target="_blank"><h4>2 page(Tech)</h4></a></li>
          		<li><a href="https://www.cse.iitb.ac.in/~onkard/2pagenontech.pdf" target="_blank"><h4>2 page(non-Tech)</h4></a></li>
        	</ul>
      	</li>
      	<li><a href="https://www.cse.iitb.ac.in/~onkard/feedback.php"><h3>Feedback</h3></a></li>
        <li><a href="https://www.cse.iitb.ac.in/~onkard/review.php"><h3>Reviews</h3></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="https://www.cse.iitb.ac.in/~onkard/aboutme.html"><h4>About Me</h4></a></li>
        <li><a href="https://www.cse.iitb.ac.in/~onkard/acads.html"><h4>Acads</h4></a></li>
        <li><a href="https://www.cse.iitb.ac.in/~onkard/CS251_Team/"><h4>CS 251</h4></a></li>
        <li><a href="https://www.cse.iitb.ac.in/~onkard/projects.html"><h4>Projects</h4></a></li>
        <li><a href="https://www.cse.iitb.ac.in/~onkard/contact.html"><h4>Contact me</h4></a></li>
        <li class="dropdown">
        	<a class="dropdown-toggle" data-toggle="dropdown" href="#"><h4>Résumé</h4>
        	</a>
        	<ul class="dropdown-menu">
          		<li><a href="https://www.cse.iitb.ac.in/~onkard/1page.pdf" target="_blank"><h4>1 page</h4></a></li>
          		<li><a href="https://www.cse.iitb.ac.in/~onkard/2pagetech.pdf" target="_blank"><h4>2 page(Tech)</h4></a></li>
          		<li><a href="https://www.cse.iitb.ac.in/~onkard/2pagenontech.pdf" target="_blank"><h4>2 page(non-Tech)</h4></a></li>
        	</ul>
      	</li>
      	<li><a href="https://www.cse.iitb.ac.in/~onkard/feedback.php"><h4>Feedback</h4></a></li>
        <li><a href="https://www.cse.iitb.ac.in/~onkard/review.php"><h4>Reviews</h4></a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
<br /><br /><br /><br />


  <?php
  if (isset($_POST['submit']))
  {
    try {
      $myObj->name = $_POST['name'];
      $myObj->content = $_POST['content'];
      if (!$_POST['name'] || !$_POST['content']) {
        throw new Exception("Fill all fields!");
        echo "something";
      }

      $file = fopen("review.json","r") or die("Couldn't read file");
      $r = file_get_contents("review.json");
      $a = json_decode($r, true);
      array_push($a,$myObj);

      fclose($file);
      $b = json_encode($a);
      #throw new Exception($b);
      file_put_contents("review.json", $b);
      echo "Thank you for your response. You can see it in the review section.";
      } 
      catch (Exception $e) {
       echo 'Message: '.$e->getMessage();
      } 
  }
  ?>
  <div class="container">
    <blockquote>
      I much prefer the sharpest criticism of a single intelligent man to the thoughtless approval of the masses.
  </blockquote>
    <div class="row">
      <form action="#" method="post" class="col s12">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="name">
          <label for="icon_prefix">Name</label>
          <span class="helper-text" data-error="wrong" data-success="right">Will be displayed on review page.</span>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea" name="content"></textarea>
            <label for="textarea1">Comment/Review</label>
          </div>
        </div>  
        <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
          <i class="material-icons right">send</i>
        </button>
      </form>
    </div>
  </div>
</center>

  <br /><br /><br /><br />
    <br /><br /><br /><br />
    <br /><br /><br /><br />
    <br /><br /><br /><br />
 <br /><br /><br /><br /> 
   



  <footer class="page-footer  grey darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h2 class="white-text">Gratitude turns what we have into enough</h2>
          <p class="grey-text text-lighten-4">Thank You for visiting this page. It meant a lot to me.</p>
        </div>   
      </div>
    </div>
  </footer>
</body>
</html>





