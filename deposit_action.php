<?php
include 'connection.php';


$amount = $_POST['amount'];
$password = $_POST['password'];


$sql = "INSERT into customers ('amount', 'password') VALUES ('$amount', '$password')";
$sql = "SELECT from $_SESSION where 'id' = '$user_id'";

$sql = "SELECT * from customers where id = '$user_id'";


if($con->query($sql) == true) {
    echo "Succesful";
}else{
    echo "An error occured $con->error";
}