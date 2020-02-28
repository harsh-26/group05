<!doctype html>
<html lang="en">
  <head>
  <style>
  #email-css{
	  border:2px solid #000000;

  }
  
  </style>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <div class="jumbotron" style="background-color:#FCF5F2;">
	  
  
  <h1>Welcome to vita</h1>
  <form action="home.php" method="POST"></form>
  
	  <div class="form-group">
		<label for="Enter your email ID">Username:</label>
		<input type="text" name="" id="email-css" class="form-control" placeholder="Email ID" aria-describedby="helpId">
		<small id="helpId" class="text-muted">We wont share your email id</small>
	  </div>
	  <div class="form-group">
		<label for="Enter your password">Passowrd: </label>
		<input type="password" class="form-control" name="Password" id="" placeholder="Enter your password">
	  </div>

	<input type="Submit" name="sub1" value="Login">


	  </div>
		<a href="signup.php">New User ? Signup</a>	
	  </div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>