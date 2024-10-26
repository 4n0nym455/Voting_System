<?php 
$con=mysqli_connect("localhost","root","","onlinevotingsystem");
if($con){
    echo "connection successful";
}else{
    die(mysqli_error($con));
}
?>