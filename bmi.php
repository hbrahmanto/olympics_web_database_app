<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="noindex, nofollow" />
<title>BMI Task</title>
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
	text-align:right;
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
<table class="table">     
<?php
$min_weight = $_GET["min_weight"];
$max_weight = $_GET["max_weight"];
$min_height = $_GET["min_height"];
$max_height = $_GET["max_height"];

echo "<table border='1'>";
echo "<tr><th>Height &rarr;<br>Weight &darr;</th>";

for ($height = $min_height; $height <= $max_height; $height += 5) {
    echo "<th>" . $height . " cm</th>";
}
echo "</tr>";

for ($weight = $min_weight; $weight <= $max_weight; $weight += 5) {
    echo "<tr><th>" . $weight . " kg</th>";
    for ($height = $min_height; $height <= $max_height; $height += 5) {
        $bmi = $weight / ((pow($height,2)) / 10000);
        echo "<td>" . number_format($bmi, 3) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</table>
</body>
</html>