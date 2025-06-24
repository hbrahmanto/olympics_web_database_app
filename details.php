<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="noindex, nofollow" />
<title>Details Task</title>
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

$d1 = $_GET["date_1"];
$d2 = $_GET["date_2"];

$d1= str_replace("/", "‐", $d1);
$d2 = str_replace("/", "‐", $d2);

$d1 = DateTime::createFromFormat('d‐m‐Y', $d1)->format('Y-m-d');
$d2 = DateTime::createFromFormat('d‐m‐Y', $d2)->format('Y-m-d');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT cyclist.name, country.country_name, cyclist.dob FROM cyclist
        JOIN country ON cyclist.iso_id=country.iso_id
        WHERE cyclist.dob BETWEEN '$d1' AND '$d2'
        ORDER BY cyclist.dob DESC";

$result = mysqli_query($conn, $sql);

$allData = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $allData[] = $row;
    }
    echo json_encode($allData);
}


echo json_encode($allData);

mysqli_close($conn);
?>
</body>
</html>