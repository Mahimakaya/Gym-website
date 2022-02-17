<?php
/*
if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_POST['submit'])){
    echo "<script>alert('hii');</script>";
}
}*/
$host = "localhost";
$dbusername = "root";
$password = "";
$dbname = "contact";

$conn = mysqli_connect($host,$dbusername,$password,$dbname) or die("Connection Failed");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $comment = $_POST["comment"];
    $query = "INSERT INTO `contacts` (`Name`, `Email`, `phone`, `comment`) VALUES ('$name','$email','$phone','$comment');";
    $done = mysqli_query($conn,$query) or die(mysqli_error($conn));
    if($done){
        echo 1;
    }
    else{
        echo "<script>alert(mysqli_error());</script>";
    }
?>