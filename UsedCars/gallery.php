<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['FullName'])) {
 
 ?>
<?php
include "header.php";
?>

</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
