<?php
include "connection.php";
$id = $_GET['ID'];
$sql = "DELETE FROM `user` WHERE ID = $id";
$qry = mysqli_query($connect, $sql);
if($qry){
    header("location: index.php?msg=Deleted Successfully");
}else{
    echo "Failed:" . mysqli_error($connect);
}
?>