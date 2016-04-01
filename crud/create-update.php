<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
/*
Create Update / Toevoegen Aanpassen
*/

// Maakt verbinding met de database
include("connect-db.php");

// maakt de form aan om toe te voegen/aan te passen
function renderForm($vak2 = '', $titel2 ='', $informatie2 ='', $error = '', $id = '')
{ ?>
<html>
	<head>
		<title>
<?php if ($id != '') { echo "Rij Aanpassen"; } else { echo "Rij Toevoegen"; } ?>
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<h1><?php if ($id != '') { echo "Rij Aanpassen"; } else { echo "Rij Toevoegen"; } ?></h1>
<?php if ($error != '') {
echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error
. "</div>";
} ?>

		<form action="" method="post">
			<div>
<?php if ($id != '') { ?>
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
<p>ID: <?php echo $id; ?></p>
<?php } ?>	
				<strong>Vak: </strong> <input type="text" name="vak" value="<?php echo $vak2; ?>"/>
				</br><br/>
				<strong>Titel: </strong> <input type="text" name="titel" value="<?php echo $titel2; ?>"/>
				</br><br/>
				<strong>Informatie: </strong> <input type="text" name="informatie" value="<?php echo $informatie2; ?>"/>
				</br><br/>
				<input type="submit" name="submit" value="Submit" />
			</div>
		</form>
	</body>
</html>

<?php }
/*
Rij Aanpassen
*/

// als 'id' in de url zit 'rij aanpassen'
if (isset($_GET['id']))
{
// als op submit geklikt is -> form bijwerken
if (isset($_POST['submit']))
{
// zorgt dat het id klopt
if (is_numeric($_POST['id']))
{
// pakt rijen uit de form
$id = $_POST['id'];
$vak = htmlentities($_POST['vak'], ENT_QUOTES);
$titel = htmlentities($_POST['titel'], ENT_QUOTES);
$informatie = htmlentities($_POST['informatie'], ENT_QUOTES);

// zorgt voor geen lege vakken
if ($vak == '' || $titel == '' || $informatie == '')
{
// leeg = error
$error = 'ERROR: Vul alle velden in!';
renderForm($vak, $titel, $informatie, $error, $id);
}
else
{
// data aanpassen
if ($stmt = $mysqli->prepare("UPDATE portfolio SET vak = ?, titel = ? , informatie = ?
WHERE id=?"))
{
$stmt->bind_param("sssi", $vak, $titel, $informatie, $id);
$stmt->execute();
$stmt->close();
}
// query error
else
{
echo "ERROR: Kan SQL statement niet uitvoeren!";
}

// terug naar Tabel
header("Location: tabel.php");
}
}
// 'id' klopt niet, error
else
{
echo "Error!";
}
}
// als de tabel er niet is haal info uit de database en maak tabel
else
{
// zorgt dat 'id' klopt
if (is_numeric($_GET['id']) && $_GET['id'] > 0)
{
// pak 'id' uit url
$id = $_GET['id'];

// pak data uit de database
if($stmt = $mysqli->prepare("SELECT * FROM portfolio WHERE id=?"))
{
$stmt->bind_param("i", $id);
$stmt->execute();

$stmt->bind_result($id, $vak, $titel, $informatie);
$stmt->fetch();

// laat de data zien
renderForm($vak, $titel, $informatie, NULL, $id);

$stmt->close();
}
// query error
else
{
echo "Error: Kan SQL statement niet uitvoeren!";
}
}
// 'id' klopt niet, error, terug naar Tabel
else
{
header("Location: tabel.php");
}
}
}



/*
Rij Toevoegen
*/
// geen 'id' = rij toevoegen
else
{
// als op submit geklikt is -> form bijwerken
if (isset($_POST['submit']))
{
// pakt rijen uit de form
$vak = htmlentities($_POST['vak'], ENT_QUOTES);
$titel = htmlentities($_POST['titel'], ENT_QUOTES);
$informatie = htmlentities($_POST['informatie'], ENT_QUOTES);
// zorgt voor geen lege vakken
if ($vak == '' || $titel == '' || $informatie == '')
{
// leeg = error
$error = 'ERROR: Vul alle velden in!';
renderForm($vak, $titel, $informatie, $error);
}
else
{
// voegt de data toe aan de database
if ($stmt = $mysqli->prepare("INSERT portfolio (vak, titel, informatie) VALUES (?, ?, ?)"))
{
$stmt->bind_param("sss", $vak, $titel, $informatie);
$stmt->execute();
$stmt->close();
}
// query error
else
{
echo "ERROR: Kan SQL statement niet uitvoeren.";
}

// naar tabel
header("Location: tabel.php");
}

}
// laat form zien
else
{
renderForm();
}
}

// sluit database verbinding
$mysqli->close();
?>