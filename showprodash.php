

<?php

    require_once("db_con.php");
  
    $query= "SELECT * FROM pizzas";
    $res= mysqli_query ($con,$query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<button type="button" class="btn btn-success"><a href="addproduct.php">Add_product</a></button>
 <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!--a href="registred.php"><button type="button" class="btn btn-success">Registerc</button></a>-->
<div class="container">

  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>Title</th>
        <th>Price</th>
        <th>Discription</th>
        
        
  
      </tr>
    </thead>
    <tbody>
    
    <?php while($addproduct =mysqli_fetch_assoc($res)){ ?>
      <tr>
        
        <td><?php echo $addproduct ["title"];?></td>
        <td><?php echo $addproduct ["price"];?></td>
        <td><?php echo $addproduct ["discription"];?></td>
     </tr>
        
        <td><a href="editpro.php?id=<?php echo $addproduct["id"];?>">Edit</a> || <a href="deletepro.php?id=<?php echo $addproduct["id"];?>">Delete</a></td>
    
    <?php }?>

      
    </tbody>
  </table>
</div>

</body>
</html>




