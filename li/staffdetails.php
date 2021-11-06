<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #000000;
font-family: sans-serif;
font-size: 18px;
text-align: left;
}
th {
background-color: #b3ccff;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Staff ID</th>
<th>Position</th>
<th> E-mail</th>
<th>Contact</th>
<th>Department</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "Library");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT fname, lname,sid, position,email,contact,department FROM Staff";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["fname"]. "</td><td>" . $row["lname"]. "</td><td>" . $row["sid"] . "</td><td>" . $row["position"] . "</td><td>". $row["email"]. "</td><td>" . $row["contact"]. "</td><td>" . $row["department"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
<?php
include "footer.php";

?>