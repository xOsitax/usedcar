<!DOCTYPE html>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="img/car.png"a></a>
    </div>
    <ul class="nav navbar-nav">
   <li> <a class="active" href="home.php"><i class="fa fa-fw fa-home"></i> Home</a></li>
      
      <li><a href="car_list.php">Car List</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="about_us.php">About Us</a></li>
      <li><a href="admin.php">Admin</a></li>
      <li><a>Hello, <?php echo $_SESSION['name']; ?></a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="logout.php"> <span class="caret"></span></a>
      <ul class="dropdown-menu">
          <li> <a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
  

