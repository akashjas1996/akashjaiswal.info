<?php 
session_start();
	$servername = "localhost";
	$username = "learnast_akashjas";
	$password = "Jh05ax-2586";
	$dbname = "learnast_quotes";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    }


	/*$mysqli = new mysqli("localhost", "learnast_akashjas", "Jh05ax-2586", "learnast_quotes");
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}*/

if(isset($_POST['submit'])){
	if(!empty($_POST['username']) && !empty($_POST['password'])){
    	$userid = $_POST['username'];
		$pass = $_POST['password'];
		echo "$userid";
		echo "$password";
		$sql = "select * from user_auth where username='$userid'";
        $result = mysqli_query($GLOBALS['connect'],$sql);
		$row = mysqli_fetch_assoc($result);
	}

}
//check if username and password if correct or not
elseif (isset($_POST['Register'])) {
	echo "Register Pressed";
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Material login card</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <h2>Quotes</h2>

<div class="container">
	<div class="banner" tabindex="-1"></div>

	<div class="card">
		<div class="card__ribbon" tabindex="-1"></div>
		<div class="card__title card__title--ribbon card__title--shadow">
			<div class="card__title-text">Sign In</div>
		</div>
		<div class="card__content">
			<div class="inputfield">
				<form action="" method="POST">
				<input class="inputfield__input" id="username" name="username" type="text">
				<label class="inputfield__label" for="username">Username</label>
				<span class="inputfield__underline" aria-hidden="true"></span>
			</div>
			<div class="inputfield">
				<input class="inputfield__input" id="password" name="password" type="password">
				<label class="inputfield__label" for="password">Password</label>
				<span class="inputfield__underline" aria-hidden="true"></span>
			</div>
			<span class="toggle toggle--block">
				<input class="toggle__input" type="checkbox" id="remember">
				<label class="toggle__label" for="remember">Remember me?</label>
				<label class="toggle__checkbox" for="remember">
					<span class="sr-only">Toggle remember me.</span>
					<span class="toggle__checkbox-mark" aria-hidden="true"></span>
				</label>
			</span>
		</div>
		<div class="card__action">
			<input class="btn btn--secondry btn--block" type="submit" value="login" name="submit"> </input>
		</div>
		<div class="card__action">
				<input class="btn btn--primary btn--block" type="submit" value="Register" name="Register"> </input>
		</div>
	</form>
		
	</div>

</div>
    <script  src="js/index.js"></script>
</body>
</html>