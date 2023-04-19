<link href="information.css" rel="stylesheet">

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

  $id = $_GET['id'];

  while($row = $result->fetch_assoc()) {
    if($row['id'] == $id) 
    {
        echo "<div class='pokemon'> id: " . $row["id"]. "<br>" . " Name: " . $row["name"]. "<br> Type: " . $row["type"]. "<br> Type 2: " . $row["type_2"] . "<br> Ability 1: " . $row["ability"] 
    . "<br> Ability 2: " . $row["ability_2"] . "<br> <br>" .  "<img src=" . $row['IMG'] . " />" . "</div>";
    }
  }
} else {
  echo "0 results";
}
$conn->close();
"</div>"

?>

