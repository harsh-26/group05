<!doctype html>
<html lang="en">
  <head>
    <title>Sign up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
    <h2 style="text-align :center ; margin-top: 10vh;">Fill in the details</h2>
    <form action="signup.php" method="post">
        <div class="form-group">
          <label for="Enter your name">Name :</label>
          <input type="text" class="form-control" name="fnm" id="" aria-describedby="helpId" placeholder="Name" required>
        </div>
        <div class="form-group">
          <label for="Enter your email id">User Name</label>
          <input type="text" class="form-control" name="sign_usr" id="" aria-describedby="helpId" placeholder="" required>
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="Enter your password">Password : </label>
          <input type="password" class="form-control" name="sign_pswd" id="" placeholder="Password" required>
        </div>
        <input type="submit" name="signup" value = "Sign Up" />
    </form>
</div>

	<?php
	include_once("dbconnect.php");
	if(isset($_REQUEST["signup"]))
	{
		$stmt = $conn->prepare("INSERT INTO users(Name,mail,Password) VALUES (?,?,?)");
		$stmt->bind_param("sss",$_REQUEST["fnm"],$_REQUEST["sign_usr"],$_REQUEST["sign_pswd"]);
		if($stmt->execute())
		{
		header("location:index.php");
		}
		else{
			echo "Data is not entered into database";
		}
		$stmt->close();
		$conn->close();

	
	}
	?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>