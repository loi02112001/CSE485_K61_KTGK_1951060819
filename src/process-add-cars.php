<?php
$license = $_POST['license_no'];
$model =$_POST['model'];
$year = $_POST['year'];
$ctype = $_POST['ctype'];
$drate = $_POST['drate'];
$wrate = $_POST['wrate'];
$status = $_POST['status'];
include '../config.php';

$sql = "INSERT INTO cars(license_no,model,year,ctype,drate,wrate,status)
VALUES('$license','$model','$year','$ctype','$drate','$wrate','$status')";

$result = mysqli_query($conn,$sql);

if($result>0){
    header("Location:index.php");
}else{
    header('error.php');
}

mysqli_close($conn);
?>