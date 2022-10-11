<?php

$servername = "localhost";
$database = "inventory";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password, $database);
        if(isset($_GET['Prod_id']))
        {
            $bid= $_GET['Prod_id'];
            $query = "DELETE from products WHERE Prod_id = '".$bid."'";
        
            $q=mysqli_query($con,$query);
            
            if($q)
            {
                header("Location: index.html");
            }
          
        }

       
?>
        