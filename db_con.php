<?php

error_reporting(0);

$con=mysqli_connect("localhost","krutika","K.a.1195","pizzapan_db");
if (!$con)

  {  echo "please check db connection";
     echo mysqli_error($con);

    exit();

}
else
{
    echo "connected";
}



?>