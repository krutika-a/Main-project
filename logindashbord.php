
<?php
    
    require_once("db_con.php");
    $query="SELECT * FROM register";
    $res= mysqli_query ($con,$query);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>

<button type="button" class="btn btn-success"><a href="register.php">Register</a></button>

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
        
        <th>Email</th>
        <th>Password</th>
        
  
      </tr>
    </thead>
    <tbody>
    
    <?php while($variable =mysqli_fetch_assoc($res)){ ?>
      <tr>
        
        <td><?php echo $variable ["email"];?></td>
        <td><?php echo $variable ["password"];?></td>
        
     </tr>
        
        <td><a href="editlogin.php?id=<?php echo $variable["id"];?>">Edit</a> || <a href="deletelogin.php?id=<?php echo $variable["id"];?>">Delete</a></td>
    
    <?php }?>

      
    </tbody>
  </table>
</div>

</body>
</html>




