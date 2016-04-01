<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<title>Register new account</title>
	</head>
	<body>
		<section id="rubrics" class="rubrics-section">
			<div class="container">
				<div class"col-lg-6" id="vak1">
					<p><a href="logout.php">Log in with another account</a> | <a href="logout2.php">Back to portfoliosite</a> | <a href="editor.php">Back to Editor</a></p>
					<br/><br/><br/>
					<h2>Register a new account.</h2><br/>
					<form action="" method="POST">
						Username: <input type="text" name="user"><br />
						Password: <input type="password" name="pass"><br /><br/>	
						<input type="submit" value="Register" name="submit" />
					</form>
					
<?php
	if(isset($_POST["submit"])){

		if(!empty($_POST['user']) && !empty($_POST['pass'])) {
			$user=$_POST['user'];
			$pass=$_POST['pass'];

			$con=mysql_connect('localhost','root','') or die(mysql_error());
			mysql_select_db('portfolio') or die("cannot select DB");

			$query=mysql_query("SELECT * FROM login WHERE username='".$user."'");
			$numrows=mysql_num_rows($query);

			if($numrows==0){
				$sql="INSERT INTO login(username,password) VALUES('$user','$pass')";
				$result=mysql_query($sql);
				if($result){
					echo "Account Successfully Created";
				} else {
					echo "Failure!";
				}
			} else {
				echo "That username already exists! Please try again with another.";
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