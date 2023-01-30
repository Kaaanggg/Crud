<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    
    <title>CRUD</title>

    
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #b7b7a4;">
        Crud
    </nav>

    <div class="container">
        
       
        <a href="add.php" class="btn btn-dark mb-3">Add New</a>
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "connection.php";

                    $sql = "SELECT * FROM `user`";
                    $qry= mysqli_query($connect, $sql);
                    while ($row = mysqli_fetch_assoc($qry)) {
                        ?>
                        <tr>
                            <th><?php echo $row['ID'] ?></th>
                            <th><?php echo $row['fname'] ?></th>
                            <th><?php echo $row['lname'] ?></th>
                            <th><?php echo $row['email'] ?></th>
                            <td>
                                <a href="edit.php?ID=<?php echo $row['ID'] ?>" 
                                class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="delete.php?ID=<?php echo $row['ID'] ?>" 
                                class="link-dark"><i class="fa-solid fa-trash fs-5 me-3"></i></a>
                            </td>
                        </tr>
                        <?php
                    }  
                ?>
                
            </tbody>
        </table>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/6336e4acc3.js" crossorigin="anonymous"></script>
</body>
</html>