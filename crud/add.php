<?php
include "connection.php";

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `user`(`ID`, `fname`, `lname`, `email`) VALUES (NULL, '$fname','$lname','$email')";

    $qry = mysqli_query($connect, $sql);
    if($qry){
        header("location: index.php?msg=Submitted Successfully");
    }else{
        echo "Failed:" . mysqli_error($connect);
    }
    
}

?>





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
        <div class="text-center mb4">
            <h3>Add user</h3>
            <p class="text-muted">Complete Form</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width: 50vw; min-width: 300px;">
                <div class="row">
                    <div class="col">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="First Name">
                    </div>

                    <div class="col">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="last Name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    
                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Submit</button>
                        
                    </div>
                </div>
        </form>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/6336e4acc3.js" crossorigin="anonymous"></script>
</body>
</html>