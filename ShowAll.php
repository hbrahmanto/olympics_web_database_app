<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="noindex, nofollow" />
<title>Task 4</title>
<style type="text/css">

body {
    background-color: #1031c0;
}

.header {
  padding: 60px;
  text-align: center;
  background: #1031c0;
  color: white;
}

body,td,th {
	color: white; 
}

table {
	margin-left:auto;
	margin-right:auto;
}

.button {
    border: none;
    background-color: black;
    color: white;
    text-align: center;
    cursor: pointer;
}

</style>
</head>

<body>

<div class="header">
  <h1>Task 4 - Comparing Countries</h1>
</div>

<div class="header">
  <p1 style="text-align=center">All Country Names and ID's</p1>
</div>

<?php
$servername = "sci-mysql";
$username = "coa123cycle";
$password = "bgt87awx!@2FD";
$dbname = "coa123cdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT country.iso_id AS CountryID, country.country_name AS CountryName FROM country
        ORDER BY country.iso_id";

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

<div>
</div>

<div style='text-align:center'>
    <form action="compare.php" method="get" id="compare">
        <button class="button">Back to Main Menu</button>
    </form>
</div>

</html>