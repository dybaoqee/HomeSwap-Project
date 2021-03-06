<?php

$userID=$_REQUEST["userID"];

$servername="zebra";
$username="shirba";
$password="nD(-cmTvuivT";
$dbname="shirba_database";

$sql = "SELECT Fname from users where userID = '$userID'";  

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($result);


if ($rows){
  $fname=$rows['Fname'];
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HomeSwap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<style>

body{
  line-height: 1.5;
  text-align: center;
}
.fas{
  color:green;
  font-size:35px;
  display:inline;
}
</style>
  </head>

  <body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="indexUser.php?userID=<?php echo $userID ?>"><img src="css/pics/HomeSwapLogo.png" height=39px; width=39px;> &nbsp; HomeSwap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
      
          <li class="nav-item">
            <a class="nav-link" href="Search.php?userID=<?php echo $userID ?>">Search For Apartment</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href='Orders.php?userID=<?php echo $userID?>'>My Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="GoogleLogin/Logout.php">Logout</a>
          </li>
            <li class="nav-item active">
            <a href="#" class="nav-link" style="color:#B39CD0;">&nbsp;&nbsp;Welcome, <?php echo $fname; ?> </a>
            </li>
        </ul>
      </div>
    </div>
  </nav>


<div class="container center" style="padding:128px 16px">
  <h3><i class="far fa-frown" style="color:#C34A36"></i> Oh no!</h3>
  <br><br>
  <h5>Sorry, your apartment isn't available in these dates. We can not perform this swap.</h5>
  <h5>Go ahead and search for another apartment!</h5>
  
  <a href='Search.php?userID=<?php echo $userID ?>' class="btn btn-primary btn-lg">Start a new search</a>

  <p style="font-size:10px"></p>

</div>

<br><br>


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"> &copy; HomeSwap 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact form JavaScript -->

    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

  </body>

</html>
