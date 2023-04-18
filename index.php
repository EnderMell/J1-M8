<link href="style.css" rel="stylesheet">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "module_8";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
"<div class='row'>";
$sql = "SELECT id, name, type, type_2, ability, ability_2, IMG FROM pokemon";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  ?>

  <?php
  while($row = $result->fetch_assoc()) {
    echo "<div class='product'> " . $row["name"].  "<br> <br>" .  "<a href='information.php?id=". $row['id'] ."'><img src=" . $row['IMG'] . " /></a>" . "<br>" . "</div>";
  }
} else {
  echo "0 results";
}
$conn->close();
"</div>"

?>




<script src="script.js" ></script>