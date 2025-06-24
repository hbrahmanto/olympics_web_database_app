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

<div>
</div>

<form action="ComparisonDetails.php" method="get" id="ComparisonDetails">
    <table border="1">
        <tr>
          <td style='text-align:center'><label for="country_id1">Country ID 1:</label> <input name="country_id1" type="text" class="larger" id="country_id1" style="float: center;" /></td>
        </tr>
        <tr>
          <td style='text-align:center'><label for="country_id2">Country ID 2:</label> <input name="country_id2" type="text" class="larger" id="country_id2" style="float: center;" /></td>
        </tr>
        <tr>
          <td style='text-align:center'>Details on Medals and All the Participants: <button class="button" style="float: center;">Compare</button></td>
        </tr>
        <tr>
          <td style='text-align:center'>Select Ranking Criteria: </td>
        </tr>
        <tr>
          <td>
            <button class="button" formaction="goldmedals.php">Gold Medals</button>
            <button class="button" formaction="cyclistsamount.php">Number of Cyclist</button>
            <button class="button" formaction="averageage.php">Average Age of Both Countries</button>
          </td>
        </tr>
        <tr>
          <td style='text-align:center'>Show All Country ID's and Names: <button class="button" formaction="ShowAll.php" style="float: center;">Show</button></td>
        </tr>
    </table>
</form>

</body>
</html>
