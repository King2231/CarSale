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
  <center>
    <div class="col-md-12">
  <form class="navbar-form" role="search">
    <div class="input-group add-on">
      <input class="form-control" placeholder="Search" name="s1" id="srch-term" type="text">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit" name="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div> 
    </form>
    </div>
  </center>
  </div> 
  <hr>                                                                               
  <div class="table-responsive">          
  <table class="table" cellpadding="10">
    <thead>
        <th>Name</th>
    <th>Place</th>
    <th>Date</th>
    </thead>
    <tbody>
        <?php
        $page=0;
    function search(mysqli $conn)
{ ?>
    <?php
  $query="SELECT * FROM booking";
  $result=mysqli_query($conn,$query);
  while($value=mysqli_fetch_array($result))
  {
        if($_GET['s1']==$value['Name'])
        { ?>
        <tr>
        <td align="center"><h2><?php echo $value['Name']; ?></h2></td><br>
        <td align="center"><?php echo $value['Place']; ?></td>
        <td align="center"><?php echo $value['Time']; ?></td>
        </tr>
        <?php }
  }
} ?>

    <?php
    function normal(mysqli $conn)
    {

        $query=("SELECT * FROM booking");
      $result=mysqli_query($conn,$query);
      while($value=mysqli_fetch_assoc($result))
      {
        ?>
        <tr>
        <td align="center"><h2><?php echo $value['Name']; ?></h2></td><br>
        <td align="center"><?php echo $value['Place']; ?></td>
        <td align="center"><?php echo $value['Time']; ?></td>

      <?php 
    
      }
    }
      ?>

      <?php

      if(isset($_GET['submit']))
      {
        $page=1;
      }
      if($page==0)
      {
        normal($conn);
      }
      elseif($page==1)
      {
        search($conn);;
      }
      ?> </tr></tbody> 
  </table>
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
      <a href="#" class="c-circle-nav__link">
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