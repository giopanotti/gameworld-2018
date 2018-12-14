<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gameworld";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
  die("Connection failed:" . $conn->connect_error);
}

if (isset($_GET["gameCategoryId"])) {

  $sql =

        $categoryId = $_GET["gameCategoryId"];
        $selectedGamesQuery = "

    SELECT
    *
    FROM
    gameCategory,
    games
    WHERE
    gamecategory.categoryId = games.gameCategoryId
    AND
    gamecategory.categoryId = ".$categoryId."
    ";
    }
    else {
      $selectedGamesQuery = "SELECT * FROM games where gameCategoryId = 1 OR 2 OR 3  ";
    }
      $result = $conn->query($selectedGamesQuery);
  $conn->close();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Game World - Buy Our Damn Games">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>GameWorld</title>
</head>
<body>
<header id="header">
	<?php
	include("header.php");
	 ?>
</header>

<div class="games-container">

  <form action="cart.php" method="POST">
  <?php
                         if ($result->num_rows > 0) {
                                 //Output data of each row
                                while($row = $result->fetch_assoc()) {

                         ?>
  <div class="product-item">
    <div class="product-item">
    <div class="name"><?php echo $row["gameTitle"]; ?></div>
    <img class="game-image" img src="./<?php echo $row["gameImage"]; ?>.jpg">
    <div class="price">€<?php echo $row["gamePrice"]; ?></div>
    <div>
    <div class="order">Order here:</div>
    <input class="checkbox" type="checkbox" name="selectedGameIds[]" value="<?php echo $row["gameId"]; ?>" />
</div>
</div>
</div>


<?php
}

}

    else {
        echo "No results";
    }

?>

<input class="addToCart" type="submit" name="myButton" value="Add to cart" />
</form>
</div>
</div>

<div class="clearfix"></div>

<footer id="footer">
	 <?php
	 include("footer.php");
	 ?>
</footer>
</body>
