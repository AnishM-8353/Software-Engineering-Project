<?php
    session_start();
    $servername = "localhost";
    $database = "inventory";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn)
    {
    die("Sorry we failed to connect to the server please try again: "); 
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="display_cart.css">
    <title>CART</title>
</head>
<body>
<nav class="navbar navbar-dark" style="background-color: #1e6cad;">
            <div class="container-fluid" style="background-color: #1e6cad;">
              <a id="nav" class="navbar-brand" href="#" style="font-size: 2.5rem; padding-left: 58px;">
                Inventory Management
              </a>
              <a id="homenav" href="index.html"> Home </a>
            </div>
            

        </nav>
          
    
    <div class="table">
    <table style="border-bottom: 1px #e3e3e3 solid; margin-bottom:20px;">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
<?php     $getp = "SELECT * FROM products;";
    $viewp = mysqli_query($conn,$getp);
    if($viewp)
    {
    $getpd = mysqli_fetch_all($viewp);
    $lenp = count($getpd);
    }

    for($i=0;$i<$lenp;$i++)
    {

    
?>

            <tr>
                        <td><img src="<?php echo $getpd[$i][5] ?>"></td>
                        <td><?php echo $getpd[$i][4] ?> </td>
                        <td><?php echo $getpd[$i][2] ?> </td>
                        <td><?php echo $getpd[$i][1]?> </td>
                        <td><?php echo $getpd[$i][3]?> </td>
                    </tr>

<?php 
    }
    ?>

                    </table>

    </div>





  

       
</body>
</html>
     
  
  