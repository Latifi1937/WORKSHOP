<?php
$con = mysqli_connect("localhost","root","","Workshop");
if($con->connect_error){
    die("connection faild".$con->connect_error);
}
?>