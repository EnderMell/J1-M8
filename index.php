<link href="style.css" rel="stylesheet">

<div id='header'>
  <ul>
  <div id='links'>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="normal.php">Normal</a></li>
    <li><a href="#">Plants</a></li>
    <li><a href="#">Poision</a></li>

  </ul>
</div>
<div id="body">
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
if(isset($_POST['submit'])){ 
$sql = "INSERT INTO pokemon (name, type, type_2, ability, ability_2, IMG ) VALUES ( '". $_POST['name'] . "','". $_POST['type'] . "')";
$result = $conn->query($sql);
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
</div>

<div id="formulier">
<form method="post">
  <p> Name of Pokemon: </p><input type="text" name="name">
  <p> type of Pokemon: </p><input type="text" name="type">
  <p> type 2 of Pokemon: </p><input type="text" name="type_2">
  <p> ability of Pokemon: </p><input type="text" name="ability">
  <p> ability 2 of Pokemon: </p> <input type="text" name="ability_2">
  <p> Link to Internet IMG: </p><input type="text" name="img"><br><br>
  <input type="submit" name="submit">
</form>
</div>





<script src="script.js" ></script>