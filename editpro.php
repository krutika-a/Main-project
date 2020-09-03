
<?php 
     error_reporting(0);
     require_once("db_con.php");
     print_r($_POST);
     if(isset ($_POST["submit"]))
   {

   
     echo $insertquery= "UPDATE pizzas SET
    `title`= '".$_POST['title']."',
    `price`= '".$_POST['price']."',
    `discription`= '".$_POST['discription']."'
   
    
    
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

    echo $query ="SELECT * FROM pizzas
    WHERE id= '".$_GET['id']."'";
    $res= mysqli_query($con,$query);
    $ureg= mysqli_fetch_assoc($res);
    print_r($addpro);
?>

<html>
<form action="" method="post"><fieldset>
Title:<input type="text" name="title" value ="<?php echo $addpro ["title"]?>"/><br><br>
Price:<input type="text" name="price" value ="<?php echo $addpro ["price"]?>"/><br><br>
Discription:<input type="text" name="discription" value ="<?php echo $ureg ["discription"]?>"/><br><br>
submit:<input type="submit" name="submit" value ="submit"/>
</fieldset></form>
</html>