<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clothing Store</title>
        <link href="project.css" rel="stylesheet" />

    </head>
    <body>
       <?php
    session_start();
    ?>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">Clothing Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				
				
				
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                      	<li class="nav-item"><a class="nav-link" href="browse.php">Browse</a></li>
                    </ul>
					 <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <?php
                            if (isset($_SESSION['email'])) {
                                echo $_SESSION['email'];
                            } else {
                                echo "Account";
                            }
                            ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                            if (isset($_SESSION['email'])) {
                                echo '<li><a class="dropdown-item" href="account.php">Account</a></li>';
                                echo '<li><a class="dropdown-item" href="logout.php">Log Out</a></li>';
                            } else {
                                echo '<li><a class="dropdown-item" href="login.php">Log In</a></li>';
                                echo '<li><a class="dropdown-item" href="signup.php">Sign Up</a></li>';
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart</a>
                    </li>
					</ul>
                </div>
            </div>
        </nav>
        <!-- Header - set the background image for the header in the line below-->
        <header class="py-5 bg-image-full" style="background-image: url('banner4.jpg')">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" src="logo.jpg" width="150" height="150" alt="..." />
                <h1 class="text-black fs-3 fw-bolder">Welcome</h1>
                <p class="text-black-50 mb-0">To Clothing Store</p>
            </div>
        </header>
        <!-- Content section-->
      
      <br>
      
      <div class="container my-5">
      	<div class="row justify-content-center">
            <div class="col-lg-6">
                 <h2>The Clothing Store You Need</h2>
                     <p class="lead">We at The Clothing Store will provide the top quality clothes you need in your life. We provide the most durable, stylish clothes at the most reasonable price.</p>
                     <p class="mb-0"></p>
                </div>
          </div>
      </div>
      
      
          <div class="container bg-dark"> 
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="height: 600px; object-fit: cover;" src="https://smarthippo.org/wp-content/uploads/2019/06/adidas-originals-brand-banner-update-.jpg" class="d-block w-100" alt="...">
                  	<div class="carousel-caption d-none d-md-block">
                      <h5 style="font-size:50px; color:#A30000">Welcome to Clothing Store</h5>
                     </div>
                </div>
                <div class="carousel-item">
                    <img style="height: 600px; object-fit: cover;" src="https://www.collectoffers.com/EditorImages/banner1.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size:30px; color:#A30000">True style never dies</h5>
                  </div>
                </div>
                <div class="carousel-item">
                    <img style="height: 600px; object-fit: cover;" src="https://m.media-amazon.com/images/S/aplus-media/vc/0bd5fead-3142-4a34-a579-fba6d9ad6f8f.__CR0,0,1464,600_PT0_SX1464_V1___.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-mb-lock">
                    <h5 style="font-size:30px; color:#A30000">Explore your true style.</h5>
                  </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
        </div>
    </div>
      <br>

       <center> <button type="button" class="btn btn-link" onclick="location.href='https://huang18g.myweb.cs.uwindsor.ca/Comp2707/browse.php'">Browse Collection</button></center>
<br>
        <div>
        <!-- Image element - set the background image for the header in the line below-->
        <div class="py-5 bg-image-full" style="background-image: url('https://cdn.blankstyle.com/files/xbanner_1494615868_New,P20champion,P20tax.jpg.pagespeed.ic.6cWXKW8yR7.jpg')">
            <div style="height: 20rem"></div>
        </div>
        <!-- Content section-->

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; The Clothing Store 2021</p></div>
        </footer>
        <script src="project.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
