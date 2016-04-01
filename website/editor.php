<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	
	if ( !empty ( $_POST ) ) {
		require_once('includes/class-insert.php');
		
		if ( $insert->post($_POST) ) {
			echo '<p>Data inserted successfully!</p>';
		}
	}
?>
<?php 
	session_start();
	if(!isset($_SESSION["sess_user"])){
		header("location:login.php");
	} else {
?>
<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<title>Editor</title>
	</head>
	<body>
		<section id="rubrics" class="rubrics-section">
			<div class="container">
				<div class"col-lg-12" id="vak1">
					<p><a href="logout.php">Back to Log in</a> | <a href="register.php">Register</a> | <a href="logout2.php">Back to portfoliosite</a></p>
					<br/><br/><br/>
					<h2> Insert new content </h2>
					<form method="post">
						<h3> Title </h3>
						<p>
							<input type="text" name="post_title" />
						</p>
						<h3> Content </h3>
						<p>
							<textarea name="post_content"></textarea>
						</p>
						<p>
							<input type="checkbox" name="post_category[first]" value="cat1" />
							<label for="post_category">Design & Development</label>
							<br />
							<input type="checkbox" name="post_category[second]" value="cat2" />				
							<label for="post_category">Strategie & Concept</label>
							<br />
							<input type="checkbox" name="post_category[third]" value="cat3" />
							<label for="post_category">User Centered Design</label>
							<br />
							<input type="checkbox" name="post_category[fourth]" value="cat4" />
							<label for="post_category">Proftaak</label>
							<br />
							<input type="checkbox" name="post_category[fifth]" value="cat5" />
							<label for="post_category">Professionele ontwikkeling</label>
						</p>
						<p>
							<input type="submit" value="Submit" />
						</p>
					</form>
				</div>
			</div>
		</section>
	</body>
</html>
<?php
	}
?>


