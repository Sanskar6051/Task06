<?php

include "config.php";

$sql ="SELECT * FROM CRUD";
$result= mysqli_query($conn,$sql);
$numRows = mysqli_num_rows($result);




?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <h1>USER INFORMATION</h1>
        <table class="table" style="margin-top:50px;">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            <?php
            if($numRows!=0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $row['Id']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><a class="btn btn-primary" href="update.php?id=<?php echo $row['Id']; ?>">Update</a>
                        <a class="btn btn-danger"  name="delete" href="delete.php?Id=<?php echo $row['Id']; ?>" >Delete</a></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </body>
</html>