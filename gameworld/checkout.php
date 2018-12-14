<?php
    session_start();
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "gameworld";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		//check connection
    $totalPrice = 0;
		if ($conn->connect_error) {
		  die("Connection failed:" . $conn->connect_error);
		}

    $rows = array();
    foreach ($_SESSION["mySelectedIds"] as $value)
    {

      $sql = "select * from games where gameId = " . $value;

      //die($sql);

    	$result = $conn->query($sql);
    	$rows[] = $result->fetch_all(MYSQLI_ASSOC);

    }
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

          <div class="checkout-container">
          <table class="tables">
            <thead>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
              </tr>
            </thead>
           <tbody>
             <?php
             if(count($rows) < 1)
             {
               ?>
               <tr>
                 <td colspan="4">Your cart is empty</td>
               </tr>
               <?php
             }
             else
             {
                foreach($rows as $game)
                {
                ?>
                <tr>
                <td><img class="checkout-image" src="./<?php echo $game[0]["gameImage"]; ?>.jpg"></td>
                <td class="disc"><?php echo $game[0]["gameTitle"]; ?></td>
                <td class="disc2"><?php echo $game[0]["gameDiscription"]; ?></td>
                <td class="disc">€<?php echo $game[0]["gamePrice"]; ?></td>
              </tr>
                <?php
                }
            }
                ?>


           </tbody>
           <tr>
             <td><form action="clear.php" method="post">
             <input type="submit" name="clearSession" value="Clear cart" style="height: 50px;"/>
             </form></td>
             <td></td>
             <td class="total-price1">Total price:</td>
             <?php
                foreach($rows as $game)
                {
                    $totalPrice += $game[0]['gamePrice'] ;
                }

                ?>
                <td id="Total-price">€<?php echo $totalPrice?></td>
           </tr>
         </table>
</div>

<div class="clearfix"></div>

<footer id="footer">
	 <?php
	 include("footer.php");
	 ?>
</footer>
</body>
