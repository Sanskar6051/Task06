<?php

include "config.php";
if(isset($_POST['submit']))
{
    $name = $_POST['Name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql="INSERT INTO crud (Name,email,phone,password) VALUES('$name','$email','$phone','$pass')";
    if(mysqli_query($conn, $sql))
    {
        echo "Record Created Successfully";
    }
    else
    {
        echo "Error".$email;

    }
    
}

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="forms">
            REGISTRATION PAGE
            <form action="" method="POST">
                <label for="">Name</label>
                <input type="text" name="Name"><br>
                <label for="">Email</label>
                <input type="email" name="email"><br>
                <label for="">Phone</label>
                <input type="number" name="phone"><br>
                <label for="">Password</label>
                <input type="password" name="password"><br>
                <input type="submit" name="submit" value="SUBMIT">
            </form>
        </div>
    </body>
</html>


