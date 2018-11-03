<!DOCTYPE html>
<html>
<head>
  <title>Up Comming Events</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body>
  <div id="background">
    <div id="page">
      <div id="header">
        <div id="logo">
          <a href="../../index.php"><img src="../images/fam.png" alt="LOGO"></a>
        </div>
        <div id="navigation">
          <ul id="primary">
            <li class="selected">
              <a href="../../index.php">Home</a>
            </li>         
            <li>
              <a href="#">Products</a>
              <ul class="sub-menu">
                <li><a class= "small" href="../newarrivals.php">New Arrivals</a></li>
                <li class="inner"><a class= "small"href="#">Product Category</a>
                  <ul>
                    <li><a href="../dairyproduct.php">Dairy Products</a></li> 
                    <li><a href="../vegetable.php">Vegetable</a></li>
                    <li><a href="../groceries.php">Groceries</a></li>
                    <li><a href="../drinks.php">Drinks</a></li>
                    <li><a href="../food.php">Processed food</a></li>
                  </ul>
                </li>
                <li><a class= "small" href="../manufacturer.php">Manufacturers</a></li>
              </ul>
            </li>
            <li>
              <a href="../sale.php">Sales</a>
            </li>
            <li>
              <a href="#">Promotions</a>
            </li>
            <li>
              <a href="../about.php">About</a>
            </li>
          </ul>
          <ul id="secondary">
            <li>
              <a href="../checkout.php">Cart</a>
            </li>
            <li>
              <a href="../login/login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
      <br>
      <div id="contents">
        <h4><span>New Events</span></h4>
      </div>
      <div id ="promotions">
        <!-- Blog entries -->
        <div class="w3-middle">
          <!-- Blog entry -->
          <div class="w3-card-4 w3-margin w3-white">
            <img src="images/bridge.jpg" style="width:100%">
            <div class="w3-container">
              <h3><b>TITLE HEADING</b></h3>
              <h5><span class="w3-opacity">April 7, 2014</span></h5>
            </div>

            <div class="w3-container">
              <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
              tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
            </div>
            <div class="w3-row">
              <div class="w3-col m8 s12">
                <p><button class="w3-button w3-padding-large w3-white w3-border" style="margin-left: 25px;"><a href="../../index.php" style="text-decoration: none;"><b>SHOP NOW »</b></a></button></p>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="w3-card-4 w3-margin w3-white">
          <img src="images/demo.jpg" style="width:100%;">
          <div class="w3-container">
            <h3><b>BLOG ENTRY</b></h3>
            <h5><span class="w3-opacity">April 2, 2014</span></h5>
          </div>

          <div class="w3-container">
            <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
            tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
          </div>
          <div class="w3-row">
            <div class="w3-col m8 s12">
              <p><button class="w3-button w3-padding-large w3-white w3-border" style="margin-left: 25px;"><a href="../../index.php" style="text-decoration: none;"><b>SHOP NOW »</b></a></button></p>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="w3-center">
        <button class="w3-button w3-black w3-disabled w3-padding-large">Previous</button>
        <button class="w3-button w3-black w3-padding-large ">Next »</button>
      </div>
      <br>
      <br>
    </div>
    <?php include("../footer.php") ?>
  </div> 
</div>
</body>
</html>
</body>