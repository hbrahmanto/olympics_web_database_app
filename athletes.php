<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="noindex, nofollow" />
<title>Athletes Task</title>
<style type="text/css">
body {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	background-color: bisque;
}
.center {
	text-align:center;
}
body,td,th {
	color: brown; 
}
.larger {
	font-size:larger;
	text-align:left;
}
table {
	margin-left:auto;
	margin-right:auto;
}
.fixed {
	font-family: Courier, monospace;
	white-space: pre;
	background-color:cornsilk;
}
</style>
</head>
<body>
<?php
$servername = "sci-mysql";
$username = "coa123cycle";
$password = "bgt87awx!@2FD";
$dbname = "coa123cdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$country = strtoupper($_GET["country_id"]);
$name = $_GET["part_name"];

$sql = "SELECT cyclist.name AS cyclist_name, COUNT(event.cyclist_id) AS attended_events FROM cyclist 
		JOIN event ON cyclist.cyclist_id=event.cyclist_id
        WHERE UPPER(cyclist.iso_id)='$country' AND cyclist.name LIKE '%$name%'
        GROUP BY cyclist.name";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'><tr><th>Name</th><th>Number of Attended Events</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>" . $row["cyclist_name"] . "</td><td>" . $row["attended_events"] . "</td></tr>";
	}
	echo "</table>";
} else {
    echo "<p>There are not results in regards to the values you have inputted.</p>";
}

mysqli_close($conn);
?>
</body>
</html>