<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['FullName'])) {
 
 ?>
<?php
include "header.php";
?>

<html>
    <head>
        <h1>About Us</h1>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 

        <script type= "text/javascript" >
            function test()
            {
                $.ajax({url:"echo.php",success:function(result)
                    {
                        
                       $("h2").text(result);
                    }
                })

            }
        </script>

 
    </head>
    <body>
        <button onclick='test()'>Contact Us Details</button> 
        <h2>
            <nr></nr>
        </h2>
    </body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>

