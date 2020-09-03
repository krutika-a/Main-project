<?php

error_reporting(0);

$con=mysqli_connect("localhost","webnjwej_krutika","Webnetis@12345","webnjwej_krutika");
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