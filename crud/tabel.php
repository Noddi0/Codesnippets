<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Tabel</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<h1>Tabel</h1>
<?php
// maakt verbuinding met de database
include('connect-db.php');

// pakt informatie uit de database
if ($result = $mysqli->query("SELECT * FROM portfolio ORDER BY id"))
{
// geeft informatie weer als die er is
if ($result->num_rows > 0)
	{
// info in tabel
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Vak</th><th>Titel</th><th>Informatie</th><th></th><th></th></tr>";

while ($row = $result->fetch_object())
{
// maakt een rij voor elke rij uit de database
echo "<tr>";
echo "<td>" . $row->id . "</td>";
echo "<td>" . $row->vak . "</td>";
echo "<td>" . $row->titel . "</td>";
echo "<td>" . $row->informatie . "</td>";
echo "<td><a href='create-update.php?id=" . $row->id . "'>Aanpassen</a></td>";
echo "<td><a href='delete.php?id=" . $row->id . "'>Verwijderen</a></td>";
echo "</tr>";
}

echo "</table>";
}
// als de database leeg is
else
{
echo "Geen resultaat om weer te geven!";
}
}
// als de query niet klopt
else
{
echo "Error: " . $mysqli->error;
}

// sluit database verbinding
$mysqli->close();

?>

<a href="create-update.php">Voeg data toe</a>
</body>
</html>