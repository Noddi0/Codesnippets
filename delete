<?php
/*
Delete / Verwijderen
*/

// maakt verbinding met de database
include('connect-db.php');

// kijkt of 'id' klopt
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
// haalt 'id' uit url
$id = $_GET['id'];

// verwijdert data uit de database
if ($stmt = $mysqli->prepare("DELETE FROM portfolio WHERE id = ? LIMIT 1"))
{
$stmt->bind_param("i",$id);
$stmt->execute();
$stmt->close();
}
else
{
echo "ERROR: could not prepare SQL statement.";
}
$mysqli->close();

// verwijdert, terug naar tabel
header("Location: tabel.php");
}
else
// als 'id' niet klopt, terug naar tabel
{
header("Location: tabel.php");
}

?>