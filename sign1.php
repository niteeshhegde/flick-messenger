<?php 
include 'conn.php';
?>
<!DOCTYPE-html>
<html>
<head>
<title>bro</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name = "description" content ="god, online">
<meta name = "keywords" content ="pooja,pandit,purohit,devotion,spiritual,tour">
<link rel="icon" href="god1.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="god.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 90%;
      margin: auto;
  }
  </style>
</head>
<body>
<div class="container">
  <h2>Sign in</h2>
	<form class="form-horizontal" action="login.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" name="email" id="email" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
    </div>
	<div class="form-group">
		  		  				<input type="hidden" name="ss" value="1">
            <input name="submit" type="submit" value="submit" class="btn btn-primary">
			<small ><a href='fp11.php'>  &#160;	&#160;	Forgot Password ?</a></small> 
        </div>
  </form>
    <div id="300"> <br /> <br /> <br /></div>
</div>


<div class="container">
<h2> Or </h2>
<h2> Sign Up </h2>
	<form class="form-horizontal" action="savusr.php" method="post" enctype="multipart/form-data">
  <fieldset>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Name">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password1" id="inputPassword" placeholder="Password">
      </div>
    </div>
	    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Re-enter Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password2" id="inputPassword" placeholder="Password">
      </div>
    </div>
	
	<div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">    Select image to upload:</label>
      <div class="col-lg-10">
    <input type="file" name="image1" value="image1" id="fileToUpload" />
      </div>
    </div>


    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" name="submit" value="submit" class="btn btn-primary" />Submit</button>
      </div>
    </div>
  </fieldset>
</form>
</div>
</body>