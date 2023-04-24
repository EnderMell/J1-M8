<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css?t=<?php echo time()?>" rel="stylesheet">
  <title>Pokémon</title>
</head>

<div class="navbar">
  <div class="logo"><a href="index.html">Pokémons</a></div>
  <ul class="links">
    <li><a href="#">Plant</a></li>
    <li><a href="#">Electric</a></li>
    <li><a href="#">Fairy</a></li>
    <li><a href="#">Gohst</a></li>
  </ul>
    
</div>


<body>
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
$sql = "INSERT INTO pokemon (name, type, type_2, ability, ability_2, IMG) VALUES ( '". $_POST['name'] . "','". $_POST['type'] . "', '". $_POST['type_2'] ."'
, '". $_POST['ability'] ."', '". $_POST['ability_2'] ."', '". $_POST['img'] ."')";
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
    echo "<div class='product'> " . $row["name"].  "<br> <br>" .  "<a href='information.php?id=". $row['id'] ."'><img src=" . $row['IMG'] . " /></a>" . "<br>" .
     "<div id='delete'> <a href='delete.php?id=". $row['id'] ."'> Delete </a></div> </div>";
  }
} else {
  echo "0 results";
}
$conn->close();
"</div>"

?>
</div>
<div id="ditidk">
  <h3 class="thing"> Add a Pokémon!</h3><br>


  <form method="post" id='vakjes'>
    <p class="thing"> Name of Pokemon: </p>
    <input type="text" name="name" required> 
    <p class="thing"> type of Pokemon: </p>
    <input type="text" name="type" required> 
    <p class="thing"> type 2 of Pokemon: </p>
    <input type="text" name="type_2"> 
    <p class="thing"> ability of Pokemon: </p>
    <input type="text" name="ability" required> 
    <p class="thing"> ability 2 of Pokemon: </p>
    <input type="text" name="ability_2"> 
    <p class="thing"> Link to Internet IMG: </p>
    <input type="text" name="img" required><br><br> 
    <input type="submit" name="submit" id="button">
  </form>
</div>





<script src="script.js" ></script>


</body>
</html>