<?php
    
    require_once("db_con.php");
    
    $query="DELETE FROM pizzas
    WHERE id='".$_GET["id"]."'";
    $res=mysqli_query($con,$query);
    if($res)
    {
    header("Location: http://localhost/project/showprodash.php");
    }
    else
    {
    echo "Data not deleted";
    echo musqli_error($con);
    }


?>