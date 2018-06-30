<?php
require ('db_conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Admin View</title>
  <meta name="description" content="This is a circular flyout menu made with Sass and CSS3 transitions, transforms, and animations.">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/common.min.css">
  <link rel="stylesheet" href="css/circle-menu.min.css">
  
</head>
<body>
<h1>BOOKING Details...</h1><hr>
  <div class="container">
  <?php
			require ('db_conn.php');
			


			?>
				<?php
if((isset($_GET['id'])))
	{
		$id=$_GET['id'];

	
			$query=("SELECT * FROM car WHERE id=$id");
			$result=mysqli_query($conn,$query);
			while($value=mysqli_fetch_assoc($result))
	{

		?>
  <h2>Price - <?php echo $value['Price']; ?></h2>
  <?php
	}}
	?>
  <form name="form1" method="get">
    <div class="form-group">
      <label for="n1">Booking For:</label>
      <input type="text" class="form-control" name="n1">
    </div>
    <div class="form-group">
      <label for="adress">Enter Address:</label>
      <input type="text" class="form-control" name="address">
    </div>
	<button type="submit" class="btn btn-default" name="Confirm">Confirm Booking</button>
  </form>
</div>
<?php
	if (isset($_GET['n1']) && isset($_GET['address'])) 
	{
		$date=date("Y/m/d");
	$name=$_GET['n1'];
	$place=$_GET['address'];
	}
	
	if(isset($_GET['Confirm']))
{
	$query=("INSERT INTO booking (Name,place,time) values ('$name','$place','$date')");
	$result=mysqli_query($conn,$query);
	echo "Booking Confirmed";
}
if (isset($_GET['n1'])) 
{
}	
if (isset($_GET['address'])) 
{
}	


				?>
	

<footer class="demo-footer">
  <div class="container">
    <small style="letter-spacing: 10px">&copy; CarSales</small>
  </div>
</footer>

<nav id="c-circle-nav" class="c-circle-nav">
  <button id="c-circle-nav__toggle" class="c-circle-nav__toggle">
    <span>Toggle</span>
  </button>
  <ul class="c-circle-nav__items">
    <li class="c-circle-nav__item">
      <a href="index.php" class="c-circle-nav__link">
        <img src="images/house.svg" alt="">
      </a>
    </li>
    <li class="c-circle-nav__item">
      <a href="carselection.php" class="c-circle-nav__link">
        <img src="images/photo.svg" alt="">
      </a>
    </li>
    <li class="c-circle-nav__item">
      <a href="about.php" class="c-circle-nav__link">
        <img src="images/pin.svg" alt="">
      </a>
    </li>
    <li class="c-circle-nav__item">
      <a href="admin_login.php" class="c-circle-nav__link">
        <img src="images/tools.svg" alt="">
      </a>
    </li>
  </ul>
</nav>
<script src="js/circleMenu.min.js"></script>

</body>
</html>