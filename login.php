<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clothing Store</title>
       
        <link href="project.css" rel="stylesheet" />
      <style>
   		footer {
            position: absolute;

            bottom: 0;
            width: 100%;
    
        }
    </style>
     	
    </head>
    <body>
       <?php
    session_start();
    
    $servername = "localhost";
    $username = "huang18g_project";
    $password = "password";
    $dbname = "huang18g_project";
    // Create connection
    $conn = new mysqli(
        $servername,
        $username,
        $password,
        $dbname
    );

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_errno) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['log-in'])) {
        $sql = "SELECT email, password FROM project_users WHERE email='" . $_POST['log-in-email'] . "'";
        $login = $conn->query($sql);
        if ($login->num_rows > 0 and $login->fetch_assoc()['password'] === $_POST['log-in-password']) {
            $_SESSION['email'] = $_POST['log-in-email'];
            header('Refresh: 0; URL = /Comp2707');
        }
    }
    ?>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">Clothing Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				
				
				
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
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

        <!-- Content section-->
      <br>
      <br>
      	<div class="container">
        <div class="card" align="center">
            <div class="card-body p-4">
                <h1 class="card-title mb-5">Log In</h1>
                <p>
                    <?php
                    if (isset($_POST['sign-up'])) {
                        $sql = "INSERT INTO project_users (email, password) VALUES ('" . $_POST['sign-up-email'] . "', '" . $_POST['sign-up-password'] . "')";
                        $signup = $conn->query($sql);
                        if ($signup) {
                            echo "Registration Successful";
                        } else {
                            echo "Registration Failed";
                        }
                    }
                    $conn->close();
                    ?>
                </p>
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" name="log-in-email" class="form-control" placeholder="example@example.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="log-in-password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="log-in" class="btn btn-primary">Login</button>
                    </div>
                    <div>
                        <a class="form-text" href="/Comp2707/signup.php">Not registered? Click here to sign up.</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
		<footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright © The Clothing Store 2021</p></div>
        </footer>
        <script src="project.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
