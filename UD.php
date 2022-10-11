
<!DOCTYPE html>
<html>
<head>
	<title>Update/Delete</title>
	<style>

.search{
	padding-top:10px;
	padding-bottom: 10px;
	margin-top:20px;
	margin-left:20px;
	margin-bottom:20px;
	border: 1px solid black;


}
.btn{
	border-color:black; 
}
.addcompany{
	color:white;	

}
	</style>
	
</head>
<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<body>
<form  method="POST">

<input  class="search" class="form-control" type="text" name="search" placeholder="Search Toy Name" aria-label="Search" required="">                     
                
<button type="submit" class="btn btn-primary" name="submit" >
    <i class="fas fa-search"></i>
  </button>
</form>

<table class="table">
  <thead>
    <tr>
    <th scope="col">Product Name</th>
        <!-- <th scope="col">Author</th> -->
        <!-- <th scope="col">Edition</th> -->
        <th scope="col">Category</th>
        <th scope="col">Quantity</th>
        
        <!-- <th scope="col">Status</th> -->
        
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    
      
    <?php 

$servername = "localhost";
$database = "inventory";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password, $database);

    if(isset($_POST['search']))
	{
		$q=mysqli_query($con,"SELECT * from products where Prod_name like '%$_POST[search]%' ");

		if(mysqli_num_rows($q)==0)
		{
			echo "Product not found";
		}
		else{
        
			
		
			while($row=mysqli_fetch_assoc($q))
			{
            ?>
                <tr>
                    <td><?=$row['Prod_name']?> </td>
                    <td><?=$row['category']?> </td>
                    <td><?=$row['quantity']?> </td>
                    <td> <?php echo '<a href="update.php?Prod_id='.$row['Prod_id'].'">Update</a>'; ?>
                    <td> <?php echo '<a href="delete.php?Prod_id='.$row['Prod_id'].'">Delete</a>'; ?>
				</tr>;
<?php
			}

		
		}
    }
    else
    {
        $res = mysqli_query($con,"SELECT * FROM products;");
        while($row=mysqli_fetch_assoc($res))
			{
            ?>
                <tr>
                <td><?=$row['Prod_name']?> </td>
                    
                <td><?=$row['category']?> </td>
                <td><?=$row['quantity']?> </td>
                    
                    
                
                <td> <?php echo '<a href="update.php?Prod_id='.$row['Prod_id'].'">Update</a>'; ?>
                    <td> <?php echo '<a href="delete.php?Prod_id='.$row['Prod_id'].'">Delete</a>'; ?>
				</tr>;
<?php  
             }
    }
?>
	
  </tbody>
</table>
</body>
</html>
