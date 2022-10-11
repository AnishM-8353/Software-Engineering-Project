<?php

$servername = "localhost";
$database = "inventory";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password, $database);

if(isset($_GET['Prod_id']))
        {
            
            
            $bid = $_GET['Prod_id'];
            $query = "SELECT * from products WHERE Prod_id = '".$bid."'";
            $q = mysqli_query($con,$query);
            $row = mysqli_fetch_assoc($q);
          
        }
        else if(isset($_POST['submit']))
         {
            
            $bid = $_POST['Prod_id'];
            $bquantity = $_POST['quantity'];
            $bdept = $_POST['category'];
            $bname = $_POST['Prod_name'];
            

            $reg = "UPDATE products set quantity = '$bquantity',category = '$bdept',Prod_name = '$bname'   where Prod_id = '".$bid."'";
            mysqli_query($con,$reg);
            
            ?>
            <script type="text/javascript">
                alert("Updated Successfully");
                window.location.href = "index.html";
            </script>
            
            <?php
         }
         ?>




<!<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            .book{
                align:center;
                text-align: center;
                margin:10px;
               line-height: 3; 
               border-color: black;
               background-color: black;
               color: antiquewhite;
               
            }
            .addbook{
                padding-left: 200px;
                padding-top: 50px;
            }
            .title{
                padding-top: 30px;
                text-align:center;
                
            }
            .btn{
                text-align: center;
             } 
            
        </style>
    </head>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <body>
        
        <script src="" async defer></script>
        <div>
            <h2 align="center" class="title">UPDATE</h2>
            <form class="addbook" action="index.html" method="POST" style="text-align: center;">
                
               <!-- <input class="book" style="text-align: center;"class="form-control" name="Prod_id" type="text" placeholder="Enter The Toy Id" size="60" value="<?php $row['Prod_id'] ?>"><br><br> -->
               <input class="book" style="text-align: center;"class="form-control" name="Prod_id" type="text" placeholder="Enter The Product Id" size="60" value="<?php if(isset($_GET['Prod_id']))
        {
            
            
            $bid = $_GET['Prod_id'];
            $query = "SELECT * from products WHERE `products`.`Prod_id` = '".$bid."'";
            $q = mysqli_query($con,$query);
            $row = mysqli_fetch_assoc($q);
            echo $row['Prod_id'];
          
        }?>" disabled><br><br>
               <input class="book" type="text" class="form-control" name="Prod_name" placeholder="<?php if(isset($_GET['Prod_id']))
        {
            
            
            $bid = $_GET['Prod_id'];
            $query = "SELECT * from products WHERE `products`.`Prod_id` = '".$bid."'";
            $q = mysqli_query($con,$query);
            $row = mysqli_fetch_assoc($q);
            echo $row['Prod_name'];
          
        } ?>" size="60" value="<?php $row['Prod_name']?>"><br><br>
              <input class="book" type="text"class="form-control"name="quantity" placeholder="<?php if(isset($_GET['Prod_id']))
        {
            
            
            $bid = $_GET['Prod_id'];
            $query = "SELECT * from products WHERE `products`.`Prod_id` = '".$bid."'";
            $q = mysqli_query($con,$query);
            $row = mysqli_fetch_assoc($q);
            echo $row['quantity'];
          
        } ?>" size="60" value="<?php $row['quantity']?>"><br><br>
               <input class="book" type="text"class="form-control" name="category"placeholder="<?php if(isset($_GET['Prod_id']))
        {
            
            
            $bid = $_GET['Prod_id'];
            $query = "SELECT * from products WHERE `products`.`Prod_id` = '".$bid."'";
            $q = mysqli_query($con,$query);
            $row = mysqli_fetch_assoc($q);
            echo $row['category'];
          
        } ?>" size="60" value="<?php $row['Prod_name']?>"><br><br>
        
              
            <button  class="btn btn-dark" type="submit" name="submit">UPDATE</button>
         </form>
        </div>
       
    </body>
</html> 