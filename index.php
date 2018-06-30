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
  <title>CarSale : Home Page</title>
  <meta name="description" content="This is a circular flyout menu made with Sass and CSS3 transitions, transforms, and animations.">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/common.min.css">
  <link rel="stylesheet" href="css/circle-menu.min.css">
  <link href="css/half-slider.css" rel="stylesheet">
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
  
    <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url(images/cover1.jpg);"></div>
                <div class="carousel-caption">
                    <h2>Get A Fab Car</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url(images/mer.jpg);"></div>
                <div class="carousel-caption">
                    <h2>A Devil Machine</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url(images/cover2.jpg);"></div>
                <div class="carousel-caption">
                    <h2>A Proud Carrier</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url(images/cover4.jpg);"></div>
                <div class="carousel-caption">
                    <h2>Or Something Vintage.....</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
<footer class="demo-footer">
  <div class="container">
  <h1>CarSales - The Ultimate Car Space......</h1>
  <h2>Get a Car On Rent here and Take a Ride of Your Dream Car</h2>
    <small style="letter-spacing:10px";>&copy; CarSales</small>
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