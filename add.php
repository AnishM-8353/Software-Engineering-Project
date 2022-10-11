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
                padding-left: 10px;
                padding-top: 50px;
            }
            .title{
                padding-top: 30px;
                text-align:center;
                
            }
            .btn{
                text-align: center;
            }
            .optn{
               align:center;
               text-align: center;
               justify-content: center;
               margin:10px;
               margin-top:30px
               line-height: 3; 
               border-color: black;
               background-color: black;
               color: antiquewhite;
               margin-left:380px;
               margin-right:380px;
               paddin-top:30px;
            }

              
#homenav
{
  display: flex;
  color: #fff;
  font-size: 20px;
  text-decoration: none;
}
           
          
        </style>
    </head>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <body>

    <nav class="navbar navbar-dark" style="background-color: #1e6cad;">
            <div class="container-fluid" style="background-color: #1e6cad;">
              <a id="nav" class="navbar-brand" href="#" style="font-size: 2.5rem; padding-left: 58px;">
                Inventory Management
              </a>
              <a id="homenav" href="index.html"> Home </a>
            </div>
            

        </nav>
          
        
        <script src="" async defer></script>
        <div>
            <h2 align="center" class="title">ADD NEW PRODUCT</h2>
            <form class="addbook" method="post" style="text-align: center;" enctype="multipart/form-data">
                
               <!-- <input class="book" class="form-control" name="toyid" type="text" placeholder="Enter The Toy Id" size="60" value=""><br><br> -->
               <input class="book" type="text" class="form-control" name="prodname"placeholder="Enter Product Name" size="60" value=""><br><br>
               <input  class="book" type="text"class="form-control" name="category" placeholder="Category" size="60" value=""><br><br>
                <!-- <input class="book" type="text" class="form-control"name="edition" placeholder="Edition" size="60" value=""><br><br> -->
              <input class="book" type="text"class="form-control"name="quantity" placeholder="Available Quantity" size="60" value=""><br><br>
              <input class="book" type="text" class="form-control"name="amount" placeholder="Amount" size="60" value=""><br><br>
              <!-- <input class="book" type="text" class="form-control"name="image" placeholder="Enter path" size="60" value=""><br><br> -->
              <input class="book" type="text" class="form-control"name="image" placeholder="Source to image" size="60" value=""><br><br>
            <button  class="btn btn-dark" type="submit" name="submit">ADD</button>
         </form>
        </div>
        <?php

        
   $servername = "localhost";
   $database = "inventory";
   $username = "root";
   $password = "";
   $result;
   $con = mysqli_connect($servername, $username, $password, $database);

        if(isset($_POST['submit']))
         {
            $sql = "INSERT INTO `products` (`Prod_name`, `quantity`, `category`, `amount`,`image`)VALUES ('{$_POST['prodname']}',{$_POST['quantity']},'{$_POST['category']}','{$_POST['amount']}','{$_POST['image']}');";
            $result = mysqli_query($con,$sql);   
            
            ?>
            <script type="text/javascript">
                alert("Product Added Successfully");
            </script>
            <?php
         }

             ?>
         }
    </body>
</html>