<?php
    require_once('connection.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>HOME</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>

  <body>
    
    <!-- Pre Header -->
    <?php
        if(!empty(isset($_SESSION['username']))){
            $username=$_SESSION['username'];
            echo '<div id="pre-header"><div class="container"><div class="row"><div class="col-md-12">';
            echo '<span>Welcome '.$username=$_SESSION['username'].'</span></div></div></div></div>';
        }
    ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img class="image-logo" src="assets/images/header-logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Cart</a>
            </li>
            <?php
                if(!empty(isset($_SESSION['id']))){
                    echo '<li class="nav-item"><a class="nav-link" href="carthistory.php">History</a></li>';
                    echo '<li class="nav-item"><a class="nav-link" href="logout.php">Log out</a></li>';
                }
                else{
                    echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
                    echo '<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>';
                }
            ?>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caption">
              <h2>ENNACHAT Ecommerce platform</h2>
              <div class="line-dec"></div>
              <p><strong>contact: ennachat.redwan.pro@gmail.com <br></strong>
              <br>This is one of my php projects</p>
              <br>Enjoy the platform.</p>
              <div class="main-button">
                <a href="#prd">See products</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Featured Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Items</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme" id="prd">
                <?php
                    $query="select * from product";
                    $result=$conn->query($query);
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            echo '<a href="single-product.php?id='.$row['id'].'" ><div class="featured-item">';
                            echo '<img src="./image/'.$row['imageLocation'].'" alt="Item 1">';
                            echo '<h4>'.$row['title'].'</h4>';
                            echo '<h6>$'.$row['price'].'</h6></div></a>';
                        }
                    }
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Featred Ends Here -->


    
    <!-- Footer Starts Here -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="logo">
              <img class="image-logo" src="assets/images/header-logo.png" alt="logo">
            </div>
          </div>
          <div class="col-md-12">
            <div class="footer-menu">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">How It Works ?</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="social-icons">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Ends Here -->


    <!-- Sub Footer Starts Here -->
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
              
              <p>Copyright &copy; 2022 ENNACHAT REDWAN </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sub Footer Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
