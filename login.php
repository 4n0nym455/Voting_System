<?php
include('connect.php');

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$registration=$_POST['registration'];
$password=$_POST['password'];
$std=$_POST['std'];

$sql="select * from `voterdata` where username='$username' and mobile='$mobile'
and registration='$registration' and password='$password' and standard='$std'";

$results=mysqli_query($con,$sql);
if(mysqli_num_rows($results)>0){
$sql="select username,photo,votes,id from `voterdata` where
standard='group'";
$resultgroup=mysqli_query($con,$sql);
if(mysqli_num_rows($resultgroup)>0){
    $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
}
$data=mysqli_fetch_array($results);
$_SESSION['id']=$data['id'];
$_SESSION['status']=$data['status'];
$_SESSION['data']=$data;

echo '<script>
    window.location="./dashboard.php";
    </script>';
}
else
{
    echo '<script>
    alert("invalid credentials");
    window.location="/voting.php";
    </script>';
}


?>