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
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      height: 100%;
      margin: auto;
  }
  h2{
    color: #ffffff;
  }
  </style>
</head>
<body>
<h1>CarSales Booking Records</h1><hr>
  <div class="container"> 
    <div class="container-fluid">
  
    </div> 
                                                                                 
    <div class="form-group">
		<form class="form-group" name="form1" method="get">
      <label for="sel1">Select list (select one):</label>
      <select class="form-control" name="sort">
        <option value="Place">Place</option>
        <option value="Type" >Type</option>
      </select><br>
	  <div class="input-group add-on">
      <input class="form-control" placeholder="Search" name="t1" type="text" >
      <div class="input-group-btn">
        <input class="btn btn-default" type="submit" name="search" value="search"><i class="glyphicon glyphicon-search"></i></button>
      </div>
      </div>

    <div class="table-responsive">          
      <table class="table" cellpadding="10">
        <thead>
          <th><h1>Name</h2>
          <th><h1>Place</h2>
          <th><h1>Type</h2>
          <th><h1>Price</h2>
          <th><h1>Select</h2>
          <?php
      $page=0;

        function search0(mysqli $conn)
        {
          ?>
      
        <?php

        $query=("SELECT * FROM car");
      $result=mysqli_query($conn,$query);
      while($value=mysqli_fetch_assoc($result))
      {
        ?>
        <tr>
        <td align="center"><h2><?php echo $value['Name']; ?><br></h2>
        <?php echo "<img src='images/".$value['image']."' width='250' height='170'></br></br>"; ?></td>
		<td align="center"><?php echo $value['Place']; ?></td>
        <td align="center"><?php echo $value['Type']; ?></td>
        <td align="center"><?php echo $value['Price']; $p=$value['Price']?></td>
        <td align="center"><?php echo "<a href=nsample.php?id=".$value['id'].">Select</a>";?></td>
        </tr>
      <?php 
    
      }
      ?>
      </center>
      
      </div>
      <?php } ?>

        
        
      <?php
        function search1(mysqli $conn)
        {
          ?>
      
        <?php

        $query=("SELECT * FROM car WHERE Place='$_GET[t1]'");
      $result=mysqli_query($conn,$query);
      while($value=mysqli_fetch_assoc($result))
      {
        ?>

        <tr>
        <td align="center"><h2><?php echo $value['Name']; ?><br>
        <?php echo "<img src='images/".$value['image']."' width='250' height='170' ></br></br>"; ?></td>
        <td align="center"><?php echo $value['Place']; ?>
        <td align="center"><?php echo $value['Type']; ?>
        <td align="center"><?php echo $value['Price']; ?>
        <td align="center"><?php echo "<a href=nsample.php?id=".$value['id'].">Select</a>";?>



      <?php 
    
      }
      ?>
      </center>
      
      </div>

      <?php } ?>

      <?php

        function search2(mysqli $conn)
        {
          ?>
        <?php

        $query=("SELECT * FROM car WHERE Type='$_GET[t1]'");
      $result=mysqli_query($conn,$query);
      while($value=mysqli_fetch_assoc($result))
      {
        ?>
        <tr>
        <td align="center"><h2><?php echo $value['Name']; ?><br>
        <?php echo "<img src='images/".$value['image']."' width='250' height='170' ></br></br>"; ?></h2></td>
        <td align="center"><?php echo $value['Place']; ?>
        <td align="center"><?php echo $value['Type']; ?>
        <td align="center"><?php echo $value['Price']; ?>
        <td align="center"><?php echo "<a href=nsample.php?id=".$value['id'].">Select</a>";?>



      <?php 
    
      }
      ?>
      
      </div>

      <?php } ?>


      <?php
      if(isset($_GET['search']))
{
  if($_GET['sort']=="Place")
  {
    $page=1;
  }
  if($_GET['sort']=="Type")
  {
    $page=2;
  }
}
if($page==0)
{
  search0($conn);
}
else if($page==1)
{
  search1($conn);
}
else if($page==2)
{
  search2($conn);
}

      ?>
      </table>
      </form>
  </div>
</div>



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
      <a href="#" class="c-circle-nav__link">
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