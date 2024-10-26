<?php

include('connect.php');

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$registration=$_POST['registration'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];


if($password!=$cpassword){
    echo '<script>
    alert("passwords do not match!!");
    window.location="./registration.php";
    </script>';
}

else{
    move_uploaded_file($tmp_name, "./pictures/$image");
    $sql="insert into `voterdata`(username,mobile,registration,password,photo,standard,status,votes) 
    values('$username','$mobile','$registration','$password','$image','$std',0,0)";

$result=mysqli_query($con,$sql);
if($result){
    echo '<script>
    alert("registration successful");
    window.location="../voting.php";
    </script>';
}

}

?>