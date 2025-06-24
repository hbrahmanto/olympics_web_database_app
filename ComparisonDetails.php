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

<div class="header">
  <h1>Task 4 - Comparing Countries</h1>
</div>

<body>

<table border="1">
  <tr>
    <td>
    <?php
      $servername = "sci-mysql";
      $username = "coa123cycle";
      $password = "bgt87awx!@2FD";
      $dbname = "coa123cdb";
      
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
        
      $id1 = $_GET["country_id1"];

      $sql1 = "SELECT country.country_name AS name FROM country WHERE country.iso_id = \"$id1\";";

      $result1 = mysqli_query($conn, $sql1);

      if (mysqli_num_rows($result1) > 0) {
        while ($row = mysqli_fetch_assoc($result1)) {
          echo "<h>" . $row["name"] . "</h>";;
        }
      } else {
        echo "<p>There are not results in regards to the values you have inputted.</p>";
      }
    ?>
    </td>
    <td>
    <?php
      $servername = "sci-mysql";
      $username = "coa123cycle";
      $password = "bgt87awx!@2FD";
      $dbname = "coa123cdb";
      
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
        
      $id2 = $_GET["country_id2"];

      $sql2 = "SELECT country.country_name AS name FROM country WHERE country.iso_id = \"$id2\";";

      $result2 = mysqli_query($conn, $sql2);

      if (mysqli_num_rows($result2) > 0) {
        while ($row = mysqli_fetch_assoc($result2)) {
          echo "<h>" . $row["name"] . "</h>";
        }
      } else {
        echo "<p>There are not results in regards to the values you have inputted.</p>";
      }
    ?>
    </td>
  </tr>
  <tr>
    <?php
      $servername = "sci-mysql";
      $username = "coa123cycle";
      $password = "bgt87awx!@2FD";
      $dbname = "coa123cdb";
      
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }

      $id1 = $_GET["country_id1"];
      $id2 = $_GET["country_id2"];

      $sql3 = "SELECT country.country_name AS name, country.bronze AS bronze, country.silver AS silver, country.gold AS gold, country.total AS total FROM country WHERE country.iso_id = \"$id1\";";
      $sql4 = "SELECT country.country_name AS name, country.bronze AS bronze, country.silver AS silver, country.gold AS gold, country.total AS total FROM country WHERE country.iso_id = \"$id2\";";

      $result3 = mysqli_query($conn, $sql3);
      $result4 = mysqli_query($conn, $sql4);

      echo "<td>";
      if (mysqli_num_rows($result3) > 0) {
        echo "<table border='1'><tr><th>Bronze</th><th>Silver</th><th>Gold</th><th>Total</th></tr>";
        while ($row = mysqli_fetch_assoc($result3)) {
          echo "<tr><td>" . $row["bronze"] . "</td><td>" . $row["silver"] . "</td><td>" . $row["gold"] . "</td><td>" . $row["total"] . "</td></tr>";
        }
        echo "</table>";
      }
      echo "</td>";

      echo "<td>";
      if (mysqli_num_rows($result4) > 0) {
        echo "<table border='1'><th>Bronze</th><th>Silver</th><th>Gold</th><th>Total</th>";
        while ($row = mysqli_fetch_assoc($result4)) {
          echo "<tr><td>" . $row["bronze"] . "</td><td>" . $row["silver"] . "</td><td>" . $row["gold"] . "</td><td>" . $row["total"] . "</td></tr>";
        }
        echo "</table>";
      } 
      echo "</td>";
    ?>
  </tr>
  <tr>
    <?php
      $servername = "sci-mysql";
      $username = "coa123cycle";
      $password = "bgt87awx!@2FD";
      $dbname = "coa123cdb";
      
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }

      $id1 = $_GET["country_id1"];
      $id2 = $_GET["country_id2"];

      $sql5 = "SELECT cyclist.name AS name1 FROM cyclist WHERE cyclist.iso_id = \"$id1\";";
      $sql6 = "SELECT cyclist.name AS name2 FROM cyclist WHERE cyclist.iso_id = \"$id2\";";

      $result5 = mysqli_query($conn, $sql5);
      $result6 = mysqli_query($conn, $sql6);

      echo "<td>";
      if (mysqli_num_rows($result5) > 0) {
        echo "<table border='1'><tr><th>Participants</th></tr>";
        while ($row = mysqli_fetch_assoc($result5)) {
          echo "<tr><td>" . $row["name1"] . "</td></tr>";
        }
        echo "</table>";
      }
      echo "</td>";

      echo "<td>";
      if (mysqli_num_rows($result6) > 0) {
        echo "<table border='1'><tr><th>Participants</th></tr>";
        while ($row = mysqli_fetch_assoc($result6)) {
          echo "<tr><td>" . $row["name2"] . "</td></tr>";
        }
        echo "</table>";
      }
      echo "</td>";
    ?>
  </tr> 
</table>

</body>

<div>
</div>

<div style='text-align:center'>
    <form action="compare.php" method="get" id="compare">
        <button class="button">Back to Main Menu</button>
    </form>
</div>

</html>