
<?php 
     error_reporting(0);
     require_once("db_con.php");
     print_r($_POST);
     if(isset ($_POST["submit"]))
   {

   
     echo $insertquery= "UPDATE register SET
    `name`= '".$_POST['name']."',
    `gender`= '".$_POST['gender']."',
    `email`= '".$_POST['email']."',
    `password`= '".$_POST['password']."',
    `address`= '".$_POST['address']."'
    
    
     WHERE id = '".$_GET['id']."'";

    $res= mysqli_query($con,$insertquery);

    if(!$res)
    {
    echo"Data not updated";
    echo mysqli_error($con);
    }
    else
    {
    echo"data updated";
    }


   }    
?>
<?php
    print_r($_POST);
    include_once("db_con.php");
    echo"<br>";

    echo $query ="SELECT * FROM register
    WHERE id= '".$_GET['id']."'";
    $res= mysqli_query($con,$query);
    $ureg= mysqli_fetch_assoc($res);
    print_r($ureg);
?>

<html>
<form action="" method="post"><fieldset>
Name:<input type="text" name="name" value ="<?php echo $ureg ["name"]?>"/><br><br>
Gender:<input type="text" name="gender" value ="<?php echo $ureg ["gender"]?>"/><br><br>
Email:<input type="text" name="email" value ="<?php echo $ureg ["email"]?>"/><br><br>
Password:<input type="text" name="password" value ="<?php echo $ureg ["password"]?>"/><br><br>
submit:<input type="submit" name="submit" value ="submit"/>
</fieldset></form>
</html>