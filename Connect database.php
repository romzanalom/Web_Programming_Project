<!DOCTYPE html>
<html>
  
<head>
    <title> CRICKET MATCH</title>
</head>
  
<body>

<?php

// Create connection     
 $conn = mysqli_connect("localhost", "root", "", "university");
        
         if($conn === false){
            die("ERROR: Could not connect. " 
                 . mysqli_connect_error());
             
         }

$sql = "SELECT * FROM Sports";

  
        if(mysqli_query($conn, $sql)){
            echo "Connected"; 
  
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
        
</body>
  
</html>