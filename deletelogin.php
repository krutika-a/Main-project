<?php
require_once("db_con.php");
      
  
    $query= "DELETE FROM register
    WHERE id= '".$_GET["id"]."'";
    $res=mysqli_query($con,$query);
    if($res)
    {
        echo"Deleted";
    
    header("Location: http://localhost/project/logindashbord.php");    }
    else
    {
    echo "Data not deleted";
    echo musqli_error($con);
    }


?>