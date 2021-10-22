<?php
include '../config.php';
$id = $_GET['id'];
$sql = "DELETE FROM cars WHERE vehicle_id ='$id'";
$result = mysqli_query($conn,$sql);
if($result == true){
    header('Location: index.php');
}else{
    die('Error');
}
?>