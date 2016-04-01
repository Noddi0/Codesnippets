<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<title>Login</title>
	</head>
	<body>
		<section id="rubrics" class="rubrics-section">
			<div class="container">
				<div class"col-lg-6" id="vak1">
					<p><a href="index.php">Back to portfoliosite</a></p>
					<br/><br/><br/>
					<h2>Log in</h2><br/>
					<form action="" method="POST">
						Username: <input type="text" name="user"><br />
						Password: <input type="password" name="pass"><br /><br/>
						<input type="submit" value="Log in" name="submit" />
					</form>
<?php
	if(isset($_POST["submit"])){

		if(!empty($_POST['user']) && !empty($_POST['pass'])) {
			$user=$_POST['user'];
			$pass=$_POST['pass'];

			$con=mysql_connect('localhost','root','') or die(mysql_error());
			mysql_select_db('portfolio') or die("cannot select DB");

			$query=mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");
			$numrows=mysql_num_rows($query);
			if($numrows!=0)
			{
			while($row=mysql_fetch_assoc($query)){
				$dbusername=$row['username'];
				$dbpassword=$row['password'];
			}

			if($user == $dbusername && $pass == $dbpassword){
				session_start();
				$_SESSION['sess_user']=$user;

				/* Redirect browser */
				header("Location: editor.php");
			}
			} else {
				echo "Invalid username or password!";
			}
		} else {
		echo "All fields are required!";
		}
	}
?>
				</div>
			</div>
		</section>
	</body>
</html>