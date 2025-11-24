<?php
$mysqli = new mysqli("servername", "username", "password", "dbname");
if($mysqli->connect_error) {
  exit('Could not connect');
}
$sql = "SELECT ciclos, elecion de ciclos, nombre, alumno, 
FROM bdd gutierrez WHERE customerid = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $ciclos, $eleciondeciclos, $nombre, $alumno,);
$stmt->fetch();
$stmt->close();
LIARLA PARDA
echo "<table>";
echo "<tr>";
echo "<th>CustomerID</th>";
echo "<td>" . $cid . "</td>";
echo "<th>ciclos</th>";
echo "<td>" . $ciclos . "</td>";
echo "<th>eleciondeciclos</th>";
echo "<td>" . $eleciondeciclos . "</td>";echo "<th>eleciondeciclos</th>";
echo "<th>nombre</th>";
echo "<td>" . $nombre . "</td>";
echo "<th>alumno</th>";
echo "<td>" . $alumno . "</td>";
echo "</tr>";
echo "</table>";
?>


