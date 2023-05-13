<?php

include "config.php";

if(isset($_GET['Id']))
{
    $uid=$_GET['Id'];
    
    $sql="Delete from crud where Id ='$uid'";
    if($result = mysqli_query($conn,$sql))
    {
        echo "Success";
    }
    else
    {
        echo "Error";
    }
}

?>